<?php
require("v_header_admin.php");
?>
<style>
    .caption {
        position: absolute;
        left: 0;
        top: 30%;
        width: 100%;
        text-align: center;
        color: black;
        transition: transform .2s;
    }
    .caption span.border {
        background-color:transparent;
        color: black;
        padding: 18px;
        font-size: 20px;
        letter-spacing: 10px;
    }
    .form {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 30px;
    }
    input[type=text], select {
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
<div class="caption">
<form method="post" action="?page=useradmin&action=insert" enctype="multipart/form-data"style="margin-top:0%; margin-left:25%"> <!-- Bổ sung khi có upload file -->
<table>
<tr>
        <td><span class="border">Username</span></td>
        <td><input type="text" name="username"  /></td>
    </tr>
    <tr>
        <td><span class="border">Password</span></td>
        <td><input type="text" name="password"  /></td>
    </tr>
    <tr>
        <td><span class="border">Email</span></td>
        <td><input type="text" name="email" /></td>
    </tr>
    <tr>
        <td><span class="border">Phonenumber</span></td>
        <td><input type="text" name="phonenumber" /></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="user" value="Thêm mới" /></td>
    </tr>
</table>
    
</form>
<!-- </div> -->
<?php
require("v_footer.php");
?>