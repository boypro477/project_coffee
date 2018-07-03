
<?php
require("v_headerNew.php");
?>
<style>
    .gridList
{
    width: 95%;
    border-collapse: collapse;    
	border-bottom:hidden;
	border-top:hidden;
	border-left:hidden;
	border-right:hidden;
	border-color:#999999;
    margin-left: 5%;
}

.gridList .heading
{
    font-size: 18px;
	font-weight:800;
	text-align:center;
    
}

.gridList .odd
{
    background-color:#FFFFFF;  
}

.gridList .even
{
    background-color: #C8D52B;    
}

.gridList td
{
	padding: 10px;
}
</style>
<table class="gridList" border="1" width="100%">
    <tr class="heading">
        <td>STT</td>
        <td>Tin tức</td>
        <td colspan="2">Xử lý</td>
    </tr>
    <?php $i = 0; foreach($news as $new) { ?>
    <tr class="<?php echo ($i%2 == 1)?"odd":"even";   ?>">
        <td><?=++$i?></td>
        <td><?=$new['title'] ?></td>
        <td><a href="?page=newAdmin&mode=edit&newId=<?=$new['id']?>">Sửa</a></td>
        <td><a href="?page=newAdmin&mode=delete&newId=<?=$new['id']?>">Xóa</a></td>
    </tr>
    <?php } ?>
    <tr class="<?php echo ($i%2 == 1)?"odd":"even";   ?>">
        <td colspan="4" align="right" ><a href="?page=newAdmin&mode=add">Thêm mới</a></td>
    </tr>
</table>

