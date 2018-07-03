<?php
include("./models/m_new.php");
include("./models/m_function.php");
$models = new m_news();
$new = $models->selectAll();




if(!empty($_GET["id"]))
{
    $newId = $_GET["id"];
    $new = $models->selectOneNew($newId);
    require("./views/v_newDetail.php");
}
else
{
    require("./views/v_index.php");
}



?>