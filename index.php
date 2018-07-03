<?php
if(empty($_GET["page"]))
{
    require("controller/c_index.php");
}
else
{
    $page = $_GET["page"];
    switch($page)
    {   case "productDetail":
            require("controller/c_productDetail.php");
            break;
        case "user";
            require("controller/c_user.php");
            break;
        case "login":
            require("controller/c_login.php");
            break;
        case "register":
            require("controller/c_register.php");
            break;
        case "admin";
            require("controller/c_admin.php");
            break;   
        case "home";
            require("controller/c_index.php");
            break;
        case "introduction";
            require("controller/c_introduction.php");
            break;
        case "menu";
            require("controller/c_menu.php");
            break;
        case "newsList";
            require("controller/c_new.php");
            break;
        case "recuit";
            require("controller/c_recuit.php");
            break;
        case "useradmin";
            require("controller/c_useradmin.php");
            break;
        case "productadmin";
            require("controller/c_productadmin.php");
             break;
        case "productTypeAdmin";
            require("controller/c_productTypeAdmin.php");
            break;
        case "product1";
            require("controller/c_product1.php");
            break;
        case "tuyendung";
            require("controller/c_tuyendung.php");
            break;
        case "newAdmin";
            require("controller/c_newAdmin.php");
            break;
        case "newList";
            require("controller/c_newList.php");
            break;
        case "newsDetail";
            require("controller/c_newDetail.php");
            break;   
        case "order";
            require("controller/c_order.php");
            break;
        case "your-cart";
            require("controller/c_your-cart.php");
            break;
        case "phanhoi";
            require("controller/c_phanhoi.php");
            break;       
        default :
            require("controller/c_index.php");
    }
}

?>
