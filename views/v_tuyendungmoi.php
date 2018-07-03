<style>
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
       
    </style>
<div style="margin-top: 5%">
    <table class="gridList"border="1">
        <tr class="heading">
        
            <td style="font-size: 20px"><b>Tiêu đề</b></td>
            <td style="font-size: 20px"><b>Vị trí tuyển dụng</b></td>
            <td style="font-size: 20px"><b>Thời gian làm</b></td>
            <td style="font-size: 20px"><b>Địa điểm phỏng vấn</b></td>
            
            </tr>
        <?php $i = 0; foreach($td as $td) { ?>
        <tr>
            <td><?=$td['title']?></td>
            <td><?=$td['location']?></td>
            <td><?=$td['time']?></td>
            <td><?=$td['address']?></td>
            
        <?php }?>
        </tr>
            
    </table>
    
    </div>