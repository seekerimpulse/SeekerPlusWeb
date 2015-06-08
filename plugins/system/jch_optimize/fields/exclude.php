<?php

/**
 * JCH Optimize - Joomla! plugin to aggregate and minify external resources for
 * optmized downloads
 * @author Samuel Marshall <sdmarshall73@gmail.com>
 * @copyright Copyright (c) 2010 Samuel Marshall
 * @license GNU/GPLv3, See LICENSE file
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * If LICENSE file missing, see <http://www.gnu.org/licenses/>.
 */
defined('_JEXEC') or die;

JFormHelper::loadFieldClass('Textarea');


if (version_compare(JVERSION, '3.0', '>='))
{

        abstract class JchTextarea extends JFormFieldTextarea
        {

                protected $aOptions = array();

                public function setup(SimpleXMLElement $element, $value, $group = NULL)
                {
                        $this->getParams();

                        JCH_DEBUG ? JchPlatformProfiler::mark('beforeSetup' . $this->type . ' plgSystem (JCH Optimize)') : null;

                        $this->setOptions();
                        $value = $this->castValue($value);

                        JCH_DEBUG ? JchPlatformProfiler::mark('afterSetup' . $this->type . ' plgSystem (JCH Optimize)') : null;

                        return parent::setup($element, $value, $group);
                }

                protected function castValue($value)
                {
                        
                }

        }

}
else
{

        abstract class JchTextarea extends JFormFieldTextarea
        {

                protected $aOptions = array();

                public function setup(&$element, $value, $group = NULL)
                {
                        $this->getParams();

                        JCH_DEBUG ? JchPlatformProfiler::mark('beforeSetup - ' . $this->type . ' plgSystem (JCH Optimize)') : null;

                        $this->setOptions();
                        $value = $this->castValue($value);

                        JCH_DEBUG ? JchPlatformProfiler::mark('afterSetup - ' . $this->type . ' plgSystem (JCH Optimize)') : null;

                        return parent::setup($element, $value, $group);
                }

                protected function castValue($value)
                {
                        
                }

        }

}

abstract class JFormFieldExclude extends JchTextarea
{

        protected static $oParams = null;
        protected static $oParser = null;

        /**
         * 
         * @param type $value
         * @return type
         */
        protected function castValue($value)
        {
//                if (is_array($value) && $GLOBALS['bTextArea'])
//                {
//                        $value = implode(', ', $value);
//                }

                if (!is_array($value)/* && !$GLOBALS['bTextArea'] */)
                {
                        $value = JchOptimizeHelper::getArray($value);
                }

                return $value;
        }

        /**
         * 
         * @return type
         */
        protected function getParams()
        {
                if (!isset($GLOBALS['oJchParams']))
                {
                        $GLOBALS['oJchParams'] = JchPlatformPlugin::getPluginParams();
                }

                return $GLOBALS['oJchParams'];
        }

        /**
         * 
         * @return type
         */
        public function getOriginalHtml()
        {
                JCH_DEBUG ? JchPlatformProfiler::mark('beforeGetHtml plgSystem (JCH Optimize)') : null;

                try
                {
                        $oFileRetriever = JchOptimizeFileRetriever::getInstance();

                        $response = $oFileRetriever->getFileContents($this->getMenuUrl());

                        if ($oFileRetriever->response_code != 200)
                        {
                                throw new Exception(
                                JText::_('Failed fetching front end HTML with response code ' . $oFileRetriever->response_code)
                                );
                        }

                        JCH_DEBUG ? JchPlatformProfiler::mark('afterGetHtml plgSystem (JCH Optimize)') : null;

                        return $response;
                }
                catch (Exception $e)
                {
                        JchOptimizeLogger::log($this->getMenuUrl() . ': ' . $e->getMessage(), $this->getParams());

                        JCH_DEBUG ? JchPlatformProfiler::mark('afterGetHtml plgSystem (JCH Optimize)') : null;

                        throw new RunTimeException(JText::_('Turn the plugin on, load or refresh the front-end site first then refresh this page '
                                . 'to populate the multi select exclude lists.'));
                }
        }

        /**
         * 
         * @return string
         */
        protected function getMenuUrl()
        {
                $oParams     = $this->getParams();
                $iMenuLinkId = $oParams->get('jchmenu');

                if (!$iMenuLinkId)
                {
                        require_once dirname(__FILE__) . '/jchmenuitem.php';
                        $iMenuLinkId = JFormFieldJchmenuitem::getHomePageLink();
                }

                $app       = JFactory::getApplication();
                $oMenu     = $app->getMenu('site');
                $oMenuItem = $oMenu->getItem($iMenuLinkId);

                $oUri = clone JUri::getInstance();

                $router = $app->getRouter('site', array('mode' => $app->get('sef')));

                $uri = $router->build($oMenuItem->link . '&Itemid=' . $oMenuItem->id . '&jchbackend=2');

                $uri->setScheme($uri->isSSL() ? 'https' : 'http');
                $uri->setHost($oUri->getHost());
                $uri->setPort($oUri->getPort());

                $sMenuUrl = str_replace('/administrator', '', $uri->toString());

                return $sMenuUrl;
        }

        /**
         * 
         * @return type
         */
        protected function setOptions()
        {
                $this->aOptions = $this->getFieldOptions();
        }

        /**
         * 
         * @return type
         */
        protected function getInput()
        {
                $attributes = 'class="inputbox chzn-custom-value input-xlarge" multiple="multiple" size="5" data-custom_group_text="Custom Position" data-no_results_text="Add custom item"';

                $sField = JHTML::_('select.genericlist', $this->aOptions, $this->name . '[]', $attributes, 'id', 'name', $this->value, $this->id) .
                        '
                                <button type="button" onclick="addJchOption(\'' . $this->jch_params . '\')">Add item</button>';

                return $sField;
        }

        /**
         * 
         * @param type $sType
         * @param type $sExclude
         * @return type
         */
        protected function getOptions($sType, $sExclude = 'files')
        {
                $aLinks = $this->getLinks();

                $aOptions = array();

                if (!empty($aLinks[$sType][0]))
                {
                        foreach ($aLinks[$sType][0] as $aLink)
                        {
                                if (isset($aLink['url']) && $aLink['url'] != '')
                                {
                                        if ($sExclude == 'files')
                                        {
                                                $sFile = preg_replace('#[?\#].*$#', '', $aLink['url']);

                                                $aOptions[$sFile] = $this->prepareFileValues($sFile);
                                        }
                                        elseif ($sExclude == 'extensions')
                                        {
                                                $sExtension = $this->prepareExtensionValues($aLink['url'], FALSE);

                                                if ($sExtension === FALSE)
                                                {
                                                        continue;
                                                }

                                                $aOptions[$sExtension] = $sExtension;
                                        }
                                }
                                elseif (isset($aLink['content']) && $aLink['content'] != '')
                                {
                                        if ($sExclude == 'scripts')
                                        {
                                                $sScript = preg_replace('#<!--.*?-->#s', '', $aLink['content']);
                                                $sScript = trim(JchOptimize\JS_Optimize::minify($sScript));

                                                if (strlen($sScript) > 60)
                                                {
                                                        $sScript = substr($sScript, 0, 60);
                                                }

                                                $aOptions[addslashes($sScript)] = $this->prepareScriptValues($sScript);
                                        }
                                }
                        }
                }

                return $aOptions;
        }

        /**
         * 
         * @param type $sContent
         */
        protected function prepareScriptValues($sScript)
        {
                $sEps = '';

                if (strlen($sScript) > 52)
                {
                        $sScript = substr($sScript, 0, 52);
                        $sEps    = '...';
                        $sScript = $sScript . $sEps;
                }

                if (strlen($sScript) > 26)
                {
                        $sScript = str_replace($sScript[26], $sScript[26] . "\n", $sScript);
                }

                return $sScript;
        }

        /**
         * 
         * @param type $sUrl
         * @return type
         */
        protected function prepareFileValues($sFile)
        {
                $sEps = '';

                if (strlen($sFile) > 27)
                {
                        $sFile = substr($sFile, -27);
                        $sFile = preg_replace('#^.*?/#', '/', $sFile);
                        $sEps  = '...';
                }

                return $sEps . $sFile;
        }

        /**
         * 
         * @staticvar string $sUriBase
         * @staticvar string $sUriPath
         * @param type $sUrl
         * @return boolean
         */
        protected function prepareExtensionValues($sUrl, $bReturn = TRUE)
        {
                if ($bReturn)
                {
                        return $sUrl;
                }

                static $sUriBase = '';
                static $sUriPath = '';
                static $sHost    = '';

                $sUriBase = $sUriBase == '' ? str_replace('/administrator/', '', JUri::base()) : $sUriBase;
                $sUriPath = $sUriPath == '' ? str_replace('/administrator', '', JUri::base(TRUE)) : $sUriPath;
                $sHost    = $sHost == '' ? JUri::getInstance()->getHost() : $sHost;

                $sExtension = preg_replace('#(?:' . preg_quote($sUriBase, '#') . '|' . preg_quote($sUriPath, '#') . ')/'
                        . '(?:components|modules|plugins|media)/([^/]+)/.*$#', '$1', $sUrl, 1, $iCnt);

                if (preg_match('#(?:system|jui|cms|editors)#', $sExtension))
                {
                        return FALSE;
                }

                if ($iCnt != 1)
                {
                        $sExtension = preg_replace('#^.*?//([^/]+)/.*$#', '$1', $sUrl, 1, $iCnt2);

                        if ($sExtension == $sHost || $iCnt2 != 1)
                        {
                                return FALSE;
                        }
                }

                return $sExtension;
        }

        /**
         * 
         * @param type $sAction
         * @return type
         */
        protected function getImages($sAction = 'exclude')
        {
                $aLinks = $this->getLinks();

                $aOptions = array();

                if (!empty($aLinks['images'][$sAction]))
                {
                        foreach ($aLinks['images'][$sAction] as $sImage)
                        {
                                $aImage = explode('/', $sImage);
                                $sImage = array_pop($aImage);

                                $aOptions[$sImage] = $sImage;
                        }
                }

                return array_unique($aOptions);
        }

        /**
         * 
         * @param type $oParams
         * @return type
         */
        protected function getLinks()
        {
                if (!isset($GLOBALS['aJchLinks']))
                {
                        $params = $this->getParams();

                        try
                        {
                                $oAdmin               = new JchOptimizeAdmin($params, TRUE);
                                $GLOBALS['aJchLinks'] = $oAdmin->getAdminLinks($this, $params->get('jchmenu'));
                        }
                        catch (RunTimeException $ex)
                        {
                                $GLOBALS['aJchLinks'] = array();

                                JFactory::getApplication()->enqueueMessage($ex->getMessage(), 'Notice');
                        }
                        catch (Exception $ex)
                        {
                                $GLOBALS['aJchLinks'] = array();

                                JchOptimizeLogger::log($ex->getMessage(), $this->getParams());

                                JFactory::getApplication()->enqueueMessage($ex->getMessage(), 'Warning');
                        }
                }

                return $GLOBALS['aJchLinks'];
        }

        /**
         * 
         * @param type $sExcludeParams
         * @param type $sField
         * @return type
         */
        protected function prepareFieldOptions($sType, $sExcludeParams, $sGroup = '')
        {
                if ($sType == 'lazyload')
                {
                        $sGroup        = 'file';
                        $aFieldOptions = $this->getLazyLoad();
                }
                elseif ($sType == 'images')
                {
                        $sGroup        = $sType;
                        $aM            = explode('_', $sExcludeParams);
                        $aFieldOptions = $this->getImages($aM[1]);
                }
                else
                {
                        $aFieldOptions = $this->getOptions($sType, $sGroup . 's');
                }

                $aOptions  = array();
                $oParams   = $this->getParams();
                $aExcludes = JchOptimizeHelper::getArray($oParams->get($sExcludeParams, array()));

                foreach ($aExcludes as $sExclude)
                {
                        $aOptions[$sExclude] = $this->{'prepare' . ucfirst($sGroup) . 'Values'}($sExclude);
                }

                return array_unique(array_merge($aFieldOptions, $aOptions));

                return $aFieldOptions;
        }

        /**
         * 
         * @param type $sImage
         * @return type
         */
        protected function prepareImagesValues($sImage)
        {
                return $sImage;
        }

        /**
         * 
         */
        protected function getFieldOptions()
        {
                
        }

}
