<?php defined('SYSPATH') or die('No direct script access.');

class Model_Slides extends ORM
{
    protected $_table_name = 'slides';

    protected $_belongs_to = array(
    );


    public function labels()
    {
        return array(
            'id' => 'Идентификатор',
            'name' => 'Наименование',
            'main_image'=>'Главнаое изображение',
            'content' => 'Контент',
            'active' => 'Активность',
            'link' => 'Ссылка',
            'position' => 'Позиция',
        );
    }

    public function form()
    {
        return new Form_Admin_Slides($this);
    }

    protected $_grid_columns = array(

        'name' => null,

        'edit' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-slides:edit?id=${id}',
            'title' => '<i class="fa fa-edit"></i>',
            'color' => 'green',
            'alternative' => 'Редактировать'
        ),
        'delete' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-slides:delete?id=${id}',
            'title' => '<i class="fa fa-trash-o"></i>',
            'alternative' => 'Удалить',
            'color' => 'red',
            'confirm' => 'Вы уверены?'
        )
    );

}