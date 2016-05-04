<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends Controller
{
    /**
     * @Route("/", name="indexpage")
     */
    public function indexAction(Request $request)
    {

        // replace this example code with whatever you need
        return $this->render('index.html.twig');
    }

    /**
     * @Route("/{id}")
     */
    public function showAction($id)
    {
    	if($id==1){
        	// replace this example code with whatever you need
        	return $this->render('market.html.twig');
        }
        if($id==2){
        	// replace this example code with whatever you need
        	return $this->render('module1.html.twig');
        }
        if($id==3){
        	// replace this example code with whatever you need
        	return $this->render('module2.html.twig');
        }
        if($id==4){
        	// replace this example code with whatever you need
        	return $this->render('module3.html.twig');
        }
        if($id==5){
        	// replace this example code with whatever you need
        	return $this->render('module4.html.twig');
        }
        if($id==6){
        	// replace this example code with whatever you need
        	return $this->render('module5.html.twig');
        }
        if($id==7){
        	// replace this example code with whatever you need
        	return $this->render('module6.html.twig');
        }
       	if($id=="login"){
        	return $this->render('login.html.twig');
        }
        if($id=="help"){
        	// replace this example code with whatever you need
        	return $this->render('help.html.twig');
        }
        if($id=="settings"){
        	// replace this example code with whatever you need
        	return $this->render('settings.html.twig');
        }
       // if($id="home"){
       //     return $this->redirectToRoute('connexion');
       // }
        if($id=="contact"){
        	 return $this->render('contact.html.twig');
        }
        else{
        	 return $this->render('index.html.twig');	
        }
    	
    }

     
}


