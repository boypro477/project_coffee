<?php
include_once('./models/m_function.php');
include_once('./models/m_user.php');
$models = new m_users();
$users = $models->selectAll();

if(!empty($_GET['action']))
{
    $action = $_GET['action'];
    switch ($action)
    {
        case 'insert':
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $phonenumber = $_POST['phonenumber'];
            $fullname = $_POST['fullname'];
            $address = $_POST['address'];

            
            include_once('./models/m_user.php');
            $insert = new m_users;
            if($insert->insert($username, $password, $email, $phonenumber,$address,$fullname))
            {
                require("./views/v_register_success.php");
            }
            else
            {
                require("./views/v_register.php");
                echo "<script>alert('Tên hoặc email đã tồn tại !');</script>";
                
            }
            break;
    }
    
    
}
else
{
    require("./views/v_register.php");
}

?>