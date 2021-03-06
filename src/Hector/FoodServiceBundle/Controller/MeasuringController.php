<?php

namespace Hector\FoodServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Hector\FoodServiceBundle\Entity\Meal;
use Hector\FoodServiceBundle\Entity\Measuring;

class MeasuringController extends Controller
{
  /**
   * @extra:Route("/", name="_measuring_list")
   */  
  public function indexAction()
  {
    $em = $this->get('doctrine.orm.entity_manager');
    $measurings = $em->createQuery('SELECT u FROM Hector\FoodServiceBundle\Entity\Measuring u')->execute();
    return $this->render('HectorFoodServiceBundle:Measuring:index.html.twig',array('measurings'=>$measurings));
  }

  /**
   * @extra:Route("/new", name="_measuring_new")
   */  
  public function newAction()
  {
    $measuring  = new Measuring();

    $form = $this->get('form.factory')
      ->createBuilder('form',$measuring)
      ->add('calibrated', 'checkbox')
      ->add('item', 'entity', array('class'=>'Hector\FoodServiceBundle\Entity\Item'))      
      ->add('time', 'datetime')
      ->add('responsible','text')
      ->add('temperature','integer')
      ->getForm();

    $request = $this->get('request');
    if($request->getMethod() == 'POST') {
      $form->bindRequest($request);
      if($form->isValid()){
	$em = $this->get('doctrine.orm.entity_manager');
	$em->persist($measuring);
	$em->flush();

	$this->get('session')->setFlash('notice','Success');
	return $this->redirect($this->generateUrl('_meal_index'));
      }
    }
    
    return $this->render('HectorFoodServiceBundle:Measuring:new.html.twig',array('form'=>$form->createView()));
  }
}
