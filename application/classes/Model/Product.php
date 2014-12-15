<?php defined('SYSPATH') or die('No direct script access.');

class Model_Product extends ORM
{
    protected $_table_name = 'products';

    protected $_belongs_to = array(
        'category' => array(
            'model'       => 'Product_Category',
            'foreign_key' => 'category_id',
        )
    );

    public function labels()
    {
        return array(
            'id' => 'Идентификатор',
            'name' => 'Наименование',
            'content' => 'Контент',
            'short_content' => 'Сокращенный контент',
            'url' => 'URL',
            'main_image' => 'Главное изображение',
            'more_image' => 'Дополнительное изображение',
            'category_id' => 'Категория',
            'price' => 'Цена',
            'price_w_discount' => 'Цена со скидкой',
            'action' => 'Акция',
            'on_main' => 'На главную',
            's_title' => 'SEO title',
            's_description' => 'SEO description',
            's_keywords' => 'SEO keywords'
        );
    }

    public function form()
    {
        return new Form_Admin_Product($this);
    }

    public function save($validation)
    {
        $this->md5_url = md5($this->url);

        parent::save($validation);

    }

    protected $_grid_columns = array(
        'name' => null,
        'category_id' => array(
            'type' => 'template',
            'template' => '${category_name}'
        ),
        'action' => null,
        'on_main' => null,
        'edit' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-product:edit?id=${id}',
            'title' => '<i class="fa fa-edit"></i>',
            'color' => 'green',
            'alternative' => 'Редактировать'
        ),
        'delete' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-product:delete?id=${id}',
            'title' => '<i class="fa fa-trash-o"></i>',
            'alternative' => 'Удалить',
            'color' => 'red',
            'confirm' => 'Вы уверены?'
        )
    );

    public function get_category_name()
    {
        return $this->category->name;
    }

    public function sortable_fields()
    {
        return array(
            'name',
            'category_id',
            'action',
            'on_main'
        );
    }
}