<?php defined('SYSPATH') or die('No direct script access.');

class Model_Managers extends ORM
{
    protected $_table_name = 'managers';

    protected $_belongs_to = array(
    );


    public function labels()
    {
        return array(
            'id' => 'Идентификатор',
            'first_name' => 'Имя',
            'last_name' => 'Фамилия',
            'employee' => 'Должность',
            'icon'=>'Иконка',
            'email' => 'Email',
            'phone' => 'Номер телефона',
            'skype' => 'Skype',
            'active' => 'Активность',
        );
    }

    public function form()
    {
        return new Form_Admin_Managers($this);
    }

    protected $_grid_columns = array(

        'first_name' => null,
        'last_name' => null,
        'employee' => null,
        'skype' => null,

        'edit' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-managers:edit?id=${id}',
            'title' => '<i class="fa fa-edit"></i>',
            'color' => 'green',
            'alternative' => 'Редактировать'
        ),
        'delete' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-managers:delete?id=${id}',
            'title' => '<i class="fa fa-trash-o"></i>',
            'alternative' => 'Удалить',
            'color' => 'red',
            'confirm' => 'Вы уверены?'
        )
    );


}