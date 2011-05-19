<?php

namespace Hector\FoodServiceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Hector\FoodServiceBundle\Form\ItemFormType;

class MealFormType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
      $builder->add('name')
	->add('items', 'collection', array('type' => new ItemFormType()));
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Hector\FoodServiceBundle\Entity\Meal',
        );
    }

    public function getName()
    {
      return 'mealform';
    }
}