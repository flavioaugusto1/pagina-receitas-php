<?php

function abort($code){
    http_response_code($code);
    echo "Página não existente.";
    die();
}

function view($view, $data = []){
    require './views/template/app.php';
}

function dd($dump){
    echo "<pre>";
    var_dump($dump);
    echo "</pre>";
    die();
}