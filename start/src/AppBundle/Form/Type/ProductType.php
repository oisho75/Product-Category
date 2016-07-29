<?php
// src/AppBundle/Form/Type/ProductType.php
namespace AppBundle\Form\Type;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;



class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('category');
        $builder->add('name');
        $builder->add('description');
        $builder->add('price');
        $builder->add('save', SubmitType::class, array('label' => 'Create Product'));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Product',
        ));
    }
}