<?php

function abort($code){
    http_response_code($code);
    echo "Página não existente.";
    die();
}

function view($view, $revenues = []){
    if($view === 'revenue') {
        foreach($revenues as $key => $value){
            $$key = $value;
        }
    }
    require './views/template/app.php';
}

function dd($dump){
    echo "<pre>";
    var_dump($dump);
    echo "</pre>";
    die();
}