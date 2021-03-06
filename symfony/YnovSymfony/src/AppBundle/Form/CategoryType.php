<?php
/**
 * Created by IntelliJ IDEA.
 * User: Etienne
 * Date: 07/12/2017
 * Time: 10:05
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use AppBundle\Entity\Category;

class CategoryType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("fullname", TextType::class, array('required' => true))
            ->add("urlname", TextType::class)
            ->add("save", SubmitType::class, array('label' => 'Create category'))
            ->getForm();
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            array('data_class' => Category::class)
        );
    }
}