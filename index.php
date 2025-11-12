<?php
require_once __DIR__ . '/controllers/siteController.php';

$route = $_GET['route'] ?? 'home';

switch ($route) {
    case 'about':
    case 'home':
    case 'contact':
        showPage($route);
        break;
    case 'menu':
        showBeverages();
        break;
    case 'specials':
        showBeverages();
        break;
    case 'rewards':
        showBeverages();
        break;
    default:
        showPage('404');
}

include $footer;