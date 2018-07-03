<?php
class m_news
{
    function m_news()
    {
        include_once("m_database.php");        
    }
    
  
    
    
  
    function selectAll()
    {
        $con = new database();
        $sql = "SELECT * FROM coffee_tintuc";
        $result = $con->select_all_query($sql);
        if($result)
        {
            return $result;
        }
        else
        {
            return false;
        }
    }
    
    function selectOneNew($newId)
    {
        $con = new database();      
        $sql = "SELECT * FROM coffee_tintuc WHERE id = ".$newId;
        $result = $con->select_query($sql);        
        return $result;
    }
    
    function insertNew($title, $content, $image)
    {
        $con = new database();
    
        $sql = "INSERT INTO coffee_tintuc(`title`,`content`, `image`) values(";
        $sql .= "'".$title."',";
        $sql .= "'".$content."',";
        $sql .= "'".$image."')";
       
       
        $result = $con->execute_query($sql);
        return $result;
    }
    
    function updateNew($id, $title, $content, $image)
    {
        $con = new database();
        @session_start();
        $sql = "UPDATE coffee_tintuc SET ";
        $sql .= "`title` = '".$title."',";
        $sql .= "`content` = '".$content."',";
        $sql .= "`image` = '".$image."'";
        $sql .= " WHERE id =".$id;
        

        $result = $con->execute_query($sql);
        return $result;
    }
    
    function deleteNew($id)
    {
        $con = new database();
        $sql = "DELETE FROM coffee_tintuc WHERE id = ".$id;
        $result = $con->execute_query($sql);
        return $result;
    }
    
  
    
   
    
   
    
   
    

}


?>