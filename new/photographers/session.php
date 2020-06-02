<?Php
include 'connect.php';
session_start();

if (isset($_GET['id'])) {
    $session_id=$_GET['id'];
}else{
    $session_id=0;
}

//$photographer_id=1;
$sql="SELECT * FROM photo_session WHERE id='$session_id'";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);
//$photo_rate=$row['rate'];

$select_pic="SELECT * FROM photo_session_pic WHERE session_id='$session_id'";
$pic_result=mysqli_query($connect,$select_pic);
$pic_data=array();
while ($pic_row=mysqli_fetch_assoc($pic_result)) {
    $pic_data[]=$pic_row;
}


$select_cat="SELECT * FROM categroies";
$cat_result=mysqli_query($connect,$select_cat);
$cat_data=array();
while ($cat_row=mysqli_fetch_assoc($cat_result)) {
    $cat_data[]=$cat_row;
}

// if (isset($_POST['rate'])) {
//     $rate=$_POST['rate'];
//     // $new_rate=$photo_rate+$rate;
//     // $update="UPDATE `photographer` SET `rate`='$new_rate' WHERE id='$photographer_id'";
//     // $update_result=mysqli_query($connect,$update);
//     echo $rate;die();
// }


include 'header.php';
include 'navegation.php';




?>
  
<style type="text/css">
    .div_form_photo{
        width: 300px;
        margin: 50px auto;
    }
</style>
    <!--about--> 
    <section class="container back1">
        <div class="row">
            <div class="back" style="background: url(upload/<?php echo $row['image'] ?>);width: 1150;background-size: cover">
                <h2><?php echo $row['title']; ?></h2>
            </div>
            
        </div>
    </section>
    <!--///////////////////////-->
   
    
<div class="portfolio" id="gallery">        
        <div class="container">
            <?php foreach ($pic_data as $value) { ?>
            <div class="portfolio-grids">               
                <div class="col-md-4 port-grids view view-fourth">
                    <a class="example-image-link" href="upload/<?php echo $value['image'];?>" data-lightbox="example-set" data-title="">
                        <img src="upload/<?php echo $value['image'];?>" class="img-responsive" alt=""/>
                        <div class="mask">
                            <p><?php echo $row['title'];?></p>
                        </div>
                    </a>
                </div>
            <?php } ?>
                
                <div class="clearfix"> </div>   
                <script src="js/lightbox-plus-jquery.min.js"> </script>
            </div>              
        </div>
    </div>  
    <!--//portfolio-->


<!--footer-->
  
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
                // gallary-----------********************----
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
                //****************l;l;l;;l;l
                $('.list-unstyled li').click(function(){
                    var p = $(this).data('role');
                    $('.content4 > div').hide();
                    $('.content4').contents().filter('#' + p).fadeIn();
                    $(this).addClass('active_btn').siblings().removeClass('active_btn');
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