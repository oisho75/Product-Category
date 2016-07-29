<?php

 
// src/AppBundle/Controller/Display.php
namespace AppBundle\Controller;



use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Product;
use AppBundle\Entity\Category;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;




class NewDisplay extends Controller
{

    /**

     * @Route("/newprod/{productId}", name="New Product/Category")

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
    $categoryName = $product->getCategory()->getName();

    // ... do something, like pass the $product object into a template
    return new Response(' Category  '.$categoryName.' Product '.$product->getName());
}
}