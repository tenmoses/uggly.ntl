<?php

namespace Site\FrontEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('SiteFrontEndBundle::Main.html.twig');
    }
    
    public function sideBarAction()
    {
        $posts = $this->get('posts_manager')
                      ->getPostsForSideBar();
        return $this->render('SiteFrontEndBundle::SideBar.html.twig', array('posts' => $posts));
        }
}
