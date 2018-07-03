<?php
class m_users
{
    function m_users()
    {
        include_once('m_database.php');
    }
    
    function selectAll()
    {
        $con = new database();
        $sql = "SELECT * FROM coffee_users";
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
        $sql = "SELECT * FROM coffee_users WHERE id=".$id;
        $result = $con->select_query($sql);
        return $result;
    }
    function insert($username, $password, $email, $phonenumber,$address,$fullname)
    {
        $con = new database();
        $sql = 'SELECT * FROM coffee_users WHERE username ="'.$username.'" or email ="'.$email.'"';
        $result = $con->select_all_query($sql);
        if(!$result)
        {
            $sql1 = "INSERT INTO coffee_users(`username`, `password`, `email`,`phonenumber`,`diachi`,`tenkh`) values(";
            $sql1 .= "'".$username."',";
            $sql1 .= "'".$password."',";
            $sql1 .= "'".$email."',";
            $sql1 .= "'".$phonenumber."',";
            $sql1 .= "'".$address."',";
            $sql1 .= "'".$fullname."')";
            $result = $con->execute_query($sql1);
            return true;
            
        }
        else
        {
            return false;
        }  
    }
    function update($id, $username=null, $password=null, $email=null, $phonenumber=null,$address=null,$fullname=null)
    {
        $con = new database();
        
        $sql = "UPDATE coffee_users SET ";
        $sql .= "`username` = '".$username."',";
        $sql .= "`password` = '".$password."',";
        $sql .= "`email` = '".$email."',";
        $sql .= "`tenkh` = '".$fullname."',";
        $sql .= "`diachi` = '".$address."',";
        $sql .= "`phonenumber` = '".$phonenumber."'";
        $sql .= " WHERE id =".$id;

        $result = $con->execute_query($sql);
        return $result;
    }
    function delete($id)
    {
        $con = new database();
        $sql = "DELETE FROM coffee_users WHERE id = ".$id;
        $result = $con->execute_query($sql);
        return $result;
    }
    function login($username, $password)
    {
        $con = new database();
        $sql = 'SELECT * FROM coffee_users WHERE username = "'.$username.'" and password = "'.$password.'"';
        $result = $con->select_query($sql);
        if($result)
        {
            return $result;
        }
        else
        {
            return false;
        }
    }
}
 ?>