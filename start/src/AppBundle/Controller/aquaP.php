<?php

 
// src/AppBundle/Controller/aquaP.php
namespace AppBundle\Controller;




use AppBundle\Form\Type\ProductType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Product;
use AppBundle\Entity\Category;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class aquaP extends Controller 
{

    /**

     * @Route("/b", name="createP")

     */
    
public function numberAction(Request $request)
    {
 

       $product = new Product();

       
        
        $form = $this->createForm(ProductType::class, $product);

        $form->handleRequest($request);

        if ($form->isValid()) {
            
            $em = $this->getDoctrine()->getManager();
            
            $em->persist($product);
            $em->flush();
            $nextAction2 = $form->get('save')->isClicked()
            ? 'ho' 
            : 'homepage';
            return $this->redirectToRoute($nextAction2);
           
        }

        return $this->render('default/newPR.html.twig', array(
            'form' => $form->createView(),
        ));

       
   }

}
