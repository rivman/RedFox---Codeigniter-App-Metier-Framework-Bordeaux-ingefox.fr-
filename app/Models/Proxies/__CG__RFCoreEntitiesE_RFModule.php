<?php

namespace DoctrineProxies\__CG__\RFCore\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class E_RFModule extends \RFCore\Entities\E_RFModule implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', 'nullableProperties', 'id', 'name', 'description', 'version', 'releaseNote', 'RF_dependencies', 'RF_children', 'Project_dependencies', 'Project_children'];
        }

        return ['__isInitialized__', 'nullableProperties', 'id', 'name', 'description', 'version', 'releaseNote', 'RF_dependencies', 'RF_children', 'Project_dependencies', 'Project_children'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (E_RFModule $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
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


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getVersion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVersion', []);

        return parent::getVersion();
    }

    /**
     * {@inheritDoc}
     */
    public function setVersion($version): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVersion', [$version]);

        parent::setVersion($version);
    }

    /**
     * {@inheritDoc}
     */
    public function getReleaseNote()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReleaseNote', []);

        return parent::getReleaseNote();
    }

    /**
     * {@inheritDoc}
     */
    public function setReleaseNote($releaseNote): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReleaseNote', [$releaseNote]);

        parent::setReleaseNote($releaseNote);
    }

    /**
     * {@inheritDoc}
     */
    public function getRFDependencies()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRFDependencies', []);

        return parent::getRFDependencies();
    }

    /**
     * {@inheritDoc}
     */
    public function setRFDependencies($RF_dependencies): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRFDependencies', [$RF_dependencies]);

        parent::setRFDependencies($RF_dependencies);
    }

    /**
     * {@inheritDoc}
     */
    public function getRFChildren()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRFChildren', []);

        return parent::getRFChildren();
    }

    /**
     * {@inheritDoc}
     */
    public function setRFChildren($RF_children): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRFChildren', [$RF_children]);

        parent::setRFChildren($RF_children);
    }

    /**
     * {@inheritDoc}
     */
    public function getProjectDependencies()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProjectDependencies', []);

        return parent::getProjectDependencies();
    }

    /**
     * {@inheritDoc}
     */
    public function setProjectDependencies($Project_dependencies): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProjectDependencies', [$Project_dependencies]);

        parent::setProjectDependencies($Project_dependencies);
    }

    /**
     * {@inheritDoc}
     */
    public function getProjectChildren()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProjectChildren', []);

        return parent::getProjectChildren();
    }

    /**
     * {@inheritDoc}
     */
    public function setProjectChildren($Project_children): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProjectChildren', [$Project_children]);

        parent::setProjectChildren($Project_children);
    }

    /**
     * {@inheritDoc}
     */
    public function toJson()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toJson', []);

        return parent::toJson();
    }

    /**
     * {@inheritDoc}
     */
    public function update($params)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'update', [$params]);

        return parent::update($params);
    }

}
