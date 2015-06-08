<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Security\Core\Validator\Constraint\UserPassword as OldUserPassword;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;

class ProfileFormType extends AbstractType
{
    private $class;

    /**
     * @param string $class The User class name
     */
    public function __construct($class)
    {
        $this->class = $class;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        if (class_exists('Symfony\Component\Security\Core\Validator\Constraints\UserPassword')) {
            $constraint = new UserPassword();
        } else {
            // Symfony 2.1 support with the old constraint class
            $constraint = new OldUserPassword();
        }

        $this->buildUserForm($builder, $options);

        $builder
        ->add('username', null, array('label' => 'form.username', 'translation_domain' => 'FOSUserBundle','attr'=>  array(
        		'class'   => 'userForm')))
        ->add('firstname', null, array('label' => 'form.firstname', 'translation_domain' => 'FOSUserBundle','attr'=>  array(
        				'class'   => 'userForm')))
        ->add('lastname', null, array('label' => 'form.lastname', 'translation_domain' => 'FOSUserBundle','attr'=>  array(
        						'class'   => 'userForm')))
        ->add('email', 'email', array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle','attr'=>  array(
        								'class'   => 'userForm')))
        ->add('location', 'choice', array(
        		'choices' => array(
        		'Fusagasuga, Cundinamarca'   => 'Fusagasuga',
        	),
        	'multiple' => false,'label' => 'form.location', 'translation_domain' => 'FOSUserBundle'
        	,'attr'=>  array('class'   => 'userForm input-control select')
        	))
        
        ->add('birthday', 'date', array(
        		'years' => range(1950,2010),
        		'format' => 'MM/dd/yyyy',
        		'label' => 'form.birthday', 'translation_domain' => 'FOSUserBundle','attr'=>  array(
        		'class'   => 'userForm')
        	))
        
        ->add('current_password', 'password', array(
            'label' => 'form.current_password','attr'=>  array(
        		'class'   => 'userForm'),
            'translation_domain' => 'FOSUserBundle',
            'mapped' => false,
            'constraints' => $constraint,
        ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => $this->class,
            'intention'  => 'profile',
        ));
    }

    public function getName()
    {
        return 'fos_user_profile';
    }

    /**
     * Builds the embedded form representing the user.
     *
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    protected function buildUserForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', null, array('label' => 'form.username', 'translation_domain' => 'FOSUserBundle'))
            ->add('email', 'email', array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle'))
        ;
    }
}