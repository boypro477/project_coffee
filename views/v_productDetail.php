<?php 
require("v_header_intro.php");
?>
<style>
body{
    background-image: url("./image/order/menu.gif");
}
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
/* }html, body {
    height: 100%;
} */
.productDetail{
    margin-top:10%!important;
    margin:auto;
    border:1px solid black;
}
table td{
    border:1px solid black;
}
table tr:nth-child(n+2){
    padding-left:10px;

}
img {
    /* width:100%; */
    border: 1px solid black;
    /* padding-right:2px; */
}
table caption{
    text-align: center;
    font-weight:bold;
}
form{
    margin-top:10px!important;
    margin-left:35%;
}
form input{
    display: inline-block;
    background-color: #fff !important;
    color: #555 !important;
    box-shadow: 1px 1px 1px 0 #ddd !important;
    border: 1px solid #ccc !important;
    border-radius:4px;
    width:10%;
    
}
.add-to-cart-submit{
    margin-left:5px;
    display: inline-block;
    color: white;
    /* padding: 6px 12px; */
    /* margin-bottom: 0; */
    padding:5px;
    font-size: 14px;
    font-weight: 400;
    background-color: #ff792c;
    border: 1px solid transparent;
    border-radius: 4px;
}
</style>
 <script>
   
            function chuyentrang() {
                alert("Bạn phải đăng nhập mới có thể order");
               window.location="index.php?page=login";
            }
            
          
 
      </script>
<div>
    <table class="productDetail">
     <caption><?=$product["name"]?></caption>
        <tr>
            <td rowspan="5" class="productImage"><img src="<?=$product['image']?>" /></td>
        </tr>
<!--                         
        <tr>
            <td class="productName"><?=$product["name"]?></td>
        </tr> -->
        <tr>
            <td class="productPrice">Size nhỏ: <?=$product["price-small"]?></td>
        </tr>
        <?php if($product['price-big']) {?>
            <tr>
            <td class="productPrice">Size lớn: <?=$product["price-big"]?></td>
        </tr>
        <?php }?>
      
        <tr>
            <td class="productDescription">Thành phần: <?=$product["description"]?></td>
        </tr>
    </table>
    <form method="post" action="?page=your-cart&action=add-to-cart" >
                            
                    Size nhỏ: <input type="text" name="product[add-quantity-small]" value="1" /> <!-- Truyền biến với mảng trong HTML -->
                    <?php if($product['price-big']) {?>
                    Size lớn: <input type="text" name="product[add-quantity-big]" value="0" /> <!-- Truyền biến với mảng trong HTML -->
                    <?php } else {
                       ?>
                    <input type="hidden" name="product[add-quantity-big]" value="0" />

                    <?php }   
                        ?>

                    
                    <?php  if(!empty($_SESSION['login']) and $_SESSION['login'] == 1 ) {    ?> 
                      <input type="submit" class="add-to-cart-submit" value="Đặt hàng" />   

                    <?php } 
                    else {?>
                        <button type="button" class="add-to-cart-submit" onclick="chuyentrang()" > Đặt hàng </button>
                    <?php } ?>
                <input type="hidden" name="product[id]" value="<?=$product["id"]?>" />
                <input type="hidden" name="product[price-small]" value="<?=$product["price-small"]?>" />
                <input type="hidden" name="product[price-big]" value="<?=$product["price-big"]?>" />

                <input type="hidden" name="product[name]" value="<?=$product["name"]?>" />
            </form>   
</div>
     
<?php
require("v_footerNew.php");
?>