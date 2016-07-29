<?php

 
// src/AppBundle/Controller/FinalController.php
namespace AppBundle\Controller;



use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;




class FinalController extends Controller{

    /**

     * @Route("/nepro", name="N Progory")

     */
    
public function numberAction()
    {
 

       $number = rand(0, 100);

        return $this->redirectToRoute('ho');
   }


}