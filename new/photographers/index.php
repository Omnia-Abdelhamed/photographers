<?php
ob_start();
session_start();
include 'header.php';
include 'navegation.php';
include 'connect.php';
$select_photosession="SELECT * FROM photo_session LIMIT 4";
$select_photosession_result=mysqli_query($connect,$select_photosession);
$data=array();
while ($photosession_row=mysqli_fetch_assoc($select_photosession_result)) {
    $data[]=$photosession_row;
}

?>
	<!--banner-->
	<div class="banner">
		<div class="banner-title"> 
			<div class="container">
				<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>
							<div class="banner-text"> 
								<h2>مرحباً بكم في مبدعي التصوير</h2>
								<p>، و هي عبارة عن منصة للمصورين الموهوبين لعرض اعمالهم وخدماتهم والتنافس على طلبات التقاط الصور للوصول إلى المزيد ‏من العملاء.‏ </p>
								<a class="more scroll" href="photographers.php"> Read More</a>
							</div>
						</li>
						<li>
							<div class="banner-text"> 
								<h3>الاماكن التصويرية</h3>
								<p>وهي عبارة عن منصة لأماكن التصوير المتميزة والتي يمكن من خلالها عمل ‏photosession ‎‏ ‏للعديد من الفئات التصويرية مثل ‏الحفلات والمؤتمرات ...الخ</p>
								<a class="more scroll" href="#about"> Read More</a>
							</div>
						</li>
					</ul>	
				</div>			
			</div>
		</div>	
	</div>	
	<!--//banner-->
	<!--about-->
	<div class="about" id="about">
		<div class="container">
			<h3 class="title">نبذة عن <span>الموقع</span></h3>
			<div class="col-md-3 about-left wow fadeInLeft animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
				<img width="300" src="images/abdo10.jpg" alt="" class="img-responsive" />
			</div>
			<br>
			<div class="col-md-9 about-right wow fadeInRight animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
				<h4>هو عبارة عن منصة للمصورين الموهوبين لعرض اعمالهم وخدماتهم والتنافس على طلبات التقاط الصور للوصول إلى المزيد ‏من العملاء، وكذلك لأماكن التصوير المتميزة ‏</h4>
				<p>وهو موقع الكتروني يتم من خلالة عرض العديد من الاعمال الخاصة بالمصممين الفتوغرافيين والاماكن الجغرافية التي يمكن من خلالها عمل الجلسات التصويرية للعديد من فئات التصوير. وكذلك يتيح الموقع امكانية زيادة اعداد العملاء بجهد ووقت اقل من وسائل الدعاية الاخري , وتوفير سوق عمل واضح للمصمم واداة دعاية للاماكن الجفرافية . </p>
			</div>
			<div class="clearfix"> </div>
		</div>	
	</div>
	<!--//about-->

	<!--team-->
	<div class="team" id="team">
		<div class="container">
			<h3 class="title">شائع  <span>المصورين</span></h3>
			<div class="team-info">
				<div class="col-md-3 team-grids wow bounceIn animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
					<ul class="social-networks square spin-icon team-icons">
						<li><a href="#" class="icon-linkedin"></a></li>
						<li><a href="#" class="icon-twitter"></a></li>
						<li><a href="#" class="icon-facebook"></a></li>
					</ul>
					<a href="profile.php">
						<img class="img-responsive" src="images/عبدربه.jpg" alt="" style="height: 340px" />
						<div class="captn">
							<h3>Abdrabo Hamed</h3>
							<p>Aenean puivinar ac enimet posuere tincidunt velit Utin tincidunt</p>
						</div>
					</a>
				</div>

				

				<div class="col-md-3 team-grids wow bounceIn animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
					<ul class="social-networks square spin-icon team-icons">
						<li><a href="#" class="icon-linkedin"></a></li>
						<li><a href="#" class="icon-twitter"></a></li>
						<li><a href="#" class="icon-facebook"></a></li>
					</ul>
					<a href="#">
						<img class="img-responsive" src="images/عبدالله.jpg" alt=""/>
						<div class="captn">
							<h3>Abdallah Elsayed</h3>
							<p>Aenean puivinar ac enimet posuere tincidunt velit Utin tincidunt</p>
						</div>
					</a>
				</div>
				<div class="col-md-3 team-grids wow bounceIn animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
					<ul class="social-networks square spin-icon team-icons">
						<li><a href="#" class="icon-linkedin"></a></li>
						<li><a href="#" class="icon-twitter"></a></li>
						<li><a href="#" class="icon-facebook"></a></li>
					</ul>
					<a href="#">
						<img class="img-responsive" src="images/خالد.PNG" alt=""  />
						<div class="captn">
							<h3>Khaled mohsen</h3>
							<p>Aenean puivinar ac enimet posuere tincidunt velit Utin tincidunt</p>
						</div>
					</a>
				</div>
				<div class="col-md-3 team-grids wow bounceIn animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
					<ul class="social-networks square spin-icon team-icons">
						<li><a href="#" class="icon-linkedin"></a></li>
						<li><a href="#" class="icon-twitter"></a></li>
						<li><a href="#" class="icon-facebook"></a></li>
					</ul>
					<a href="#">
						<img class="img-responsive" src="images/ايهاب.jpg" alt="" />
						<div class="captn">
							<h3>EHAB FAHMY</h3>
							<p>Aenean puivinar ac enimet posuere tincidunt velit Utin tincidunt</p>
						</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//team-->
	<!-- about-bottom -->
	<div class="about-bottom">
		<div class="container">
			<h3 class="title">شائع<span>اماكن التصوير</span></h3>
			<?php foreach ($data as $key => $value) { ?>
			<div class="col-md-4 port-grids view view-fourth">
					<a class="example-image-link" href="images/<?php echo $value['image'] ?>" data-lightbox="example-set" data-title="">
						<img src="images/<?php echo $value['image'] ?>" class="img-responsive" alt=""/>
						<div class="mask">
							<p><?php echo $value['title']; ?></p>
							<p><?php echo $value['address']; ?></p>

						</div>
					</a>
				</div>
				<?php } ?>
			
		</div>
	</div>
	<!-- //about-bottom -->
	
	<!--services-->
	<div class="services" id="services">
		<div class="container">
			<h3 class="title">بعضاً من  <span>الخدمات </span></h3>
			<div class="row work-row">
				<div class="col-sm-6 col-md-4 work-row-grids wow bounceIn animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
					<div class="work-grids-img">
						<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
					</div>	
					<div class="caption work-captn">
						<h4>اختيار الألوان في التصوير</h4>
						<p>بمعرفتك لأفضل الألوان العالمية تستطيع مواكبة الحدث وتكون على معرفة بآخر الألوان وتطبيقها على صورك</p>						
					 </div>
				</div>
				<div class="col-sm-6 col-md-4 work-row-grids wow bounceIn animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
					<div class="work-grids-img">
						<span class="glyphicon glyphicon-camera" aria-hidden="true"></span>
					</div>	
					<div class="caption work-captn">
						<h4>التصوير الابداعي </h4>
						<p>خدع تصوير احترافية باستخدام ادوات بسيطة</p>						
					 </div>
				</div>
				<div class="col-sm-6 col-md-4 work-row-grids wow bounceIn animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
					<div class="work-grids-img">
						<span class="glyphicon glyphicon-print" aria-hidden="true"></span>
					</div>	
					<div class="caption work-captn">
						<h4>دليل للتصوير الفوتوغرافي الإبداعي للماء</h4>
						<p>هناك العديد من الطرق الإبداعية للتصوير الفوتوغرافي للماء التي يمكن أن تؤدي إلى صورة مذهلة.</p>						
					 </div>
				</div>
				<div class="col-sm-6 col-md-4 work-row-grids wow bounceIn animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
					<div class="work-grids-img">
						<span class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span>
					</div>	
					<div class="caption work-captn">
						<h4>كيف اختار بطاقة ذاكرة مناسبة لتسجيل الفيديو</h4>
						<p>بطاقة الذاكرة الرقمية الجديدة المؤمنة لاحتياجات تسجيل الفيديو بالصيغ الحديثة، 4k و 8k بالاضافة إلى 360 درجة.</p>						
					 </div>
				</div>
				<div class="col-sm-6 col-md-4 work-row-grids wow bounceIn animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
					<div class="work-grids-img">
						<span class="glyphicon glyphicon-picture" aria-hidden="true"></span>
					</div>	
					<div class="caption work-captn">
						<h4>تصوير الماكرو Macro</h4>
						<p>أنواع التصوير الفوتوغرافي</p>						
					 </div>
				</div>
				<div class="col-sm-6 col-md-4 work-row-grids wow bounceIn animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
					<div class="work-grids-img">
						<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
					</div>	
					<div class="caption work-captn">
						<h4>٥ نصائح لتصوير الأطعمة والمأكولات</h4>
						 <p> وبها مجموعة من القواعد التي يمكن اتباعها لاستخراج افضل صور</p>
					 </div>
				</div>
				<div class="clearfix"> </div>
			</div>		
		</div>
	</div>	
	<!--//services-->
	<!--portfolio-->
	<div class="portfolio" id="gallery">		
		<div class="container">
			<h3 class="title">بعض لقطات <span>الصور</span></h3>
			<div class="portfolio-grids">				
				<div class="col-md-4 port-grids view view-fourth">
					<a class="example-image-link" href="images/فن1.jpg" data-lightbox="example-set" data-title="">
						<img src="images/فن1.jpg" class="img-responsive" alt=""/>
						<div class="mask">
							<p>Duis aute irure dolor in reprehenderit in voluptate velit cillum dolore fugiat.</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 port-grids view view-fourth">
					<a class="example-image-link" href="images/فن2.jpg" data-lightbox="example-set" data-title="">
						<img src="images/فن2.jpg" class="img-responsive" alt=""/>
						<div class="mask">
							<p>Duis aute irure dolor in reprehenderit in voluptate velit cillum dolore fugiat.</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 port-grids view view-fourth">
					<a class="example-image-link" href="images/فن7.jpg" data-lightbox="example-set" data-title="">
						<img src="images/فن7.jpg" class="img-responsive" alt=""/>
						<div class="mask">
							<p>Duis aute irure dolor in reprehenderit in voluptate velit cillum dolore fugiat.</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 port-grids view view-fourth">
					<a class="example-image-link" href="images/فن6.jpg" data-lightbox="example-set" data-title="">
						<img src="images/فن6.jpg" class="img-responsive" alt=""/>
						<div class="mask">
							<p>Duis aute irure dolor in reprehenderit in voluptate velit cillum dolore fugiat.</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 port-grids view view-fourth">
					<a class="example-image-link" href="images/فن8.jpg" data-lightbox="example-set" data-title="">
						<img src="images/فن8.jpg" class="img-responsive" alt=""/>
						<div class="mask">
							<p>Duis aute irure dolor in reprehenderit in voluptate velit cillum dolore fugiat.</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 port-grids view view-fourth">
					<a class="example-image-link" href="images/فن9.jpg" data-lightbox="example-set" data-title="">
						<img src="images/فن9.jpg" class="img-responsive" alt=""/>
						<div class="mask">
							<p>Duis aute irure dolor in reprehenderit in voluptate velit cillum dolore fugiat.</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 port-grids view view-fourth">
					<a class="example-image-link" href="images/قصر البارون2.jpg" data-lightbox="example-set" data-title="">
						<img src="images/قصر البارون2.jpg" class="img-responsive" alt=""/>
						<div class="mask">
							<p>Duis aute irure dolor in reprehenderit in voluptate velit cillum dolore fugiat.</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 port-grids view view-fourth">
					<a class="example-image-link" href="images/7.jpg" data-lightbox="example-set" data-title="">
						<img src="images/7.jpg" class="img-responsive" alt=""/>
						<div class="mask">
							<p>Duis aute irure dolor in reprehenderit in voluptate velit cillum dolore fugiat.</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 port-grids view view-fourth">
					<a class="example-image-link" href="images/تيييم.jpg" data-lightbox="example-set" data-title="">
						<img src="images/تيييم.jpg" class="img-responsive" alt=""/>
						<div class="mask">
							<p>Duis aute irure dolor in reprehenderit in voluptate velit cillum dolore fugiat.</p>
						</div>
					</a>
				</div>
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