<?php

namespace MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class staticPagesController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('MyBundle:Default:index.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/aboutUs")
     */
    public function aboutUsAction()
    {
        return $this->render('MyBundle:staticPages:about_us.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/career")
     */
    public function careerAction()
    {
        return $this->render('MyBundle:staticPages:career.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/clients")
     */
    public function clientsAction()
    {
        return $this->render('MyBundle:staticPages:clients.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/toc")
     */
    public function tocAction()
    {
        return $this->render('MyBundle:staticPages:toc.html.twig', array(
            // ...
        ));
    }

}
