<?php
function getAllCategories($connection): array
{
  $sql = "SELECT
    c.*,
    COUNT(p.product_id) AS product_count
FROM public.categories c
LEFT JOIN public.products p
    ON p.category_id_categories = c.category_id
GROUP BY c.category_id, c.category_title
ORDER BY c.category_id;";

  $statment = $connection->query($sql);
  return $statment->fetchAll();



}




?>