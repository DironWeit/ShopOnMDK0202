<?php

// ДЗ сайт по тематике АВТОСУШИ. Максимально меняем наш сайт под АтоСуши и по щелчку логотипа надо поподать на главную. В footer надо оставить только 3 пункта Главная, котолог, контакты и что бы по старница переходило. При нажатии на кнопку создать аккаунт, надо подгрусить стр входа ()login)

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