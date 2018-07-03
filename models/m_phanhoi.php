<?php
class m_phanhoi
{
    function m_phanhoi()
    {
        include_once("m_database.php");        
    }
    function selectAll()
    {
        $con = new database();
        $sql = "SELECT * FROM coffee_phanhoi";
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
    function insert($name, $email, $comment)
    {
        $con = new database();
        $sql1 = "INSERT INTO coffee_phanhoi(`name`, `email`,`comment`) values(";
        $sql1 .= "'".$name."',";
        $sql1 .= "'".$email."',";
        $sql1 .= "'".$comment."')";
        $result = $con->execute_query($sql1);
        return true;    
    }
}