<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Ourproduct extends Controller_Site
{
    const LIMIT_ON_PAGE = 8;

    public function action_index()
    {
        $ourproduct = ORM::factory('Ourproduct')->where('active','=',1)->where('on_main','=',1)->order_by('position','asc')->limit(self::LIMIT_ON_PAGE)->find_all()->as_array();
        $ourproduct_category = ORM::factory('Ourproduct_Category')->where('active','=',1)->order_by('position','asc')->find_all()->as_array();
        $this->template->ourproduct = $ourproduct;
        $this->template->ourproduct_category = $ourproduct_category;

        $count_product = ORM::factory('Ourproduct')->where('active','=',1)->where('on_main','=',1)->count_all();
        $this->template->count_product = $count_product;

        $this->template->set_layout('layout/site/global');

    }

    public function action_item()
    {
        $this->set_metatags_and_content($this->param('url'), 'ourproduct');
    }

    public function action_more()
    {
        $offset = $this->request->post('offset');
        $category_id = $this->request->post('category_id');
        $on_main = $this->request->post('on_main');

        if (!$offset) {
            $this->forward_404();
        }

        $count_product = ORM::factory('Ourproduct')->where('active','=',1);
        if ($category_id) {
            $count_product = $count_product->where('category_id', '=', $category_id);
        }
        if ($on_main) {
            $count_product = $count_product->where('on_main', '=', true);
        }
        $count_product = $count_product->count_all();

        $ourproduct = ORM::factory('Ourproduct')
            ->where('active','=',1);

        if ($category_id) {
            $ourproduct = $ourproduct->where('category_id', '=', $category_id);
        }

        if ($on_main) {
            $ourproduct = $ourproduct->where('on_main', '=', true);
        }

        $ourproduct = $ourproduct
            ->order_by('position','asc')
            ->limit(self::LIMIT_ON_PAGE)
            ->offset($offset)
            ->find_all()
            ->as_array();

        exit(
          json_encode(
              array(
                'html' => View::factory('site/ourproduct/more', array(
                    'ourproduct' => $ourproduct,
                ))->render(),
                'more' => $count_product >= self::LIMIT_ON_PAGE * ($offset / self::LIMIT_ON_PAGE) + self::LIMIT_ON_PAGE
              )
          )
        );
    }

    public function action_category()
    {
        $category_id = $this->request->post('category_id');
        $count_product = ORM::factory('Ourproduct')->where('active','=',1);

        $count_product = $count_product->count_all();

        $ourproduct = ORM::factory('Ourproduct')
            ->where('ourproducts.active','=',1);

        if ($category_id) {
            $ourproduct = $ourproduct->categories->where('prod_cat.cat_id', '=', $category_id);
        }

        $ourproduct = $ourproduct
            ->order_by('ourproducts.id','asc')
            ->limit(self::LIMIT_ON_PAGE)
            ->find_all()
            ->as_array();

        exit(
            json_encode(
                array(
                    'html' => View::factory('site/ourproduct/category', array(
                        'ourproduct' => $ourproduct,
                    ))->render(),
                    'more' => $count_product > self::LIMIT_ON_PAGE
                )
            )
        );


    }
}
