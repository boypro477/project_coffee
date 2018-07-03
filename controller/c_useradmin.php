<?php
include("./models/m_user.php");
$models = new m_users();



if(!empty($_GET['mode']))    
{
    $mode = $_GET['mode'];
    switch($mode)
    {
        case "add":
            require("./views/v_userInsert.php");
            break;        
        case "edit":
            $user = $models->selectOne($_GET['id']);
            if($user)
            {
                require("./views/v_userUpdate.php");
            }
            break;        
        case "delete":
            if(!empty($_GET['id']))
            {
                $id = $_GET['id'];
                $result = $models->delete($id);
                 
                echo "<meta charset='utf-8' /> <script>alert('Xóa thành công');</script>";
                echo "<script>window.location.href='index.php?page=useradmin';</script>";
            }
    }
}
else if(!empty($_GET['action']))
{
    $action = $_GET['action'];
    switch($action)
    {
        case "insert":
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email= $_POST['email'];
            $phonenumber=$_POST['phonenumber'];
            $fullname= $_POST['fullname'];
            $address=$_POST['address'];
            $id = $_POST['id'];
            include_once('./models/m_user.php');
            $insert = new m_users;
            $insert = $models->insert($username, $password, $email, $phonenumber,$address,$fullname);
            if($insert)
            {
                echo "<meta charset='utf-8' /> <script>alert('Thêm mới thành công')</script>";
                echo "<script>window.location.href='index.php?page=useradmin'</script>";
                
            }
            break;
        
            
        case "update":
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email= $_POST['email'];
            $phonenumber=$_POST['phonenumber'];
            $fullname= $_POST['fullname'];
            $address=$_POST['address'];
            // $address= $_POST['address'];

            $id = $_POST['id'];
            
            
            $update = $models->update($id, $username, $password, $email, $phonenumber,$address,$fullname);
            if($update)
            {
                echo "<meta charset='utf-8' /> <script>alert('Sửa thành công')</script>";
                echo "<script>window.location.href='index.php?page=useradmin';</script>";
            }
            break;      
        

    }
}
else
{
    $users = $models->selectAll();
    require("./views/v_user.php");
}



?>