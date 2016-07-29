<?php

 
// src/AppBundle/Controller/Display1.php
namespace AppBundle\Controller;



use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Category;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;




class Display1 extends Controller
{

    /**

     * @Route("/category/{categoryId}", name="Skateboard homepage")

     */
    

public function showAction($categoryId)
{
   
    $category = $this->getDoctrine()
        ->getRepository('AppBundle:Category')
        ->find($categoryId);

    if (!$category) {
        throw $this->createNotFoundException(
            'No category found for id '.$categoryId
        );
    }

    // ... do something, like pass the $product object into a template
    return new Response(' category  '.$category->getName());
}
}