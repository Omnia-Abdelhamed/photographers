<?Php
ob_start();
include 'connect.php';
session_start();
include 'header.php';
include 'navegation.php';
	if(isset($_SESSION['photographer_id'])){
		header("location: photographer_profile.php");
	}

	if(isset($_POST['login'])){
		$email=$_POST['email'];
		$password=$_POST['password'];
		$hashedpass=sha1($password);
		$sql="SELECT * FROM photographer WHERE email='$email' AND password='$hashedpass'";
		$result=mysqli_query($connect,$sql);
		$row=mysqli_fetch_assoc($result);
		$count=mysqli_num_rows($result);
		if($count>0){
			$_SESSION['photographer_id']=$row['id'];
			header("location: photographer_profile.php");
			exit();
		}
	}

    $select_city_sql="SELECT * FROM cities";
    $select_city_result=mysqli_query($connect,$select_city_sql);
    $cities=array();
    while($city_row=mysqli_fetch_assoc($select_city_result)){
        $cities[]=$city_row;
    }

    if (isset($_POST['register'])) {
        $name=$_POST['name'];
        $password=$_POST['password'];
        $hashedpass=sha1($password);
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $about=$_POST['about'];
        $city_id=$_POST['city'];
        $my_image = $_FILES['my_image'];
        $my_image_name=$my_image['name'];
        $my_image_type=$my_image['type'];
        $my_image_temp=$my_image['tmp_name'];
        $my_image_size=$my_image['size'];
        $allowed_extensions=array("jpeg","jpg","png");
        $my_image_extension=explode('.', $my_image_name);
        $my_image_extension=strtolower(end($my_image_extension));

        $cover_image = $_FILES['cover_image'];
        $cover_image_name=$cover_image['name'];
        $cover_image_type=$cover_image['type'];
        $cover_image_temp=$cover_image['tmp_name'];
        $cover_image_size=$cover_image['size'];
        $cover_image_extension=explode('.', $cover_image_name);
        $cover_image_extension=strtolower(end($cover_image_extension));

        $photo_image = $_FILES['photo_image'];
        $photo_image_name=$photo_image['name'];
        $photo_image_type=$photo_image['type'];
        $photo_image_temp=$photo_image['tmp_name'];
        $photo_image_size=$photo_image['size'];
        $photo_image_extension=explode('.', $photo_image_name);
        $photo_image_extension=strtolower(end($photo_image_extension));

        if (!empty($name) & !empty($phone) & !empty($address) & !empty($city_id) & !empty($password) & !empty($about) & !empty($email) & !empty($my_image_name) & !empty($cover_image_name) & !empty($photo_image_name) ) {

            if (in_array($my_image_extension, $allowed_extensions) & in_array($cover_image_extension, $allowed_extensions) & in_array($photo_image_extension, $allowed_extensions)) {

                $my_image_name=rand(0,100000).'_'.$my_image_name;
                move_uploaded_file($my_image_temp, "images\\".$my_image_name);


                $cover_image_name=rand(0,100000).'_'.$cover_image_name;
                move_uploaded_file($cover_image_temp, "images\\".$cover_image_name);


                $photo_image_name=rand(0,100000).'_'.$photo_image_name;
                move_uploaded_file($photo_image_temp, "images\\".$photo_image_name);

                $insert_photographer_sql="INSERT INTO `photographer`(`name`, `address`, `phone`, `email`, `about`,`city_id`,`password`,`image`,`about_pic`,`cover`) VALUES ('$name','$address','$phone','$email','$about','$city_id','$hashedpass','$my_image_name','$photo_image_name','$cover_image_name')";
                $photographer_sql_result=mysqli_query($connect,$insert_photographer_sql);
            }
        }
    

    }




?>
<div class="container">
    <div class="buttons" style="margin-top: 50px">
        <button class="all" id="register" style="background-color: #F2AE11;color: #fff">Register</button>
        <button class="wedding" id="login" style="background-color: #F2AE11;color: #fff">Login</button>
    </div>
</div>

<section id="register_form">
    <div class="content6"  id="p_edit">
        <div class="sections">
            <h1>Register</h1>
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
                <label class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10 col-md-4">
                    <input type="password" name="password" class="form-control">
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
                <label class="col-sm-2 control-label">Address</label>
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
                <label class="col-sm-2 control-label">About image</label>
                <div class="col-sm-10 col-md-4">
                    <input type="file" name="photo_image" class="form-control">
                </div>
            </div>
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">Governate</label>
                <div class="col-sm-10 col-md-4">
                    <select name="city" class="form-control">
                        <?php foreach ($cities as $value) { ?>
                            <option value="<?php echo $value['id'] ?>">
                                <?php echo $value['name']; ?>    
                            </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group form-group-lg">
                <div class="col-sm-offset-2 col-sm-10">
                    <input class="btn btn-primary btn-lg" type="submit" name="register" 
                    value="Register" style="background-color: #F2AE11;color: #fff">
                </div>
            </div>
        </form>

        <div class="clearfix"></div>  
    </div>
</section>

<section id="login_form" style="display: none;height: 400px;">
    <div class="content6"  id="p_edit">
        <div class="sections">
            <h1>Login</h1>
            <div class="line"><span></span></div>
        </div>
       
        <form method="post" class="form-horizontal" enctype="multipart/form-data">
            
             <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10 col-md-4">
                    <input type="email" name="email" class="form-control">
                </div>
            </div>
           <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10 col-md-4">
                    <input type="password" name="password" class="form-control">
                </div>
            </div>
            <div class="form-group form-group-lg">
                <div class="col-sm-offset-2 col-sm-10">
                    <input class="btn btn-primary btn-lg" type="submit" name="login" 
                    value="login" style="background-color: #F2AE11;color: #fff">
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
               
        </script>
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

                $("#login").click(function(){
                	$("#register_form").hide();
                	$("#login_form").show();
                });

                 $("#register").click(function(){
                	$("#login_form").hide();
                	$("#register_form").show();
                });
                
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

<?php
ob_end_flush();

?>