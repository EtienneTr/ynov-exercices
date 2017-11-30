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
    public function listAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:courses:index.html.twig');
    }


    public function detailsAction(Request $request, $number)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:courses:details.html.twig', [
            'number' => $number
        ]);
    }
}
