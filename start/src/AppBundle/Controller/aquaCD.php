<?php

 
// src/AppBundle/Controller/aquaCD.php
namespace AppBundle\Controller;




use AppBundle\Form\Type\DelCType;
use AppBundle\Form\Type\CategoryType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Product;
use AppBundle\Entity\Category;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class aquaCD extends Controller 
{

    /**

     * @Route("/m", name="deleteC")

     */
    
public function numberAction(Request $request)
    {
 

      $category1 = $this->getDoctrine()
        ->getRepository('AppBundle:Category')
        ->findAll();
       
        
        $form = $this->createForm(DelCType::class, $category1);

        $form->handleRequest($request);
        
        if ($form->isValid()) {
            
            $em = $this->getDoctrine()->getManager();
            
            
            
            $nextAction2;
            if($form->get('deleteC')->isClicked()){
            foreach($form->get('categories')->getData()->getProducts() as $product) {
                   $form->get('categories')->getData()->removeProduct($product);
                   $em->remove($product);
            }

           
            $em->remove($form->get('categories')->getData());
            $em->flush();
            $nextAction2='ho'; 
            return $this->redirectToRoute($nextAction2);
            }
            
           
            
           
        }

        return $this->render('default/ncu.html.twig', array(
            'form' => $form->createView(),
        ));

       
   }

}
