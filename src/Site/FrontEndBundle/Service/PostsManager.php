<?php

namespace Site\FrontEndBundle\Service;

class PostsManager
{
    protected $container;
    
    function __construct($container) 
    {
        $this->container = $container;
    }
    
    private function getEm()
    {
       return $this->container->get('doctrine.orm.entity_manager'); 
    }
    
    /*
     * get Posts for sidebar
     */
    
    public function getPostsForSideBar()
    {
        $posts = $this->getEm()
                      ->getRepository('SiteFrontEndBundle:Posts')
                      ->getNumberOfPosts();
        return $posts;
    }
    
    
}

