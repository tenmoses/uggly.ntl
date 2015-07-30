<?php

namespace Site\FrontEndBundle\Service;

class CategoriesManager
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
    
    public function getPostsByCategory($slug)
    {
        $posts = $this->getEm()
                      ->getRepository('SiteFrontEndBundle:Categories')
                      ->findOneBy(array('slug' => $slug))
                      ->getPost();
        return $posts;
    }
}
