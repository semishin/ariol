<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @version SVN: $Id:$
 * @author o.zgolich
 */

class Form_Admin_Event extends CM_Form_Abstract
{
    protected function init()
    {
        $this->add_plugin(new CM_Form_Plugin_ORM());

        $this->set_field('name', new CM_Field_String(), 2);
        $this->set_field('section_id', new CM_Field_Select_ORM(ORM::factory('Event_Section')), 4);
        $this->set_field('price', new CM_Field_String(), 6);
//        $this->set_field('date', new CM_Field_Date(), 8);
        $this->set_field('link', new CM_Field_String(), 10);
        $this->set_field('image', new CM_Field_File(), 12);
        $this->set_field('position', new CM_Field_Int(), 14);
        $this->set_field('url', new CM_Field_String(), 16);
        $this->set_field('active', new CM_Field_Boolean(), 18);
        $this->set_field('content', new CM_Field_HTML(), 20);
        $this->set_field('s_title', new CM_Field_String(), 22);
        $this->set_field('s_description', new CM_Field_Text(), 24);
        $this->set_field('s_keywords', new CM_Field_Text(), 26);

        $fieldgroups = array(
            'Основные данные' => array('name','url', 'position', 'image', 'content', 'active', 'section_id', 'date', 'link', 'price'),
            'Мета данные' => array('s_title', 's_description', 's_keywords'),
        );

        $this->add_plugin(new CM_Form_Plugin_Fieldgroups($fieldgroups));
    }
}