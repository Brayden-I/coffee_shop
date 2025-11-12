<?php
require_once __DIR__ . '/../models/coffeeModel.php';

$header = __DIR__ . '/../paritials/header.php';
$footer = __DIR__ . '/../paritials/footer.php';

function showPage($view){

    global $header;
    global $footer;

    $view = __DIR__ . "/../views/$view.php";
}

function showBeverages(){
    global $header;
    global $footer;
    $beverages = getBeverages();
    include $header;
    include __DIR__ . '/../views/menu.php';
    include $footer;
}