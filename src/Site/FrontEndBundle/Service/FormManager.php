<?php

namespace Site\FrontEndBundle\Service;

use Site\FrontEndBundle\Entity\Post;

class FormManager
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
    
    public function createPostAction($data)
    {
       $post = new Post;
       $post->setTitle($data['title']);
       $post->setPreview($data['preview']);
       $post->setBody($data['body']);
       $post->setCreated(new \DateTime(''));
       
       $em       = $this->container->get('doctrine.orm.entity_manager');
       $category = $em->getRepository('SiteFrontEndBundle:Categories')
                      ->find($data['category']);
       $post->setCategories($category);
       
       $tags = $em->getRepository('SiteFrontEndBundle:Tags')
                  ->find($data['tags']);
       $post->addTags($tags);
       
       $em->persist($post);
//       $post->($post->setSlug($post->slugger($post->getTitle());
       $em->flush();
       
    }
}

