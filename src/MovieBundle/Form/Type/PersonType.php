<?php
/**
 * Created by PhpStorm.
 * User: jm
 * Date: 8/7/15
 * Time: 4:05
 */

namespace MovieBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class PersonType
 */
class PersonType extends AbstractType
{
    /**
     * Configures the options for this type.
     *
     * @param OptionsResolver $resolver The resolver for the options.
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'MovieBundle\Entity\Person'
        ]);
    }
    /**
     * Buildform function
     *
     * @param FormBuilderInterface $builder the formBuilder
     * @param array                $options the options for this form
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', [
                'required' => true,
                'label'    => 'Name',
            ])
            /*->add('movies', 'textarea', [
                'required' => false,
                'label'    => 'Movies',
            ])
            ->add('moviesDirected', 'textarea', [
                'required' => false,
                'label'    => 'Movies Directed',
            ])*/
            ->add('send', 'submit');
    }
    /**
     * Return unique name for this form
     *
     * @return string
     */
    public function getName()
    {

    }
}