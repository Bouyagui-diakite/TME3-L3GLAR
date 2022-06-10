<?php

namespace App\Form;

use App\Entity\Vol;
use Doctrine\DBAL\Types\DateType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VolFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date')
            ->add('heure')
            ->add('compagnie')
            ->add('numeroVol')
            ->add('nbreBagages')
            ->add('nbreAccompagnants')
            ->add('numero')
            ->add('nbrepasseagers')
            ->add('Nom_et_prenom')
            ->add('Etat')
            ->add('email', EmailType::class)
            ->add("Submit",SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Vol::class,
            'csrf_token' => true,
            'csrf_field_name' => '_token',
            'csrf_token_id' => 'vol_item'
        ]);
    }
}