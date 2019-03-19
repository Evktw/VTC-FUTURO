<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Employes extends \App\Entity\Employes implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Employes' . "\0" . 'idEmploye', '' . "\0" . 'App\\Entity\\Employes' . "\0" . 'employeNom', '' . "\0" . 'App\\Entity\\Employes' . "\0" . 'employePrenom', '' . "\0" . 'App\\Entity\\Employes' . "\0" . 'employeTelephone', '' . "\0" . 'App\\Entity\\Employes' . "\0" . 'employeMail', '' . "\0" . 'App\\Entity\\Employes' . "\0" . 'employeEtat', '' . "\0" . 'App\\Entity\\Employes' . "\0" . 'employeLogin', '' . "\0" . 'App\\Entity\\Employes' . "\0" . 'employeMdp', '' . "\0" . 'App\\Entity\\Employes' . "\0" . 'employeAdresse', '' . "\0" . 'App\\Entity\\Employes' . "\0" . 'employeCp', '' . "\0" . 'App\\Entity\\Employes' . "\0" . 'employeVille', '' . "\0" . 'App\\Entity\\Employes' . "\0" . 'employeStatut', '' . "\0" . 'App\\Entity\\Employes' . "\0" . 'role', '' . "\0" . 'App\\Entity\\Employes' . "\0" . 'idStatutemploye'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Employes' . "\0" . 'idEmploye', '' . "\0" . 'App\\Entity\\Employes' . "\0" . 'employeNom', '' . "\0" . 'App\\Entity\\Employes' . "\0" . 'employePrenom', '' . "\0" . 'App\\Entity\\Employes' . "\0" . 'employeTelephone', '' . "\0" . 'App\\Entity\\Employes' . "\0" . 'employeMail', '' . "\0" . 'App\\Entity\\Employes' . "\0" . 'employeEtat', '' . "\0" . 'App\\Entity\\Employes' . "\0" . 'employeLogin', '' . "\0" . 'App\\Entity\\Employes' . "\0" . 'employeMdp', '' . "\0" . 'App\\Entity\\Employes' . "\0" . 'employeAdresse', '' . "\0" . 'App\\Entity\\Employes' . "\0" . 'employeCp', '' . "\0" . 'App\\Entity\\Employes' . "\0" . 'employeVille', '' . "\0" . 'App\\Entity\\Employes' . "\0" . 'employeStatut', '' . "\0" . 'App\\Entity\\Employes' . "\0" . 'role', '' . "\0" . 'App\\Entity\\Employes' . "\0" . 'idStatutemploye'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Employes $proxy) {
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
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getIdEmploye(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdEmploye();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdEmploye', []);

        return parent::getIdEmploye();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmployeNom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmployeNom', []);

        return parent::getEmployeNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmployeNom(string $employeNom): \App\Entity\Employes
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmployeNom', [$employeNom]);

        return parent::setEmployeNom($employeNom);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmployePrenom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmployePrenom', []);

        return parent::getEmployePrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmployePrenom(string $employePrenom): \App\Entity\Employes
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmployePrenom', [$employePrenom]);

        return parent::setEmployePrenom($employePrenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmployeTelephone(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmployeTelephone', []);

        return parent::getEmployeTelephone();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmployeTelephone(int $employeTelephone): \App\Entity\Employes
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmployeTelephone', [$employeTelephone]);

        return parent::setEmployeTelephone($employeTelephone);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmployeMail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmployeMail', []);

        return parent::getEmployeMail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmployeMail(string $employeMail): \App\Entity\Employes
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmployeMail', [$employeMail]);

        return parent::setEmployeMail($employeMail);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmployeEtat(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmployeEtat', []);

        return parent::getEmployeEtat();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmployeEtat(string $employeEtat): \App\Entity\Employes
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmployeEtat', [$employeEtat]);

        return parent::setEmployeEtat($employeEtat);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmployeLogin(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmployeLogin', []);

        return parent::getEmployeLogin();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmployeLogin(string $employeLogin): \App\Entity\Employes
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmployeLogin', [$employeLogin]);

        return parent::setEmployeLogin($employeLogin);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmployeMdp(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmployeMdp', []);

        return parent::getEmployeMdp();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmployeMdp(string $employeMdp): \App\Entity\Employes
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmployeMdp', [$employeMdp]);

        return parent::setEmployeMdp($employeMdp);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmployeAdresse(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmployeAdresse', []);

        return parent::getEmployeAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmployeAdresse(string $employeAdresse): \App\Entity\Employes
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmployeAdresse', [$employeAdresse]);

        return parent::setEmployeAdresse($employeAdresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmployeCp(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmployeCp', []);

        return parent::getEmployeCp();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmployeCp(int $employeCp): \App\Entity\Employes
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmployeCp', [$employeCp]);

        return parent::setEmployeCp($employeCp);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmployeVille(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmployeVille', []);

        return parent::getEmployeVille();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmployeVille(string $employeVille): \App\Entity\Employes
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmployeVille', [$employeVille]);

        return parent::setEmployeVille($employeVille);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmployeStatut(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmployeStatut', []);

        return parent::getEmployeStatut();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmployeStatut(string $employeStatut): \App\Entity\Employes
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmployeStatut', [$employeStatut]);

        return parent::setEmployeStatut($employeStatut);
    }

    /**
     * {@inheritDoc}
     */
    public function getRole(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRole', []);

        return parent::getRole();
    }

    /**
     * {@inheritDoc}
     */
    public function setRole(string $role): \App\Entity\Employes
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRole', [$role]);

        return parent::setRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdStatutemploye(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdStatutemploye', []);

        return parent::getIdStatutemploye();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdStatutemploye(int $idStatutemploye): \App\Entity\Employes
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdStatutemploye', [$idStatutemploye]);

        return parent::setIdStatutemploye($idStatutemploye);
    }

}
