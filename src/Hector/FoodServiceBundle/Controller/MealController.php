<?php

namespace Hector\FoodServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Hector\FoodServiceBundle\Entity\Meal;
use Hector\FoodServiceBundle\Entity\Measuring;
use Hector\FoodServiceBundle\Form\ItemFormType;
use Hector\FoodServiceBundle\Form\MealFormType;
use Hector\FoodServiceBundle\Form\MeasuringFormType;

class MealController extends Controller
{
  /**
   * @extra:Route("/", name="_meal_index")
   */  
  public function indexAction()
  {
    $em = $this->get('doctrine.orm.entity_manager');
    $meals = $em->createQuery('SELECT u FROM Hector\FoodServiceBundle\Entity\Meal u')->execute();
    return $this->render('HectorFoodServiceBundle:Meal:index.html.twig',array('meals'=>$meals));
  }

  /**
   * @extra:Route("/delete/{id}", name="_meal_delete")
   */  
  public function deleteAction($id)
  {
    $em = $this->get('doctrine.orm.entity_manager');
    $meal = $em->find('Hector\FoodServiceBundle\Entity\Meal',$id);

    $em->remove($meal);
    $em->flush();    

    return $this->redirect($this->generateUrl('_meal_index'));
  }

  
  /**
   * @extra:Route("/show/{id}",name="_meal_show")
   */
  public function showAction($id)
  {
    $em = $this->get('doctrine.orm.entity_manager');
    $meal = $em->find('Hector\FoodServiceBundle\Entity\Meal',$id);

    return $this->render('HectorFoodServiceBundle:Meal:show.html.twig',array('meal'=>$meal));
 }

  /**
   * @extra:Route("/edit/{id}",name="_meal_edit")
   */
  public function editAction($id)
  {
    $em = $this->get('doctrine.orm.entity_manager');
    $meal = $em->find('Hector\FoodServiceBundle\Entity\Meal',$id);
    
    $form = $this->get('form.factory')
      ->createBuilder('form',$meal)
      ->add('name','text')
      ->add('items','collection',array('type' => new ItemFormType()))
      ->getForm();
    $form->setData($meal);

    
    if($this->get('request')->getMethod() === 'POST'){
      $form->bindRequest($this->get('request'));
      if($form->isValid()){
	$em->persist($meal);
	$em->flush();
	return $this->redirect($this->generateUrl('_meal_index'));
      }
    }
    return $this->render('HectorFoodServiceBundle:Meal:edit.html.twig',array('meal'=>$meal, 'form'=>$form->createView(),'formName'=>$form->getName()));
  }
  
  /**
   * @extra:Route("/measuring/{id}",name="_meal_measuring")
   */
  public function measuringAction($id)
  {
    $em = $this->get('doctrine.orm.entity_manager');
    $meal = $em->find('Hector\FoodServiceBundle\Entity\Meal',$id);

    $form = $this->get('form.factory')
      ->createBuilder('form')
      ->add('responsible','text')
      ->add('calibrated','checkbox', array('required' => false));

    foreach($meal->getItems() as $item){
      $form  = $form->add(strval($item->getId()),new MeasuringFormType());
    }
    
    $form = $form->getForm();

    $request = $this->get('request');
    if($request->getMethod() == 'POST') {
      
      $form->bindRequest($request);
      if($form->isValid()){
	$datetime = new \DateTime();
	foreach ($form->getChildren() as $key => $child) {
	  if(is_object($child->getData()) && get_class($child->getData()) === "Hector\FoodServiceBundle\Entity\Measuring")
	    {
	      $measuring = new Measuring();
	      $measuring->setTemperature($child->getData()->getTemperature());
	      $measuring->setCalibrated($form->get('calibrated')->getData());
	      $measuring->setResponsible($form->get('responsible')->getData());
	      $measuring->setTime($datetime);
	      $measuring->setItem($em->find('Hector\FoodServiceBundle\Entity\Item',(int)$key));
	      $em->persist($measuring);
	    }
        }
	$em->flush();	   	      
	$this->get('session')->setFlash('notice','Medición realizada correctamente.');
	return $this->redirect($this->generateUrl('_meal_index'));
      }
    }
    
    return $this->render('HectorFoodServiceBundle:Meal:measuring.html.twig',array('meal'=>$meal, 'form'=>$form->createView(),'formName'=>$form->getName()));
  }
  
  /**
   *@extra:Route("/new",name="_meal_new")
   */
    public function newAction()
    {
      $meal  = new Meal();

      $form = $this->get('form.factory')
	->createBuilder('form',$meal)
	->add('name', 'text')
	->getForm();

      $request = $this->get('request');
      if($request->getMethod() == 'POST') {
	$form->bindRequest($request);
	if($form->isValid()){
	  $em = $this->get('doctrine.orm.entity_manager');
	  $em->persist($meal);
	  $em->flush();

	  $this->get('session')->setFlash('notice','Meal added successfully');
	  return $this->redirect($this->generateUrl('_meal_index'));
	}
      }
	
      return $this->render('HectorFoodServiceBundle:Meal:new.html.twig',array('form'=>$form->createView(),'formName'=>$form->getName()));
    }
}
