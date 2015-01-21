<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Ourproduct extends Controller_Site
{
    const LIMIT_ON_PAGE = 8;

    public function action_index()
    {
        $ourproduct = ORM::factory('Ourproduct')
            ->where('active', '=', 1)
            ->order_by('position', 'asc')
            ->limit(self::LIMIT_ON_PAGE)
            ->find_all()
            ->as_array();

        $ourproduct_category = ORM::factory('Ourproduct_Category')
            ->where('active', '=', 1)
            ->order_by('position', 'asc')
            ->find_all()
            ->as_array();

        $count_product = ORM::factory('Ourproduct')
            ->where('active', '=', 1)
            ->count_all();

        $this->template->ourproduct = $ourproduct;
        $this->template->ourproduct_category = $ourproduct_category;
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

        $count_product = ORM::factory('Ourproduct')->where('active', '=', 1);
        if ($category_id) {
            $temp_id = ORM::factory('Prodcat')
                ->where('cat_id', '=', $category_id)
                ->find_all();

            $products_ids = array();
            foreach ($temp_id as $relation) {
                $products_ids[] = $relation->prod_id;
            }

            if ($products_ids) {
                $count_product = $count_product->where('id', 'IN', $products_ids);
            } else {
                $count_product = $count_product->where('id', '=', 'DISABLED');
            }
        }
        if ($on_main) {
            $count_product = $count_product->where('on_main', '=', true);
        }
        $count_product = $count_product->count_all();

        $ourproduct = ORM::factory('Ourproduct')
            ->where('active', '=', 1);

        if ($category_id) {
            $temp_id = ORM::factory('Prodcat')
                ->where('cat_id', '=', $category_id)
                ->find_all();

            $products_ids = array();
            foreach ($temp_id as $relation) {
                $products_ids[] = $relation->prod_id;
            }

            if ($products_ids) {
                $ourproduct = $ourproduct->where('id', 'IN', $products_ids);
            } else {
                $ourproduct = $ourproduct->where('id', '=', 'DISABLED');
            }
        }

        if ($on_main) {
            $ourproduct = $ourproduct->where('on_main', '=', true);
        }

        $ourproduct = $ourproduct
            ->order_by('position', 'asc')
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
                'more' => $count_product >= self::LIMIT_ON_PAGE * ($offset / self::LIMIT_ON_PAGE) + self::LIMIT_ON_PAGE,
            )
        )
        );
    }

    public function action_category()
    {
        $category_id = $this->request->post('category_id');
        $count_product = ORM::factory('Ourproduct')
            ->where('active', '=', 1);

        if ($category_id) {
            $temp_id = ORM::factory('Prodcat')
                ->where('cat_id', '=', $category_id)
                ->find_all();

            $products_ids = array();
            foreach ($temp_id as $relation) {
                $products_ids[] = $relation->prod_id;
            }
            if ($products_ids) {
                $count_product = $count_product->where('id', 'IN', $products_ids);
            }

        }

        $count_product = $count_product->count_all();


/*        if ($category_id && $products_ids) {
                        $ourproduct = ORM::factory('Ourproduct')
                            ->where('active', '=', 1)
                            ->where('id','IN',$products_ids)
                            ->limit(self::LIMIT_ON_PAGE)
                            ->find_all()->as_array();
                    } elseif($category_id) {
                        $ourproduct = ORM::factory('Ourproduct')
                            ->where('active', '=', 1)
                            ->limit(0)
                            ->find_all()->as_array();
                    } else {
                        $ourproduct = ORM::factory('Ourproduct')
                            ->where('active', '=', 1)
                            ->limit(self::LIMIT_ON_PAGE)
                            ->find_all()->as_array();
                    }
*/
            $PDO = ORM::factory('Ourproduct')->PDO();

            $query = "SELECT prod.id as id, prod.image as image,
                          prod.name as name, prod.url as url
                  FROM ourproducts prod
                  LEFT JOIN prod_cat ON prod.id = prod_cat.prod_id
                  LEFT JOIN ourproducts_categories cat ON cat.id = prod_cat.cat_id
                  WHERE prod.active = 1";
            if ($category_id) {
                $query .= " AND cat.id={$category_id}";
            }
            $query .= " GROUP BY prod.id";

            $PDO = $PDO->prepare($query);
            $PDO->execute();
            $ourproduct = $PDO->fetchAll(PDO::FETCH_ASSOC);

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

