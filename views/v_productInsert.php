<?php
require("v_header_admin.php");
?>
<style>
.caption {
        position: absolute;
        left: 0;
        /* top: 30%; */
        width: 100%;
        /* text-align: center; */
        color: black;
        transition: transform .2s;
    }
    .caption span.border {
        background-color:transparent;
        color: black;
        padding: 18px;
        font-size: 20px;
        /* letter-spacing: 10px; */
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
<form method="post" action="?page=productadmin&action=insert" enctype="multipart/form-data"> <!-- Bổ sung khi có upload file -->
<table style="margin-top:10%; margin-left:30%">
    <tr>
        <td><span class="border">Tên đồ uống</span></td>
        <td><input type="text" name="name" /></td>
    </tr>
    <tr>
        <td><span class="border">Loại đồ uống</span></td>
        <td><select name="productTypeId">
                <option value="0">--Loại đồ uống--</option>  
            <?php foreach($productTypes as $productType) { ?>
                <option value="<?=$productType['id']?>"><?=$productType['name']?></option>            
            <?php } ?>
        
        </select></td>
    </tr>
    <tr>
        <td><span class="border">Mô tả</span></td>
        <td><input type="text" name="description" /></td>
    </tr>
    <tr>
        <td><span class="border">Hình minh họa</span></td>
        <td><input type="file" name="image" /></td>
    </tr>
    <tr>
        <td><span class="border">Giá size nhỏ</span></td>
        <td><input type="text" name="pricesmall" /></td>
    </tr>
    <tr>
        <td><span class="border">Giá size lớn</span></td>
        <td><input type="text" name="pricebig" /></td>
    </tr>
    <tr>
        <td><span class="border">Số lượng</span></td>
        <td><input type="text" name="quantity" /></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="productType" value="Thêm mới" /></td>
    </tr>
</table>
    
</form>

</div>