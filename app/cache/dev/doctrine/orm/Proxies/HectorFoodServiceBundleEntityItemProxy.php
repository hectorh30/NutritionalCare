<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class HectorFoodServiceBundleEntityItemProxy extends \Hector\FoodServiceBundle\Entity\Item implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    private function _load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    
    public function getId()
    {
        $this->_load();
        return parent::getId();
    }

    public function setName($name)
    {
        $this->_load();
        return parent::setName($name);
    }

    public function getName()
    {
        $this->_load();
        return parent::getName();
    }

    public function setMinTemp($minTemp)
    {
        $this->_load();
        return parent::setMinTemp($minTemp);
    }

    public function getMinTemp()
    {
        $this->_load();
        return parent::getMinTemp();
    }

    public function setMaxTemp($maxTemp)
    {
        $this->_load();
        return parent::setMaxTemp($maxTemp);
    }

    public function getMaxTemp()
    {
        $this->_load();
        return parent::getMaxTemp();
    }

    public function addMeasurings(\Hector\FoodServiceBundle\Entity\Measuring $measurings)
    {
        $this->_load();
        return parent::addMeasurings($measurings);
    }

    public function getMeasurings()
    {
        $this->_load();
        return parent::getMeasurings();
    }

    public function setMeal(\Hector\FoodServiceBundle\Entity\Meal $meal)
    {
        $this->_load();
        return parent::setMeal($meal);
    }

    public function getMeal()
    {
        $this->_load();
        return parent::getMeal();
    }

    public function __toString()
    {
        $this->_load();
        return parent::__toString();
    }

    public function getItemMealString()
    {
        $this->_load();
        return parent::getItemMealString();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'name', 'minTemp', 'maxTemp', 'measurings', 'meal');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}