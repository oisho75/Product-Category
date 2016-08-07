<?php

 
// src/AppBundle/Controller/Home.php
namespace AppBundle\Controller;



use AppBundle\Form\Type\FinalType;
use AppBundle\Form\Type\CategoryType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Product;
use AppBundle\Entity\Category;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Home extends Controller 
{

    /**

     * @Route("/home", name="Home")

     */
    
public function numberAction(Request $request)
    {
 

       

        $categories = $this->getDoctrine()
        ->getRepository('AppBundle:Category')
        ->findAll();
   
        $form = $this->createForm(FinalType::class, $categories);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $nextAction; 
            if( $form->get('updateC')->isClicked()){
               $nextAction = 'Category Update';}

            if( $form->get('updateP')->isClicked()){
               $nextAction = 'Update Product';}
            if( $form->get('addC')->isClicked()){
               $nextAction = 'Add Category';
               }
            if( $form->get('addP')->isClicked()){
               $nextAction = 'Add Product';
                }
            if( $form->get('deleteC')->isClicked()){
               $nextAction = 'Category Delete';}
            if( $form->get('deleteP')->isClicked()){
               $nextAction = 'Product Delete';}
            return $this->redirectToRoute($nextAction);

            
           
        

         }
     echo ($this->renderView('default/new2.html.twig', array(
            'categories' => $categories)));
      return $this->render('default/new3.html.twig', array(
            'form' => $form->createView(),
        ));
     
        
   }

}