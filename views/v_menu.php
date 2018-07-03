<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>The Coffee House</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #111;
  }
  .container {
      padding: 50px 10px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
      
    }
  }
  .carousel-caption p{
    font-weight: bold;
     font-size: 25px; 
     font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

  .bg-1 {
      background: black;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}

  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #777;
  } 
  .navbar {
      font-family: 'Source Sans Pro', sans-serif;
      margin-bottom: 0;
      background-color: black;
      border: 0;
      font-size: 17px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: orange !important;
  }
  .navbar-nav li.active a {
      color: white !important;
      background-color: orange !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  footer {
      background-color: black;
      color: white;
      padding: 32px;
  }
  footer a {
      color: white;
  }
  footer a:hover {
      color: orange;
      text-decoration: none;
  }  
  textarea {
      resize: none;
  }
  /*  */
  .row::after {
    content: "";
    clear: both;
    display: table;
}
.column {
    float: left;
    width: 50%;
    padding: 0px;
}
.row img{
    display: inline-block;
    max-width: 50%;
    border: 0px solid #ccc;;
}
/* */
.table tr:hover {
      color: orange !important;
      width: 50%;
  }
  #price{
      text-align:center;
  }

  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="?page=home"><img src="http://theme.hstatic.net/1000075078/1000297410/14/logo.png?v=39" alt=""></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li style="font-size: 20px"><a href="?page=product1">  MENU</a></li>
        <li><a href="#band"> ESPRESSO & COFFEE</a></li>
        <li><a href="#tour">- ICE BLENDED COFFEE</a></li>
        <li><a href="#contact">- SMOOTHIES</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="https://picjumbo.com/wp-content/uploads/lovely-and-romantic-heart-coffee-cups_free_stock_photos_picjumbo_HNCK1677-1570x1047.jpg" alt="">
          <div class="carousel-caption">
            
            <p>HAVE A NICE DAY</p>
          </div>      
        </div>
  
        <div class="item">
          <img src="https://images.pexels.com/photos/296888/pexels-photo-296888.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" >
          <div class="carousel-caption">
            
            <p>HAVE A NICE DAY</p>
          </div>      
        </div>
      
        <div class="item">
          <img src="https://images.pexels.com/photos/434213/pexels-photo-434213.jpeg?auto=compress&cs=tinysrgb&h=350" alt="" >
          <div class="carousel-caption">
            
            <p>HAVE A NICE DAY</p>
          </div>      
        </div>
      </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The Band Section) -->
<div id="band" class="container">
    <div class="row">
        <div class="column">
  <h3>ESPRESSO & COFFEE</h3>
  <p style="font-style: italic">TỪNG LY CÀ PHÊ ĐƯỢC LÀM RA BỞI NIỀM ĐAM MÊ VỚI HƯƠNG VỊ, SỰ CHĂM CHÚT CHO HẠNH PHÚC CỦA KHÁCH HÀNG, NIỀM HÀO HỨNG ĐƯỢC PHỤC VỤ VÀ SỰ TỈ MỈ ĐỂ ĐẠT TỚI CHẤT LƯỢNG CÀ PHÊ TUYỆT VỜI NHẤT.</p>

    <table class="table" >
            <tr>
                <th></th>
                <th id="price" colspan="2" style="color: orange">PRICE</th>
                <!-- <th id="price" style="color: orange">MEDIUM</th> -->
            </tr>
           
            <tr>
                <td headers="description">Espresso, nước nóng</td>
                <td headers="item">35.000 VNĐ</td>
                <td headers="item">60.000 VNĐ</td>

                <!-- <td headers="item">45.000 VNĐ</td> -->
            </tr>
            <tr>
                <td headers="description">Espresso, sữa tươi, bọt sữa </td>
                <td headers="item">55.000 VNĐ</td>
                <td headers="item">60.000 VNĐ</td>
                

                <!-- <td headers="item">65.000 VNĐ</td> -->
            </tr>
            <tr>
                <td headers="description">Espresso, sữa tươi, caramel</td>
                <td headers="item">35.000 VNĐ</td>
                <td headers="item">60.000 VNĐ</td>

                <!-- <td headers="item">45.000 VNĐ</td> -->
            </tr>
            <tr>
                <td headers="description">Espresso sữa nóng/ Espresso sữa đá</td>
                <td headers="item">45.000 VNĐ</td>
                <td headers="item">60.000 VNĐ</td>

                <!-- <td headers="item">55.000 VNĐ</td> -->
            </tr>
            <tr>
                <td headers="description">Espresso, sôcôla, sữa tươi, bọt sữa</td>
                <td headers="item">49.000 VNĐ</td>
                <td headers="item">60.000 VNĐ</td>

                <!-- <td headers="item">59.000 VNĐ</td> -->
            </tr>
            <tr>
                <td headers="description">Espresso sữa nóng/ Espresso sữa </td>
                <td headers="item">45.000 VNĐ</td>
                <td headers="item">60.000 VNĐ</td>

                <!-- <td headers="item">55.000 VNĐ</td> -->
            </tr>
            <tr>
                <td headers="description">Cà phê sữa nóng / Cà phê sữa tươi</td>
                <td headers="item">45.000 VNĐ</td>
                <td headers="item">60.000 VNĐ</td>

                <!-- <td headers="item">55.000 VNĐ</td> -->
            </tr>
            <tr>
                <td headers="description">Cà phê đá / Cà phê sữa đá</td>
                <td headers="item">29.000 VNĐ</td>
                <td headers="item">60.000 VNĐ</td>

                <!-- <td headers="item">39.000 VNĐ</td> -->
            </tr>   
            
          </table>          
    </div>
    <img src="http://hstatic.net/078/1000075078/2/2016/3-8/coffee_131c6488-0505-425c-6762-5dcb1304087a_master.png" >    
    </div>
</div>

<!-- Container (TOUR Section) -->
<div id="tour" class="bg-1">
  <div class="container">
    <div class="row">
        <div class="column">
                <img src="http://hstatic.net/078/1000075078/2/2016/3-8/iced-blended_70455e21-9606-4d33-7dcc-fd9e7ab75b43_master.png" style="width:100%">    

 
            
    </div>
    <h3>ICE BLENDED COFFEE</h3>
  <p>NẾU BẠN ĐANG TÌM KIẾM MỘT THỨC UỐNG GIÚP BẠN TỈNH TÁO VÀ SẢNG KHOÁI, BẠN SẼ KHÔNG THẤT VỌNG VỚI CÁC MÓN CÀ PHÊ ĐÁ XAY. CHỈ CẦN LỰA CHỌN HƯƠNG VỊ ƯA THÍCH KÈM CÀ PHÊ CỦA BẠN TRONG THỰC ĐƠN CỦA CHÚNG TÔI.</p>

    <table class="table" >
            <tr>
                <th></th>
                <th id="price"colspan="2" style="color: orange">PRICE</th>
            </tr>              
            <tr>
                <td headers="description">Espresso, sữa tươi, caramal, kem tươi</td>
                <td headers="item">45.000 VNĐ</td>
                <td headers="item">60.000 VNĐ</td>

            </tr>
            <tr>
                <td headers="description">Bánh cookie, sữa tươi, kem tươi </td>            
                <td headers="item">65.000 VNĐ</td>
                <td headers="item">60.000 VNĐ</td>

            </tr>
            <tr>
                <td headers="description">Espresso, sữa tươi, hazelnut, kem tươi</td>                  
                <td headers="item">45.000 VNĐ</td>
                <td headers="item">60.000 VNĐ</td>

            </tr>
            <tr>
                <td headers="description">Espresso, chocolate, hạnh nhân, bọt sữa</td>                    
                <td headers="item">55.000 VNĐ</td>
                <td headers="item">60.000 VNĐ</td>

            </tr>
            <tr>
                <td headers="description">Espresso, sữa tươi, sôcôla, kem tươi</td>                 
                <td headers="item">59.000 VNĐ</td>
                <td headers="item">60.000 VNĐ</td>

            </tr>
            <tr>
                <td headers="description">Espresso, chocolate, hạnh nhân</td>                   
                <td headers="item">39.000 VNĐ</td>
                <td headers="item">60.000 VNĐ</td>

            </tr>     
          </table>
       

          <h3>CHOCOLATE</h3>
          
          <p>KHÔNG CÓ KHOẢNG THỜI GIAN NÀO QUÝ GIÁ NHƯ KHI Ở BÊN CẠNH BẠN BÈ, TRỪ KHI BẠN CÓ MỘT LY CHOCOLATE. VÀ NIỀM HẠNH PHÚC CỦA CHÚNG TÔI LÀ PHỤC VỤ BẠN NHỮNG KHOẢNG THỜI GIAN QUÝ GIÁ NHƯ THẾ.</p>
          
          <table class="table"> 
             <tr>
                <th></th>
                <th id="price" colspan="2" style="color: orange">PRICE</th>
                <!-- <th id="price" style="color: orange">MEDIUM</th> -->
            </tr>
            <tr>
                <td headers="description">Sôcôla, sữa tươi, kem tươi</td>
                <td headers="item">39.000 VNĐ</td>
                <td headers="item">60.000 VNĐ</td>

                <!-- <td headers="item">49.000 VNĐ</td> -->
            </tr>
            <tr>
                <td headers="description">Sôcôla, hạnh nhân, kem tươi, kẹo marshmallow</td>
                <td headers="item">49.000 VNĐ</td>
                <td headers="item">60.000 VNĐ</td>

                <!-- <td headers="item">59.000 VNĐ</td> -->
            </tr>
        </table>    
        </div>
    </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <div class="row">
    <div class="column">
<h3>SMOOTHIES</h3>
<p style="font-style: italic">ĐÓ LÀ SỨC SỐNG, SỰ TƯƠI MÁT VÀ NHỮNG MÀU SẮC. ĐƯỢC TẠO RA BỞI SỰ PHA TRỘN GIỮA SỮA CHUA, TRÁI CÂY & SỮA TƯƠI, SMOOTHIES SẼ LÀ SỰ LỰA CHỌN HOÀN HẢO ĐỂ THƯ GIÃN VÀ BỔ SUNG SỨC SỐNG CHO LÀN DA. HÃY LỰA CHỌN CHO NGÀY CỦA BẠN SỰ TƯƠI MỚI VÀ ĐẦY NĂNG LƯỢNG</p> 
<table class="table" >
<tr>
    <th></th>
    <th id="price" colspan="2"style="color: orange">PRICE</th>
    <!-- <th id="price" style="color: orange">MEDIUM</th> -->
</tr>

<tr>
    <td headers="description">Mứt việt quất, sữa chua, sữa tươi</td>
    <td headers="item">45.000 VNĐ</td>
    <td headers="item">60.000 VNĐ</td>

    <!-- <td headers="item">55.000 VNĐ</td> -->
</tr>
<tr>
    <td headers="description">Mứt Việt Quốc, soda </td>
    <td headers="item">35.000 VNĐ</td>
    <td headers="item">60.000 VNĐ</td>

    <!-- <td headers="item">45.000 VNĐ</td> -->
</tr>
<tr>
    <td headers="description">Syrup táo xanh, syrup mojito, táo xanh, 7up</td>
    <td headers="item">45.000 VNĐ</td>
    <td headers="item">60.000 VNĐ</td>

    <!-- <td headers="item">55.000 VNĐ</td> -->
</tr>
<tr>
    <td headers="description">Mứt cam-xoài, sữa chua, bánh cookie</td>
    <td headers="item">59.000 VNĐ</td>
    <td headers="item">60.000 VNĐ</td>

    <!-- <td headers="item">69.000 VNĐ</td> -->
</tr>
<tr>
    <td headers="description">Chanh tươi, sả, lá bạc hà, soda</td>
    <td headers="item">49.000 VNĐ</td>
    <td headers="item">60.000 VNĐ</td>

    <!-- <td headers="item">59.000 VNĐ</td> -->
</tr>
<tr>
    <td headers="description">Chanh dây, sả, lá bạc hà, soda</td>
    <td headers="item">29.000 VNĐ</td>
    <td headers="item">60.000 VNĐ</td>

    <!-- <td headers="item">39.000 VNĐ</td> -->
</tr>
<tr>
    <td headers="description">Dâu rừng tươi, soda</td>
    <td headers="item">39.000 VNĐ</td>
    <td headers="item">60.000 VNĐ</td>

    <!-- <td headers="item">49.000 VNĐ</td> -->
</tr>
<tr>
    <td headers="description">Mứt dâu-ổi, sữa chua, bánh cookie</td>
    <td headers="item">49.000 VNĐ</td>
    <td headers="item">60.000 VNĐ</td>

    <!-- <td headers="item">59.000 VNĐ</td> -->
</tr>
</table>
</div>
<img src="http://hstatic.net/078/1000075078/2/2016/3-8/specialtea_master.png" width="50%">    
</div>
</div>

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br>
  <img src="http://theme.hstatic.net/1000075078/1000297410/14/logo.png?v=39" alt="" width="20%">
  <br><br><br>

  <p>223 Võ Văn Tần, Quận 3, HCM<br> Hotline : 028 71 087 088 <br> Giao hàng miễn phí : 1800 6936</p>
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
