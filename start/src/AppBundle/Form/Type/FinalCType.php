<?php
// src/AppBundle/Form/Type/FinalCType.php
namespace AppBundle\Form\Type;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use AppBundle\Entity\Product;
use AppBundle\Entity\Category;
class FinalCType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    
        $builder->add('updateC', SubmitType::class, array('label' => 'Update Category'));
        
        
        
        $builder->add('categories',  EntityType::class, array(
    // query choices from this entity
    'class' => 'AppBundle:Category',
  
  
));
    
      $builder->add('updateName');
        $builder->add('updateDescription');
       
        
          
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => null
        ));
    }
}