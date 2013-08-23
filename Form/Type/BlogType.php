<?php

namespace Kp\Bundle\BlogBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BlogType extends AbstractType
{
    protected $dataClass;
    protected $checkerRegistry;
    protected $actionRegistry;

    public function __construct($dataClass)
    {
        $this->dataClass = $dataClass;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', 'text', array(
                'label' => 'kp.blog.title',
                'attr' => array('class' => 'span12'),
            ))
            ->add('blog', 'textarea', array(
                'label' => 'kp.blog.blog',
                'attr' => array('class' => 'cleditor'),
            ))
            ->add('active', 'checkbox', array(
                'label' => 'kp.blog.active',
                'required' => false,
            ))
            ->add('taxons', 'sylius_taxon_selection')
            ->add('save', 'submit', array(
                'label' => 'kp.save',
            ))
        ;

    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver
            ->setDefaults(array(
                'data_class' => $this->dataClass
            ))
        ;
    }

    public function getName()
    {
        return 'kp_blog';
    }
}
