<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @version SVN: $Id:$
 * @author o.zgolich
 */

Route::set('site-index', '')
	->defaults(array(
		'directory' => 'site',
		'controller' => 'index',
		'action' => 'index',
		'menu' => true,
		'name' => 'Главная'
	));

Route::set('site-brif', 'brif')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'index',
        'action' => 'brif'
    ));

Route::set('site-kontaktyi', 'kontaktyi')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'page',
        'action'     => 'kontaktyi',
    ));

Route::set('site-o-kompanii', 'o-kompanii')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'page',
        'action'     => 'okompanii',
    ));

Route::set('site-articles', 'articles(/<page>)', array ('page' => '\d+'))
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'article',
        'action'     => 'index',
    ));

Route::set('site-articles-more', 'articles/more')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'article',
        'action'     => 'more',
    ));

Route::set('site-article', 'articles/<url>')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'article',
        'action'     => 'item',
    ));

Route::set('site-portfolio-more', 'portfolio/more')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'ourproduct',
        'action'     => 'more',
    ));

Route::set('site-portfolio-category', 'portfolio/category')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'ourproduct',
        'action'     => 'category',
    ));


Route::set('site-ourproducts', 'portfolio')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'ourproduct',
        'action'     => 'index',
    ));

Route::set('site-ourproduct', 'portfolio/<url>')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'ourproduct',
        'action'     => 'item',
    ));

Route::set('site-feedb', 'feedb/add')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'feedb',
        'action'     => 'add',
    ));

Route::set('site-brief', 'brief/add')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'brief',
        'action'     => 'add',
    ));

Route::set('site-service-item', 'service/<url>')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'service',
        'action'     => 'item',
    ));




Route::set('site-comment', 'comment')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'comment',
        'action'     => 'index',
    ));

Route::set('site-comments', 'comments/add')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'comment',
        'action'     => 'add',
    ));

Route::set('site-service', 'service/<url>(/<page>)')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'service',
        'action'     => 'category',
    ));

Route::set('site-page', '<url>', array('url' => '.*'))
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'page',
        'action'     => 'index',
    ));
/*
Route::set('site-search', 'search(/<page>)', array('page' => '\d+'))

    ->defaults(array(
        'directory' => 'site',
        'controller' => 'search',
        'action' => 'index',
    ));

Route::set('site-callback', 'request/callback')
	->defaults(array(
		'directory' => 'site',
		'controller' => 'contact',
		'action'     => 'callback',
	));
	
Route::set('site-contacts', 'about-us/contacts')
	->defaults(array(
		'directory' => 'site',
		'controller' => 'contact',
		'action'     => 'index',
	));
	
Route::set('site-thanks', 'thanks')
	->defaults(array(
		'directory' => 'site',
		'controller' => 'index',
		'action'     => 'thanks',
	));
	
Route::set('site-contacts-callback-ajax', 'feedback/callback/ajax')
	->defaults(array(
		'directory' => 'site',
		'controller' => 'contact',
		'action'     => 'callbackajax',
	));
	
Route::set('site-contacts-ajax', 'feedback/ajax')
	->defaults(array(
		'directory' => 'site',
		'controller' => 'contact',
		'action'     => 'ajax',
	));


*/