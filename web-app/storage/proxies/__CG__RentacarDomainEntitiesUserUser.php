<?php

namespace DoctrineProxies\__CG__\Rentacar\Domain\Entities\User;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \Rentacar\Domain\Entities\User\User implements \Doctrine\ORM\Proxy\Proxy
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
     * @see \Doctrine\Persistence\Proxy::__isInitialized
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
            return ['__isInitialized__', '' . "\0" . 'Rentacar\\Domain\\Entities\\User\\User' . "\0" . 'id', '' . "\0" . 'Rentacar\\Domain\\Entities\\User\\User' . "\0" . 'name', '' . "\0" . 'Rentacar\\Domain\\Entities\\User\\User' . "\0" . 'role', '' . "\0" . 'Rentacar\\Domain\\Entities\\User\\User' . "\0" . 'phone', '' . "\0" . 'Rentacar\\Domain\\Entities\\User\\User' . "\0" . 'rents', '' . "\0" . 'Rentacar\\Domain\\Entities\\User\\User' . "\0" . 'customerRents'];
        }

        return ['__isInitialized__', '' . "\0" . 'Rentacar\\Domain\\Entities\\User\\User' . "\0" . 'id', '' . "\0" . 'Rentacar\\Domain\\Entities\\User\\User' . "\0" . 'name', '' . "\0" . 'Rentacar\\Domain\\Entities\\User\\User' . "\0" . 'role', '' . "\0" . 'Rentacar\\Domain\\Entities\\User\\User' . "\0" . 'phone', '' . "\0" . 'Rentacar\\Domain\\Entities\\User\\User' . "\0" . 'rents', '' . "\0" . 'Rentacar\\Domain\\Entities\\User\\User' . "\0" . 'customerRents'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
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
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): int
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
    public function getName(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName(string $name): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getRole(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRole', []);

        return parent::getRole();
    }

    /**
     * {@inheritDoc}
     */
    public function setRole(int $role): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRole', [$role]);

        parent::setRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhone(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhone', []);

        return parent::getPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhone(string $phone): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhone', [$phone]);

        parent::setPhone($phone);
    }

    /**
     * {@inheritDoc}
     */
    public function getRents(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRents', []);

        return parent::getRents();
    }

    /**
     * {@inheritDoc}
     */
    public function setRents(\Doctrine\Common\Collections\Collection $rents): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRents', [$rents]);

        parent::setRents($rents);
    }

    /**
     * {@inheritDoc}
     */
    public function addRent(\Rentacar\Domain\Entities\Rent $rent): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRent', [$rent]);

        parent::addRent($rent);
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomerRents(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomerRents', []);

        return parent::getCustomerRents();
    }

    /**
     * {@inheritDoc}
     */
    public function setCustomerRents(\Doctrine\Common\Collections\Collection $customerRents): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCustomerRents', [$customerRents]);

        parent::setCustomerRents($customerRents);
    }

    /**
     * {@inheritDoc}
     */
    public function addCustomerRent(\Rentacar\Domain\Entities\Rent $rent): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCustomerRent', [$rent]);

        parent::addCustomerRent($rent);
    }

}