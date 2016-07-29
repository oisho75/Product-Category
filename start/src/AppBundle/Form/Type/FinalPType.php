<?php
// src/AppBundle/Form/Type/FinalPType.php
namespace AppBundle\Form\Type;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use AppBundle\Entity\Product;
use AppBundle\Entity\Category;
class FinalPType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    
        $builder->add('updateP', SubmitType::class, array('label' => 'Update Product'));
        
        
        
        $builder->add('products',  EntityType::class, array(
    // query choices from this entity
    'class' => 'AppBundle:Product',
  
  
));
    
      $builder->add('updateName');
        $builder->add('updateDescription');
       $builder->add('updatePrice');
        
          
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => null
        ));
    }
}