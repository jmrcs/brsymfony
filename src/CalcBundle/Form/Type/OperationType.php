<?php

namespace CalcBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use CalcBundle\Entity\Operation;

/**
 * Class CurrencyType
 */
class OperationType extends AbstractType
{
    /**
     * Configures the options for this type.
     *
     * @param OptionsResolver $resolver The resolver for the options.
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'CalcBundle\Entity\Operation'
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
            ->add('firstOperator', 'number', [
                'required' => true,
                'label'    => 'Operador 1',
            ])
            ->add('lastOperator', 'number', [
                'required' => true,
                'label'    => 'Operador 2',
            ])
            ->add('action', 'choice', [
                'choices' => array('+' => 'Suma', '-' => 'Resta', '*' => 'Multiplica', '/' => 'Divide'),
                'required' => true,
                'label'    => 'Operacion',
            ])
            ->add('result', 'number', [
                'required' => true,
                'label'    => 'Resultado',
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