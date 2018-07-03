<?php
require("v_header.php");
?>
<script>
function checkForm()
{
     var username = document.forms['register']["username"].value;
     var password = document.forms['register']["password"].value;
     var confirmPassword = document.forms['register']["confirm"].value;
     var email = document.forms['register']["email"].value;
     
     if(username == '')
     {
        alert('Bạn phải nhập đầy đủ thông tin người dùng');
        document.forms["register"]["username"].focus();
        return false;
     }
     else if(password == '')
     {
        alert('Bạn phải nhập mật khẩu');
        document.forms["register"]["password"].focus();
        return false;
     }
     else if(email == '')
     {
        alert('Bạn phải nhập email');
        document.forms["register"]["email"].focus();
        return false;
     }
     else if(password != confirmPassword)
     {
        alert('Mật khẩu xác nhận chưa khớp !');
        return false;
     }
     else return true;
  
}

</script>
<style>
    .bgimg-1 {
        position: relative;
        opacity: 0.65;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;

    }
    .bgimg-1 {
        background-image: url("http://theme.hstatic.net/1000075078/1000297410/14/banner-about.jpg?v=39");
        min-height: 100%;
    }
    .caption {
        position: absolute;
        left: 0;
        top: 35%;
        width: 100%;
        text-align: center;
        color: black;
        transition: transform .2s;
    }

    .caption span.border {
        background-color:transparent;
        color: #fff;
        padding: 18px;
        font-size: 20px;
        letter-spacing: 10px;
    }
    .form {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 30px;
    }
    input[type=text], [type=password], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        color:black;
    }
    input[type=submit] {
        /* width: 100%; */
        background-color: #ff9900;
        color: white;
        padding: 6px 12px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 60%;
        font-size: 20px;
        font-weight: 600;
        line-height: 20px;
        white-space: nowrap;
        vertical-align: middle;
    }

    input[type=submit]:hover {
        background-color: black;
    }
</style>
<div class="bgimg-1">
    <div class="caption">
<form method="post" name="register" action="?page=login&action=login" onsubmit="return checkForm()">
    <table class="register" style="margin-top:0px; margin-left:25%;">
        <tr>
            <td><span class="border">Username:</span></td>
            <td><input name="username" type="text" /></td>
        </tr> <br>
        <tr>
            <td><span class="border">Password:</span></td>
            <td><input name="password" type="password" /></td>
        </tr>         
        <tr>
            <td></td><br>
            <td><input type="submit" value="Đăng nhập" /></td>
        </tr> 
    </table>
</form>
</div>
</div>

<?php
require("v_footer.php");
?>