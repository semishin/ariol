<?php defined('SYSPATH') or die('No direct script access.');

class Model_Event extends ORM
{
    protected $_table_name = 'events';

    protected $_belongs_to = array(
        'event_section' => array(
            'model'       => 'Event_Section',
            'foreign_key' => 'section_id',
        ),
    );


    public function labels()
    {
        return array(
            'id' => 'Идентификатор',
            'name' => 'Наименование',
            'section_id'=>'Категория мероприятия',
            'image'=>'Картинка',
            'price'=>'Стоимость',
            'date' => 'Дата мероприятия',
            'link'=>'Ссылка на мероприятие',
            's_title' => 'SEO title',
            's_description' => 'SEO description',
            's_keywords' => 'SEO keywords',
            'position' => 'Позиция',
            'active' => 'Активность',
            'url' => 'URL',
            'content' => 'Контент',
        );
    }

    public function form()
    {
        return new Form_Admin_Event($this);
    }

    public function save($validation)
    {
        $this->md5_url = md5($this->url);

        parent::save($validation);



        if (!$this->date) {
            $this->date = date('Y-m-d');
            $this->save($validation);
        }

    }

    protected $_grid_columns = array(
        //  'id' => null,
        'name' => null,
        'section_id' => array(
            'type' => 'template',
            'template' => '${section_name}'
        ),
        'active' => null,
        'edit' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-event:edit?id=${id}',
            'title' => '<i class="fa fa-edit"></i>',
            'color' => 'green',
            'alternative' => 'Редактировать'
        ),
        'delete' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-event:delete?id=${id}',
            'title' => '<i class="fa fa-trash-o"></i>',
            'alternative' => 'Удалить',
            'color' => 'red',
            'confirm' => 'Вы уверены?'
        )
    );

    public function get_section_name()
    {
        return $this->event_section->name;
    }
/*
    public function get_service_by_section($section_id)
    {
        return $this->where('section_id', '=', $section_id)->where('active', '=', 1)->order_by('position',ASC)->find_all()->as_array();
    }

    public function count_service_by_section($section_id)
    {
        return $this->where('section_id', '=', $section_id)->where('active', '=', 1)->count_all();
    }
*/
    public function getSiteUrl()
    {
        return '/event/' .$this->url;
    }

    public function sortable_fields()
    {
        return array(
            'name',
            'section_id',
            'active'
        );
    }

}