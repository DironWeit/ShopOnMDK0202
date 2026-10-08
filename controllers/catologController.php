<?php
require 'config\connectionDb.php';
require 'models\productsModel.php';
require 'models\categoriesModel.php';
require 'models\ingredientsModel.php';
function showCatolog()
{
  global $connection;
  $title = 'Каталог';
  $categories = getAllCategories($connection);
  $ingridients = getAllIngridients($connection);

  $id_cat = isset($_GET['cat_id']) ? (int) $_GET['cat_id'] : null;
  $selectedIngredients = $_GET['ingredients'] ?? [];  // массив id

  if (!empty($selectedIngredients)) {
    // Есть выбранные ингредиенты — фильтруем по ним (OR-логика)
    $products = getProductsByIngredients($connection, $selectedIngredients, $id_cat);
  } elseif ($id_cat) {
    // Только категория
    $products = getProductById($connection, $id_cat);
  } else {
    // Ничего не выбрано — все товары
    $products = getAllProducts($connection);
  }

  require 'vievs/layouts/header.php';
  require 'vievs/catolog.php';
  require 'vievs/layouts/footer.php';
}
?>