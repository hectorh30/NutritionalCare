<?php

namespace Hector\FoodServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Hector\FoodServiceBundle\Entity\Meal;
use Hector\FoodServiceBundle\Entity\Item;

class ItemController extends Controller
{
  /**
   * @extra:Route("/show/{id}", name="_item_show")
   */  
  public function showAction(){

  }
  
  /**
   * @extra:Route("/", name="_item_index")
   */  
  public function indexAction()
  {
    $em = $this->get('doctrine.orm.entity_manager');
    $items = $em->createQuery('SELECT u FROM Hector\FoodServiceBundle\Entity\Item u')->execute();
    return $this->render('HectorFoodServiceBundle:Item:index.html.twig',array('items'=>$items));
  }
  
  /**
   *@extra:Route("/new",name="_item_new")
   */
    public function newAction()
    {
      $item  = new Item();

      $form = $this->get('form.factory')
	->createBuilder('form',$item)
	->add('meal', 'entity', array('class'=>'Hector\FoodServiceBundle\Entity\Meal'))
	->add('name', 'text')
	->add('maxTemp', 'integer')
	->add('minTemp', 'integer')	
	->getForm();

      $request = $this->get('request');
      if($request->getMethod() == 'POST') {
	$form->bindRequest($request);
	if($form->isValid()){
	  $em = $this->get('doctrine.orm.entity_manager');
	  $em->persist($item);
	  $em->flush();

	  $this->get('session')->setFlash('notice','Success');
	  return $this->redirect($this->generateUrl('_meal_index'));
	}
      }
	
      return $this->render('HectorFoodServiceBundle:Item:new.html.twig',array('form'=>$form->createView(),'formName'=>$form->getName()));
    }
}
