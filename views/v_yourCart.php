<?php 
require("v_header_intro.php");
?>
<style>
/* body{
    background-image: url("./image/order/menu.gif");
} */
/* .navbar-collapse,.container,.navbar-fixed-top{
    background-color:black;
    /* display:float; */
    float:left;
    width:100%;
    color:black;
    /* margin-right:0%!important; */
} */
.navbar-nav li a{
    /* background-color:black; */
    color:black!important;
}

.footer{
    position: absolute;
    bottom: 0;
    width:100%;
}
#mua_hang{
text-decoration: none;
    font-weight:bold;
}
/* }html, body {
    height: 100%;
} */

.gridList
    {
        margin-top:10%;
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
<table class="gridList" border="1">
    <tr class="heading">
        <td>STT</td>
        <td>Hàng hóa</td>
        <td>Size bé</td>
        <td>Đơn giá</td>
        <td>Size lớn</td>
        <td>Đơn giá</td>
        <td>Thành tiền</td>
    </tr>
    <?php
     @session_start();
    if($_SESSION['cart']['buying-quantities'] > 0) {
     $carts = $_SESSION['cart']['products'];
        $i = 1;
        foreach($carts as $cart)
        {        
    ?>
    <tr class="<?php echo ($i%2 == 0)?"odd":"even";   ?>">
        <td><?=$i++ ?></td>
        <td><?=$cart['name'] ?></td>
        <td><?=$cart['add-quantity-small'] ?></td>
        <td><?=$cart['price-small'] ?></td>
        <td><?=$cart['add-quantity-big'] ?></td>
        <td><?=$cart['price-big'] ?></td>
        <td><?=$cart['add-quantity-small']*$cart['price-small']+$cart['add-quantity-big']*$cart['price-big']?></td>
    </tr>
    <?php 
    if($cart===end($carts)){
    ?>
    <tr>
    <td colspan="3">
        <a id="mua_hang" class="purchase" href="?page=your-cart&action=insertInvoice">Mua hàng !</a> 
        </td>   
        <td colspan="3" >
            Tổng tiền:
        </td>
        <td >
        <?=$_SESSION['cart']['buying-total']?>
        </td>    
        
        
    </tr> 
    <?php }?>
      
    <?php }  ?>
</table>
    


    <?php } else {
    ?>
    Bạn chưa mua sản phẩm nào !
    
    <?php }  ?>




<?php
require("v_footerNew.php");
?>