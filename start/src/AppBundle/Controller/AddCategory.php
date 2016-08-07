<?php

 
// src/AppBundle/Controller/AddCategory.php
namespace AppBundle\Controller;




use AppBundle\Form\Type\CategoryType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Product;
use AppBundle\Entity\Category;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AddCategory extends Controller 
{

    /**

     * @Route("/category/add", name="Add Category")

     */
    
public function numberAction(Request $request)
    {
 

       $category = new Category();

       
        
        $form = $this->createForm(CategoryType::class, $category);

        $form->handleRequest($request);

        if ($form->isValid()) {
            
            $em = $this->getDoctrine()->getManager();
            
           
            $nextAction2;
            if($form->get('save')->isClicked()){
            $nextAction2='home'; 
            $em->persist($category);
            $em->flush();
            return $this->redirectToRoute($nextAction2);
           }
        }

        return $this->render('default/new.html.twig', array(
            'form' => $form->createView(),
        ));

       
   }

}
