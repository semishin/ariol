<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Page extends Controller_Site
{
    public function action_contacts()
    {
        $this->set_metatags_and_content('contacts', 'page');


    }

    public function action_okompanii()
    {
        $this->set_metatags_and_content('o-kompanii', 'page');

    }

}