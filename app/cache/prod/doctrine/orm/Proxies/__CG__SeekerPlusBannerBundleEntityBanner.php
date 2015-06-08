<?php

namespace Proxies\__CG__\SeekerPlus\BannerBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Banner extends \SeekerPlus\BannerBundle\Entity\Banner implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'id', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'cid', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'type', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'name', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'alias', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'imptotal', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'impmade', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'clicks', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'clickurl', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'state', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'catid', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'description', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'custombannercode', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'sticky', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'ordering', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'metakey', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'params', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'ownPrefix', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'metakeyPrefix', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'purchaseType', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'trackClicks', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'trackImpressions', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'checkedOut', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'checkedOutTime', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'publishUp', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'publishDown', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'reset', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'created', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'language');
        }

        return array('__isInitialized__', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'id', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'cid', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'type', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'name', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'alias', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'imptotal', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'impmade', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'clicks', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'clickurl', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'state', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'catid', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'description', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'custombannercode', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'sticky', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'ordering', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'metakey', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'params', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'ownPrefix', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'metakeyPrefix', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'purchaseType', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'trackClicks', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'trackImpressions', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'checkedOut', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'checkedOutTime', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'publishUp', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'publishDown', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'reset', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'created', '' . "\0" . 'SeekerPlus\\BannerBundle\\Entity\\Banner' . "\0" . 'language');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Banner $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCid($cid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCid', array($cid));

        return parent::setCid($cid);
    }

    /**
     * {@inheritDoc}
     */
    public function getCid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCid', array());

        return parent::getCid();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', array($type));

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', array());

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlias($alias)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlias', array($alias));

        return parent::setAlias($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlias()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlias', array());

        return parent::getAlias();
    }

    /**
     * {@inheritDoc}
     */
    public function setImptotal($imptotal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImptotal', array($imptotal));

        return parent::setImptotal($imptotal);
    }

    /**
     * {@inheritDoc}
     */
    public function getImptotal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImptotal', array());

        return parent::getImptotal();
    }

    /**
     * {@inheritDoc}
     */
    public function setImpmade($impmade)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImpmade', array($impmade));

        return parent::setImpmade($impmade);
    }

    /**
     * {@inheritDoc}
     */
    public function getImpmade()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImpmade', array());

        return parent::getImpmade();
    }

    /**
     * {@inheritDoc}
     */
    public function setClicks($clicks)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClicks', array($clicks));

        return parent::setClicks($clicks);
    }

    /**
     * {@inheritDoc}
     */
    public function getClicks()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClicks', array());

        return parent::getClicks();
    }

    /**
     * {@inheritDoc}
     */
    public function setClickurl($clickurl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClickurl', array($clickurl));

        return parent::setClickurl($clickurl);
    }

    /**
     * {@inheritDoc}
     */
    public function getClickurl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClickurl', array());

        return parent::getClickurl();
    }

    /**
     * {@inheritDoc}
     */
    public function setState($state)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setState', array($state));

        return parent::setState($state);
    }

    /**
     * {@inheritDoc}
     */
    public function getState()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getState', array());

        return parent::getState();
    }

    /**
     * {@inheritDoc}
     */
    public function setCatid($catid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCatid', array($catid));

        return parent::setCatid($catid);
    }

    /**
     * {@inheritDoc}
     */
    public function getCatid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCatid', array());

        return parent::getCatid();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setCustombannercode($custombannercode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCustombannercode', array($custombannercode));

        return parent::setCustombannercode($custombannercode);
    }

    /**
     * {@inheritDoc}
     */
    public function getCustombannercode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustombannercode', array());

        return parent::getCustombannercode();
    }

    /**
     * {@inheritDoc}
     */
    public function setSticky($sticky)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSticky', array($sticky));

        return parent::setSticky($sticky);
    }

    /**
     * {@inheritDoc}
     */
    public function getSticky()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSticky', array());

        return parent::getSticky();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrdering($ordering)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrdering', array($ordering));

        return parent::setOrdering($ordering);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrdering()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrdering', array());

        return parent::getOrdering();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetakey($metakey)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetakey', array($metakey));

        return parent::setMetakey($metakey);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetakey()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetakey', array());

        return parent::getMetakey();
    }

    /**
     * {@inheritDoc}
     */
    public function setParams($params)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParams', array($params));

        return parent::setParams($params);
    }

    /**
     * {@inheritDoc}
     */
    public function getParams()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParams', array());

        return parent::getParams();
    }

    /**
     * {@inheritDoc}
     */
    public function setOwnPrefix($ownPrefix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwnPrefix', array($ownPrefix));

        return parent::setOwnPrefix($ownPrefix);
    }

    /**
     * {@inheritDoc}
     */
    public function getOwnPrefix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwnPrefix', array());

        return parent::getOwnPrefix();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetakeyPrefix($metakeyPrefix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetakeyPrefix', array($metakeyPrefix));

        return parent::setMetakeyPrefix($metakeyPrefix);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetakeyPrefix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetakeyPrefix', array());

        return parent::getMetakeyPrefix();
    }

    /**
     * {@inheritDoc}
     */
    public function setPurchaseType($purchaseType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPurchaseType', array($purchaseType));

        return parent::setPurchaseType($purchaseType);
    }

    /**
     * {@inheritDoc}
     */
    public function getPurchaseType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPurchaseType', array());

        return parent::getPurchaseType();
    }

    /**
     * {@inheritDoc}
     */
    public function setTrackClicks($trackClicks)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTrackClicks', array($trackClicks));

        return parent::setTrackClicks($trackClicks);
    }

    /**
     * {@inheritDoc}
     */
    public function getTrackClicks()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTrackClicks', array());

        return parent::getTrackClicks();
    }

    /**
     * {@inheritDoc}
     */
    public function setTrackImpressions($trackImpressions)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTrackImpressions', array($trackImpressions));

        return parent::setTrackImpressions($trackImpressions);
    }

    /**
     * {@inheritDoc}
     */
    public function getTrackImpressions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTrackImpressions', array());

        return parent::getTrackImpressions();
    }

    /**
     * {@inheritDoc}
     */
    public function setCheckedOut($checkedOut)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCheckedOut', array($checkedOut));

        return parent::setCheckedOut($checkedOut);
    }

    /**
     * {@inheritDoc}
     */
    public function getCheckedOut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCheckedOut', array());

        return parent::getCheckedOut();
    }

    /**
     * {@inheritDoc}
     */
    public function setCheckedOutTime($checkedOutTime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCheckedOutTime', array($checkedOutTime));

        return parent::setCheckedOutTime($checkedOutTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getCheckedOutTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCheckedOutTime', array());

        return parent::getCheckedOutTime();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublishUp($publishUp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublishUp', array($publishUp));

        return parent::setPublishUp($publishUp);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublishUp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublishUp', array());

        return parent::getPublishUp();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublishDown($publishDown)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublishDown', array($publishDown));

        return parent::setPublishDown($publishDown);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublishDown()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublishDown', array());

        return parent::getPublishDown();
    }

    /**
     * {@inheritDoc}
     */
    public function setReset($reset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReset', array($reset));

        return parent::setReset($reset);
    }

    /**
     * {@inheritDoc}
     */
    public function getReset()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReset', array());

        return parent::getReset();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated($created)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', array($created));

        return parent::setCreated($created);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated', array());

        return parent::getCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setLanguage($language)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLanguage', array($language));

        return parent::setLanguage($language);
    }

    /**
     * {@inheritDoc}
     */
    public function getLanguage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLanguage', array());

        return parent::getLanguage();
    }

}
