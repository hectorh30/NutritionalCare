<?php

namespace Hector\FoodServiceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ItemFormType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
      $builder ->add('meal', 'entity', array('class'=>'Hector\FoodServiceBundle\Entity\Meal'))
	->add('name', 'text')
	->add('maxTemp', 'integer')
	->add('minTemp', 'integer');

    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Hector\FoodServiceBundle\Entity\Item',
        );
    }
}