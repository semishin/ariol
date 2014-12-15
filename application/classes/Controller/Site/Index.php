<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Index extends Controller_Site
{
    public function action_index()
    {
        $this->set_metatags_and_content('', 'page');
        $this->template->slides=ORM::factory('Slides')->where('active','=',1)->order_by('position','ASC')->find_all();
        $this->template->clients=ORM::factory('Clients')->fetchActive();
    }
	
	public function action_thanks()
	{
		$this->template->set_layout('layout/site/thanks');
	}
}
