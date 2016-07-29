<?php

 
// src/AppBundle/Controller/aquaPD.php
namespace AppBundle\Controller;




use AppBundle\Form\Type\DelPType;
use AppBundle\Form\Type\CategoryType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Product;
use AppBundle\Entity\Category;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class aquaPD extends Controller 
{

    /**

     * @Route("/n", name="deleteP")

     */
    
public function numberAction(Request $request)
    {
 

      $product1 = $this->getDoctrine()
        ->getRepository('AppBundle:Product')
        ->findAll();
       
        
        $form = $this->createForm(DelPType::class, $product1);

        $form->handleRequest($request);
        
        if ($form->isValid()) {
            
            $em = $this->getDoctrine()->getManager();
            
            
            
            $nextAction2;
            if($form->get('deleteP')->isClicked()){
            $em->remove($form->get('products')->getData());
            
            $em->flush();
            $nextAction2='ho'; 
            return $this->redirectToRoute($nextAction2);
            }
            
           
            
           
        }

        return $this->render('default/npu.html.twig', array(
            'form' => $form->createView(),
        ));

       
   }

}
