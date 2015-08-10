<?php

namespace Site\FrontEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
 
class AdminController extends Controller
{
    public function indexAction()
    {
        return $this->render('BlogBundle:Admin:index.html.twig');
    }
}
