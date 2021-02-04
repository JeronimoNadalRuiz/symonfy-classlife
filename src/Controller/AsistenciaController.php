<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\ClAulasAttendance;
use App\Entity\ClAulasStudents;
use App\Entity\ClStudents;

use Symfony\Component\HttpFoundation\Request;

class AsistenciaController extends AbstractController
{
    public function asistencia(Request $request)
    {
        $aulaId = $request->query->get('aula_id');
        $groupId= $request->query->get('group_id');

        $em = $this->getDoctrine()->getManager();

        $aulasStudentsRepo=$this->getDoctrine()->getRepository(ClAulasStudents::class);
        $alumnosAula = $aulasStudentsRepo->findBy([
            'aulaId' => $aulaId,
            'groupId'=> $groupId
        ]);

        $studentsRepo=$this->getDoctrine()->getRepository(ClStudents::class);
        $alumnos = $studentsRepo->findAll();
        
        $aulasAsistenciaRepo = $this->getDoctrine()->getRepository(ClAulasAttendance::class);
        $asistencias = $aulasAsistenciaRepo->findBy([
            'aulaId' => $aulaId,
            'groupId'=> $groupId
        ]);

        return $this->render('asistencia/index.html.twig', [
            'alumnosAula' => $alumnosAula,
            'alumnos' => $alumnos,
            'asistencias' => $asistencias
        ]);
    }
}
