<?php

namespace Hector\FoodServiceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class MeasuringFormType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
      $builder->add('temperature','integer');
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Hector\FoodServiceBundle\Entity\Measuring',
        );
    }
}
