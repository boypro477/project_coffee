<?php 
require("v_header_intro.php");
?>
<style>
    .bgimg-1, .bgimg-2, .bgimg-3 {
            position: relative;
            opacity: 0.65;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

        }
        .bgimg-1 {
            background-image: url("http://theme.hstatic.net/1000075078/1000297410/14/banner-about.jpg?v=39");
            min-height: 100%;
        }

        .bgimg-2 {
            background-image: url("http://theme.hstatic.net/1000075078/1000297410/14/about-1.jpg?v=39");
            min-height: 400px;
        }

        .bgimg-3 {
            background-image: url("https://static.foodizzi.com/images/2017/6/21/006faa13-3c8a-416d-b8ce-879d264d7004.jpg?mode=crop&width=1140&height=400");
            min-height: 400px;
        }

        .caption {
            position: absolute;
            left: 0;
            top: 50%;
            width: 100%;
            text-align: center;
            color: #000;
            transition: transform .2s;
        }

        .caption span.border {
            background-color: #ff9900;
            color: #fff;
            padding: 18px;
            font-size: 25px;
            letter-spacing: 10px;
        }
        .caption:hover{
            -ms-transform: scale(1.5); /* IE 9 */
            -webkit-transform: scale(1.5); /* Safari 3-8 */
            transform: scale(1.5);
        }
        @media only screen and (max-device-width: 1024px) {
            .bgimg-1, .bgimg-2, .bgimg-3 {
                background-attachment: scroll;
            }
        }
        #myBtn {
            display: none; /* Hidden by default */
            position: fixed; /* Fixed/sticky position */
            bottom: 20px; /* Place the button at the bottom of the page */
            right: 30px; /* Place the button 30px from the right */
            z-index: 99; /* Make sure it does not overlap */
            border: none; /* Remove borders */
            outline: none; /* Remove outline */
            background-color: #ff9900; /* Set a background color */
            color: white; /* Text color */
            cursor: pointer; /* Add a mouse pointer on hover */
            padding: 15px; /* Some padding */
            border-radius: 10px; /* Rounded corners */
            font-size: 18px; /* Increase font size */
        }

        #myBtn:hover {
            background-color: #555; /* Add a dark-grey background on hover */
        }
        
        
        .grid-container {
            display: grid;
            grid-template-columns: 25% 25% 25% 25%;
            /* grid-gap: 10px; */
            background-color: #555;
            /* background-image: url(trasua\kai.png); */
            /* padding: 10px; */
        }
        .grid-container > div {
            background-color: rgba(255, 255, 255, 0.8);
            /* border: 1px solid white; */
            text-align: center;
            font-size: 30px;
        }
    </style>
<div class="bgimg-1">
        <div class="caption">
            <span class="border">OUR STORY</span>
        </div>
    </div>

    <div style="color: #777;background-color:white;text-align:center;padding:50px 80px;font-size: 20px;">
        <h3 style="text-align:center;"><img src="http://theme.hstatic.net/1000075078/1000297410/14/icon-ab-1.png?v=39" style="padding: 9px 150px;"><br></h3>
        <p>"Đi cà phê" từ lâu không đơn thuần chỉ là uống một tách cà phê mà còn là dịp gặp mặt và trò chuyện cùng bạn bè.<br> Tại The Coffee House, chúng tôi trân trọng và đề cao giá trị kết nối giữa con người và trải nghiệm của khách hàng.<br>
            Chúng tôi được truyền cảm hứng từ những tách cà phê và thức uống mình tạo ra. Chúng tôi tin tưởng mạnh mẽ rằng thức uống với chất lượng tốt nhất được phục vụ trong không gian thân thiện.</p>
    </div>

    <div class="bgimg-2">
        <div class="caption">
            <span class="border" style="background-color:transparent;font-size:25px;color: #ff9900;font-weight: bold">NGÔI NHÀ CÀ PHÊ</span>
        </div>
    </div>

    <div style="position:relative;">
        <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: center;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjefyCRm7XceikXqfoIPOAlWWK2VfPvZWo142x_P9xfkxHh766">
            <h2>CAM KẾT CHẤT LƯỢNG VÀ TÂM HUYẾT TRONG TỪNG SẢN PHẨM </h2><br>
            <h4>Tại The Coffee House, nguyên liệu làm ra cà phê và tất cả các loại thức uống đều được chọn lọc từ những nguồn cung ứng được kiểm định gắt gao, đáp ứng tiêu chuẩn chất lượng cao nhất. Và một “nguyên liệu” quan trọng hơn hết chúng tôi đưa vào từng sản phẩm là sự tâm huyết của cả đội ngũ nhân viên The Coffee House. <br>
            Niềm đam mê với hương vị, sự nhiệt thành khi phục vụ, kĩ năng pha chế được đào tạo chuyên sâu là tất cả những gì The Coffee House cam kết khi phục vụ bất kì sản phẩm nào cho khách hàng nhằm tạo ra trải nghiệm “đi cà phê” tốt nhất cho bạn.</h4>
        </div>
    </div>

    <div class="bgimg-1">
        <div class="caption">
            <span class="border">HỆ THỐNG CỬA HÀNG</span>
        </div>
    </div>
          
    <div style="position:relative;">
        <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;font-weight: bold">
            <p>CHÚNG TÔI ĐÃ CÓ MẶT TẠI HÀ NỘI, THÀNH PHỐ HỒ CHÍ MINH VÀ BIÊN HOÀ</p>
        </div>
    </div>
    <div class="grid-container">
        <div><img src="http://product.hstatic.net/1000075078/product/post_ca74ba3a2a31438b8ff1da59f32a0624_large.jpg"></div>
        <div>THE COFFEE HOUSE<br>
            Huỳnh Tấn Phát<br>
            <small>Quận 7</small></div>
        <div><img src="http://product.hstatic.net/1000075078/product/post_2517b108481a490189c214a0ac1e860f_large.jpg"></div>
        <div>THE COFFEE HOUSE<br>
            93/5B Nguyễn Ảnh Thủ<br>
            <small>Huyện Hóc Môn</small></div>
        <div><img src="http://sw001.hstatic.net/10/1444dbce688977/img_7932_large.jpg"></div>
        <div>THE COFFEE HOUSE<br>
            23M Hai Bà Trưng<br>
            <small>Quận Hoàn Kiếm, Hà Nội</small></div>
        <div><img src="http://hstatic.net/078/1000075078/1/2016/4-20/13041103_1702579663349386_2637970690713643261_o_large.jpg"></div>
        <div>THE COFFEE HOUSE<br>
            122 Bùi Thị Xuân<br>
            <small>Quận Hai Bà Trưng, Hà Nội</small></div>
    </div>
   
    <div class="bgimg-3">
        <div class="caption">
            <span class="border" style="background-color:transparent;font-size:25px;color: #ff9900;font-weight: bold">NHÀ LUÔN CHỜ ĐỢI BẠN GHÉ THĂM NHA!!!</span>
        </div>
    </div>

    <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="https://image.flaticon.com/icons/svg/17/17970.svg"height="30" width="30"></button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }  
    </script>
    
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
<?php
require("v_footer.php");
?>