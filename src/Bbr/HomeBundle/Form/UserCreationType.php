<?php

namespace Bbr\HomeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserCreationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('name', 'text', array('label' => 'My New Label:'));
        $builder->add('firstName', 'text');

        $builder->add('address', 'textarea');
        $builder->add('zip', 'text');
        $builder->add('city', 'text');

        $builder->add('email', 'email', array('label' => 'My New Label:'));
        $builder->add('password', 'password');
    }

	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'Bbr\HomeBundle\Entity\User'
		));
	}

    public function getName()
    {
        return 'userCreation';
    }
}
