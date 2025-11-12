<?php
require_once __DIR__ . '/../models/coffeeModel.php';

$header = __DIR__ . '/../partials/header.php';
$footer = __DIR__ . '/../partials/footer.php';

function showPage($view){

    global $header;
    global $footer;

    include $header;
    include __DIR__ . "/../views/$view.php";
    include $footer;
}

function showBeverages(){
    global $header;
    global $footer;
    $beverages = getBeverages();
    include $header;
    include __DIR__ . '/../views/menu.php';
    include $footer;
}