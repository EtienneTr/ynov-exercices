<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Product;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class ProductsController extends Controller
{
    /**
     * @Route("/products/display")
     */
    public function DisplayAction()
    {
        $repository = $this->get('doctrine')->getRepository('AppBundle:Product');
        $products = $repository->findAll();

        return $this->render('AppBundle:Products:display.html.twig', array(
            'products' => $products
        ));
    }

    /**
     * @Route("/products/create")
     * @Method({"POST", "GET"})
     */
    public function CreateAction(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $data = $request->getContent();

        if (!empty($data))
        {
            $productJSON = json_decode($data)->product;

            $product = new Product();
            $product->setName($productJSON->name);
            $product->setDescription($productJSON->description);
            $product->setPrice(floatval($productJSON->price));
            $product->setImageURI($productJSON->imageURI);

            $entityManager->persist($product);
            $entityManager->flush();

        }





        return $this->render('AppBundle:Products:create.html.twig', array(
            "product" => $productJSON
        ));
    }

}
