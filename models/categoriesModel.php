<?php
function getAllCategories($connection): array
{
  $sql = "select * from categories;";

  $statment = $connection->query($sql);
  return $statment->fetchAll();



}



?>