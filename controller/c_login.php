<?php
include_once('./models/m_product.php');
$models = new m_product();
$productTypes = $models->selectAllProductTypes();
session_start(); 
if(!empty($_GET['action']))
{
    $action = $_GET['action'];
    switch ($action)
    {
        case 'login':
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            include_once('./models/m_user.php');
            $user = new m_users;
            $row = $user->login($username, $password);

            if($row)
            {   //Khởi tạo các session cần thiết

                $_SESSION['login'] = 1; // Đánh dấu là đã đăng nhập
                $_SESSION['cart']['products'] = array(); //Khai báo session giỏ hàng
                
                
                //Lưu một số thông tin cần thiết của người đang đăng nhập
                $_SESSION['username'] = $row['username'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['isadmin'] = $row['isadmin'];

                echo "<meta charset='utf-8' /> <script>alert('Đăng nhập thành công !')</script>";
                echo "<script>window.location.href = 'http://localhost:80/coffeehouse/index.php'</script>";   
          

            }
            else
            {
                require("./views/v_login.php");
                echo " <meta charset='utf-8' /> <script>alert('Tên hoặc mật khẩu không tồn tại !')</script>";
            }
            break;
        case 'logout':
 
            session_destroy();
            echo "<script>window.location.href = 'http://localhost:80/coffeehouse/index.php'</script>";  
            break;
    }
    
    
}
else if(empty($_SESSION['login']))
{
    require("./views/v_login.php");
}
else
{
    require("./views/v_index.php");
}

?>