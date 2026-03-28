<?php
require './dados.php';

$id = $_REQUEST['id'];

$revenue = array_filter($revenues, function ($v) use ($id) {
    return $v['id'] == $id;
});


$view = 'revenue';

view($view, $revenue);