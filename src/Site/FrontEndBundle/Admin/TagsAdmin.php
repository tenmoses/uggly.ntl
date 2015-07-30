<?php

namespace Site\FrontEndBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class TagsAdmin extends BaseAdmin
{
//    protected function configureRoutes(RouteCollection $collection)
//    {
//        $collection->remove('create');
//    }
    
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', null, array('label' => 'Имя'))
            ->add('created', null, array('label' => 'Дата'))
            ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
        ;
    }
    
    /*
     * @param Site\FrontEndBundle\Entity\Tags $object
     */
    
    public function prePersist($object)
    {
        $object->setSlug($object->slugger($object->getName()));
    }
}