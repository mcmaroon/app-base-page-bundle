<?php

namespace App\BasePageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BasePageType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('slug')
                ->add('description')
                ->add('name')
                ->add('active', null, array(
                    'required' => false
                ))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'App\BasePageBundle\Entity\BasePage'
        ));
    }
    
    /**
     * @return string
     */
    public function getBlockPrefix() {
        return 'basepage';
    }

}
