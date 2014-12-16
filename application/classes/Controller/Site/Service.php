<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Service extends Controller_Site
{
    public function action_category()
    {
        $this->set_metatags_and_content($this->param('url'), 'service_category', 12);

        $service = ORM::factory('Service')->where('category_id','=',$this->_model->id)->where('active','=',1)->order_by('position','asc')->find_all();
        $this->template->service = $service;
        $this->template->images = json_decode($this->_model->images, true);

    }

    public function action_item()
    {
        $this->set_metatags_and_content($this->param('url'), 'service');


        $services = ORM::factory('Service')->where('category_id','=',$this->_model->category_id)->where('active','=',1)->order_by('position','asc')->find_all();
        $this->template->services = $services;

        $this->template->category = $this->_model->category;
        $this->template->images = json_decode($this->_model->images, true);

    }

}
