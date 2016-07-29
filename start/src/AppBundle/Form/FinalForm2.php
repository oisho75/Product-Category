// src/AppBundle/Form/FinalForm2.php
namespace AppBundle\Form2;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ProductsType;
use Symfony\Component\Form\Extension\Core\Type\NameType;
use Symfony\Component\Form\Extension\Core\Type\DescriptionType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class FinalForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', NameType::class)
            ->add('description', DescriptionType::class)
            $builder->add('products', CollectionType::class, array(
            'entry_type' => TagType::class
        ));

          
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Category',
        ));
    }
}