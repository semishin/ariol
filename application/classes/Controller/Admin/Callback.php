<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Callback extends Controller_Crud
{
    protected $_model = 'Callback';
	
	public function action_index()
	{
		parent::action_index();
		
		Navigation::instance()->actions()->clear();
	}
}
