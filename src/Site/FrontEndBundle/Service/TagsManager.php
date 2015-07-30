<?php

namespace Site\FrontEndBundle\Service;

class TagsManager
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
     * get Posts by slug(string)
     */
    
    public function getPostsByTag($slug)
    {
        $posts = $this->getEm()
                      ->getRepository('SiteFrontEndBundle:Tags')
                      ->findOneBy(array('slug' => $slug))
                      ->getPost();
        return $posts;
    }
    
    
}

