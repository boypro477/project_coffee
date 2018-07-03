<?php
include("./models/m_tuyendung.php");
$models = new m_tuyendung();



if(!empty($_GET['mode']))    
{
    $mode = $_GET['mode'];
    switch($mode)
    {
        case "add":
            $td = $models->select_thoigian();
            require("./views/v_tuyendungthem.php");
            break;        
        case "edit":
            $td = $models->selectOne($_GET['id']);
            if($td)
            { 
                $tg = $models->select_thoigian();
                require("./views/v_tuyendungsua.php");
            }
            break;        
        case "delete":
            if(!empty($_GET['id']))
            {
                $id = $_GET['id'];
                $result = $models->delete($id);
                 
                echo "<meta charset='utf-8' /> <script>alert('Xóa thành công');</script>";
                echo "<script>window.location.href='index.php?page=tuyendung';</script>";
            }
    }
}
else if(!empty($_GET['action']))
{
    $action = $_GET['action'];
    switch($action)
    {
        case "insert":
            $title = $_POST['title'];
            $location = $_POST['location'];
            $time = $_POST['id'];
            $address= $_POST['address']; 
            // $id = $_POST['id'];
            include_once('./models/m_tuyendung.php');
            $insert = new m_tuyendung;
            $insert = $models->insert($title, $location,$time,$address);
            if($insert)
            {
                echo "<meta charset='utf-8' /> <script>alert('Thêm mới thành công')</script>";
                echo "<script>window.location.href='index.php?page=tuyendung'</script>";
                
            }
            break;
        
            
        case "update":
            $title = $_POST['title'];
            $location = $_POST['location'];
            $time = $_POST['id_tg'];
            $address= $_POST['address'];
            $id = $_POST['id'];
            include_once('./models/m_tuyendung.php');
            $update = new m_tuyendung;
            $update = $models->update($id,$title, $location, $time, $address);
            if($update)
            {
                echo "<meta charset='utf-8' /> <script>alert('Sửa thành công')</script>";
                echo "<script>window.location.href='index.php?page=tuyendung';</script>";
            }
            break;      
        

    }
}
else
{
    $td = $models->selectAll();
    require("./views/v_tuyendung.php");
}



?>