<?php defined('SYSPATH') or die('No direct script access.');

class Model_Service_Section extends ORM
{
    protected $_table_name = 'services_sections';

    protected $_belongs_to = array(
        'manager' => array('model'=>'Managers')
    );

    public function labels()
    {
        return array(
            'id' => 'Идентификатор',
            'name' => 'Наименование',
            'h1'=>'Заголовок H1',
            'main_image'=>'Главная картинка',
            'manager_id' => 'Менеджер',
            's_title' => 'SEO title',
            's_description' => 'SEO description',
            's_keywords' => 'SEO keywords',
            'content' => 'Контент',
            'short_content' => 'Сокращенный контент',
            'active' => 'Активность',
            'url' => 'URL',
            'position'=>'Позиция',
        );
    }

    public function form()
    {
        return new Form_Admin_Service_Section($this);
    }

    public function save($validation)
    {
        $this->md5_url = md5($this->url);

        parent::save($validation);

    }

    protected $_grid_columns = array(
        'name' => array(
            'type'=>'name',
            'route_str'=>'admin-service_section:edit?id=${id}',
            'external_url'=>'admin-service_section:edit?id=${id}',


        ),
        'edit' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-service_section:edit?id=${id}',
            'title' => '<i class="fa fa-edit"></i>',
            'color' => 'green',
            'alternative' => 'Редактировать'
        ),
        'delete' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-service_section:delete?id=${id}',
            'title' => '<i class="fa fa-trash-o"></i>',
            'alternative' => 'Удалить',
            'color' => 'red',
            'confirm' => 'Вы уверены?'
        )
    );


}