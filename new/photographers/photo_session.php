<?php
ob_start();
session_start();
include 'header.php';
include 'navegation.php';
include 'connect.php';


$select_photographer="SELECT * FROM photo_session";
$select_photographer_result=mysqli_query($connect,$select_photographer);
$data=array();
while ($photographer_row=mysqli_fetch_assoc($select_photographer_result)) {
    $data[]=$photographer_row;
}

?>

  <!-- about-bottom -->
	<div class="about-bottom">
		<div class="container">
			<h3 class="title"> <span>اماكن التصوير</span></h3>
		<!-- 	<div class="about-bottom-grid">
				<h4>PHOTOSESSION</h4>
				<p>العديد من الاماكن الجغرافية المتميزة التي يمكن من خلالها عمل التصميمات الجغرافية</p>
				<ul class="social-networks square spin-icon">
					<li><a href="#" class="icon-linkedin"></a></li>
					<li><a href="#" class="icon-twitter"></a></li>
					<li><a href="#" class="icon-facebook"></a></li>
				</ul>
			</div> -->
		
<?php foreach ($data as $key => $value) { ?>
			<div class="col-md-4 port-grids view view-fourth">
					<a class="example-image-link" href="session.php?id=<?php echo $value['id']; ?>" data-lightbox="example-set" data-title="">
						<img src="images/<?php echo $value['image'] ?>" class="img-responsive" alt=""/>
						<div class="mask">
							<p><?php echo $value['title']; ?></p>
							<p><?php echo $value['address']; ?></p>

						</div>
					</a>
				</div>
				<?php } ?>
			
			<div class="clearfix"> </div>
				<script type="text/javascript">
					window.addEvent('domready',function(){
					$$('div.thumb').each(function(div){

						div.getElement('div.someContent').set('tween', {duration:'700'});
						div.getElement('div.divLeft').set('tween', {duration: '450'});
						div.getElement('div.divRight').set('tween', {duration: '450'});
						
						div.addEvent('mouseenter',function(e){
							this.getElement('div.divLeft').tween('left','-70px')
							this.getElement('div.divRight').tween('left','80px')
							this.getElement('div.someContent').tween("background-position", "40px 0px");
						})
						div.addEvent('mouseleave',function(e){
							this.getElement('div.divLeft').tween('left','0px')
							this.getElement('div.divRight').tween('left','0px')
							this.getElement('div.someContent').tween("background-position", "0px -167px");

						})
					})
					})
				</script>
				
		</div>
	</div>
	<!-- //about-bottom --><!-- about-bottom -->
	
	<!-- //about-bottom -->
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
	<div class="footer wow fadeInRight animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
		<div class="container">
			<p>Copyright © 2016 Collective. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
		</div>
	</div>
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


<?php

ob_end_flush();
?>