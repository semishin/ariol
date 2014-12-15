<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @version SVN: $Id:$
 * @author o.zgolich
 */

class Form_Admin_Managers extends CM_Form_Abstract
{
    protected function init()
    {
        $this->add_plugin(new CM_Form_Plugin_ORM());

        $this->set_field('first_name', new CM_Field_String(), 1);
        $this->set_field('last_name', new CM_Field_String(), 2);
        $this->set_field('employee', new CM_Field_String(), 3);
        $this->set_field('icon', new CM_Field_File(), 4);
        $this->set_field('phone', new CM_Field_String(), 5);
        $this->set_field('email', new CM_Field_String(), 6);
        $this->set_field('skype', new CM_Field_String(), 7);
        $this->set_field('active', new CM_Field_Boolean(), 8);

        $fieldgroups = array(
            'Основные данные' => array('first_name', 'last_name', 'employee', 'icon', 'phone','email','skype', 'active')
        );

        $this->add_plugin(new CM_Form_Plugin_Fieldgroups($fieldgroups));
    }
}