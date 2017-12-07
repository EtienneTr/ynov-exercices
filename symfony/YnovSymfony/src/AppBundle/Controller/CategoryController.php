<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Category;

use AppBundle\Form\CategoryType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class CategoryController extends Controller
{

    /**
     * @Route("/category/create")
     * @Method({"GET", "POST"})
     */
    public function newCategoryAction(Request $request, FormFactoryInterface $formFactory)
    {
        $form = $formFactory->create(CategoryType::class, new Category());
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $category = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($category);
            $entityManager->flush();
        }

        return $this->render('AppBundle:Category:create.html.twig', array(
            "form" => $form->createView()
        ));
    }

}
