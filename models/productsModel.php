<?php
function getAllProducts($connection): array
{
  $sql = "SELECT * FROM products;";

  $statment = $connection->query($sql);
  return $statment->fetchAll();



}



?>