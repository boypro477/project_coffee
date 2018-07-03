<?php
require("v_header_admin.php");
?>

<form method="post" action="?page=newAdmin&action=insert" enctype="multipart/form-data" style="margin-top:10%; margin-left:30%"> <!-- Bổ sung khi có upload file -->
<style>
  .form {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 30px;
            
        }
        input[type=text] {
            width: 100%;
          
            
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=submit] {
            /* width: 100%; */
            background-color: #4CAF50;
            color: white;
            padding: 6px 12px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 40%;
            height:60%;
            font-size: 16px;
            font-weight: 600;
            line-height: 20px;
            white-space: nowrap;
            vertical-align: middle;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }
   
</style>    

<table>

    <tr>
        <td>Tiêu đề</td>
        <td><input type="text" name="title" /></td>
    </tr>
    <tr>
        <td>Nội dung</td>
        <td><label for="content"></label> <textarea name="content" id="content" cols="50" rows="5" value="<?=$new['content'] ?>"  ></textarea></td>
    </tr>
    <tr>
        <td>Hình ảnh</td>
        <td><input type="text" name="image" /></td>
    </tr>
    
    <tr>
        <td></td>
        <td><input type="submit" name="new" value="Thêm mới" /></td>
    </tr>
</table>
    
</form>

