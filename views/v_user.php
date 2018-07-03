<?php
require("v_header.php");
?>
<style>
    .gridList
    {
        width: 100%;
        text-align:center;
        border-collapse: collapse;    
        border-bottom:hidden;
        border-top:hidden;
        border-left:hidden;
        border-right:hidden;
        border-color:#999999;
        transition: transform .2s;
    }

    .gridList .heading
    {
        font-size: 18px;
        font-weight:bold;
        text-align:center;
        font-family: 'Source Sans Pro', sans-serif;
    }

    .gridList .odd
    {
        background-color:#FFFFFF;  
    }

    .gridList .even
    {
        background-color: orange;    
    }

    .gridList td
    {
        padding: 10px;
    }
    .gridList tr:hover {
        -ms-transform: scale(1.05); /* IE 9 */
            -webkit-transform: scale(1.05); /* Safari 3-8 */
            transform: scale(1.05);
        }
    
</style>
     <div style="text-align:center; margin-top:100px;font-size:25px;"><b>QUẢN LÝ NGƯỜI DÙNG</b></div>
    <table class="gridList" border="1" style="margin-top:5%">
        <tr class="heading">
            <td>STT</td>
            <td>USERNAME</td>
            <td>EMAIL</td>
            <td colspan="2">XỬ LÝ</td>
        </tr>
        <?php $i = 0; foreach($users as $user) { ?>
        <tr class="<?php echo ($i%2 == 1)?"odd":"even";   ?>">
            <td><?=++$i?></td>
            <td><?=$user['username'] ?></td>
            <td><?=$user['email']?></td>
            <td><a href="?page=useradmin&mode=edit&id=<?=$user['id']?>">Sửa</a></td>
            <td><a href="?page=useradmin&mode=delete&id=<?=$user['id']?>">Xóa</a></td>
        </tr>
        <?php } ?>
        <tr class="<?php echo ($i%2 == 1)?"odd":"even";   ?>">
            <td colspan="4" align="right" ><a href="?page=useradmin&mode=add">Thêm mới</a></td>
        </tr>
    </table>









<?php
require("v_footer.php");
?>