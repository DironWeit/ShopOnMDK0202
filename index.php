<?php

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