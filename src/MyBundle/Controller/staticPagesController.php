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
        return $this->render('MyBundle:Default:index.html.twig', array('title'=>"Home Page"
            // ...
        ));
    }

    /**
     * @Route("/aboutus")
     */
    public function aboutusAction()
    {
        return $this->render('MyBundle:staticPages:about_us.html.twig', array('title'=>"About Us Page"
            // ...
        ));
    }

    /**
     * @Route("/career")
     */
    public function careerAction()
    {
        return $this->render('MyBundle:staticPages:career.html.twig', array('title'=>"Career Page"
            // ...
        ));
    }

    /**
     * @Route("/clients")
     */
    public function clientsAction()
    {
        return $this->render('MyBundle:staticPages:clients.html.twig', array('title'=>"Clients Page"
            // ...
        ));
    }

    /**
     * @Route("/terms")
     */
    public function termsAction()
    {
        return $this->render('MyBundle:staticPages:toc.html.twig', array('title'=>"T&C Page"
            // ...
        ));
    }

}
