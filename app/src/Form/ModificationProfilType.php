<?php
namespace App\Form;

use App\Entity\Users;
use App\Service\AvatarService;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ModificationProfilType extends AbstractType
{
    private $avatarService;

    public function __construct(AvatarService $avatarService)
    {
        $this->avatarService = $avatarService;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $avatars = $this->avatarService->getAvailableAvatars();

        $builder
            ->add('username', TextType::class, [
                'label' => "Nouveau nom d'utilisateur",
            ])
            ->add('avatar', ChoiceType::class, [
                'choices' => array_flip($avatars),
                'label' => 'Choisissez votre avatar',
                'expanded' => true,
                'multiple' => false,
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
            ])
            ->add('age', IntegerType::class, [
                'label' => 'Âge',
                'required' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}
