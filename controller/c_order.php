
<?php 
include("./models/m_function.php");
include("./models/m_product.php");
include("./models/m_user.php");


$models = new m_product();
$product_type=$models->selectAllProductTypes();
// $_SESSION['check_number']=0;

$product = $models->selectAllProduct();
$models2 = new m_users();
@session_start();
// if($_SESSION['cart']['buying-quantities'])
// {
//     $_SESSION['cart']['buying-quantities']=0;
//     $_SESSION['cart']['buying-total']=0;
// }
    
if(!empty($_SESSION['login']) and $_SESSION['login'] == 1 ) { 
    $a= $_SESSION['id'];
    
$users = $models2->selectOne($a);

}
    require("./views/v_order_items.php");
?>