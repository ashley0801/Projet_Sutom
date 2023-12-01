<?php 

namespace App\Form;

use App\Entity\Word;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Constraints\Regex; 
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Doctrine\ORM\EntityManagerInterface;

class WordType extends AbstractType
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', DateType::class, [
                'widget' => 'single_text',
            ])
            ->add('word', TextType::class, [
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[a-zA-Z0-9\s]*$/',
                        'message' => 'Le mot ne doit contenir que des caractères alphanumériques.',
                    ]),
                    new Callback([$this, 'validateUniqueWord']),
                ],
            ])
            ->add('save', SubmitType::class, ['label' => 'Définir le mot']);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Word::class,
        ]);
    }

    public function validateUniqueWord($value, ExecutionContextInterface $context)
    {
        $wordRepository = $this->entityManager->getRepository(Word::class);
        $date = $context->getRoot()->getData()->getDate();

        $existingWord = $wordRepository->findOneBy(['word' => $value, 'date' => $date]);

        if ($existingWord !== null) {
            $context->buildViolation('Un mot est déjà enregistré pour ce jour.')
                ->atPath('word')
                ->addViolation();
        }
    }
}



?>