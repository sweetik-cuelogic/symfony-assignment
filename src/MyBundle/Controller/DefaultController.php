<?php

namespace MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {
    /**
     * @Route("/", name="index")
     * @Template()
     */
    public function indexAction()    {
        return $this->render('MyBundle:Default:index.html.twig');
    }


}
