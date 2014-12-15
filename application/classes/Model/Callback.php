<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @version SVN: $Id:$
 */

class Model_Callback extends ORM
{
    protected $_table_name = 'callback';

    protected $_grid_columns = array(
        'name' => NULL,
		'phone' => NULL,
		'updated_at' => NULL,
        'delete' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-callback:delete?id=${id}',
            'title' => '<i class="fa fa-trash-o"></i>',
            'alternative' => 'Удалить',
			'color' => 'red',
            'confirm' => 'Вы уверены?'
        )
    );
	
	public function labels()
	{
	    return array(
            'name' => 'Имя',
            'phone' => 'Телефон',
            'updated_at' => 'Дата поступления',
	    );
	}
	
	public function rules()
	{
	    return array(
            'name' => array(
                array('not_empty')
            )
	    );
	}
}