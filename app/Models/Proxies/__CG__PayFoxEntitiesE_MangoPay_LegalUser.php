<?php

namespace DoctrineProxies\__CG__\PayFox\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class E_MangoPay_LegalUser extends \PayFox\Entities\E_MangoPay_LegalUser implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'nullableProperties', 'id', 'user', 'headquartersAddress', 'legalPersonTypes', 'name', 'legalRepresentativeAddress', 'legalRepresentativeBirthday', 'legalRepresentativeCountryOfResidence', 'legalRepresentativeNationality', 'legalRepresentativeEmail', 'legalRepresentativeFirstName', 'legalRepresentativeLastName', 'legalRepresentativeProofOfIdentity', 'statute', 'shareholderDeclaration', 'proofOfRegistration', 'companyNumber'];
        }

        return ['__isInitialized__', 'nullableProperties', 'id', 'user', 'headquartersAddress', 'legalPersonTypes', 'name', 'legalRepresentativeAddress', 'legalRepresentativeBirthday', 'legalRepresentativeCountryOfResidence', 'legalRepresentativeNationality', 'legalRepresentativeEmail', 'legalRepresentativeFirstName', 'legalRepresentativeLastName', 'legalRepresentativeProofOfIdentity', 'statute', 'shareholderDeclaration', 'proofOfRegistration', 'companyNumber'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (E_MangoPay_LegalUser $proxy) {
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
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser($user): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeadquartersAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeadquartersAddress', []);

        return parent::getHeadquartersAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setHeadquartersAddress($headquartersAddress): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeadquartersAddress', [$headquartersAddress]);

        parent::setHeadquartersAddress($headquartersAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function getLegalPersonTypes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLegalPersonTypes', []);

        return parent::getLegalPersonTypes();
    }

    /**
     * {@inheritDoc}
     */
    public function setLegalPersonTypes($legalPersonTypes): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLegalPersonTypes', [$legalPersonTypes]);

        parent::setLegalPersonTypes($legalPersonTypes);
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
    public function getLegalRepresentativeAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLegalRepresentativeAddress', []);

        return parent::getLegalRepresentativeAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setLegalRepresentativeAddress($legalRepresentativeAddress): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLegalRepresentativeAddress', [$legalRepresentativeAddress]);

        parent::setLegalRepresentativeAddress($legalRepresentativeAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function getLegalRepresentativeBirthday()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLegalRepresentativeBirthday', []);

        return parent::getLegalRepresentativeBirthday();
    }

    /**
     * {@inheritDoc}
     */
    public function setLegalRepresentativeBirthday($legalRepresentativeBirthday): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLegalRepresentativeBirthday', [$legalRepresentativeBirthday]);

        parent::setLegalRepresentativeBirthday($legalRepresentativeBirthday);
    }

    /**
     * {@inheritDoc}
     */
    public function getLegalRepresentativeCountryOfResidence()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLegalRepresentativeCountryOfResidence', []);

        return parent::getLegalRepresentativeCountryOfResidence();
    }

    /**
     * {@inheritDoc}
     */
    public function setLegalRepresentativeCountryOfResidence($legalRepresentativeCountryOfResidence): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLegalRepresentativeCountryOfResidence', [$legalRepresentativeCountryOfResidence]);

        parent::setLegalRepresentativeCountryOfResidence($legalRepresentativeCountryOfResidence);
    }

    /**
     * {@inheritDoc}
     */
    public function getLegalRepresentativeNationality()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLegalRepresentativeNationality', []);

        return parent::getLegalRepresentativeNationality();
    }

    /**
     * {@inheritDoc}
     */
    public function setLegalRepresentativeNationality($legalRepresentativeNationality): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLegalRepresentativeNationality', [$legalRepresentativeNationality]);

        parent::setLegalRepresentativeNationality($legalRepresentativeNationality);
    }

    /**
     * {@inheritDoc}
     */
    public function getLegalRepresentativeEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLegalRepresentativeEmail', []);

        return parent::getLegalRepresentativeEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setLegalRepresentativeEmail($legalRepresentativeEmail): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLegalRepresentativeEmail', [$legalRepresentativeEmail]);

        parent::setLegalRepresentativeEmail($legalRepresentativeEmail);
    }

    /**
     * {@inheritDoc}
     */
    public function getLegalRepresentativeFirstName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLegalRepresentativeFirstName', []);

        return parent::getLegalRepresentativeFirstName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLegalRepresentativeFirstName($legalRepresentativeFirstName): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLegalRepresentativeFirstName', [$legalRepresentativeFirstName]);

        parent::setLegalRepresentativeFirstName($legalRepresentativeFirstName);
    }

    /**
     * {@inheritDoc}
     */
    public function getLegalRepresentativeLastName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLegalRepresentativeLastName', []);

        return parent::getLegalRepresentativeLastName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLegalRepresentativeLastName($legalRepresentativeLastName): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLegalRepresentativeLastName', [$legalRepresentativeLastName]);

        parent::setLegalRepresentativeLastName($legalRepresentativeLastName);
    }

    /**
     * {@inheritDoc}
     */
    public function getLegalRepresentativeProofOfIdentity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLegalRepresentativeProofOfIdentity', []);

        return parent::getLegalRepresentativeProofOfIdentity();
    }

    /**
     * {@inheritDoc}
     */
    public function setLegalRepresentativeProofOfIdentity($legalRepresentativeProofOfIdentity): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLegalRepresentativeProofOfIdentity', [$legalRepresentativeProofOfIdentity]);

        parent::setLegalRepresentativeProofOfIdentity($legalRepresentativeProofOfIdentity);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatute()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatute', []);

        return parent::getStatute();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatute($statute): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatute', [$statute]);

        parent::setStatute($statute);
    }

    /**
     * {@inheritDoc}
     */
    public function getShareholderDeclaration()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShareholderDeclaration', []);

        return parent::getShareholderDeclaration();
    }

    /**
     * {@inheritDoc}
     */
    public function setShareholderDeclaration($shareholderDeclaration): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShareholderDeclaration', [$shareholderDeclaration]);

        parent::setShareholderDeclaration($shareholderDeclaration);
    }

    /**
     * {@inheritDoc}
     */
    public function getProofOfRegistration()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProofOfRegistration', []);

        return parent::getProofOfRegistration();
    }

    /**
     * {@inheritDoc}
     */
    public function setProofOfRegistration($proofOfRegistration): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProofOfRegistration', [$proofOfRegistration]);

        parent::setProofOfRegistration($proofOfRegistration);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompanyNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompanyNumber', []);

        return parent::getCompanyNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompanyNumber($companyNumber): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompanyNumber', [$companyNumber]);

        parent::setCompanyNumber($companyNumber);
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
