<?php

 
// src/AppBundle/Controller/DeleteProd.php
namespace AppBundle\Controller;



use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Product;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;




class DeleteProd extends Controller
{

    /**

     * @Route("/delprod/{id}", name="del homepage")

     */
    

public function delAction($id)
{
   
    $em = $this->getDoctrine()->getEntityManager();
    $product = $em->getRepository('AppBundle:Product')->find($id);

   if (!$product) {
        throw $this->createNotFoundException(
            'No product found for id '.$id
        );
    }
    $em->remove($product);
    $em->flush();

    return new Response('deleted Product ');
}
}