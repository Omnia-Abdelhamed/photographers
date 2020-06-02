<?Php
include 'connect.php';

$select_city="SELECT * FROM cities";
$city_result=mysqli_query($connect,$select_city);
$city_data=array();
while ($city_row=mysqli_fetch_assoc($city_result)) {
    $city_data[]=$city_row;
}

$select_photographer="SELECT * FROM photographer WHERE active=1";
$select_photographer_result=mysqli_query($connect,$select_photographer);
$photographer_data=array();
while ($photographer_row=mysqli_fetch_assoc($select_photographer_result)) {
    $photographer_data[]=$photographer_row;
}

include 'header.php';
include 'navegation.php';

?>

 <div class="content1" id="p_about" style="height: 500px">
        <div class="sections">
            <h1>Photographers</h1>
            <div class="line"><span></span></div>
        </div>
        <div class="container">
            <div class="row aboutme"> 
                <div class="buttons">
                    <button class="all" id="all">All</button>
                <?php foreach ($city_data as $value) { ?>
                    <button class="photo<?php echo $value['id'] ?>" id="photo<?php echo $value['id'] ?>"><?php echo $value['name']; ?></button>
                <?php } ?>
                </div>
                <div class="images">
                <?php foreach ($photographer_data as $value) { ?>
                    <div class="photo<?php echo $value['city_id'] ?> col-md-3 col-xs-12">
                        <a href="profile.php?id=<?php echo $value['id'] ?>"><img style="height: 240px" src="images/<?php echo $value['image'] ?>"></a>
                    </div>
                <?php } ?>
                </div>
                <div class="clearfix"></div>

            </div>
        </div>
    </div>


   <!--footer-->
    <div class="footer wow fadeInRight animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
        <div class="container">
            <p>Copyright © 2016 Collective. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
        </div>
    </div>
    <!--//footer***************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
     

    <!-- banner-text Slider starts Here -->
        <script src="js/responsiveslides.min.js"></script>
         <script>
            // You can also use "$(window).load(function() {"
                $(function () {
                // Slideshow 3
                    $("#slider3").responsiveSlides({
                    auto: true,
                    pager:true,
                    nav:true,
                    speed: 500,
                    namespace: "callbacks",
                    before: function () {
                    $('.events').append("<li>before event fired.</li>");
                    },
                    after: function () {
                        $('.events').append("<li>after event fired.</li>");
                    }
                }); 
            });
        </script>
        <!--//End-slider-script -->
        <!-- start-smoth-scrolling-->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
          <script type="text/javascript">
                jQuery(document).ready(function($) {
                    $(".scroll").click(function(event){     
                        event.preventDefault();
                        $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                    });
                });

                  $('.buttons button').click(function(){
                    $(this).addClass('active_btn').siblings().removeClass('active_btn');
                    var filter = $(this).attr('id');
                    if (filter === 'all') {
                        $('.images > div').fadeIn();
                    }else{
                        $('.images > div').fadeOut(0);
                        $('.images').contents().filter('.' + filter).fadeIn();
                    }
                });

                       </script>
        <!--//end-smoth-scrolling-->
        <!--smooth-scrolling-of-move-up-->
        <script type="text/javascript">
            $(document).ready(function() {
                /*
                var defaults = {
                    containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear' 
                };
                */
                
                $().UItoTop({ easingType: 'easeOutQuart' });
                
            });
        </script>
               <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        <!--//smooth-scrolling-of-move-up-->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
    </body>
</html>