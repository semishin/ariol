<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @version SVN: $Id:$
 * @author o.zgolich
 */

class Form_Admin_Service extends CM_Form_Abstract
{
    protected function init()
    {
        $this->add_plugin(new CM_Form_Plugin_ORM());

        $this->set_field('name', new CM_Field_String(), 2);
        $this->set_field('h1', new CM_Field_String(), 3);
        $this->set_field('position', new CM_Field_Int(), 4);
        $this->set_field('url', new CM_Field_String(), 5);
        $this->set_field('main_image', new CM_Field_File(), 6);
        $this->set_field('more_images', new CM_Field_Multifile(),7);
        $this->set_field('section_id', new CM_Field_Select_ORM(ORM::factory('Service_Section')), 8);
       // $this->set_field('create_date', new CM_Field_Date(), 6);
        $this->set_field('active', new CM_Field_Boolean(), 9);
        $this->set_field('content', new CM_Field_HTML(), 12);
        $this->set_field('short_content', new CM_Field_HTML(), 11);
        $this->set_field('s_title', new CM_Field_String(), 13);
        $this->set_field('s_description', new CM_Field_Text(), 14);
        $this->set_field('s_keywords', new CM_Field_Text(), 15);

        $fieldgroups = array(
            'Основные данные' => array('name','h1','url', 'position', 'main_image','more_images', 'content', 'short_content', 'active', 'section_id'),
            'Мета данные' => array('s_title', 's_description', 's_keywords'),
        );

        $this->add_plugin(new CM_Form_Plugin_Fieldgroups($fieldgroups));
    }
}