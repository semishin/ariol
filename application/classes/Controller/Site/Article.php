<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Article extends Controller_Site
{
    const LIMIT_ON_PAGE = 4;

    public function action_index()
    {
        $this->set_metatags_and_content('', 'page');
        $article = ORM::factory('Article')->where('active','=',1)->order_by('position','asc')->limit(self::LIMIT_ON_PAGE)->find_all()->as_array();
        $count_articles = ORM::factory('Article')->where('active','=',1)->count_all();
        $this->template->count_articles = $count_articles;
        $this->template->article = $article;
    }

    public function action_item()
    {
        $this->set_metatags_and_content($this->param('url'), 'article');
        $article = ORM::factory('Article')->where('active','=',1)->order_by('position','asc')->find_all();
        $this->template->article = $article;

        //$this->template->category = $this->_model->category;

    }

    public function action_more()
    {
        $offset = $this->request->post('offset');

        if (!$offset) {
            $this->forward_404();
        }

        $count_articles = ORM::factory('Article')->where('active','=',1)->count_all();

        $article = ORM::factory('Article')->where('active','=',1)->order_by('position','asc')->limit(self::LIMIT_ON_PAGE)
            ->offset($offset)->find_all()->as_array();


        exit(
            json_encode(
                array(
                    'html' => View::factory('site/article/more', array(
                        'article' => $article,
                    ))->render(),
                    'more' => $count_articles >= self::LIMIT_ON_PAGE * ($offset / self::LIMIT_ON_PAGE) + self::LIMIT_ON_PAGE
                )
            )
        );
    }



}
