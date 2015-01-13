<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Index extends Controller_Site
{
    const LIMIT_ON_PAGE = 8;

    public function action_index()
    {
        $this->set_metatags_and_content('', 'page');
//        $news = ORM::factory('News')->where('active','=',1)->order_by('date','desc')->find_all();
        $slide = ORM::factory('Slide')->where('active','=',1)->order_by('position','asc')->find_all();
        $ourproduct = ORM::factory('Ourproduct')->where('active','=',1)->where('on_main','=',1)->order_by('position','asc')->limit(self::LIMIT_ON_PAGE)->find_all()->as_array();
        $count_product = ORM::factory('Ourproduct')->where('active','=',1)->where('on_main','=',1)->count_all();
//        $this->template->news = $news;
        $this->template->slide = $slide;
        $this->template->ourproduct = $ourproduct;
        $this->template->count_product = $count_product;

        //$this->template->slides=ORM::factory('Slides')->where('active','=',1)->order_by('position','ASC')->find_all();
        //$this->template->clients=ORM::factory('Clients')->fetchActive();
    }

    public function action_brif()
    {
        $this->template->set_layout('site/index/brif');
    }
}
