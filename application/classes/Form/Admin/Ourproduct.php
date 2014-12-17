<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @version SVN: $Id:$
 * @author o.zgolich
 */

class Form_Admin_Ourproduct extends CM_Form_Abstract
{
    protected function init()
    {
        $this->add_plugin(new CM_Form_Plugin_ORM());

        $categories = ORM::factory('Ourproduct_Category')->order_by('name', 'ASC')->find_all();

        $category_list = array();
        foreach ($categories as $item) {
            $category_list[$item->id] = $item->name;
        }

        $this->set_field('name', new CM_Field_String(), 0);
        $this->set_field('categories', new CM_Field_Manytomany($category_list, $this->get_model()), 2);
        $this->set_field('position', new CM_Field_Int(), 4);
        $this->set_field('url', new CM_Field_String(), 6);
        $this->set_field('link', new CM_Field_String(), 8);
        $this->set_field('active', new CM_Field_Boolean(), 10);
        $this->set_field('on_main', new CM_Field_Boolean(), 12);
        $this->set_field('image', new CM_Field_File(), 14);
        $this->set_field('more_image', new CM_Field_Multifile(), 16);
        $this->set_field('short_content', new CM_Field_Text(), 18);
        $this->set_field('content', new CM_Field_HTML(), 20);
        $this->set_field('s_title', new CM_Field_String(), 22);
        $this->set_field('s_description', new CM_Field_Text(), 24);
        $this->set_field('s_keywords', new CM_Field_Text(), 26);



        $fieldgroups = array(
            'Основные данные' => array('name', 'categories', 'position', 'url', 'link', 'active', 'on_main', 'image', 'more_image', 'short_content', 'content'),
            'Мета данные' => array('s_title', 's_description', 's_keywords'),
        );

        $this->add_plugin(new CM_Form_Plugin_Fieldgroups($fieldgroups));
    }
}