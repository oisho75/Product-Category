<?php

 
// src/AppBundle/Controller/Display.php
namespace AppBundle\Controller;



use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Product;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;




class Display extends Controller
{

    /**

     * @Route("/skate/{productId}", name="Sector 9 homepage")

     */
    

public function showAction($productId)
{
   
    $product = $this->getDoctrine()
        ->getRepository('AppBundle:Product')
        ->find($productId);

    if (!$product) {
        throw $this->createNotFoundException(
            'No product found for id '.$productId
        );
    }

    // ... do something, like pass the $product object into a template
    return new Response(' product  '.$product->getName());
}
}