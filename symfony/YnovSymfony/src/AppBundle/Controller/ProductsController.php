<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProductsController extends Controller
{
    /**
     * @Route("/display")
     */
    public function DisplayAction()
    {
        return $this->render('AppBundle:Products:display.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/create")
     */
    public function CreateAction()
    {
        return $this->render('AppBundle:Products:create.html.twig', array(
            // ...
        ));
    }

}
