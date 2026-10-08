<?php
function getAllIngridients($connection): array
{
  $sql = "SELECT ingredient_id, ingredient_title FROM ingredients;";

  $statment = $connection->query($sql);
  return $statment->fetchAll();



}




?>