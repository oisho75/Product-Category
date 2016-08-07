<?php

 
// src/AppBundle/Controller/CategoryUpdate.php
namespace AppBundle\Controller;




use AppBundle\Form\Type\FinalCType;
use AppBundle\Form\Type\CategoryType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Product;
use AppBundle\Entity\Category;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoryUpdate extends Controller 
{

    /**

     * @Route("/category/update", name="Category Update")

     */
    
public function numberAction(Request $request)
    {
 

      $category1 = $this->getDoctrine()
        ->getRepository('AppBundle:Category')
        ->findAll();
       
        
        $form = $this->createForm(FinalCType::class, $category1);

        $form->handleRequest($request);
        
        if ($form->isValid()) {
            
            $em = $this->getDoctrine()->getManager();
            
            
            
            $nextAction2;
            if($form->get('updateC')->isClicked()){
            $form->get('categories')->getData()->setName($form->get('updateName')->getData());
            $form->get('categories')->getData()->setDescription($form->get('updateDescription')->getData());
            $em->flush();
            $nextAction2='home'; 
            return $this->redirectToRoute($nextAction2);
            }
            
           
            
           
        }

        return $this->render('default/ncu.html.twig', array(
            'form' => $form->createView(),
        ));

       
   }

}
