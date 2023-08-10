<?php
use core\Router;
use src\controllers\HomeController;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/cadastro', 'HomeController@cadastro');
$router->post('/registrar', 'HomeController@registrar');
$router->post('/finalizar', 'HomeController@finalizar');
$router->get('/painel', 'HomeController@painel');
$router->post('/despachar', 'HomeController@despachar');