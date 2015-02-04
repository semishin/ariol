<?php defined('SYSPATH') or die('No direct script access.');

class Model_Ourproduct extends ORM
{
    protected $_table_name = 'ourproducts';

    protected $_belongs_to = array(

    );

    protected $_has_many_to_save = array(
        'categories'    => array(
            'model'=> 'Ourproduct_Category',
            'foreign_key' => 'prod_id',
            'through'      => 'prod_cat',
            'far_key'      => 'cat_id',
        )
    );

    protected $_has_many = array(
        'categories'    => array(
            'model'=> 'Ourproduct_Category',
            'foreign_key' => 'prod_id',
            'through'      => 'prod_cat',
            'far_key'      => 'cat_id',
        )
    );

    public function labels()
    {
        return array(
            'id' => 'Идентификатор',
            'name' => 'Наименование',
            'categories' => 'Категория',
            'task' => 'Задача',
            'position' => 'Позиция',
            'date' => 'Дата',
            'url' => 'Ссылка на описание работы',
            'link' => 'Ссылка на сайт',
            'active' => 'Активность',
            'on_main' => 'На главной',
            'image' => 'Изображение',
            'second_image' => 'Главное изображение на странице',
            'more_images' => 'Дополнительные изображения',
            'feature' => 'Особенности',
            'short_content' => 'Сокращенный контент',
            'content' => 'Контент',
            'performer' => 'Исполнители'
        );
    }

    public function form()
    {
        return new Form_Admin_Ourproduct($this);
    }

    public function save($validation)
    {
        $this->md5_url = md5($this->url);

        parent::save($validation);

    }

    protected $_grid_columns = array(
        'name' => null,
        'position' => null,
        'on_main' => null,
        'active' => null,
        'edit' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-ourproduct:edit?id=${id}',
            'title' => '<i class="fa fa-edit"></i>',
            'color' => 'green',
            'alternative' => 'Редактировать'
        ),
        'delete' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-ourproduct:delete?id=${id}',
            'title' => '<i class="fa fa-trash-o"></i>',
            'alternative' => 'Удалить',
            'color' => 'red',
            'confirm' => 'Вы уверены?'
        )
    );


    public function sortable_fields()
    {
        return array(
            'name',
            'on_main',
            'position',
            'active'
        );
    }
}