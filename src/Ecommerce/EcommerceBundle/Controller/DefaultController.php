<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name, $firstname)
    {
        $toto  = 'Anthony';
        return $this->render('EcommerceBundle:Default:index.html.twig', array('name' => $name, 'firstname' => $firstname, 'toto' => $toto));
    }
}
