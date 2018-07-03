<?php
include_once('./models/m_product.php');
$models = new m_product();
$productTypes = $models->selectAllProductTypes();
$products = $models->selectAllProduct();
require("./views/v_product1.php");
?>