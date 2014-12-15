<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @version SVN: $Id:$
 */

return array(
    'admin.event.index' => array(
        'title' => 'Список мероприятий',
        'route' => 'admin-event'
    ),
    'admin.event.edit' => array(
        'title' => 'Редактирование мероприятия',
        'route' => 'admin-event:edit',
        'parent' => 'admin.event.index'
    ),
    'admin.event.create' => array(
        'title' => 'Добавление мероприятия',
        'route' => 'admin-event:create',
        'parent' => 'admin.event.index'
    ),

    'admin.event_section.index' => array(
        'title' => 'Список категорий мероприятий',
        'route' => 'admin-event_section'
    ),
    'admin.event_section.edit' => array(
        'title' => 'Редактирование категории мероприятия',
        'route' => 'admin-event_section:edit',
        'parent' => 'admin.event_section.index'
    ),
    'admin.event_section.create' => array(
        'title' => 'Добавление категории мероприятия',
        'route' => 'admin-event_section:create',
        'parent' => 'admin.event_section.index'
    ),

    'admin.slide.index' => array(
        'title' => 'Список слайдов',
        'route' => 'admin-slide'
    ),
    'admin.slide.edit' => array(
        'title' => 'Редактирование слайдов',
        'route' => 'admin-slide:edit',
        'parent' => 'admin.slide.index'
    ),
    'admin.slide.create' => array(
        'title' => 'Добавление слайдов',
        'route' => 'admin-slide:create',
        'parent' => 'admin.slide.index'
    ),

    'admin.news_category.index' => array(
        'title' => 'Список категорий новостей',
        'route' => 'admin-news_category'
    ),
    'admin.news_category.edit' => array(
        'title' => 'Редактирование категории новостей',
        'route' => 'admin-news_category:edit',
        'parent' => 'admin.news_category.index'
    ),
    'admin.news_category.create' => array(
        'title' => 'Добавление категории новостей',
        'route' => 'admin-news_category:create',
        'parent' => 'admin.news_category.index'
    ),

    'admin.news.index' => array(
        'title' => 'Список новостей',
        'route' => 'admin-news'
    ),
    'admin.news.edit' => array(
        'title' => 'Редактирование новости',
        'route' => 'admin-news:edit',
        'parent' => 'admin.news.index'
    ),
    'admin.news.create' => array(
        'title' => 'Добавление новости',
        'route' => 'admin-news:create',
        'parent' => 'admin.news.index'
    ),

    'admin.library_category.index' => array(
        'title' => 'Список категорий библиотек',
        'route' => 'admin-library_category'
    ),
    'admin.library_category.edit' => array(
        'title' => 'Редактирование категории библиотеки',
        'route' => 'admin-library_category:edit',
        'parent' => 'admin.library_category.index'
    ),
    'admin.library_category.create' => array(
        'title' => 'Добавление категории библиотеки',
        'route' => 'admin-library_category:create',
        'parent' => 'admin.library_category.index'
    ),

    'admin.library.index' => array(
        'title' => 'Список библиотек',
        'route' => 'admin-library'
    ),
    'admin.library.edit' => array(
        'title' => 'Редактирование библиотеки',
        'route' => 'admin-library:edit',
        'parent' => 'admin.library.index'
    ),
    'admin.library.create' => array(
        'title' => 'Добавление библиотеки',
        'route' => 'admin-library:create',
        'parent' => 'admin.library.index'
    ),

    'admin.product_category.index' => array(
        'title' => 'Список категорий товаров',
        'route' => 'admin-product_category'
    ),
    'admin.product_category.edit' => array(
        'title' => 'Редактирование категории товаров',
        'route' => 'admin-product_category:edit',
        'parent' => 'admin.product_category.index'
    ),
    'admin.product_category.create' => array(
        'title' => 'Добавление категории товаров',
        'route' => 'admin-product_category:create',
        'parent' => 'admin.product_category.index'
    ),

    'admin.product.index' => array(
        'title' => 'Список товаров',
        'route' => 'admin-product'
    ),
    'admin.product.edit' => array(
        'title' => 'Редактирование товаров',
        'route' => 'admin-product:edit',
        'parent' => 'admin.product.index'
    ),
    'admin.product.create' => array(
        'title' => 'Добавление товаров',
        'route' => 'admin-product:create',
        'parent' => 'admin.product.index'
    ),






	'admin.callback.index' => array(
		'title' => 'Обратные звонки',
		'route' => 'admin-callback'
	),


    'admin.clients.index' => array(
        'title' => 'Список клиентов',
        'route' => 'admin-clients'
    ),
    'admin.clients.edit' => array(
        'title' => 'Редактирование клиентов',
        'route' => 'admin-clients:edit',
        'parent' => 'admin.clients.index'
    ),
    'admin.clients.create' => array(
        'title' => 'Добавление клиентов',
        'route' => 'admin-clients:create',
        'parent' => 'admin.clients.index'
    ),

    'admin.managers.index' => array(
        'title' => 'Список менеджеров',
        'route' => 'admin-managers'
    ),
    'admin.managers.edit' => array(
        'title' => 'Редактирование менеджеров',
        'route' => 'admin-managers:edit',
        'parent' => 'admin.managers.index'
    ),
    'admin.managers.create' => array(
        'title' => 'Добавление менеджеров',
        'route' => 'admin-managers:create',
        'parent' => 'admin.managers.index'
    ),
    'admin.main.index' => array(
        'title' => 'Главная страница',
        'route' => 'admin-main'
    ),
    'admin.main.edit' => array(
        'title' => 'Редактирование главной страницы',
        'route' => 'admin-main:edit',
        'parent' => 'admin.main.index'
    ),
    'admin.main.create' => array(
        'title' => 'Добавление информации на гравную страницу',
        'route' => 'admin-main:create',
        'parent' => 'admin.main.index'
    ),
    'admin.brief.index' => array(
        'title' => 'Список заявок',
        'route' => 'admin-brief'
    ),
    'admin.brief.edit' => array(
        'title' => 'Редактирование заявок',
        'route' => 'admin-brief:edit',
        'parent' => 'admin.brief.index'
    ),
    'admin.brief.create' => array(
        'title' => 'Добавление заявки',
        'route' => 'admin-brief:create',
        'parent' => 'admin.brief.index'
    ),
    'admin.service.index' => array(
        'title' => 'Список услуг',
        'route' => 'admin-service'
    ),
    'admin.service.edit' => array(
        'title' => 'Редактирование услуги',
        'route' => 'admin-service:edit',
        'parent' => 'admin.service.index'
    ),
    'admin.service.create' => array(
        'title' => 'Добавление услуги',
        'route' => 'admin-service:create',
        'parent' => 'admin.service.index'
    ),

    'admin.service_section.index' => array(
        'title' => 'Список категорий услуг',
        'route' => 'admin-service_section'
    ),
    'admin.service_section.edit' => array(
        'title' => 'Редактирование категории услуги',
        'route' => 'admin-service_section:edit',
        'parent' => 'admin.service_section.index'
    ),
    'admin.service_section.create' => array(
        'title' => 'Добавление категории услуги',
        'route' => 'admin-service_section:create',
        'parent' => 'admin.service_section.index'
    ),

    'admin.discounts.index' => array(
        'title' => 'Список акций',
        'route' => 'admin-discounts'
    ),
    'admin.discounts.edit' => array(
        'title' => 'Редактирование  акции',
        'route' => 'admin-discounts:edit',
        'parent' => 'admin.discounts.index'
    ),
    'admin.discounts.create' => array(
        'title' => 'Добавление акции',
        'route' => 'admin-discounts:create',
        'parent' => 'admin.discounts.index'
    ),
);