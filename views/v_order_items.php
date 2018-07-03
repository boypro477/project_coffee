<!DOCTYPE html>
<html lang="en">

<head>
    <title>Giỏ hàng</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="./css/oder_style.css"> -->
    <script>           
   
        $(document).ready(function () {
            $(".radio2").click(function(){
                // alert("Hello! I am an alert box!!");
                $( ".input-gio,.input-phut" ).removeClass( "input-an" );
            });
            $(".radio1").click(function(){
                $( ".input-gio, .input-phut" ).addClass( "input-an" );
            });
            // $("#payment-btn").click(function(){
            //     var radios = document.getElementsByClass('.radio2');
            //     if(radios.checked)
            //         {
            //             if(document.getElementsByClass('.input-gio').value=='')
            //                 alert("Bạn phải chọn giờ giao hàng");
            //         }
            // });
        });
        function checkForm()
{
    //  var username = document.forms['register']["username"].value;
    

     if(document.getElementById('radio_2').checked)
     {  
        if(document.getElementById('input-gio_2').value==''||document.getElementById('input-phut_2').value==''){
            alert('Bạn phải chọn giờ giao hàng');  
        return false;
        }
       
     }
   
  
    //  else return true;
  
}

    </script>
 
   <style>
        
/* .add_cup1, */
.mouse_hover:hover {
    cursor: pointer!important;
    background-color: rgb(0, 255, 42);
}

/* Set height of the grid so .sidenav can be 100% (adjust if needed) */

.row.content {
    height: 1500px
}

/* Set gray background color and 100% height */

.sidenav {
    background-color: #f1f1f1;
    height: 100%;
}

/* Set black background color, white text and some padding */

footer {
    background-color: #555;
    color: white;
    padding: 15px;
    
}

/* On small screens, set height to 'auto' for sidenav and grid */

@media screen and (max-width: 767px) {
    .sidenav {
        height: auto;
        padding: 15px;
    }
    .row.content {
        height: auto;
    }
}

.col-sm-4 {
    background-image: url("./image/order/main-left.gif");
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    right: 0;
}

.col-sm-8 {
    background-image: url("./image/order/menu.gif");
}

.card-header {
    background-color: white;



}


.col-6 img {
    display: block;
    width: 50%;
    margin-top: 20%;
    margin-left: auto;
    margin-right: auto;
    position: relative;
}

.col-6 i {
    color: white;
    max-width: 50%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);

}

.btn-link {
    text-align: left;
    color: orange;
    font-weight: bold;
}

.price-cup {
    text-align: center;
}

.title {
    text-align: center;
}

.cam {
    color: #ff792c;
}

.title p {
    padding-bottom: 5%;
}

.title h3 {
    padding-top: 15%;
    font-weight: 400;
    font-size: 20px;
}

.title {
    font-weight: bold;
}

/* .content {
    display: inline-block;
} */

.tch {
    margin-top: 0 !important;
    width: 100% !important;
    margin-left: 7% !important;
    border: 4px solid #fff;
    border-radius: 5px;
}

.notes {
    font-size: 12px;
}

.col-6 ul li span.icon {
    display: inline-block;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    text-align: center;
    line-height: 20px;
    margin-right: 5px;
    border: 1px solid #fff;
    font-size: 13px;
}

.notes {
    margin-left: 10%;
}

/* Css order list */

.title-menu {
    margin-top: 20%;
    text-align: center;
}

/* css right menu */

/* .col-sm-4{
    display: flex;
    justify-content: center;
    align-items: center;
} */

.user-avatar {
    width: 30px !important;
    height: 30px !important;
    border-radius: 50% !important;
    /* display: inline-block;
    float: left; */
    background-size: cover !important;
    display: inline-block;
}

.footer-profile {
    padding-bottom: 10px;
    padding-top: 11px;
    padding-left: 20px;
    background-color: #555;
    color: #fff;
}

.div-hotline {

    position: absolute;
    right: 0;
    bottom: 50px;
    z-index: 9999;
    width: 100%;
    background-color: #444;
    text-align: right;
    padding: 5px 10px;
}

.div-hotline>div {
    display: inline-block;
    padding-left: 10px;
    color: #fff;
    font-size: 12px;
}

.div-hotline .hotline {
    color: #ff792c;
    font-weight: 700;
    font-size: 14px;
}

label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
    text-align: center;
    margin: 4%;
}

.input-info {
    display: inline-block;
    background-color: #fff !important;
    color: #555 !important;
    box-shadow: 1px 1px 1px 0 #ddd !important;
    border: 1px solid #ccc !important;
    /* margin: 5%; */
}

.input-name,
.input-quanhuyen {
    width: 40% !important;
    margin-right: 4%;
}

.input-phone,
.input-thanhpho {
    width: 40% !important;
}

.input-email,
.input-diachi {
    width: 85% !important;
}
 /* Css giờ phút */
 .input-gio,.input-phut{
    width: 40% !important;

 }
 .input-an{
    display:none;
 }
.header img {
    width: 70%;
    margin-left: 10%;
    margin-top: 4%;
    /* margin-top: 2%; */
}

/* .col-sm-4Ơ */

.col-sm-4 {
    position: fixed;
    right: 0;
    top: 0;
}

.footer-profile {
    width: 33.5%;
    position: fixed;
    bottom: 0;
    right: 0;
}

#quy2{
    margin: 4px;
}
#quy2 img{
    width: 80%!important;
}
#number_cup, #result_cup{
    margin-left: 5px;
    margin-right: 5px;
    font-size: 25px;
    margin-top: 13px;
}

#nhan {
    color: #ff792c;
    margin-top: 18px;
    
}
.equal-icon{
width: 60%;
margin-top: 18px;
margin-left: 10px;        
margin-right: 10px;
}
#payment-btn {
    margin: 10% ;
    margin-left: 30%;
    display: inline-block;
    color: white;
padding: 6px 12px;
margin-bottom: 0;
font-size: 14px;
font-weight: 400;
background-color: #ff792c;
border: 1px solid transparent;
border-radius: 4px;
}
 /* Bỏ gạch chân */
a{
    /* color:teal; */
    display:inline-block;
    text-decoration: none;
    /* float:left; */
}
    /* bỏ gạch chân và màu chữ cam */
.cam a{
    color: #ff792c;
    text-decoration: none;


}
    /* Đổi màu chữ trong giá */
.col-3 a{
color:black;
text-decoration: none;

}
    /* đổi màu chữ trong name user */
.name-user a{
    color:white;
text-decoration: none;
}
#payment-btn a{
text-decoration: none;
color:#ffffff;
}
    /* căn heading ảnh product */
.panel-heading{
    text-align:center;
    overflow: auto; /* tự động */
    overflow: scroll; /* thanh cuộn */
    overflow: hidden; /* ẩn đi */
}
 /* căn footer ảnh product */
.panel-footer{
    font-size: 2vmin;

}
        </style>

</head>

<body>

    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-8">
                <div class="first_layout">
                    <div class="title">
                        <h3 id="test">ĐẶT HÀNG VÀ GIAO TẬN NƠI TẠI</h3>
                        <a href="index.php">
                        <h2>THE COFFEE HOUSE DELIVERY</h2>
                        </a>
                        <p>Đừng quên
                            <span class="cam"><a href="?page=login&">Đăng nhập</a></span> vào tài khoản
                            <span class="cam">The Coffee House Rewards</span> của bạn để tích điểm và nhận các ưu đãi nhé!</p>
                    </div>
                    <div class="content">
                        <!-- Form đăng nhập -->
                        <!-- <div class="modal-content modal-login" id="loginModalContent" >
                            <div class="modal-body" >
                                <i class="fa fa-times hide-login" aria-hidden="true" ></i>
                                <div class="title-login">ĐĂNG NHẬP</div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="username-login" placeholder="Email" >
                                </div>
                                <div class="form-group" >
                                    <input type="password" class="form-control" id="password-login" placeholder="Password" >
                                </div>
                                <div class="alert alert-danger message-warning" ></div>
                            </div>
                            <div class="social-login" data-reactid=".0.6.0.0.1">
                                <a class="btn btn-block btn-social btn-facebook" id="login-fb" >
                                    <i class="fa fa-facebook" ></i>
                                    <span>Sign in with Facebook</span>
                                </a>
                            </div>
                            <div class="modal-footer submit-login" >OK</div>
                        </div> -->
                        <!-- End form đăng nhập -->
                        <div class="row">
                            <div class="col-6">
                                <img class="tch" src="./image/order/tch.jpg" alt="Giao hang tan noi">
                            </div>
                            <div class="col-6">
                                <ul style="list-style-type:none">
                                    <li class="first">Các bước đặt món</li>
                                    <li>
                                        <span class="icon">1</span> Điền thông tin nhận hàng (tên, số điện thoại, địa chỉ nhận hàng)</li>
                                    <li>
                                        <span class="icon">2</span> Chọn món yêu thích</li>
                                    <li>
                                        <span class="icon">3</span> Tối đa 30 phút
                                        <span class="cam">(*)</span> bạn sẽ có ngay món uống yêu thích!</li>
                                </ul>
                                <div class="notes cam">(*) Thời gian có thể khác nhau tùy thuộc vào vị trí và giao thông tại thời điểm đặt hàng</div>
                                <div class="notes cam">Thời gian phục vụ : 7h-20h</div>
                            </div>
                        </div>
                    </div>
                    <div class="order-list">
                        <div class="title-menu">MENU "NHÀ CÀ PHÊ"</div>
                        <div id="accordion">
                        
                            <?php
                                $i=2; 
                                for($a=0;$a<count($product_type);$a++){
                                // foreach($product_type as $product_type){
                            ?>
                            <div class="card">
                                <div class="card-header">
                                <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse_<?=$i?>" aria-expanded="false" aria-controls="collapse_<?=$i?>">
                                            <?=$product_type[$a]['description']?>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse_<?=$i?>" class="collapse" aria-labelledby="heading_<?=$i?>" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="row">
                                            <?php
                                                  for($b=0;$b<count($product);$b++){

                                                // foreach($product as $product){
                                                    if($product[$b]['productTypeId']===$product_type[$a]['id']){
                                                        ?>
                                                <div class="col-3">
                                                    <div class="panel panel-danger">
                                                    <div class="panel-heading"><?= $product[$b]['name'] ?></div>
                                                        <div class="panel-body">
                                                            <img src="<?=$product[$b]['image']?>" class="img-responsive" style="width:100%" alt="Image">
                                                        </div>
                                                    <div class="panel-footer"><?= $product[$b]['description'] ?></div>
                                                    </div>
                                                     
                                                <?php 
                                                    if($product[$b]['price-small']and$product[$b]['price-big']){
                                                        ?>
                                                        <a href="?page=productDetail&id=<?=$product[$b]['id']?>">

                                                        <div class="row">
                                                            <div class="col-6 mouse_hover add_cup<?=$product[$b]['id']?>">
                                                                <img src="./image/order/coffe-cup-s-a.png" alt="size nhỏ">
                                                                <i class="fa fa-plus icon-plus"></i>
                                                                <div class="price-cup" id="<?=$product[$b]['id']?>"data-id="<?=$product[$b]['price-small']?>">
                                                               <?= $product[$b]['price-small'] ?>
                                                                </div>
                                                            </div>
                                                        <!-- </a>  -->
                                                        <!-- <a href="?page=productDetail&id=<?=$product[$b]['id']?>"> -->
                                                                
                                                            <div  class="col-6 mouse_hover add_cup<?=$product[$b]['id']?>">
                                                                <img src="./image/order/coffe-cup-m-a.png" alt="size lớn">
                                                                <i class="fa fa-plus icon-plus"></i>
                                                                <div class="price-cup"id="<?=$product[$b]['id']?>"data-id="<?=$product[$b]['price-big']?>">
                                                                <?= $product[$b]['price-big'] ?>
                                                                </div>
                                                             </div> 
                                                        </div>
                                                        </a> 

                                                <?php        
                                                    }
                                                    else{ 
                                                        if($product[$b]['price-small']){
                                                ?>      <div class="row">
                                                        <a href="?page=productDetail&id=<?=$product[$b]['id']?>">
                                                         <div  class="col-6 mouse_hover add_cup<?=$product[$b]['id']?>">
                                                                <img src="./image/order/coffe-cup-s-a.png" alt="size nhỏ">
                                                                <i class="fa fa-plus icon-plus"></i>
                                                                <div class="price-cup" id="<?=$product[$b]['id']?>" data-id="<?=$product[$b]['price-small']?>">
                                                               <?= $product[$b]['price-small'] ?>
                                                                </div>
                                                               
                                                        </div>
                                                        </a>
                                                        </div>
                                                <?php   }  
                                                            }
                                                ?>    
                                                 </div>       
                                            <?php       
                                                    }
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>        
                            </div>
                            <?php        
                              $i++;  }
                            ?>
                         
                           
                           
                          
                          
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-4 ">
                <div class="header">
                    <img src="./image/order/logo_tch_black.png">
                </div>
                <div class="content">
                    <div class="info-client">
                        <div class="name-phone-info-input">
                            <label>Thông tin người nhận </label>
                            <div class="form-group">
                                <input disabled type="text" class="form-control input-info input-name" id="name-info" placeholder="Tên"
                                
                                <?php if(!empty($_SESSION['login']) and $_SESSION['login'] == 1 ) { ?>
                                value="<?=$users['tenkh']?>"
                                <?php } ?>
                                 >
                                <input disabled type="text" class="form-control input-info input-phone" id="phone-info" placeholder="Số điện thoại"
                                <?php if(!empty($_SESSION['login']) and $_SESSION['login'] == 1 ) { ?>
                                    value="<?=$users['phonenumber']?>"
                                <?php } ?>
                                >
                            </div>
                            <div class="form-group">
                                <input  disabled type="email" class="form-control input-info input-email" id="email-info" placeholder="Email" 
                                <?php if(!empty($_SESSION['login']) and $_SESSION['login'] == 1 ) { ?>
                                    value="<?=$users['email']?>"
                                <?php } ?>
                                >
                            </div>
                            <!-- <div class="alert alert-danger tch-warning tch-warning-name hidden">Vui lòng nhập đầy đủ tên và số điện thoại</div>
                            <div class="alert alert-danger tch-warning tch-warning-phone hidden">Vui lòng nhập đúng số điện thoại</div>
                            <div class="alert alert-danger tch-warning tch-warning-email hidden">Vui lòng nhập đúng định dạng email</div> -->
                        </div>
                        <span>
                            <input class="radio1"type="radio" name="radAnswer"checked="checked">
                        </span>
                        <span>Giao hàng ngay</span>

                        <span>
                            <input id="radio_2" class="radio2"type="radio" name="radAnswer">
                        </span>
                        <span>Chọn thời gian</span>
                    </div>
                    <div class="place-client">
                        <p>
                            <label>Địa điểm giao hàng</label>
                        </p>
                        <div class="form-group">
                            <input id="input-gio_2" name="gio" class="form-control input-info  input-gio input-an" type="text" placeholder="Giờ">
                            <input id="input-phut_2" name="phut"class="form-control input-info  input-phut input-an" type="text" placeholder="Phút">
                        </div>
                        <div class="form-group">
                            <input disabled name="diachi"class="form-control input-info input-diachi" type="text"  placeholder="Địa chỉ" <?php if(!empty($_SESSION['login']) and $_SESSION['login'] == 1 ) { ?>
                                value="<?=$users['diachi']?>"
                                <?php } ?>>
                        </div>
                        <!-- <div class="form-group">
                            <input name="quan"class="form-control input-info input-quanhuyen" type="text" placeholder="Quận/Huyện">
                            <input name="huyen"class="form-control input-info input-thanhpho" type="text" placeholder="Tỉnh/Thành phố">
                        </div> -->
                    </div>
                    <div id="quy2" class="row">



                        <div class="glass-icon">
                            <span>
                                <img src="./image/order/ly.png">
                            </span>
                        </div>
                        <div id="nhan">
                            <span>
                                <i class="fa fa-times multi-icon"></i>
                            </span>
                        </div>
                        <span>
                            <div id="number_cup">
                            <?php 
                                    if(!empty($_SESSION['cart']['buying-quantities']) and $_SESSION['cart']['buying-quantities'] > 0){
                                ?>
                                <?=                                
                                $_SESSION['cart']['buying-quantities'];
                                ?>                      
                         <?php } ?>
                        </div>
                        </span>
                        <span>
                            <img class="equal-icon" src="./image/order/pause-symbol.png">
                        </span>
                        <span>
                            <div id="result_cup">
                                <?php 
                                    if(!empty($_SESSION['cart']['buying-total']) and $_SESSION['cart']['buying-total'] > 0 ){
                                ?>
                                
                        <?=            $_SESSION['cart']['buying-total'];
                        ?>
                                    <?php } ?>
                            VND</div>
                        </span>

                    </div>
                    <button  onclick="checkForm()" class="btn btn-submit-info-active" id="payment-btn"><a href="?page=your-cart">XEM GIỎ HÀNG</a></button>

                </div>
            </div>
            <!-- <button class="btn btn-warning" type="button">Xem giỏ hàng</button> -->

        </div>

        <div id="btn-show-logout" class="clearfix footer-profile" data-toggle="modal" data-target="#loginModal">
            <div class="div-hotline">
                <div>HOTLINE</div>
                <div class="hotline">1800 6936</div>
            </div>
            <img src="./image/order/user_avatar.png" class="user-avatar">
            <span class="name-user">
            <?php if(!empty($_SESSION['login']) and $_SESSION['login'] == 1 ) { ?>
                                   Xin chào <?=$users['username']?>
                                <?php }
                                else {
                                ?><a href="?page=login&">Đăng nhập để tích điểm</a>
                                <?php } ?>
            </span>
            <span class="point-user heartTCH hidden">

                <i class="fa fa-heart heartTCH" aria-hidden="true"></i>
            </span>
        </div>
    </div>

    </div>
    </div>

    <!-- <footer class="container-fluid">
        <p>Footer Text</p>
    </footer> -->

</body>

</html>