<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use AppBundle\AppBundle;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class StudentsController extends Controller
{
    /**
     * @Route("/students/create/")
     * @Method({"POST"})
     */
    public function createStudentsAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:students:index.html.twig');
    }

    /**
     * @Route("/students/{number}")
     * @Method({"GET","HEAD"})
     */
    public function getStudentsAction(Request $request, $number)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:students:details.html.twig', [
            'number' => $number
        ]);
    }
}
