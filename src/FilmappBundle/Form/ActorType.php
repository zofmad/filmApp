<?php

namespace FilmappBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use FilmappBundle\Entity\Movie;

class ActorType extends AbstractType
{

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FilmappBundle\Entity\Actor'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'filmappbundle_actor';
    }
    
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('first_name')
                ->add('last_name')
                ->add('date_of_birth', 'date')
                ->add('biography')
                ->add('rating')
                ->add('movies')
                ;
        
    }
    
}
