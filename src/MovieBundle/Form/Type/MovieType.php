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
use MovieBundle\Entity\Operation;

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
            ->add('director', 'text', [
                'required' => false,
                'label'    => 'Director',
            ])
            ->add('producer', 'text', [
                'required' => false,
                'label'    => 'Producer',
            ])
            ->add('actors', 'text', [
                'required' => false,
                'label'    => 'Actors',
            ])
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