<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>The Coffee House</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" /> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
    <link href="./css/style.css" rel="stylesheet" type="text/css">

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">

                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <?php @session_start(); if(!empty($_SESSION['isadmin']) and $_SESSION['isadmin'] == 1) { ?>
                        <a href="?page=productTypeAdmin">QUẢN LÝ LOẠI SẢN PHẨM</a>
                        <a href="?page=productadmin">QUẢN LÝ SẢN PHẨM</a>
                        <a href="?page=newAdmin">QUẢN LÝ TIN TỨC</a>
                        <a href="?page=useradmin">QUẢN LÝ NGƯỜI DÙNG</a>
                        <a href="?page=tuyendung">QUẢN LÝ TUYỂN DỤNG</a>
                        <a href="?page=phanhoi">QUẢN LÝ PHẢN HỒI</a>
                        <?php }  ?>
                        
                        <?php  if(!empty($_SESSION['login']) and $_SESSION['login'] == 1 ) {    ?> 
                            <a >XIN CHÀO BẠN<br /> <?=$_SESSION["username"]  ?></a>
                            <a href="?page=login&action=logout" >ĐĂNG XUẤT</a>
                            <?php } else {    ?>  
                        <a href="?page=login&">ĐĂNG NHẬP</a>
                        <a href="?page=register">ĐĂNG KÝ</a>
                        <?php  } ?> 
                    </div>
                    <img src="http://theme.hstatic.net/1000075078/1000297410/14/logo-black.png?v=39" width="300" height="auto" style="padding: 20px 0px" onclick="openNav()">

                    <script>
                        function openNav() {
                            document.getElementById("mySidenav").style.width = "250px";
                        }

                        function closeNav() {
                            document.getElementById("mySidenav").style.width = "0";
                        }
                    </script>

                    <!-- <img src="http://theme.hstatic.net/1000075078/1000297410/14/logo-black.png?v=39" width="300" height="auto" style="padding: 5px 0px"> -->
                </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right" style="font-size: 15px;">
                    <li>
                        <a href="?page=home">
                            <img src="https://image.flaticon.com/icons/svg/898/898472.svg" width="30" height="30"> TRANG CHỦ
                        </a>
                    </li>
                    <li>
                        <a href="?page=introduction">
                            <img src="https://image.flaticon.com/icons/svg/39/39637.svg" width="30" height="30"> GIỚI THIỆU
                        </a>
                    </li>
                    <li>
                        <a href="?page=menu">
                            <img src="https://image.flaticon.com/icons/svg/83/83615.svg" width="30" height="30"> MENU
                        </a>
                    </li>
                    <li>
                        <a href="?page=newsList">
                            <img src="https://image.flaticon.com/icons/svg/71/71036.svg" width="30" height="30"> TIN TỨC
                        </a>
                    </li>
                    <li>
                        <a href="?page=recuit">
                            <img src="https://image.flaticon.com/icons/svg/15/15659.svg" width="30" height="30"> TUYỂN DỤNG
                        </a>
                    </li>
                    <li>
                        <a href="?page=order">
                            <img src="https://image.flaticon.com/icons/svg/905/905694.svg" height="30" width="30"> GIỎ HÀNG
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>