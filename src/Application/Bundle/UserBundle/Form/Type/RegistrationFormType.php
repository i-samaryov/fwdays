<?php

namespace Application\Bundle\UserBundle\Form\Type;

use FOS\UserBundle\Form\Type\RegistrationFormType as BaseRegistrationFormType;
use Symfony\Component\Form\FormBuilder;

class RegistrationFormType extends BaseRegistrationFormType
{
    
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('email', 'email')
            ->add('plainPassword', 'repeated', array('type' => 'password'));
    }
    
    public function getName()
    {
        return 'application_user_registration';
    }    
    
}