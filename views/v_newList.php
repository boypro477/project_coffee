<?php
require("v_headerNew.php");
?>
<style>
@import url('https://fonts.googleapis.com/css?family=Roboto+Slab');

 a:hover{
  color: #E9633B;
  text-decoration: none;
}
a{
  color: black;
  text-decoration: none;
}
</style> 
    <div>
        <table  width="100%" border="0" class="newGrid">
        <?php if($newList) { $i=0;  foreach($newList as $new) {            
           
            $i++;
        ?>     
        
            <tr class="newCell">
           
           
            <td rowspan="2" class="newImage"><a href="<?=$new['id']?>"><img  width="341px" height="320" src="<?=$new['image']?>" /></a> </td>
            <td  class="newTitle" style="font-family:Roboto Slab, serif; font-size: 20px "  ><a  href="<?=$new['id']?>"><?=$new["title"]?></a></td>
            </tr>
            <tr>
            <td class="content" style="font-family:Roboto Slab, serif "><?=$new['content']?></td>
            
            </tr>

            
            
         
        
        <?php
        
        } 
        }
        ?>


        </table>    
    </div>







<?php
require("v_footerNew.php");
?>