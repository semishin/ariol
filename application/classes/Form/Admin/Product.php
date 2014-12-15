<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @version SVN: $Id:$
 * @author o.zgolich
 */

class Form_Admin_Product extends CM_Form_Abstract
{
    protected function init()
    {
        $this->add_plugin(new CM_Form_Plugin_ORM());

        $this->set_field('name', new CM_Field_String(), 1);
        $this->set_field('category_id', new CM_Field_Select_ORM(ORM::factory('Product_Category')), 2);
        $this->set_field('price', new CM_Field_String(), 3);
        $this->set_field('price_w_discount', new CM_Field_String(), 4);
        $this->set_field('action', new CM_Field_Boolean(), 5);
        $this->set_field('on_main', new CM_Field_Boolean(), 6);
        $this->set_field('main_image', new CM_Field_File(), 7);
        $this->set_field('more_image', new CM_Field_File(), 8);
        $this->set_field('url', new CM_Field_String(), 9);
        $this->set_field('content', new CM_Field_HTML(), 11);
        $this->set_field('short_content', new CM_Field_HTML(), 12);
        $this->set_field('s_title', new CM_Field_String(), 13);
        $this->set_field('s_description', new CM_Field_Text(), 14);
        $this->set_field('s_keywords', new CM_Field_Text(), 15);

        $fieldgroups = array(
            'Основные данные' => array('name', 'category_id', 'price', 'price_w_discount', 'action', 'on_main', 'main_image', 'more_image', 'url', 'content', 'short_content'),
            'Мета данные' => array('s_title', 's_description', 's_keywords'),
        );

        $this->add_plugin(new CM_Form_Plugin_Fieldgroups($fieldgroups));
    }
}