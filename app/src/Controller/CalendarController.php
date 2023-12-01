<?php 
namespace App\Controller;

use App\Entity\Word;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use DateTime;
use App\Entity\Users;


class CalendarController extends AbstractController
{
    #[Route('/calendar', name: 'app_calendar')]
    public function showCalendar(ManagerRegistry $doctrine): Response
    {
        $firstDayOfMonth = new DateTime('first day of this month');
        $daysInMonth = $firstDayOfMonth->format('t');
        $firstDayOfWeek = $firstDayOfMonth->format('N');
        $calendarDays = [];

        // Récupération du repository de l'entité Word
        $wordRepository = $doctrine->getRepository(Word::class);

        // Ajoutez des jours vides si le mois ne commence pas un dimanche
        for ($i = 1; $i < $firstDayOfWeek; $i++) {
            $calendarDays[] = ['day' => null, 'word' => null, 'date' => null];
        }

        // Ajoutez les jours du mois avec les mots correspondants
        for ($day = 1; $day <= $daysInMonth; $day++) {
            $date = new DateTime($firstDayOfMonth->format('Y-m-') . sprintf('%02d', $day));
            $wordOfTheDay = $wordRepository->findOneBy(['date' => $date]);
            $calendarDays[] = [
                'day' => $day,
                'word' => $wordOfTheDay ? $wordOfTheDay->getWord() : null,
                'date' => $date 
            ];
        }

        return $this->render('calendar/show.html.twig', [
            'calendarDays' => $calendarDays,
            'firstDayOfWeek' => $firstDayOfWeek
        ]);
    }
}

?>