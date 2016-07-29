<?php
// src/AppBundle/Form/Type/DelPType.php
namespace AppBundle\Form\Type;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use AppBundle\Entity\Product;
use AppBundle\Entity\Category;
class DelPType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    
        $builder->add('deleteP', SubmitType::class, array('label' => 'Delete Product'));
        
        
        
        $builder->add('products',  EntityType::class, array(
    // query choices from this entity
    'class' => 'AppBundle:Product',
  
  
));
    
    
        
          
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => null
        ));
    }
}