<?php

namespace AppBundle\Controller;

use AppBundle\Entity\salarie;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{
  
     
    /**
     * @Route("/loginSalarie", name="login")
     */
    public function LoginShow(Request $request){
        $nom = $request->get("username");
        $pass = $request->get("pass");

        $userlist = $this->getDoctrine()->getRepository('AppBundle:salarie')->findOneBy(array('nom' => $nom,'prenom' => $pass));
        if (!$userlist) { 
            return $this->render('login.html.twig');
        }
        else{
          $sess = $request->getSession();
          $sess->set('nom', $userlist->getNom());
          $sess->set('id',$userlist->getId());
          return $this->redirectToRoute('home',array('nom' => $nom));
        }
    }
    
    
    /**
     * @Route("/{nom}", name="home")
     */
    public function viewHome($nom, Request $request) {
     return $this->render('salarie/home.html.twig',array('nom' => $nom));
    }  

    /**
     * @Route("/start")
     */
    public function startHome(Request $request) {
      $sess = $request->getSession();
      $nom1 = $sess->get("nom");
      return $this->render('salarie/home.html.twig',array('nom' => $nom1));
     
    }  
    

}



