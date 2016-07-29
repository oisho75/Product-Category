<?php

 
// src/AppBundle/Controller/aquaC.php
namespace AppBundle\Controller;




use AppBundle\Form\Type\CategoryType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Product;
use AppBundle\Entity\Category;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class aquaC extends Controller 
{

    /**

     * @Route("/a", name="createC")

     */
    
public function numberAction(Request $request)
    {
 

       $category = new Category();

       
        
        $form = $this->createForm(CategoryType::class, $category);

        $form->handleRequest($request);

        if ($form->isValid()) {
            
            $em = $this->getDoctrine()->getManager();
            
            $em->persist($category);
            $em->flush();
            $nextAction2 = $form->get('save')->isClicked()
            ? 'ho' 
            : 'homepage';
            return $this->redirectToRoute($nextAction2);
           
        }

        return $this->render('default/new.html.twig', array(
            'form' => $form->createView(),
        ));

       
   }

}
