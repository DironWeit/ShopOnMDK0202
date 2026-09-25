<?php
if (isset($_GET["page"])) {
  $page = $_GET["page"];
}

require 'vievs/layouts/header.php';
require 'vievs/main.php';
require 'vievs/layouts/footer.php';

?>