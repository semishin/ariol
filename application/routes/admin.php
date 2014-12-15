<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @version SVN: $Id:$
 * @author o.zgolich
 */

$adminPrefix = Kohana::$config->load('extasy')->admin_path_prefix;

Route::set('admin-event_section', $adminPrefix . 'event_section(/<action>(/<id>))')
    ->defaults(array(
        'directory' => 'admin',
        'controller' => 'event_section',
        'action' => 'index'
    ));

Route::set('admin-event', $adminPrefix . 'event(/<action>(/<id>))')
    ->defaults(array(
        'directory' => 'admin',
        'controller' => 'event',
        'action' => 'index'
    ));

Route::set('admin-slides', $adminPrefix . 'slides(/<action>(/<id>))')
    ->defaults(array(
        'directory' => 'admin',
        'controller' => 'slides',
        'action' => 'index'
    ));

Route::set('admin-news_category', $adminPrefix . 'news_category(/<action>(/<id>))')
	->defaults(array(
		'directory' => 'admin',
		'controller' => 'news_category',
		'action' => 'index'
	));

Route::set('admin-news', $adminPrefix . 'news(/<action>(/<id>))')
	->defaults(array(
		'directory' => 'admin',
		'controller' => 'news',
		'action' => 'index'
	));

Route::set('admin-library_category', $adminPrefix . 'library_category(/<action>(/<id>))')
    ->defaults(array(
        'directory' => 'admin',
        'controller' => 'library_category',
        'action' => 'index'
    ));

Route::set('admin-library', $adminPrefix . 'library(/<action>(/<id>))')
    ->defaults(array(
        'directory' => 'admin',
        'controller' => 'library',
        'action' => 'index'
    ));

Route::set('admin-product_category', $adminPrefix . 'product_category(/<action>(/<id>))')
    ->defaults(array(
        'directory' => 'admin',
        'controller' => 'product_category',
        'action' => 'index'
    ));

Route::set('admin-product', $adminPrefix . 'product(/<action>(/<id>))')
    ->defaults(array(
        'directory' => 'admin',
        'controller' => 'product',
        'action' => 'index'
    ));



Route::set('admin-service', $adminPrefix . 'service(/<action>(/<id>))')
	->defaults(array(
		'directory' => 'admin',
		'controller' => 'service',
		'action' => 'index'
	));

Route::set('admin-brief', $adminPrefix . 'brief(/<action>(/<id>))')
    ->defaults(array(
        'directory' => 'admin',
        'controller' => 'brief',
        'action' => 'index'
    ));

Route::set('admin-main', $adminPrefix . 'main(/<action>(/<id>))')
    ->defaults(array(
        'directory' => 'admin',
        'controller' => 'main',
        'action' => 'index'
    ));

Route::set('admin-clients', $adminPrefix . 'clients(/<action>(/<id>))')
    ->defaults(array(
        'directory' => 'admin',
        'controller' => 'clients',
        'action' => 'index'
    ));

Route::set('admin-managers', $adminPrefix . 'managers(/<action>(/<id>))')
    ->defaults(array(
        'directory' => 'admin',
        'controller' => 'managers',
        'action' => 'index'
    ));

Route::set('admin-discounts', $adminPrefix . 'discounts(/<action>(/<id>))')
    ->defaults(array(
        'directory' => 'admin',
        'controller' => 'discounts',
        'action' => 'index'
    ));



Route::set('admin-service_section', $adminPrefix . 'service_section(/<action>(/<id>))')
    ->defaults(array(
        'directory' => 'admin',
        'controller' => 'service_section',
        'action' => 'index'
    ));
	
	
Route::set('admin-callback', $adminPrefix.'callback(/<action>(/<id>))')
        ->defaults(array(
		'directory' => 'admin',
		'controller' => 'callback',
		'action' => 'index'
	));