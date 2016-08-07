<?php

 
// src/AppBundle/Controller/ProductUpdate.php
namespace AppBundle\Controller;




use AppBundle\Form\Type\FinalPType;
use AppBundle\Form\Type\CategoryType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Product;
use AppBundle\Entity\Category;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductUpdate extends Controller 
{

    /**

     * @Route("/product/update", name="Product Update")

     */
    
public function numberAction(Request $request)
    {
 

      $product1 = $this->getDoctrine()
        ->getRepository('AppBundle:Product')
        ->findAll();
       
        
        $form = $this->createForm(FinalPType::class, $product1);

        $form->handleRequest($request);
        
        if ($form->isValid()) {
            
            $em = $this->getDoctrine()->getManager();
            
            
            
            $nextAction2;
            if($form->get('updateP')->isClicked()){
            $form->get('products')->getData()->setName($form->get('updateName')->getData());
            $form->get('products')->getData()->setDescription($form->get('updateDescription')->getData());
            $form->get('products')->getData()->setPrice($form->get('updatePrice')->getData());
            $em->flush();
            $nextAction2='home'; 
            return $this->redirectToRoute($nextAction2);
            }
            
           
            
           
        }

        return $this->render('default/npu.html.twig', array(
            'form' => $form->createView(),
        ));

       
   }

}
