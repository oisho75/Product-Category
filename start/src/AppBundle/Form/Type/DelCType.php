<?php
// src/AppBundle/Form/Type/DelCType.php
namespace AppBundle\Form\Type;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use AppBundle\Entity\Product;
use AppBundle\Entity\Category;
class DelCType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    
        $builder->add('deleteC', SubmitType::class, array('label' => 'Delete Category'));
        
        
        
        $builder->add('categories',  EntityType::class, array(
    // query choices from this entity
    'class' => 'AppBundle:Category',
  
  
));
    
      
       
        
          
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => null
        ));
    }
}