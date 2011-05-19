<?php

namespace Hector\FoodServiceBundle\Entity;

/**
 * Hector\FoodServiceBundle\Entity\Item
 */
class Item
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $name
     * @assert:NotBlank()
     */
    private $name;

    /**
     * @var integer $minTemp
     */
    private $minTemp;

    /**
     * @var integer $maxTemp
     */
    private $maxTemp;

    /**
     * @var Hector\FoodServiceBundle\Entity\Measuring
     */
    private $measurings;

    /**
     * @var Hector\FoodServiceBundle\Entity\Meal
     */
    private $meal;

    public function __construct()
    {
        $this->measurings = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set minTemp
     *
     * @param integer $minTemp
     */
    public function setMinTemp($minTemp)
    {
        $this->minTemp = $minTemp;
    }

    /**
     * Get minTemp
     *
     * @return integer $minTemp
     */
    public function getMinTemp()
    {
        return $this->minTemp;
    }

    /**
     * Set maxTemp
     *
     * @param integer $maxTemp
     */
    public function setMaxTemp($maxTemp)
    {
        $this->maxTemp = $maxTemp;
    }

    /**
     * Get maxTemp
     *
     * @return integer $maxTemp
     */
    public function getMaxTemp()
    {
        return $this->maxTemp;
    }

    /**
     * Add measurings
     *
     * @param Hector\FoodServiceBundle\Entity\Measuring $measurings
     */
    public function addMeasurings(\Hector\FoodServiceBundle\Entity\Measuring $measurings)
    {
        $this->measurings[] = $measurings;
    }

    /**
     * Get measurings
     *
     * @return Doctrine\Common\Collections\Collection $measurings
     */
    public function getMeasurings()
    {
        return $this->measurings;
    }

    /**
     * Set meal
     *
     * @param Hector\FoodServiceBundle\Entity\Meal $meal
     */
    public function setMeal(\Hector\FoodServiceBundle\Entity\Meal $meal)
    {
        $this->meal = $meal;
    }

    /**
     * Get meal
     *
     * @return Hector\FoodServiceBundle\Entity\Meal $meal
     */
    public function getMeal()
    {
        return $this->meal;
    }
    
    public function __toString()
    {
      return $this->getName();
    }

    public function getItemMealString(){
      return $this->getName().' - '.$this->getMeal()->getName();
    }
}
