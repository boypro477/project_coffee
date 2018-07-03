<?php
class m_tuyendung
{
    function m_tuyendung()
    {
        include_once('m_database.php');
    }
    function select_thoigian()
    {
        $con = new database();
        $sql = "SELECT * FROM coffee_thoigian";
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
    function selectAll()
    {
        $con = new database();
        $sql = "SELECT * FROM coffee_tuyendung";
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
    function selectOne($id)
    {
        $con = new database();
        $sql = "SELECT * FROM coffee_tuyendung WHERE id="."'".$id."'";
        $result = $con->select_query($sql);
        return $result;
    }
    function insert($title,$location,$time,$address)
    {
        $con = new database();
        $sql1 = "INSERT INTO coffee_tuyendung (`title`,`location`,`time`,`address`) values(";
        $sql1 .= "'".$title."',";            
        $sql1 .= "'".$location."',";
        $sql1 .= "'".$time."',";
        $sql1 .= "'".$address."')";
        $result = $con->execute_query($sql1);
        return true;
       
    }
    function update($id,$title, $location,$time,$address)
    {
        $con = new database();
        @session_start();
        $sql = "UPDATE coffee_tuyendung SET ";
        $sql .= "`title` = '".$title."',";

        $sql .= "`location` = '".$location."',";
        $sql .= "`time` = '".$time."',";
        $sql .= "`address` = '".$address."'";
             
        $sql .= " WHERE id ="."'".$id."'";
        $result = $con->execute_query($sql);
        return $result;
    }
    function delete($id)
    {
        $con = new database();
        $sql = "DELETE FROM coffee_tuyendung WHERE id = "."'".$id."'";
        $result = $con->execute_query($sql);
        return $result;
    }
   
}
 ?>