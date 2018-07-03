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
        .table .odd
        {
            background-color:#FFFFFF;  
        }

        .table .even
        {
            background-color: black;    
        }
        .table .heading
        {
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 25px;
            text-align:center;
            font-weight:bold;
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
        <li style="font-size: 20px"><a href="#myPage1">  MENU</a></li>
        <li><a href="?page=menu"> ESPRESSO & COFFEE</a></li>
        <li><a href="?page=menu">- ICE BLENDED COFFEE</a></li>
        <li><a href="?page=menu">- SMOOTHIES</a></li>
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

    <table id="myPage1"class="table" border="1" style="margin-top:0%;text-align:center;">
        <tr class="heading">
            <td>LOẠI ĐỒ UỐNG</td>
            <td>TÊN ĐỒ UỐNG</td>
            <td>MÔ TẢ</td>
            <td>Size bé</td>
            <td>Size lớn</td>

        </tr>
        <?php $i = 0; foreach($products as $product) { ?> 
        <tr class="<?php echo ($product['productTypeId']%2 == 0)?"odd":"even"; ++$i  ?>">
        
            <?php foreach($productTypes as $productType) { ?>
            <?php if($productType['id'] == $product['productTypeId']) { ?> 
                <td><?=$productType['name']?></td> 
            <?php } ?>
          
          <?php } ?>
            <td><?=$product['name'] ?></td>
            <td><?=$product['description'] ?></td>
            <td><?=$product['price-small'] ?></td>
            <td><?=$product['price-big'] ?></td>

        </tr>
        <?php } ?>
        
    </table>

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
