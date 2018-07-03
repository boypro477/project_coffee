<script>
        $(document).ready(function () {
            // Initialize Tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // Add smooth scrolling to all links in navbar + footer link
            $(".navbar a, footer a[href='#myPage']").on('click', function (event) {

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
                    }, 900, function () {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        })
    </script>
    <div class="footer">
        <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
        <br>
        <br>
        <img src="http://theme.hstatic.net/1000075078/1000297410/14/logo.png?v=39">
        <br>
        <b>
            <img src="https://image.flaticon.com/icons/svg/890/890537.svg" width="20" height="20"> Hotline : 028 71 087 088
            <br>
            <img src="https://image.flaticon.com/icons/svg/860/860139.svg" width="20" height="20"> Giao hàng miễn phí : 1800 6936</b>
    </div>
</body>

</html>