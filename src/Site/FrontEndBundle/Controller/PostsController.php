<?php

namespace Site\FrontEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PostsController extends Controller
{
    public function indexAction($page)
    {
        $em    = $this->get('doctrine.orm.entity_manager');
        $posts = $em->getRepository('SiteFrontEndBundle:Post')
                    ->findAll();
        
        $paginator     = $this->get('knp_paginator');
        $posts_on_page = $paginator->paginate($posts,$page,5);
        return $this->render('SiteFrontEndBundle::Main.html.twig', 
                            array('posts'=>$posts_on_page));
    }
    
    public function showPostBySlugAction($slug)
    {
        $em   = $this->get('doctrine.orm.entity_manager');
        $post = $em->getRepository('SiteFrontEndBundle:Post')
                   ->findOneBy(array('slug'=>$slug));
        return $this->render('SiteFrontEndBundle::Post.html.twig' ,
                             array('post'=>$post));
    }
    
    public function showPostsByTagAction($slug)
    {
        $posts = $this->get('tags_manager')
                      ->getPostsByTag($slug);
        return $this->render('SiteFrontEndBundle::PostsByTag.html.twig', array('posts' => $posts));
    }
    
    public function showPostsByCategoryAction($slug, $page)
    {
        $posts = $this->get('categories_manager')
                      ->getPostsByCategory($slug);
        
        $paginator     = $this->get('knp_paginator');
        $posts_on_page = $paginator->paginate($posts, $page, 5);
        return $this->render('SiteFrontEndBundle::Main.html.twig', array('posts' => $posts_on_page));
    }
}

