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
use MovieBundle\Entity\Producer;

/**
 * Class ProducerType
 */
class ProducerType extends AbstractType
{
    /**
     * Configures the options for this type.
     *
     * @param OptionsResolver $resolver The resolver for the options.
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'MovieBundle\Entity\Producer'
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
                'required' => true,
                'label'    => 'Movies',
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