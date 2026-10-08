<?php
require 'config\connectionDb.php';
require 'models\productsModel.php';
require 'models\categoriesModel.php';
function showProd()
{
  global $connection;
  $id = $_GET['id_product'];
  $title = 'Страница товара';
  $product = getProductById($connection, $id);
  require 'vievs/layouts/header.php';
  require 'vievs/product-details.php';
  require 'vievs/layouts/footer.php';
}
?>