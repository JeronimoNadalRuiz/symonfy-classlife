<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\ClAulasCalendar;

class AulasCalendarController extends AbstractController
{
    public function aulas()
    {

        $em = $this->getDoctrine()->getManager();
        $aulasCaledarRepo = $this->getDoctrine()->getRepository(ClAulasCalendar::class);
        $sesiones = $aulasCaledarRepo->findAll();

        $aulasGrupos = $em->createQuery(
            'SELECT ac FROM APP\Entity\ClAulasCalendar ac GROUP BY ac.aulaId, ac.groupId'
        );

        $aulasGrupos = $aulasGrupos->getResult(); 

        return $this->render('aulas_calendar/index.html.twig', [
           'sesiones'=>$sesiones,
           'aulasGrupos'=>$aulasGrupos
        ]);
    }
}
