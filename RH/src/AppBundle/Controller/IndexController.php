<?php

namespace AppBundle\Controller;

use AppBundle\Entity\salarie;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends Controller
{
  
     /**
     * @Route("/" ,name="indexPage")
     */ 
    public function indexAction(Request $request)
    {
        return $this->render('index.html.twig');
    }

    /**
     * @Route("/1")
     */
    public function marketAction(Request $request)
    {
        $sess = $request->getSession();
        $nom = $sess->get("nom");
         return $this->render('market.html.twig',array('nom' => $nom ));
    }
    /**
     * @Route("/2")
     */
    public function Module1Action(Request $request)
    {
        $sess = $request->getSession();
        $nom = $sess->get("nom");
         return $this->render('salarie/module1.html.twig',array('nom' => $nom ));
    }
    /**
     * @Route("/3")
     */
    public function Module2Action(Request $request)
    {
        $sess = $request->getSession();
        $nom = $sess->get("nom");
         return $this->render('salarie/module2.html.twig',array('nom' => $nom ));
    }

    /**
     * @Route("/4")
     */
    public function Module3Action(Request $request)
    {
        $sess = $request->getSession();
        $nom = $sess->get("nom");
         return $this->render('salarie/module3.html.twig',array('nom' => $nom ));
    }
    /**
     * @Route("/5")
     */
    public function Module4Action(Request $request)
    {
        $sess = $request->getSession();
        $nom = $sess->get("nom");
         return $this->render('salarie/module4.html.twig',array('nom' => $nom ));
    }
    /**
     * @Route("/6")
     */
    public function Module5Action(Request $request)
    {
        $sess = $request->getSession();
        $nom = $sess->get("nom");
         return $this->render('salarie/module5.html.twig',array('nom' => $nom ));
    } 
    /**
     * @Route("/7")
     */
    public function Module6Action(Request $request)
    {
        $sess = $request->getSession();
        $nom = $sess->get("nom");
         return $this->render('salarie/module6.html.twig',array('nom' => $nom ));
    } 
    /**
     * @Route("/login")
     */
    public function loginAction()
    {
         return $this->redirectToRoute('login');
    } 
    /**
     * @Route("/help")
     */
    public function helpAction()
    {
         return $this->render('help.html.twig');
    }
    /**
     * @Route("/contact")
     */
    public function contactAction()
    {
        
        return $this->render('contact.html.twig');
    } 
    

    
    
}



