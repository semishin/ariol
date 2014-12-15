<?php defined('SYSPATH') or die('No direct script access.');

class Model_Clients extends ORM
{
    protected $_table_name = 'clients';

    protected $_belongs_to = array(

    );

    public function labels()
    {
        return array(
            'name' => 'Название',
            'icon' => 'Иконка',
            'link' => 'Ссылка',
            'active' => 'Активность',
        );
    }

    public function form()
    {
        return new Form_Admin_Clients($this);
    }



    protected $_grid_columns = array(
        //'id' => null,
        'name' => null,
        'link' => null,
        'edit' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-clients:edit?id=${id}',
            'title' => '<i class="fa fa-edit"></i>',
            'color' => 'green',
            'alternative' => 'Редактировать'
        ),
        'delete' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-clients:delete?id=${id}',
            'title' => '<i class="fa fa-trash-o"></i>',
            'alternative' => 'Удалить',
            'color' => 'red',
            'confirm' => 'Вы уверены?'
        )
    );
}