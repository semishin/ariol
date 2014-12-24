<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Ourproduct extends Controller_Site
{
    const LIMIT_ON_PAGE = 16;

    public function action_index()
    {
     //   $this->set_metatags_and_content($this->param('url'), 'news');
 //       $this->set_metatags_and_content('', 'page');
//        $ourproduct_category = ORM::factory('Ourproduct_Category')->where('active','=',1)->order_by('position','asc')->find_all();
 //       $this->template->ourproduct_category = $ourproduct_category;

        $ourproduct = ORM::factory('Ourproduct')->where('active','=',1)->where('on_main','=',1)->order_by('position','asc')->limit(self::LIMIT_ON_PAGE)->find_all()->as_array();
     //   $this->template->category = $this->_model->category;
        $this->template->ourproduct = $ourproduct;

        $this->template->set_layout('layout/site/global');

    }
}
