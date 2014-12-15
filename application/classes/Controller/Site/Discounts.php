<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Discounts extends Controller_Site
{
    private $_items_on_page = 12;

    public function action_index()
    {
        $countItems = ORM::factory('Discounts')->where('active','=',1)->count_all();
        $page = intval($this->param('page'));

        if ($page == 1) {
            $url = str_replace('/page/' . $page, '', $this->request->url());
            $this->redirect($url, 301);
        }

        if (is_null($this->param('page'))) {
            $page = 1;
        }

        if ($page > ceil($countItems / $this->_items_on_page) || $page < 1) {
            $this->forward_404();
        }

        $offset = $page*$this->_items_on_page-$this->_items_on_page;

        $discounts = ORM::factory('Discounts')->where('active','=',1)->limit($this->_items_on_page)->offset($offset)->order_by('id','desc')->find_all();

        $pagination  =
            Pagination::factory(
                array(
                    'current_page'   => array('source' => 'route', 'key' => 'page'),
                    'total_items'    => $countItems,
                    'items_per_page' => $this->_items_on_page,
                    'view' => 'pagination/basic'
                )
            )->render();

        $this->template->discounts = $discounts;
        $this->template->pagination = $pagination;

        $this->set_metatags_and_content('', 'page');
        $this->template->set_layout('layout/site/global_inner');
     }

    public function action_item()
    {
        $this->set_metatags_and_content($this->param('url'), 'discounts');
        $this->template->set_layout('layout/site/global_inner');
    }
}
