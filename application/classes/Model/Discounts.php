<?php defined('SYSPATH') or die('No direct script access.');

class Model_Discounts extends ORM
{
    protected $_table_name = 'discounts';

    protected $_belongs_to = array(
    );

    protected $_has_many_to_save = array(
        'services'    => array(
            'model'=> 'Service',
            'foreign_key' => 'discount_id',
            'through'      => 'discounts_services',
            'far_key'      => 'service_id',
        )
    );

    protected $_has_many = array(
        'services'    => array(
            'model'=> 'Service',
            'foreign_key' => 'discount_id',
            'through'      => 'discounts_services',
            'far_key'      => 'service_id',
        )
    );

    public function labels()
    {
        return array(
            'id' => 'Идентификатор',
            'name' => 'Наименование',
            'main_image'=>'Главнаое изображение',
            'second_image'=>'Вторичное изображение',
            'more_images'=>'Дополнительные изображение',
            's_title' => 'SEO title',
            's_description' => 'SEO description',
            's_keywords' => 'SEO keywords',
            'content' => 'Контент',
            'short_text' => 'Сокращенный контент',
            'benefit' => 'Выгода',
            'services' => 'Категория услуг',
        );
    }

    public function form()
    {
        return new Form_Admin_Discounts($this);
    }

    protected $_grid_columns = array(

        'name' => null,
        'benefit' => null,

        'edit' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-discounts:edit?id=${id}',
            'title' => '<i class="fa fa-edit"></i>',
            'color' => 'green',
            'alternative' => 'Редактировать'
        ),
        'delete' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-discounts:delete?id=${id}',
            'title' => '<i class="fa fa-trash-o"></i>',
            'alternative' => 'Удалить',
            'color' => 'red',
            'confirm' => 'Вы уверены?'
        )
    );

}