<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @version SVN: $Id:$
 * @author o.zgolich
 */

class Form_Admin_Main extends CM_Form_Abstract
{
    protected function init()
    {
        $this->add_plugin(new CM_Form_Plugin_ORM());

        $this->set_field('name', new CM_Field_String(), 1);
        $this->set_field('main_image', new CM_Field_File(), 2);
        $this->set_field('content', new CM_Field_HTML(), 3);
        $this->set_field('icon_name_1', new CM_Field_String(), 6);
        $this->set_field('icon_name_2', new CM_Field_String(), 7);
        $this->set_field('icon_name_3', new CM_Field_String(), 8);
        $this->set_field('icon_name_4', new CM_Field_String(), 9);
        $this->set_field('icon_1', new CM_Field_File(), 13);
        $this->set_field('icon_2', new CM_Field_File(), 14);
        $this->set_field('icon_3', new CM_Field_File(), 15);
        $this->set_field('icon_4', new CM_Field_File(), 16);
        $this->set_field('icon_text_1', new CM_Field_HTML(), 19);
        $this->set_field('icon_text_2', new CM_Field_HTML(), 20);
        $this->set_field('icon_text_3', new CM_Field_HTML(), 21);
        $this->set_field('icon_text_4', new CM_Field_HTML(), 22);

        $fieldgroups = array(
            'Основные данные' => array('name', 'main_image', 'content', 'icon_name_1', 'icon_name_2', 'icon_name_3', 'icon_name_4', 'icon_1', 'icon_2', 'icon_3', 'icon_4', 'icon_text_1', 'icon_text_2', 'icon_text_3', 'icon_text_4'),
        );

        $this->add_plugin(new CM_Form_Plugin_Fieldgroups($fieldgroups));
    }
}