<?php
require 'config\connectionDb.php';
require 'models\productsModel.php';
require 'models\categoriesModel.php';
function showCatolog()
{
  global $connection;
  $title = 'Каталог';
  $products = getAllProducts($connection);
  $categories = getAllCategories($connection);
  require 'vievs/layouts/header.php';
  require 'vievs/catolog.php';
  require 'vievs/layouts/footer.php';
}
?>