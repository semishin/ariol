<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @version SVN: $Id:$
 * @author o.zgolich
 */

class Form_Admin_Discounts extends CM_Form_Abstract
{
    protected function init()
    {
        $this->add_plugin(new CM_Form_Plugin_ORM());

        $services = ORM::factory('Service')->order_by('name', 'ASC')->find_all();

        $services_list = array();
        foreach ($services as $service) {
            $services_list[$service->id] = $service->name;
        }

        $this->set_field('name', new CM_Field_String(), 1);
        $this->set_field('services', new CM_Field_Manytomany($services_list, $this->get_model()), 2);
       // $this->set_field('h1', new CM_Field_String(), 2);
        $this->set_field('url', new CM_Field_String(), 3);
        $this->set_field('main_image', new CM_Field_File(), 4);
        $this->set_field('second_image', new CM_Field_File(), 5);
        $this->set_field('more_images', new CM_Field_Multifile(),6);
       // $this->set_field('section_id', new CM_Field_Select_ORM(ORM::factory('Service_Section')), 1.5);
       // $this->set_field('create_date', new CM_Field_Date(), 6);
       // $this->set_field('active', new CM_Field_Boolean(), 7);
        $this->set_field('content', new CM_Field_HTML(), 11);
        $this->set_field('short_text', new CM_Field_HTML(), 12);
        $this->set_field('benefit', new CM_Field_String(), 110);
        $this->set_field('s_title', new CM_Field_String(), 13);
        $this->set_field('s_description', new CM_Field_Text(), 14);
        $this->set_field('s_keywords', new CM_Field_Text(), 15);

        $fieldgroups = array(
            'Основные данные' => array('name', 'url', 'main_image','services','second_image','more_images', 'content', 'short_text', 'benefit'),
            'Мета данные' => array('s_title', 's_description', 's_keywords'),
        );

        $this->add_plugin(new CM_Form_Plugin_Fieldgroups($fieldgroups));
    }
}