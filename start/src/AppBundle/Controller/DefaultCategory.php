<?php

 
// src/AppBundle/Controller/DefaultCategory.php
namespace AppBundle\Controller;



use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Category;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;




class DefaultCategory extends Controller
{

    /**

     * @Route("/categories", name="Skateboard Category")

     */
    
public function createAction()
    {
 

    $category = new Category();
    $category->setName('Skateboard');

    $category->setDescription('Skateboard Category');

    $em = $this->getDoctrine()->getManager();

    // tells Doctrine you want to (eventually) save the Product (no queries yet)
    $em->persist($category);

    // actually executes the queries (i.e. the INSERT query)
    $em->flush();

    return new Response('Saved new product with id '.$category->getId());
}



public function updateAction($productId)
{
    $em = $this->getDoctrine()->getManager();
    $product = $em->getRepository('AppBundle:Product')->find($productId);

    if (!$product) {
        throw $this->createNotFoundException(
            'No product found for id '.$productId
        );
    }

    $product->setName('New product name!');
    $em->flush();

    return $this->redirectToRoute('homepage');
}
   }

