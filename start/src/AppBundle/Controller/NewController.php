<?php

 
// src/AppBundle/Controller/NewController.php
namespace AppBundle\Controller;



use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Product;
use AppBundle\Entity\Category;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;




class NewController extends Controller
{

    /**

     * @Route("/newprod", name="Create Skateboard")

     */
    
 public function createProductAction()
    {
        
         return $this->redirectToRoute('ho');
   

    }

}