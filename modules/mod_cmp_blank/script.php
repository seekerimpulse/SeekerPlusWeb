<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

class mod_cmp_blankInstallerScript {
    function preflight($route, $adapter) {}
    
    function install($adapter) {}
    
    function update($adapter) {}
    
    function uninstall($adapter) {}
    
    function postflight($route, $adapter) {
        if (stripos($route, 'install') !== false || stripos($route, 'update') !== false) {
            return $this->fixManifest($adapter);
        }
    }
    
    private function fixManifest($adapter) {
        $filesource = $adapter->get('parent')->getPath('source') . '/_manifest.xml';
        $filedest   = $adapter->get('parent')->getPath('extension_root') . '/mod_cmp_blank.xml';
        
        if (!(JFile::copy($filesource, $filedest))) {
            JLog::add(JText::sprintf('JLIB_INSTALLER_ERROR_FAIL_COPY_FILE', $filesource, $filedest), JLog::WARNING, 'jerror');
            
            if (class_exists('JError')) {
                JError::raiseWarning(1, 'JInstaller::install: ' . JText::sprintf('Failed to copy file to', $filesource, $filedest));
            } else {
                throw new Exception('JInstaller::install: ' . JText::sprintf('Failed to copy file to', $filesource, $filedest));
            }
            return false;
        }
        
        return true;
    }
}