<?php

 
// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;



use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class LuckyController 
{

    /**

     * @Route("/", name="homepage")

     */
    
public function numberAction()
    {
 

       $number = rand(0, 100);

      return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
   }

}
