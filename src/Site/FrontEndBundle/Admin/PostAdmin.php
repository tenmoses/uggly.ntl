<?php

namespace Site\FrontEndBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;


class PostAdmin extends BaseAdmin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('title', null, array('label' => 'Заголовок'))
            ->add('preview', null, array('label' => 'Превью'))
            ->add('body', null, array('label' => 'Текст'))
            ->add('created', null, array('label' => 'Дата'))
            ->add('tags', null, array('label' => 'теги'))
            ->add('categories', null, array('label'=>'Категория'))
            ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
            ->add('preview')
            ->add('body')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
            ->add('preview')
            ->add('body')
            ->add('created')
        ;
    }
    
    /**
     * @param \Site\FrontEndBundle\Entity\Post $object
     */
    public function prePersist($object)
    {
        $object->setSlug($object->slugger($object->getTitle()));
    }
}
