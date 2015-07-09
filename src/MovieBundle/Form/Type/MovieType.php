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
 * Class MovieType
 */
class MovieType extends AbstractType
{
    /**
     * Configures the options for this type.
     *
     * @param OptionsResolver $resolver The resolver for the options.
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'MovieBundle\Entity\Movie'
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
            ->add('title', 'text', [
                'required' => true,
                'label'    => 'Title',
            ])
            ->add('imdbLink', 'text', [
                'required' => true,
                'label'    => 'IMDB Link',
            ])
            ->add('youtubeLink', 'text', [
                'required' => true,
                'label'    => 'YOUTUBE Link',
            ])
            ->add('description', 'textarea', [
                'required' => true,
                'label'    => 'Description',
            ])
            ->add('rating', 'number', [
                'required' => true,
                'label'    => 'Rating',
            ])
            ->add('director', 'entity', array(
                'class' => 'MovieBundle:Person',
                'property' => 'name',
                'required' => false,
                'label'    => 'Director',
                'expanded' => false,
                'multiple' => false,
            ))
            ->add('producer', 'entity', array(
                'class' => 'MovieBundle:Producer',
                'property' => 'name',
                'required' => false,
                'label'    => 'Producer',
                'expanded' => false,
                'multiple' => false,
            ))
            ->add('actors', 'entity', array(
                'class' => 'MovieBundle:Person',
                'property' => 'name',
                'required' => false,
                'label'    => 'Actors',
                'expanded' => false,
                'multiple' => true,
            ))
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