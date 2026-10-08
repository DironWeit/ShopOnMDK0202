<?php
function getAllIngridients($connection): array
{
  $sql = "SELECT ingredient_id, ingredient_title
            FROM public.ingredients
            ORDER BY ingredient_title;";
  $statement = $connection->query($sql);
  return $statement->fetchAll();
}