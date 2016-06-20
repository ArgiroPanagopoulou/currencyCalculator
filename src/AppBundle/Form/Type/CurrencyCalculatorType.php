<?php
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CurrencyType as CurrencyValidator;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

/**
 *
 */
class CurrencyCalculatorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('baseCurrency', CurrencyValidator::class, array(
                'placeholder' => '- Choose a currency -',
                'choice_label' => function ($value, $key, $index) {
                    return $key.' ('.$value.')';
                },
                'preferred_choices' => array('USD', 'EUR', 'GBP', 'CHF', 'JPY', 'CAD'),
            ))
            ->add('targetCurrency', CurrencyValidator::class, array(
                'placeholder' => '- Choose a currency -',
                'choice_label' => function ($value, $key, $index) {
                    return $key.' ('.$value.')';
                },
                'preferred_choices' => array('USD', 'EUR', 'GBP', 'CHF', 'JPY', 'CAD'),
            ))
            ->add('amount', NumberType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Form\Model\CurrencyCalculator',
        ));
    }
}
