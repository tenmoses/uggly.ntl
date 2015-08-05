<?php

namespace Site\FrontEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FormController extends Controller
{
    public function getTagsAndCategoriesAction()
    {
        $em         = $this->get('doctrine.orm.entity_manager');
        $categories = $em->getRepository('SiteFrontEndBundle:Categories')
                    ->findAll();
        
        $tags = $em->getRepository('SiteFrontEndBundle:Tags')
                    ->findAll();
        
        return $this->render('SiteFrontEndBundle::Form.html.twig', 
                             array('categories' => $categories, 'tags' => $tags));
        
    }
    
    public function getForm()
    {
        $request = $this->get('request');
        $request->get('data');
        $post = $this->get('form_manager')
                     ->createPostAction($request);
        
        return $this->redirectToRoute('/page');
        
    }
}

