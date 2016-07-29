// src/AppBundle/Form/FinalForm.php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CategoryType;
use Symfony\Component\Form\Extension\Core\Type\NameType;
use Symfony\Component\Form\Extension\Core\Type\DescriptionType;
use Symfony\Component\Form\Extension\Core\Type\PriceType;

class FinalForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('category', CategoryType::class)
            ->add('name', NameType::class)
            ->add('description', DescriptionType::class)
            ->add('price', PriceType::class);
          
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Product',
        ));
    }
}