<?php
function getAllProducts($connection): array
{
  $sql = "SELECT
    p.product_id,
    p.product_title,
    p.price,
    p.description,
    p.image,
    c.category_title,
    STRING_AGG(i.ingredient_title, ', ' ORDER BY i.ingredient_title) AS ingredients
FROM public.products p
LEFT JOIN public.categories c
    ON c.category_id = p.category_id_categories
LEFT JOIN public.product_ingredients pi
    ON pi.product_id = p.product_id
LEFT JOIN public.ingredients i
    ON i.ingredient_id = pi.ingredient_id
GROUP BY
    p.product_id,
    p.product_title,
    p.price,
    p.description,
    p.image,
    c.category_title
ORDER BY p.product_id;";

  $statment = $connection->query($sql);
  return $statment->fetchAll();
}


function getProductById($connection, $id): array
{
  $sql = "SELECT
    p.product_id,
    p.product_title,
    p.price,
    p.description,
    p.image,
    c.category_title,
    STRING_AGG(i.ingredient_title, ', ' ORDER BY i.ingredient_title) AS ingredients
FROM public.products p
LEFT JOIN public.categories c
    ON c.category_id = p.category_id_categories
LEFT JOIN public.product_ingredients pi
    ON pi.product_id = p.product_id
LEFT JOIN public.ingredients i
    ON i.ingredient_id = pi.ingredient_id
    WHERE p.category_id_categories = $id
GROUP BY
    p.product_id,
    p.product_title,
    p.price,
    p.description,
    p.image,
    c.category_title
ORDER BY p.product_id;";

  $statment = $connection->query($sql);
  return $statment->fetchAll();

}



?>