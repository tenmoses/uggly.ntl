<?php

namespace Site\FrontEndBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class BaseAdmin extends Admin
{
//    public function prePersist($object)
//    {
//             
//    }
    
    public function preUpdate($object) 
    {
       
    }
    
//    public function slugger($object)
//    {
//        $slug=array('А'=>'a','Б'=>'b','В'=>'v','Г'=>'g',
//			'Д'=>'d','Е'=>'e','Ё'=>'yo','Ж'=>'j','З'=>'z',
//			'И'=>'i', 'Й'=>'j', 'К'=>'k','Л'=>'l','М'=>'m','Н'=>'n',
//			'О'=>'o','П'=>'p','Р'=>'r','С'=>'s','Т'=>'t',
//			'У'=>'u','Ф'=>'f','Х'=>'h','Ц'=>'c','Ч'=>'ch',
//			'Ш'=>'ch','Щ'=>'sch','Э'=>'e','Ю'=>'yu','Я'=>'ya',
//			'а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d',
//			'е'=>'e','ё'=>'yo','ж'=>'j','з'=>'z','и'=>'i', 'й'=>'j',
//			'к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o',
//			'п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u',
//			'ф'=>'f','х'=>'x','ц'=>'c','ч'=>'ch','ш'=>'sh',
//			'щ'=>'sch','ъ'=>'y','ы'=>'y','ь'=>' ','э'=>'e',
//			'ю'=>'yu','я'=>'ya', ' '=> '_', "."=> "", '/'=> '_',
//                        ','=>'_', '-'=>'_', '('=>'', ')'=>'', '['=>'', 
//                        ']'=>'', '='=>'_', '+'=>'_', '*'=>'', '?'=>'',
//                        "\""=>"", "'"=>"", "&"=>"", "%"=>"", "#"=>"",
//                        "@"=>"", "!"=>"", ";"=>"", "№"=>"", "^"=>"", ":"=>"",
//                        "~"=>"", "\\"=>"");
//        return strtr($object,$slug); 
//    }
}
