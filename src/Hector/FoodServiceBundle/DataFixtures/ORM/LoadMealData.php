<?php

namespace Hector\FoodServiceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Hector\FoodServiceBundle\Entity\Meal;
use Hector\FoodServiceBundle\Entity\Item;
use Hector\FoodServiceBundle\Entity\Measuring;

class LoadMealData implements FixtureInterface
{
  public function load($manager)
  {
    $desayuno = new Meal();
    $desayuno->setName('Desayuno');    
    $manager->persist($desayuno);

    $huevo = new Item();
    $huevo->setName('Huevo');
    $huevo->setMinTemp(0);
    $huevo->setMaxTemp(10);
    $huevo->setMeal($desayuno);
    $manager->persist($huevo);
    
    $frijoles = new Item();
    $frijoles->setName('Frijoles');
    $frijoles->setMinTemp(0);
    $frijoles->setMaxTemp(10);
    $frijoles->setMeal($desayuno);
    $manager->persist($frijoles);

    $platanos = new Item();
    $platanos->setName('Platanos');
    $platanos->setMinTemp(0);
    $platanos->setMaxTemp(10);
    $platanos->setMeal($desayuno);
    $manager->persist($platanos);


    $this->generate(array($huevo,$frijoles,$platanos),$manager);

    $almuerzo = new Meal('Almuerzo');
    $almuerzo->setName('Almuerzo');
    $manager->persist($almuerzo);

    $carne = new Item();
    $carne->setName('Carne');
    $carne->setMinTemp(0);
    $carne->setMaxTemp(10);
    $carne->setMeal($almuerzo);
    $manager->persist($carne);

    $arroz = new Item();
    $arroz->setName('Arroz');
    $arroz->setMinTemp(0);
    $arroz->setMaxTemp(10);
    $arroz->setMeal($almuerzo);
    $manager->persist($arroz);

    $papas = new Item();
    $papas->setName('Papas');
    $papas->setMinTemp(0);
    $papas->setMaxTemp(10);
    $papas->setMeal($almuerzo);
    $manager->persist($papas);

    $cena = new Meal();
    $cena->setName('Cena');
    $manager->persist($cena);
    
    $manager->flush();
  }

  public function generate($meals,$manager)
  {
    for($i = 0; $i<20; $i++)    
      {
	//$int= rand(0,time());
	//$string = date("Y-m-d H:i:s",$int); //totally random
	//$string = strtotime('2011-05-16 '.$i.':30:30');  //not working
	$datetime = new \DateTime('1970-01-01');
	$datetime->add(new \DateInterval('PT'.($i+2).'H'));
	foreach ($meals as $meal)
	  {
	    $measuring = new Measuring;
	    $measuring->setCalibrated(false);
	    $measuring->setTime($datetime);
	    $measuring->setResponsible("Hector Hurtarte");
	    $measuring->setTemperature(rand(0,25));
	    $measuring->setItem($meal);
	    $manager->persist($measuring);
	  }
      }
  }
}