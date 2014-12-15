<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @version SVN: $Id:$
 * @author o.zgolich
 */

class Form_Admin_Slides extends CM_Form_Abstract
{
    protected function init()
    {
        $this->add_plugin(new CM_Form_Plugin_ORM());

        $this->set_field('name', new CM_Field_String(), 0);
        $this->set_field('position', new CM_Field_Int(), 2);
        $this->set_field('link', new CM_Field_String(), 2);
        $this->set_field('active', new CM_Field_Boolean(), 3);
        $this->set_field('main_image', new CM_Field_File(), 4);
        $this->set_field('content', new CM_Field_HTML(), 12);


        $fieldgroups = array(
            'Основные данные' => array('name', 'link', 'position', 'content', 'main_image', 'active'),
        );

        $this->add_plugin(new CM_Form_Plugin_Fieldgroups($fieldgroups));
    }
}