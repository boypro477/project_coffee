<?php
include("./models/m_function.php");
include("./models/m_phanhoi.php");
$models = new m_phanhoi();
$phanhoi = $models->selectAll();


if(!empty($_GET['action']))
{
    $action = $_GET['action'];
    switch($action)
    {
        case "insert":
            $name = $_POST['name'];
            $email = $_POST['email'];
          
            $comment = $_POST['comments'];
            
            $insert = $models->insert($name, $email, $comment);
            if($insert)
            {
                echo " <meta charset='utf-8' /> <script>alert('Đã gửi phản hồi cho quản trị viên! Cảm ơn những đóng góp của bạn!')</script>";
                echo "<script>window.location.href='index.php?page=home'</script>";
                
            }
            break; 
    }
}
else
require("./views/v_phanhoi.php");

?>