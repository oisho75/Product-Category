<?php

 
// src/AppBundle/Controller/DefaultController.php
namespace AppBundle\Controller;



use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Product;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;




class DefaultController extends Controller
{

    /**

     * @Route("/skate", name="Create Skateboard")

     */
    
public function createAction()
    {
 

    $product = new Product();
    $product->setName('Sector 9 Longboard');
    $product->setPrice(149.99);
    $product->setDescription('Stlyish with speed and control!');

    $em = $this->getDoctrine()->getManager();

    // tells Doctrine you want to (eventually) save the Product (no queries yet)
    $em->persist($product);

    // actually executes the queries (i.e. the INSERT query)
    $em->flush();

    return new Response('Saved new product with id '.$product->getId());
}

}