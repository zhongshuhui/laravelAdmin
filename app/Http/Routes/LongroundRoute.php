<?php
/**
 * 用户路由
 */
$router->group(['prefix' => 'longround'], function($router){
	$router->get('demo', 'LongroundController@demo1');
    $router->get('demo2', 'LongroundController@demo2');
});

$router->resource('longround', 'LongroundController');