<?php
require './dados.php';

$mostRecent = array_slice($revenues, 0,3);

$view = 'index';
view($view, $mostRecent);