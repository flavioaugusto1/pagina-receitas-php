<?
$controller = str_replace('/', '', $_SERVER['REQUEST_URI']);


if(!$controller) $controller = 'index';

if( ! file_exists("controllers/{$controller}.controller.php")){
    abort(404);
}

require "controllers/{$controller}.controller.php";