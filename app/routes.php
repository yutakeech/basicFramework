<?php
// Файл сопоставления входящего запроса и имеющихся, подключается в composer.json

// use \Framework\Routing\Route;
// use \Framework\Routing\Router;

// Router::addRoute(new Route('hello', 'HelloController@index', Route::METHOD_GET));
// Router::addRoute(new Route('data', 'HelloController@data', Route::METHOD_GET));
// Router::addRoute(new \Framework\Routing\Route('user/{user_name}/group/{group_name}', 'HelloController@data', Route::METHOD_GET));

namespace Framework\Routing;
Router::addRoute(new \Framework\Routing\Route('hello', 'getHello', Route::METHOD_GET));
