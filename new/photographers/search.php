<?php
include 'header.php';
include 'navegation.php';
include 'connect.php';

if (isset($_POST['search'])) {
	$search=$_POST['search'];
	$sql="SELECT * FROM categroies WHERE title='$search'";
	$result=mysqli_query($connect,$sql);
	$row=mysqli_fetch_assoc($result);
	$cat_id=$row['id'];

	$select_pic="SELECT * FROM pictures WHERE cat_id='$cat_id'";
	$select_pic_result=mysqli_query($connect,$select_pic);
	$data= array();
	while($pic_row=mysqli_fetch_assoc($select_pic_result)){
		$data[]=$pic_row;
	}
	//echo $cat_id;die();
	//print_r($data);die();
}

?>




	
	

	<!--portfolio-->
	<div class="portfolio" id="gallery">		
		<div class="container">
			<div class="portfolio-grids">	
			<?php foreach ($data as $value) { ?>			
				<div class="col-md-4 port-grids view view-fourth">
					<a class="example-image-link" href="images/<?php echo $value['image'] ?>" data-lightbox="example-set" data-title="">
						<img src="images/<?php echo $value['image'] ?>" class="img-responsive" alt=""/>
						<div class="mask">
							<p><?php echo $value['about'] ?></p>
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

	<!--testimonials-->
	 
					 
		<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
			</script>		
	</div><br>
	<!--//testimonials-->
	
	<!--footer-->

	<!--//footer-->
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