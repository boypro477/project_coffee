<?php
include("./models/m_function.php");
include("./models/m_new.php");

$models = new m_news();
$new = $models->selectAll();


$newId = null;
if(!empty($_GET['id']))
{
    $newId = $_GET['id'];
}
$newList = $models->selectAll();

require("./views/v_newList.php");

?>