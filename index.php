<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// комбо, 
// сеты, роллы, суши , 
// автопицца, 
// бургеры, 
// снеки соусы и топинги



// библиотека маршрутов страниц
$routes = [
  'main' => [
    'controller' => 'controllers/mainController.php',
    'action' => 'showMain'
  ],
  'catolog' => [
    'controller' => 'controllers/catologController.php',
    'action' => 'showCatolog'
  ],
  'contact' => [
    'controller' => 'controllers/contactController.php',
    'action' => 'showContact'
  ],
  'creareAccount' => [
    'controller' => 'controllers/creareAccountController.php',
    'action' => 'showCreareAccount'
  ],
  'cart' => [
    'controller' => 'controllers/cartController.php',
    'action' => 'showCart'
  ],
  'product-details' => [
    'controller' => 'controllers/product-detailsController.php',
    'action' => 'showProd'
  ]
];
$page = $_GET['page'] ?? 'main'; // если page пустой, то будет значение main 
if (isset($routes[$page])) {
  $controllerFile = $routes[$page]['controller'];
  $actionFile = $routes[$page]['action'];
  require $controllerFile;
  $actionFile();
} else {
  require 'controllers/erorrosController.php';
  showError();
}




?>