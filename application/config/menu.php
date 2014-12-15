<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @version SVN: $Id:$
 */

return array
(
	Application::NAME => array
	(
//		'<i class="fa fa-user"></i>|Обратные звонки' => 'admin-callback',
//        '<i class="fa  fa-trophy"></i>|Главная страница' => 'admin-main',
        '<i class="fa fa-picture-o"></i>|Слайды' => 'admin-slides',
//        '<i class="fa fa-briefcase"></i>|Клиенты' => 'admin-clients',
        '<i class="fa fa-barcode"></i>|Товары' => array(
            '<i class="fa fa-barcode"></i>|Категории' => 'admin-product_category',
            '<i class="fa fa-barcode"></i>|Товары' => 'admin-product',
        ),
		'<i class="fa fa-comments-o"></i>|Новости' => array(
			'<i class="fa fa-comments-o"></i>|Категории' => 'admin-news_category',
			'<i class="fa fa-comments-o"></i>|Новости' => 'admin-news',
		),
        '<i class="fa fa-book"></i>|Библиотеки' => array(
            '<i class="fa fa-book"></i>|Категории' => 'admin-library_category',
            '<i class="fa fa-book"></i>|Библиотеки' => 'admin-library',
        ),
//        '<i class="fa fa-tags"></i>|Услуги' => array(
//            '<i class="fa fa-folder-open"></i>|Категории услуг' => 'admin-service_section',
//            '<i class="fa fa-tag"></i>|Услуги' => 'admin-service',
//        ),
        '<i class="fa fa-group"></i>|Мероприятия' => array(
            '<i class="fa fa-group"></i>|Категории мероприятий' => 'admin-event_section',
            '<i class="fa fa-group"></i>|Мероприятия' => 'admin-event',
        ),
//        '<i class="fa fa-money"></i>|Акции' => 'admin-discounts',
//        '<i class="fa fa-bell-o"></i>|Заявки от клиентов' => 'admin-brief',
//        '<i class="fa fa-phone"></i>|Менеджеры' => 'admin-managers',
		'<i class="fa fa-key"></i>|Войти' => 'admin-auth:login',
		'<i class="fa fa-key"></i>|Сбросить пароль' => 'admin-auth:reset_password_step_1',
		'<i class="fa fa-gears"></i>|Служебное' => array(
			'<i class="fa fa-gear"></i>|Настройки' => 'admin-config',
			'<i class="fa fa-user"></i>|Пользователи' => 'admin-user',
		),
	)
);