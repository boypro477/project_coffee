<?php
require("v_header_admin.php");
?>
<style>
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

<form method="post" action="?page=productTypeAdmin&action=update" enctype="multipart/form-data"> <!-- Bổ sung khi có upload file -->
<table style="margin-top:10%; margin-left:30%">
    <tr>
        <td>Loại đồ uống</td>
        <td><input type="text" name="name" value="<?=$productType['name'] ?>" /></td>
    </tr>
    <tr>
        <td>Mô tả</td>
        <td><input type="text" name="description" value="<?=$productType['description'] ?>" /></td>
    </tr>
    <tr>
        <td>Hình minh họa</td>
        <td><input type="file" name="image" /></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="productType" value="Sửa đổi" /></td>
    </tr>
</table>
        <input type="hidden" value="<?=$productType['id'] ?>" name="id" />
</form>
