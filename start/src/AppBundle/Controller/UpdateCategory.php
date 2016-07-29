<?php

 
// src/AppBundle/Controller/UpdateCategory.php
namespace AppBundle\Controller;



use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Category;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;




class UpdateCategory extends Controller
{

    /**

     * @Route("/catupdate/{id}", name="Update category")

     */
    
public function updateAction($id)
{
    $em = $this->getDoctrine()->getEntityManager();
    $category = $em->getRepository('AppBundle:Category')->find($id);

    if (!$category) {
        throw $this->createNotFoundException('No category found for id '.$id);
    }

    $category->setName('New category name!');
    $em->flush();

    return new Response(' Updated Category ');
}

}