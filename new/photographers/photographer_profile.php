<?Php
include 'connect.php';
session_start();

if (isset($_SESSION['photographer_id'])) {
    $photographer_id=$_SESSION['photographer_id'];
}else{
    header("location: register.php");
}
$sql="SELECT * FROM photographer WHERE id='$photographer_id'";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);

$select_pic="SELECT * FROM pictures WHERE photographers_id='$photographer_id'";
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

if (isset($_POST['add'])) {
    $cat_id=$_POST['category'];
    $image = $_FILES['image'];
    $image_name=$image['name'];
    $image_type=$image['type'];
    $image_temp=$image['tmp_name'];
    $image_size=$image['size'];
    $allowed_extensions=array("jpeg","jpg","png");
    $image_extension=explode('.', $image_name);
    $image_extension=strtolower(end($image_extension));

    if (!empty($cat_id) & !empty($image_name) ) {
        if (in_array($image_extension, $allowed_extensions)) {
            $image_name=rand(0,100000).'_'.$image_name;
            move_uploaded_file($image_temp, "images\\".$image_name);
            $insert_sql="INSERT INTO `pictures`(`image`, `cat_id`, `photographers_id`) VALUES ('$image_name','$cat_id','$photographer_id')";
            $insert_result=mysqli_query($connect,$insert_sql);
        }
    }
}

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
            <div class="back" style="background: url(images/<?php echo $row['cover'] ?>);width: 1150">
                <img style="width: 212px;height: 212px;" src="images/<?php echo $row['image'] ?>">
                <h2><?php echo $row['name']; ?></h2>
            </div>
            <ul class="list-unstyled">
                <li data-role="p_about"> About</li>
                <li data-role="p_galary">Gallery</li>
                <li data-role="p_add">Add</li>
<!--                 <li data-role="p_edit">Edit Profile</li>
 -->            </ul>
        </div>
    </section>
    <!--///////////////////////-->
    <section class="content4">
    <div class="content1"  id="p_about">
        <div class="sections">
                    <h1>About Me</h1>
                    <div class="line">
                    <span></span>
                    </div>
        </div>
        <div class="container">
            <div class="row aboutme">
                
                <div class="col-md-6 col-xs-12">
                    <div class="content">
                        <h3><?php echo $row['name']; ?></h3>
                        <p class="desc" style="text-align: right;"><?php echo $row['about']; ?></p>
                        <p class="social">
                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-twitter"></i>
                            <i class="fa fa-youtube"></i>
                            <i class="fa fa-linkedin"></i>
                            <i class="fa fa-google-plus"></i>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="imgg">
                        <img src="images/<?php echo $row['about_pic']; ?>" style="height: 450px;">
                    </div>
                </div>   
            </div>
        </div>
    </div>
    <!--///about-->

    <!--Gallery--> 
    <div class="content2" id="p_galary">
        <div class="sections">
            <h1>Gallery</h1>
            <div class="line"><span></span></div>
        </div>
        <div class="container">
            <div class="row aboutme"> 
                <div class="buttons">
                    <button class="all" id="all">All</button>
                <?php foreach ($cat_data as $value) { ?>
                    <button class="photo<?php echo $value['id'] ?>" id="photo<?php echo $value['id'] ?>"><?php echo $value['title']; ?></button>
                <?php } ?>
                </div>
                <div class="images">
                <?php foreach ($pic_data as $value) { ?>
                    <div class="photo<?php echo $value['cat_id'] ?> col-md-3 col-xs-12">
                        <img style="height: 240px" src="images/<?php echo $value['image'] ?>">
                    </div>
                <?php } ?>
                </div>
                <div class="clearfix"></div>

            </div>
        </div>
    </div>

    <div class="content5"  id="p_add" style="display: none;">
        <div class="sections">
            <h1>Add</h1>
            <div class="line"><span></span></div>
        </div>
       
        <form method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">image</label>
                <div class="col-sm-10 col-md-4">
                    <input type="file" name="image" class="form-control">
                </div>
            </div>
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">category</label>
                <div class="col-sm-10 col-md-4">
                    <select name="category" class="form-control">
                        <?php foreach ($cat_data as $value) { ?>
                            <option value="<?php echo $value['id']; ?>">
                                <?php echo $value['title']; ?> 
                            </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group form-group-lg">
                <div class="col-sm-offset-2 col-sm-10">
                    <input class="btn btn-primary btn-lg" type="submit" name="add" 
                    value="Save">
                </div>
            </div>
        </form>

        <div class="clearfix"></div>  
    </div>

    <div class="content6"  id="p_edit" style="display: none;">
        <div class="sections">
            <h1>Edit Profile</h1>
            <div class="line"><span></span></div>
        </div>
       
        <form method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10 col-md-4">
                    <input type="text" name="name" class="form-control">
                </div>
            </div>
             <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10 col-md-4">
                    <input type="email" name="email" class="form-control">
                </div>
            </div>
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">Phone</label>
                <div class="col-sm-10 col-md-4">
                    <input type="text" name="phone" class="form-control">
                </div>
            </div>
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">Adress</label>
                <div class="col-sm-10 col-md-4">
                    <input type="text" name="address" class="form-control">
                </div>
            </div>
             <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">About</label>
                <div class="col-sm-10 col-md-4">
                    <textarea class="form-control" name="about"></textarea>
                </div>
            </div>
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">My image</label>
                <div class="col-sm-10 col-md-4">
                    <input type="file" name="my_image" class="form-control">
                </div>
            </div>
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">Cover image</label>
                <div class="col-sm-10 col-md-4">
                    <input type="file" name="cover_image" class="form-control">
                </div>
            </div>
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">Photo image</label>
                <div class="col-sm-10 col-md-4">
                    <input type="file" name="photo_image" class="form-control">
                </div>
            </div>
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">Governate</label>
                <div class="col-sm-10 col-md-4">
                    <select name="category" class="form-control">
                        <option>one</option>
                    </select>
                </div>
            </div>
            <div class="form-group form-group-lg">
                <div class="col-sm-offset-2 col-sm-10">
                    <input class="btn btn-primary btn-lg" type="submit" name="edit_profile" 
                    value="Edit">
                </div>
            </div>
        </form>

        <div class="clearfix"></div>  
    </div>
</section>

























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