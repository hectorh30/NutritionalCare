<?php

namespace Hector\FoodServiceBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Hector\FoodServiceBundle\Entity\Meal;
use Hector\FoodServiceBundle\Entity\Measuring;
use Hector\FoodServiceBundle\Entity\Item;

class ChartController extends Controller
{
  /**
   * @extra:Route("/meal", name="_chart_meal_query")
   */  
  public function mealQueryAction()
  {
    $em = $this->get('doctrine.orm.entity_manager');
    $qb = $em->createQueryBuilder()
      ->add('select','u')
      ->add('from','Hector\FoodServiceBundle\Entity\Meal u');
    $form = $this->get('form.factory')
      ->createBuilder('form')
      ->add('meal','entity',array('class' => 'Hector\FoodServiceBundle\Entity\Meal', 'query_builder' => $qb))
      ->add('fromDate','date',array('required'=>false,'years'=>range(1970,date('Y'))))
      ->add('toDate','date',array('required'=>false,'years' => range(date('Y'),1970,-1)))
      ->add('fromTime','time',array('required'=>false))
      ->add('toTime','time',array('required'=>false))
      ->getForm();
    $hasChart = false;

    if($this->get('request')->getMethod() === 'POST'){
      $form->bindRequest($this->get('request'));
      if($form->isValid()){
	$id = $form->get('meal')->getData()->getId();
	$fromDate = $form->get('fromDate');
	$toDate = $form->get('toDate');
	$fromTime = $form->get('fromTime');
	$toTime = $form->get('toTime');

	$meal = $em->find('Hector\FoodServiceBundle\Entity\Meal',$id);	
	$datesQuery = $em->createQuery('SELECT u from Hector\FoodServiceBundle\Entity\Measuring u GROUP BY u.time')->getResult();

	$values = array();
	$emptyCount=0;
	for($i=0;$i < count($datesQuery);$i++){
	  if(
	     (
	      $fromDate->isEmpty() ||
   	        (
		  !$fromDate->isEmpty() && $datesQuery[$i]->getTime() >= $fromDate->getData()
		)
	      ) &&
	      (
	        $toDate->isEmpty() ||
		(
		 !$toDate->isEmpty() && $datesQuery[$i]->getTime() <= $toDate->getData()
		)
	      ) &&
	     (
	      $fromTime->isEmpty() ||
   	        (
		  !$fromTime->isEmpty() && $datesQuery[$i]->getTime() >= $fromTime->getData()
		)
	      ) &&
	      (
	        $toTime->isEmpty() ||
		(
		 !$toTime->isEmpty() && $datesQuery[$i]->getTime() <= $toTime->getData()
		)
	      ) 
	    ){

	    $data = array();
	    foreach($meal->getItems() as $item){	      
	      $qb = $em->createQueryBuilder();
	      $qb->add('select','u')
		->add('from','Hector\FoodServiceBundle\Entity\Measuring u')
		->where( 'u.time = ?1')
		->andwhere('u.item = ?2');
	      $qb->setParameter(1,$datesQuery[$i]->getTime()->format('Y-m-d H:i:s'));
	      $qb->setParameter(2,$item->getId());
	      $query = $qb->getQuery();
	      $measurings = $query->getResult();
	      if(!empty($measurings))
		{
		  $data[] = $measurings[0];
		} else  {
		$data[] = null;
	      }
	    }      
	    if(!empty($data)){
	      $values[] = array('time'=>$datesQuery[$i]->getTime(),'data'=>$data);
	    }else{
	      $emptyCount+=1;
	    }
	  }
	}
	
	if(empty($values)){
	  $this->get('session')->setFlash('error','No results found with current input');
	  return $this->render('HectorFoodServiceBundle:Chart:mealQuery.html.twig',array('form' => $form->createView(),
											 'formName'=>$form->getName(),
											 'hasChart'=>$hasChart,
											 'expandDate'=>!$fromDate->isEmpty() || !$toDate->isEmpty(),
											 'expandTime'=>!$fromTime->isEmpty() || !$toTime->isEmpty()));
	}
	
	// Generate random colors and assign them to charts names
	$items = $meal->getItemNames();
	for($i=0; $i < count($meal->getItems()); $i++){
	  $itemInfo[] = array('color'=>$this->random_color(),'name' => $items[$i]);
	}

	$hasChart=true;
	return $this->render('HectorFoodServiceBundle:Chart:mealQuery.html.twig',array(
										   'form' => $form->createView(),
										   'formName' => $form->getName(),
										   'hasChart' => $hasChart,
										   'expandDate'=>!$fromDate->isEmpty() || !$toDate->isEmpty(),
										   'expandTime'=>!$fromTime->isEmpty() || !$toTime->isEmpty(),
										   'values' => $values,
										   'itemInfo'=>$itemInfo,
										   'meal'=>$meal,
										       ));
      }
    }    
    return $this->render('HectorFoodServiceBundle:Chart:mealQuery.html.twig',array('form' => $form->createView(),
										   'formName'=>$form->getName(),
										   'hasChart'=>$hasChart,
										   'expandDate'=>false,
										   'expandTime'=>false));
  }

  /**
   * @extra:Route("/item", name="_chart_item_query")
   */  
  public function itemQueryAction()
  {
    $em = $this->get('doctrine.orm.entity_manager');
    $qb = $em->createQueryBuilder()
      ->add('select','u')
      ->add('from','Hector\FoodServiceBundle\Entity\Item u');
    $form = $this->get('form.factory')
      ->createBuilder('form')
      ->add('item','entity',array('class' => 'Hector\FoodServiceBundle\Entity\Item', 'query_builder' => $qb,'property'=>'itemMealString'))
      ->add('fromDate','date',array('required'=>false,'years'=>range(1970,date('Y'))))
      ->add('toDate','date',array('required'=>false,'years' => range(date('Y'),1970,-1)))
      ->add('fromTime','time',array('required'=>false))
      ->add('toTime','time',array('required'=>false))
      ->getForm();
    $hasChart = false;

    if($this->get('request')->getMethod() === 'POST'){
      $form->bindRequest($this->get('request'));
      if($form->isValid()){
	$id = $form->get('item')->getData()->getId();
	$fromDate = $form->get('fromDate');
	$toDate = $form->get('toDate');
	$fromTime = $form->get('fromTime');
	$toTime = $form->get('toTime');

	$item = $em->find('Hector\FoodServiceBundle\Entity\Item',$id);	
	$datesQuery = $em->createQuery('SELECT u from Hector\FoodServiceBundle\Entity\Measuring u GROUP BY u.time')->getResult();

	$values = array();
	$emptyCount=0;
	for($i=0;$i < count($datesQuery);$i++){
	  if(
	     (
	      $fromDate->isEmpty() ||
   	        (
		  !$fromDate->isEmpty() && $datesQuery[$i]->getTime() >= $fromDate->getData()
		)
	      ) &&
	      (
	        $toDate->isEmpty() ||
		(
		 !$toDate->isEmpty() && $datesQuery[$i]->getTime() <= $toDate->getData()
		)
	      ) &&
	     (
	      $fromTime->isEmpty() ||
   	        (
		  !$fromTime->isEmpty() && $datesQuery[$i]->getTime() >= $fromTime->getData()
		)
	      ) &&
	      (
	        $toTime->isEmpty() ||
		(
		 !$toTime->isEmpty() && $datesQuery[$i]->getTime() <= $toTime->getData()
		)
	      ) 
	    ){

	    $data = array();
	    //	    foreach($meal->getItems() as $item){
	      $qb = $em->createQueryBuilder();
	      $qb->add('select','u')
		->add('from','Hector\FoodServiceBundle\Entity\Measuring u')
		->where( 'u.time = ?1')
		->andwhere('u.item = ?2');
	      $qb->setParameter(1,$datesQuery[$i]->getTime()->format('Y-m-d H:i:s'));
	      $qb->setParameter(2,$item->getId());
	      $query = $qb->getQuery();
	      $measurings = $query->getResult();
	      if(!empty($measurings))
		{
		  $data[] = $measurings[0];
		} else  {
		$data[] = null;
	      }
	    }      
	    if(!empty($data)){
	      $values[] = array('time'=>$datesQuery[$i]->getTime(),'data'=>$data);
	    }else{
	      $emptyCount+=1;
	    }
	    //	  }
	}
	
	if(empty($values)){
	  $this->get('session')->setFlash('error','No measures found for that item');
	  return $this->render('HectorFoodServiceBundle:Chart:itemQuery.html.twig',array('form' => $form->createView(),
											 'formName'=>$form->getName(),
											 'hasChart'=>$hasChart,
											 'expandDate'=>!$fromDate->isEmpty() || !$toDate->isEmpty(),
											 'expandTime'=>!$fromTime->isEmpty() || !$toTime->isEmpty()));
	}
	
	$hasChart=true;
	return $this->render('HectorFoodServiceBundle:Chart:itemQuery.html.twig',array(
										   'form' => $form->createView(),
										   'formName' => $form->getName(),
										   'hasChart' => $hasChart,
										   'expandDate'=>!$fromDate->isEmpty() || !$toDate->isEmpty(),
										   'expandTime'=>!$fromTime->isEmpty() || !$toTime->isEmpty(),
										   'values' => $values,
										   'item'=>$item
										       ));
      }
    }    
    return $this->render('HectorFoodServiceBundle:Chart:itemQuery.html.twig',array('form' => $form->createView(),
										   'formName'=>$form->getName(),
										   'hasChart'=>$hasChart,
			                                                           'expandDate'=>false,
										   'expandTime'=>false));
  }
  
  public function random_color(){
    mt_srand((double)microtime()*1000000);
    $c = '';
    while(strlen($c)<6){
      $c .= sprintf("%02X", mt_rand(0, 255));
    }
    return $c;
  }
}