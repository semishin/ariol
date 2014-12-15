<?php defined('SYSPATH') or die('No direct script access.');

class Model_Library_Category extends ORM
{
    protected $_table_name = 'library_categories';

    protected $_has_many = array(
        'library' => array(
            'model' => 'Library',
        )
    );

    public function labels()
    {
        return array(
            'id' => 'Идентификатор',
            'name' => 'Наименование',
            's_title' => 'SEO title',
            's_description' => 'SEO description',
            's_keywords' => 'SEO keywords',
            'content' => 'Контент',
            'url' => 'URL',
            'position'=>'Позиция',
        );
    }

    public function form()
    {
        return new Form_Admin_Library_Category($this);
    }

    public function save($validation)
    {
        $this->md5_url = md5($this->url);

        parent::save($validation);

    }

    protected $_grid_columns = array(
        'name' => null,
        'position' => null,
        'id' => null,
        'edit' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-library_category:edit?id=${id}',
            'title' => '<i class="fa fa-edit"></i>',
            'color' => 'green',
            'alternative' => 'Редактировать'
        ),
        'delete' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-library_category:delete?id=${id}',
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
            'position',
            'id'
        );
    }
}