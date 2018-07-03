<?php
require("v_headerNew.php");
?>

    <table class="newDetail">
        <tr>
            <td rowspan="5" class="newImage"><img src="<?=$new['image']?>" /></td>
        </tr>
                        
        <tr>
            <td class="newTitle"><?=$new["title"]?></td>
        </tr>
        <tr>
            <td class="newContent"><?=$new["content"]?></td>
        </tr>
       
       
        

    </table>

    
<?php
require("v_footer.php");
?>