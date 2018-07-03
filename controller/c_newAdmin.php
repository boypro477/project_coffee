<?php
include("./models/m_new.php");
$models = new m_news();



if(!empty($_GET['mode']))    
{
    $mode = $_GET['mode'];
    switch($mode)
    {
        case "add":
            $new = $models->selectAll();
            require("./views/v_newInsert.php"); 
            break;        
        case "edit":
            $new = $models->selectOneNew($_GET['newId']);
            if($new)
            {
                // $new = $models->selectAll();
                require("./views/v_newUpdate.php");
            }
            break;        
        case "delete":
            if(!empty($_GET['newId']))
            {
                $id = $_GET['newId'];
                $result = $models->deleteNew($id);
                echo " <meta charset='utf-8' /> alert('Xóa thành công');</script>";
                echo "<script>window.location.href='index.php?page=newAdmin'; alert('Xóa thành công');</script>";
                
                
               
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
            $content = $_POST['content'];
          
            $image = $_POST['image'];
            
            // include_once('./models/m_new.php');
            // $insert = new m_news;
            $insert = $models->insertNew($title, $content, $image);
            if($insert)
            {
                echo " <meta charset='utf-8' /> <script>alert('Thêm mới thành công')</script>";
                echo "<script>window.location.href='index.php?page=newList'</script>";
                
            }
            break; 
            
        case "update":
            $title = $_POST['title'];
            $content = $_POST['content'];
            $id = $_POST['newId'];
           
            $image = $_POST['image'];
           
            
            include_once('./models/m_new.php');
            $update = new m_news;
            $update = $models->updateNew($id, $title,$content,$image);
            if($update  )
            {
                echo "<meta charset='utf-8' />  alert('Sửa thành công');</script>";
                echo "<script>window.location.href='index.php?page=newList'; alert('Sửa thành công');</script>";
            }
            break;      
        

    }
}
else
{
    $news = $models->selectAll();
    require("./views/v_newAdmin.php");
}



?>