<?php

 
// src/AppBundle/Controller/UpdateProduct.php
namespace AppBundle\Controller;



use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Product;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;




class UpdateProduct extends Controller
{

    /**

     * @Route("/produpdate/{id}", name="Update product")

     */
    
public function updateAction($id)
{
    $em = $this->getDoctrine()->getEntityManager();
    $product = $em->getRepository('AppBundle:Product')->find($id);

    if (!$product) {
        throw $this->createNotFoundException('No product found for id '.$id);
    }

    $product->setName('New product name!');
    $em->flush();

    return new Response(' Updated Product ');
}

}