<?php
/**
 * Created by PhpStorm.
 * User: patrick
 * Date: 08/01/19
 * Time: 15:26
 */

namespace App\UI\Form;


use App\Domain\DTO\Interfaces\UserRegistrationDTOInterface;
use App\Domain\DTO\UserRegistrationDTO;
use App\UI\Form\Interfaces\UserRegistrationTypeInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserRegistrationType extends AbstractType implements UserRegistrationTypeInterface
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("username", TextType::class)
            ->add("email", EmailType::class)
            ->add("password",PasswordType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => UserRegistrationDTOInterface::class,
            'empty_data' => function (FormInterface $form) {
                return new UserRegistrationDTO(
                    $form->get('username')->getData(),
                    $form->get('email')->getData(),
                    $form->get('email')->getData()
                );
            }
        ]);
    }
}