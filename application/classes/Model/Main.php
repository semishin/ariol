<?php defined('SYSPATH') or die('No direct script access.');

class Model_Main extends ORM
{
    protected $_table_name = 'main';

    protected $_belongs_to = array(

    );

    public function labels()
    {
        return array(
            'name' => 'Название',
            'content' => 'Контент',
            'main_image' => 'Главное изображение',
            'icon_1' => 'Иконка 1',
            'icon_2' => 'Иконка 2',
            'icon_3' => 'Иконка 3',
            'icon_4' => 'Иконка 4',
            'icon_name_1' => 'Подпись иконки 1',
            'icon_name_2' => 'Подпись иконки 2',
            'icon_name_3' => 'Подпись иконки 3',
            'icon_name_4' => 'Подпись иконки 4',
            'icon_text_1' => 'Описание иконки 1',
            'icon_text_2' => 'Описание иконки 2',
            'icon_text_3' => 'Описание иконки 3',
            'icon_text_4' => 'Описание иконки 4',
        );
    }

    public function form()
    {
        return new Form_Admin_Main($this);
    }



    protected $_grid_columns = array(
        //'id' => null,
        'name' => null,
        'edit' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-main:edit?id=${id}',
            'title' => '<i class="fa fa-edit"></i>',
            'color' => 'green',
            'alternative' => 'Редактировать'
        ),
        'delete' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-main:delete?id=${id}',
            'title' => '<i class="fa fa-trash-o"></i>',
            'alternative' => 'Удалить',
            'color' => 'red',
            'confirm' => 'Вы уверены?'
        )
    );
}