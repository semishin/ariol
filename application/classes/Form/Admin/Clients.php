<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @version SVN: $Id:$
 * @author o.zgolich
 */

class Form_Admin_Clients extends CM_Form_Abstract
{
    protected function init()
    {
        $this->add_plugin(new CM_Form_Plugin_ORM());

        $this->set_field('name', new CM_Field_String(), 1);
        $this->set_field('icon', new CM_Field_File(), 2);
        $this->set_field('link', new CM_Field_String(), 4);
        $this->set_field('active', new CM_Field_Boolean(), 5);

        $fieldgroups = array(
            'Основные данные' => array('name', 'icon', 'link', 'active'),
        );

        $this->add_plugin(new CM_Form_Plugin_Fieldgroups($fieldgroups));
    }
}