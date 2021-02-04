<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\ClAulasCalendar;

class CalendarioController extends AbstractController
{
    public function calendario()
    {
        $em = $this->getDoctrine()->getManager();
        $aulasCaledarRepo = $this->getDoctrine()->getRepository(ClAulasCalendar::class);
        $horarios = $aulasCaledarRepo->findAll();
        $events = array();
        foreach ($horarios as $horario) {
            $array = array();
            $array['title']='Aula '.strval($horario->getAulaId());
            $array['start']=$horario->getCalendarDateIni()->format('Y-m-d H:i:s');
            $array['end']=$horario->getCalendarDateEnd()->format('Y-m-d H:i:s');
            array_push($events,$array);
        }
        return $this->render('calendario/index.html.twig', [
            'horarios' => $events
        ]);
    }
}
