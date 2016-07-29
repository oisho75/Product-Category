<?php

 
// src/AppBundle/Controller/DeleteCat.php
namespace AppBundle\Controller;



use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Category;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;




class DeleteCat extends Controller
{

    /**

     * @Route("/delcat/{id}", name="delcat homepage")

     */
    

public function delAction($id)
{
   
    $em = $this->getDoctrine()->getEntityManager();
    $category = $em->getRepository('AppBundle:Category')->find($id);

   if (!$category) {
        throw $this->createNotFoundException(
            'No category found for id '.$id
        );
    }
    $em->remove($category);
    $em->flush();

    return new Response('deleted Category ');
}
}