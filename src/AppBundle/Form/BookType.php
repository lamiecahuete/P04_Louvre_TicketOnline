<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BookType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('date', DateType::class, array(
				'label' => 'Choisissez une date parmi celles disponibles :',
				'widget' => 'single_text'
			))
			->add('DayTicketType', RadioType::class, array(
				'label' => 'Billet "journée"'
			))
			->add('HalfDayTicketType', RadioType::class, array(
				'label' => 'Billet "demi-journée"'
			))
			->add('quantity', IntegerType::class, array(
				'label' => 'Quantité :'
			))
			->add('mail', EmailType::class, array(
				'label' => 'Votre adresse mail :'
			));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Book'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_book';
    }


}
