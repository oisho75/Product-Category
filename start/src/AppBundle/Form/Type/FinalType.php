<?php
// src/AppBundle/Form/Type/FinalType.php
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class FinalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
   
        
        $builder->add('addC', SubmitType::class, array('label' => 'Create Category'));
        $builder->add('addP', SubmitType::class, array('label' => 'Create Product'));
       $builder->add('updateC', SubmitType::class, array('label' => 'Update Category'));
        $builder->add('updateP', SubmitType::class, array('label' => 'Update Product'));
        $builder->add('deleteC', SubmitType::class, array('label' => 'Delete Category'));
        $builder->add('deleteP', SubmitType::class, array('label' => 'Delete Product'));
          
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => null
        ));
    }
}