<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Article extends Controller_Site
{
    const LIMIT_ON_PAGE = 4;

    public function action_index()
    {
        $this->set_metatags_and_content('', 'page');

        $article = ORM::factory('Article')
            ->where('active','=',1)
            ->order_by('position','asc')
            ->limit(self::LIMIT_ON_PAGE)
            ->find_all()
            ->as_array();

        $count_articles = ORM::factory('Article')
            ->where('active','=',1)
            ->count_all();


        $this->template->count_articles = $count_articles;
        $this->template->article = $article;
    }

    public function action_item()
    {
        $this->set_metatags_and_content($this->param('url'), 'article');

        $count_pre_articles = ORM::factory('Article')
            ->where('active','=',1)
            ->where('id','<',$this->_model->id)
            ->count_all();

        $count_post_articles = ORM::factory('Article')
            ->where('active','=',1)
            ->where('id','>',$this->_model->id)
            ->count_all();

        if (!$count_post_articles) {
            $count_pre = 3;
            $count_post = 0;
        } elseif ($count_post_articles == 1) {
            $count_pre = 2;
            $count_post = 1;
        } elseif ($count_post_articles > 1 && $count_pre_articles) {
            $count_pre = 1;
            $count_post = 2;
        } else {
            $count_pre = 0;
            $count_post = 3;
        }


        $pre_article = ORM::factory('Article')
            ->where('active','=',1)
            ->where('id','<',$this->_model->id)
            ->order_by('id', 'desc')
            ->limit($count_pre)
            ->find_all()
            ->as_array();

        $post_article = ORM::factory('Article')
            ->where('active','=',1)
            ->where('id','>',$this->_model->id)
            ->order_by('id', 'asc')
            ->limit($count_post)
            ->find_all()
            ->as_array();

        if (Arr::get($_COOKIE, 'viewed-'.$this->_model->id) != 'ok') {
            ORM::factory('Article')->addPlusOneView($this->_model->id);
            setcookie('viewed-'.$this->_model->id, 'ok', time() + 86400);
        }

        $this->template->pre_article = $pre_article;
        $this->template->post_article = $post_article;
    }

    public function action_more()
    {
        $offset = $this->request->post('offset');

        if (!$offset) {
            $this->forward_404();
        }

        $count_articles = ORM::factory('Article')
            ->where('active','=',1)
            ->count_all();

        $article = ORM::factory('Article')
            ->where('active','=',1)
            ->order_by('position','asc')
            ->limit(self::LIMIT_ON_PAGE)
            ->offset($offset)
            ->find_all()
            ->as_array();

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
