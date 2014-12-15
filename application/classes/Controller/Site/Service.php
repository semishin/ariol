<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Service extends Controller_Site
{
    public function action_index()
    {
        $service_url = $this->param('url');
        $this->set_metatags_and_content($service_url, 'service');

        $services = ORM::factory('Service')->get_service_by_section($this->_model->service_section->id);
        $services_count = ORM::factory('Service')->count_service_by_section($this->_model->service_section->id);
        if ($services_count < 5) {
            $chunk = 1;
        }   elseif ($services_count < 9) {
            $chunk = 2;
        }   elseif ($services_count < 13) {
            $chunk = 3;
        }   elseif ($services_count < 17) {
            $chunk = 4;
        }   elseif ($services_count < 21) {
            $chunk = 5;
        }
        else {
            $chunk = 5;
        }
        $this->template->chunk=$chunk;
        $this->template->services=$services;
        $this->template->manager = $this->_model->service_section->manager;

        $this->template->service_section=$this->_model->service_section;
        $this->template->set_layout('layout/site/global_inner');
    }

}
