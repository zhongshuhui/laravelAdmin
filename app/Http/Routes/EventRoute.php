<?php
/**
 * 用户路由
 */
$router->group(['prefix' => 'event'], function($router){
	$router->get('demo', 'EventController@demo');
});

$router->resource('event', 'EventController');