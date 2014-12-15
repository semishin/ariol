<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @version SVN: $Id:$
 * @author o.zgolich
 */

class Form_Admin_Library extends CM_Form_Abstract
{
    protected function init()
    {
        $this->add_plugin(new CM_Form_Plugin_ORM());

        $this->set_field('name', new CM_Field_String(), 1);
        $this->set_field('category_id', new CM_Field_Select_ORM(ORM::factory('Library_Category')), 2);
        $this->set_field('file', new CM_Field_File(), 3);
        $this->set_field('link', new CM_Field_String(), 4);
        $this->set_field('url', new CM_Field_String(), 5);
        $this->set_field('content', new CM_Field_HTML(), 12);
        $this->set_field('s_title', new CM_Field_String(), 13);
        $this->set_field('s_description', new CM_Field_Text(), 14);
        $this->set_field('s_keywords', new CM_Field_Text(), 15);

        $fieldgroups = array(
            'Основные данные' => array('name', 'url', 'category_id', 'content', 'file', 'link'),
            'Мета данные' => array('s_title', 's_description', 's_keywords'),
        );

        $this->add_plugin(new CM_Form_Plugin_Fieldgroups($fieldgroups));
    }
}