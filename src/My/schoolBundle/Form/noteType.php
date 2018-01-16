<?php

namespace My\schoolBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class noteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('semestre')
            ->add('noteDs')
            ->add('noteExam')
            ->add('pourcentageDs')
            ->add('pourcentageExam')
            //->add('moyenne')
            ->add('matiers','entity',array("class"=>"My\schoolBundle\Entity\Matiere",
             "property"=>"libelle"))
            ->add('Classe','entity',array("class"=>"My\schoolBundle\Entity\Classe",
             "property"=>"libelle",'attr' => array(
                        "class" => "cl"   
                    )))
            ->add('Student','entity',array("class"=>"My\schoolBundle\Entity\Student",
             "property"=>"prenom"))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'My\schoolBundle\Entity\note'
        ));
    }
}
