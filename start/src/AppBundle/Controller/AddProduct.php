<?php

 
// src/AppBundle/Controller/AddProduct.php
namespace AppBundle\Controller;




use AppBundle\Form\Type\ProductType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Product;
use AppBundle\Entity\Category;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AddProduct extends Controller 
{

    /**

     * @Route("/product/add", name="Add Product")

     */
    
public function numberAction(Request $request)
    {
 

       $product = new Product();

       
        
        $form = $this->createForm(ProductType::class, $product);

        $form->handleRequest($request);

        if ($form->isValid()) {
            
            $em = $this->getDoctrine()->getManager();
            
            $nextAction2;
            if($form->get('save')->isClicked()){
            $nextAction2='home'; 
            $em->persist($product);
            $em->flush();
            return $this->redirectToRoute($nextAction2);
           }
           
        }

        return $this->render('default/newPR.html.twig', array(
            'form' => $form->createView(),
        ));

       
   }

}
