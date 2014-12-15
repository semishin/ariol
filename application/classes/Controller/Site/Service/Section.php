<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Service_Section extends Controller_Site
{
    public function action_index()
    {
        $section_url = $this->param('url');
        $this->set_metatags_and_content($section_url, 'service_section');

        $services = ORM::factory('Service')->get_service_by_section($this->_model->id);
        $services_count = ORM::factory('Service')->count_service_by_section($this->_model->id);
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
        $this->template->manager = $this->_model->manager;

        $this->template->set_layout('layout/site/global_inner');
    }

}
