<?php defined('SYSPATH') or die('No direct script access.');

class Model_Service extends ORM
{
    protected $_table_name = 'services';

    protected $_belongs_to = array(
       'service_section' => array(
           'model'       => 'Service_Section',
           'foreign_key' => 'section_id',
       ),
    );

    protected $_has_many_to_save = array(
        'discounts'    => array(
            'model'=> 'Discounts',
            'foreign_key' => 'service_id',
            'through'      => 'discounts_services',
            'far_key'      => 'discount_id',
        )
    );

    protected $_has_many = array(
        'discounts'    => array(
            'model'=> 'Discounts',
            'foreign_key' => 'service_id',
            'through'      => 'discounts_services',
            'far_key'      => 'discount_id',
        )
    );

    public function labels()
    {
        return array(
            'id' => 'Идентификатор',
            'name' => 'Наименование',
            'position' => 'Позиция',
            'h1'=>'Заголовок H1',
            'main_image'=>'Главная картинка',
            'more_images'=>'Дополнительные изображение',
            's_title' => 'SEO title',
            's_description' => 'SEO description',
            's_keywords' => 'SEO keywords',
            'content' => 'Контент',
            'short_content' => 'Сокращенный контент',
            'section_id'=>'Категория услуги',
            'active' => 'Активность',
            'url' => 'URL',
            'create_date' => 'Дата публикации'
        );
    }

    public function form()
    {
        return new Form_Admin_Service($this);
    }

    public function save($validation)
    {
        $this->md5_url = md5($this->url);

        parent::save($validation);



        if (!$this->create_date) {
            $this->create_date = date('Y-m-d');
            $this->save($validation);
        }
        if (!$this->update_date) {
            $this->update_date = date('Y-m-d');
            $this->save($validation);
        }
    }

    protected $_grid_columns = array(
      //  'id' => null,
        'name' => null,
      //  'category_id' => array(
       //     'type' => 'template',
       //     'template' => '${category_name}'
      //  ),
        'section_id' => array(
            'type' => 'template',
            'template' => '${section_name}'
        ),
        'active' => null,
        'edit' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-service:edit?id=${id}',
            'title' => '<i class="fa fa-edit"></i>',
            'color' => 'green',
            'alternative' => 'Редактировать'
        ),
        'delete' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-service:delete?id=${id}',
            'title' => '<i class="fa fa-trash-o"></i>',
            'alternative' => 'Удалить',
            'color' => 'red',
            'confirm' => 'Вы уверены?'
        )
    );

    public function get_section_name()
    {
        return $this->service_section->name;
    }

    public function get_service_by_section($section_id)
    {
        return $this->where('section_id', '=', $section_id)->where('active', '=', 1)->order_by('position',ASC)->find_all()->as_array();
    }

    public function count_service_by_section($section_id)
    {
        return $this->where('section_id', '=', $section_id)->where('active', '=', 1)->count_all();
    }

    public function getSiteUrl()
    {
        return '/service/' .$this->url;
    }

    public function sortable_fields()
    {
        return array(
            'name',
            'section_id'
        );
    }

}