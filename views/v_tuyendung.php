
<?php
require("v_header.php");
?>
<style>

    .gridList .odd
    {
        background-color:#FFFFFF;  
    }

    .gridList .even
    {
        background-color: orange;    
    }
        .gridList
        {
            width: 100%;
            border-collapse: collapse;    
            border-bottom:hidden;
            border-top:hidden;
            border-left:hidden;
            border-right:hidden;
            border-color:#999999;  
        }
        .footer {
        background-color: #111111;
        padding: 20px;
        text-align: center;
        margin-top:20px;
        color: white;
        }
    </style>
    <div style="margin-top: 5%">
        <table class="gridList" border="2">
            <caption><b style="font-size:50px;" >QUẢN LÝ TUYỂN DỤNG<b></caption>
            <div style="font-size:20px;padding: 20px">
               <tr> <td colspan="4" align="right" ><a href="?page=tuyendung&mode=add" ><img src="https://www.flaticon.com/premium-icon/icons/svg/896/896667.svg" width="50px">Thêm mới</a></td></tr></div>
            <tr class="heading">
            
                <td><b style="font-size:20px ">STT</b></td>
                <td><b style="font-size: 20px">Tiêu đề</b></td>
                <td><b style="font-size: 20px">Vị trí tuyển dụng</b></td>
                <td><b style="font-size: 20px">Thời gian làm<b></td>
                <td><b style="font-size: 20px">Địa điểm phỏng vấn</b></td></b>
                <td colspan="2"> <b style="font-size: 25px">Xử lý </td> 
                
            
            <?php $i = 0; foreach($td as $td) { ?>
            <tr class="<?php echo ($i%2 == 1)?"odd":"even";   ?>">
                <td><?=++$i?></td>
                <td><?=$td['title']?></td>
                <td><?=$td['location']?></td>
                <td><?=$td['time']?></td>
                <td><?=$td['address']?></td>
                
                <td><a href="?page=tuyendung&mode=edit&id=<?=$td['id']?>"><img src="https://image.flaticon.com/icons/svg/806/806647.svg" width="30px">Sửa</a></td>
                <td><a href="?page=tuyendung&mode=delete&id=<?=$td['id']?>"><img src="https://image.flaticon.com/icons/svg/138/138275.svg" width="30px">Xóa</a></td>
            </tr>
                <?php }?>
                </table>
    
    </div>
    <div class="footer"style="margin-top:8%">
        <img src="http://theme.hstatic.net/1000075078/1000297410/14/logo.png?v=39" width="25%">
            <p> Contact Us<br>
                Hotline Nhân sự: ‎(028) 71078079 Ext:500<br>
                Email: tch@thecoffeehouse.vn<br>
                Website: http://www.thecoffeehouse.com/<br>
                Facebook: https://www.facebook.com/The.Coffee.House.2014</p>
    </div>
    </body>