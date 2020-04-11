 <div class="row">fff</div>
 
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap -->
    <script src="../js/bootstrap.min.js"></script>
	<!-- Slick slider -->
    <script type="text/javascript" src="../js/slick.min.js"></script>
    <!-- Counter js -->
    <script type="text/javascript" src="../js/counter.js"></script>
    <!-- Ajax contact form  -->
    <script type="text/javascript" src="../js/app.js"></script>
   
 <script src="../js/jquery.js"></script>
 <script src="../js/bootstrap.min.js"></script>
	
    <!-- Custom js -->
	<script type="text/javascript" src="/js/custom.js"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS eset faz parte do inicial do admin -->
    <script src="../js/jquery-3.4.1.slim1.min.js" ></script>
    <script src="../js/popper1.min.js"></script>
    <script src="../js/bootstrap1.min.js"></script>



  	<script type="text/javascript">
    jQuery(function ($) {
        $('#carousel1').carousel({
            interval: 3000
        });

        var clickEvent = false;

        $('#carousel1').on('click', '.nav a', function () {
            clickEvent = true;
            $('.nav li').removeClass('active');
            $(this).parent().addClass('active');
        }).on('slid.bs.carousel', function (e) {
            if (!clickEvent) {
                var count = $('.nav').children().length - 1;
                var current = $('.nav li.active');
                current.removeClass('active').next().addClass('active');
                var id = parseInt(current.data('slide-to'));
                if (count == id) {
                    $('.nav li').first().addClass('active');
                }
            }
            clickEvent = false;
        });
    });
</script>
	
    
  </body>
</html>