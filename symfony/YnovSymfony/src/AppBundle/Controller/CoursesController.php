<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CoursesController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    // /list
    public function listAction(Request $request, $page)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:courses:index.html.twig', ['page' => $page]);
    }


    public function detailsAction(Request $request, $number)
    {
        if($number > 100)
        {
            throw $this->createNotFoundException("Course's ID can't be greater than 100.");
        }

        if($number == 42)
        {
            throw $this->createAccessDeniedException("Can't access to course 42");
        }
        // replace this example code with whatever you need
        return $this->render('AppBundle:courses:details.html.twig', [
            'number' => $number
        ]);
    }
}
