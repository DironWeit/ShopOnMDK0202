<?php
require 'config\connectionDb.php';
require 'models\productsModel.php';
require 'models\categoriesModel.php';
require 'models\ingridientsModel.php';
function showCatolog()
{
  global $connection;
  $title = 'Каталог';
  $categories = getAllCategories($connection);
  $ingridients = getAllIngridients($connection);

  if (!isset($_GET['cat_id'])) {
    $products = getAllProducts($connection);
  } else {
    $id_cat = $_GET['cat_id'];
    $products = getProductById($connection, $id_cat);

  }

  require 'vievs/layouts/header.php';
  require 'vievs/catolog.php';
  require 'vievs/layouts/footer.php';
}
?>