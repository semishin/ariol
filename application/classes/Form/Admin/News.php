<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @version SVN: $Id:$
 * @author o.zgolich
 */

class Form_Admin_News extends CM_Form_Abstract
{
    protected function init()
    {
        $this->add_plugin(new CM_Form_Plugin_ORM());

		$this->set_field('name', new CM_Field_String(), 0);
		$this->set_field('category_id', new CM_Field_Select_ORM(ORM::factory('News_Category')), 1.5);
		$this->set_field('created_at', new CM_Field_Date(), 2);
        $this->set_field('url', new CM_Field_String(), 2.5);
		$this->set_field('active', new CM_Field_Boolean(), 3);
        $this->set_field('main_image', new CM_Field_File(), 4);
		$this->set_field('content', new CM_Field_HTML(), 12);
		$this->set_field('short_content', new CM_Field_HTML(), 11);
		$this->set_field('s_title', new CM_Field_String(), 13);
		$this->set_field('s_description', new CM_Field_Text(), 14);
		$this->set_field('s_keywords', new CM_Field_Text(), 15);

		$fieldgroups = array(
			'Основные данные' => array('name', 'url', 'category_id', 'content', 'main_image', 'short_content', 'created_at', 'active'),
			'Мета данные' => array('s_title', 's_description', 's_keywords'),
		);

		$this->add_plugin(new CM_Form_Plugin_Fieldgroups($fieldgroups));
    }
}