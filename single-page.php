<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<?php include('head.php'); ?>
	<body>
		<!----container---->
		<div class="container">
			<!----top-header---->
			<div class="top-header">
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" title="barndlogo" /></a>
				</div>
				<div class="top-header-info">
					<div class="top-contact-info">
						<ul class="unstyled-list list-inline">
							<li><span class="phone"> </span>090 - 223 44 66</li>
							<li><span class="mail"> </span><a href="#">help@trendd.com</a></li>
							<div class="clearfix"> </div>
						</ul>
					</div>
					<div class="cart-details">
						<div class="add-to-cart">
							<ul class="unstyled-list list-inline">
								<li><span class="cart"> </span>
									<ul class="cart-sub">
										<li><p>0 Products</p></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="login-rigister">
							<ul class="unstyled-list list-inline">
								<li><a class="login" href="#">Login</a></li>
								<li><a class="rigister" href="#">REGISTER <span> </span></a></li>
								<div class="clearfix"> </div>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!----//top-header---->
			<!---top-header-nav---->
			<div class="top-header-nav"> 
			<!----start-top-nav---->
			<?php include('blocks/nav.php'); ?>
			  <!----End-top-nav---->
			  <!---top-header-search-box--->
			  <div class="top-header-search-box">
			  	<form>
			  		<input type="text" placeholder="Search" required / maxlength="22">
			  		<input type="submit" value=" " >
			  	</form>
			  </div>
			  <!---top-header-search-box--->
						<div class="clearfix"> </div>
			</div>
		</div>
			<!--//top-header-nav---->
			<!----content---->
				<div class="content">
					<div class="container">
				<!--- products ---->
				<div class="products">
					<!-- filter -->
				</div>
				</div>
				<div class="clearfix"> </div>
				<!-- //products ---->
				<!----product-details--->
				<div class="product-details">
					<div class="container">
					<div class="product-details-row1">
						<div class="product-details-row1-head">
							<h2>Men'sFootwear</h2>
							<p>Hookset Handcrafted Fabric Chukka</p>
						</div>
						<div class="col-md-4 product-details-row1-col1">
							<!----details-product-slider--->
						<!-- Include the Etalage files -->
							<link rel="stylesheet" href="css/etalage.css">
							<script src="js/jquery.etalage.min.js"></script>
						<!-- Include the Etalage files -->
						<script>
								jQuery(document).ready(function($){
					
									$('#etalage').etalage({
										thumb_image_width: 300,
										thumb_image_height: 400,
										source_image_width: 900,
										source_image_height: 1000,
										show_hint: true,
										click_callback: function(image_anchor, instance_id){
											alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
										}
									});
									// This is for the dropdown list example:
									$('.dropdownlist').change(function(){
										etalage_show( $(this).find('option:selected').attr('class') );
									});
		
							});
						</script>
						<!----//details-product-slider--->
						<div class="details-left">
							<div class="details-left-slider">
								<ul id="etalage">
									<li>
										<a href="optionallink.html">
											<img class="etalage_thumb_image" src="images/product-slide/image1_thumb.jpg" />
											<img class="etalage_source_image" src="images/product-slide/image1_large.jpg" />
										</a>
									</li>
									<li>
										<img class="etalage_thumb_image" src="images/product-slide/image2_thumb.jpg" />
										<img class="etalage_source_image" src="images/product-slide/image2_large.jpg" />
									</li>
									<li>
										<img class="etalage_thumb_image" src="images/product-slide/image3_thumb.jpg" />
										<img class="etalage_source_image" src="images/product-slide/image3_large.jpg" />
									</li>
									<li>
										<img class="etalage_thumb_image" src="images/product-slide/image4_thumb.jpg" />
										<img class="etalage_source_image" src="images/product-slide/image4_large.jpg" />
									</li>
									<li>
										<img class="etalage_thumb_image" src="images/product-slide/image5_thumb.jpg" />
										<img class="etalage_source_image" src="images/product-slide/image5_large.jpg" />
									</li>
									<li>
										<img class="etalage_thumb_image" src="images/product-slide/image6_thumb.jpg" />
										<img class="etalage_source_image" src="images/product-slide/image6_large.jpg" />
									</li>
									<li>
										<img class="etalage_thumb_image" src="images/product-slide/image7_thumb.jpg" />
										<img class="etalage_source_image" src="images/product-slide/image7_large.jpg" />
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- product info start-->
					<?php include('blocks/product-info.php'); ?>
					<!-- product info end -->
				<!--//product-details--->
				</div>
				<!---- product-details ---->
				<div class="product-tabs">
					<!--Horizontal Tab-->
				    <div id="horizontalTab">
				        <ul>
				            <li><a href="#tab-1">Product overwiev</a></li>
				            <li><a href="#tab-2">Features</a></li>
				            <li><a href="#tab-3">Customer reviews</a></li>
				        </ul>
				        <div id="tab-1" class="product-complete-info">
				        	<h3>DESCRIPTION:</h3>
				        	<p>With its beautiful premium leather, lace-up oxford styling, recycled rubber outsoles and 9-inch height, this Earthkeepers City Premium style is an undeniably handsome boot. To complement its rustic, commanding outer appearance, we've paid attention to the inside as well - by adding SmartWool® faux shearling to the linings and crafting the footbed using our exclusive anti-fatigue comfort foam technology to absorb shock. Imported.</p>
				       		<span>DETAILS:</span>
				       		<div class="product-fea">
				       			<p>Premium burnished full-grain leather and suede upper</p>
				       			<p>Leather is from a tannery rated Silver for its water, energy and waste-management practices</p>
				       			<p>Leather lining and footbed for a premium feel and optimal comfort</p>
				       			<p>SmartWool® faux shearling lining is made with 60% merino wool and 40% PET</p>
				       			<p>Reflective insole board for additional warmth under foot</p>
				       			<p>100% organic cotton laces</p>
				       			<p>SmartWool® fabric-lined anti-fatigue footbed provides superior, all-day comfort and climate control</p>
				       			<p>Timberland® exclusive Gripstick™ and Green Rubber™ outsole is made with 42% recycled rubber</p>
				       		</div>
				        </div>
				        <div id="tab-2" class="product-complete-info">
				        	<h3>DESCRIPTION:</h3>
				        	<p>With its beautiful premium leather, lace-up oxford styling, recycled rubber outsoles and 9-inch height, this Earthkeepers City Premium style is an undeniably handsome boot. To complement its rustic, commanding outer appearance, we've paid attention to the inside as well - by adding SmartWool® faux shearling to the linings and crafting the footbed using our exclusive anti-fatigue comfort foam technology to absorb shock. Imported.</p>
				       		<p>lace-up oxford styling, recycled rubber outsoles and 9-inch height, this Earthkeepers City Premium style is an undeniably handsome boot. To complement its rustic, commanding outer appearance,</p>
				       		<span>DETAILS:</span>
				       		<div class="product-fea">
				       			<p>Premium burnished full-grain leather and suede upper</p>
				       			<p>Leather is from a tannery rated Silver for its water, energy and waste-management practices</p>
				       			<p>Leather lining and footbed for a premium feel and optimal comfort</p>
				       			<p>SmartWool® faux shearling lining is made with 60% merino wool and 40% PET</p>
				       			<p>Reflective insole board for additional warmth under foot</p>
				       		</div>
				        </div>
				        <div id="tab-3"  class="product-complete-info">
				        	<h3>DESCRIPTION:</h3>
				        	<p>With its beautiful premium leather, lace-up oxford styling, recycled rubber outsoles and 9-inch height, this Earthkeepers City Premium style is an undeniably handsome boot. To complement its rustic, commanding outer appearance, we've paid attention to the inside as well - by adding SmartWool® faux shearling to the linings and crafting the footbed using our exclusive anti-fatigue comfort foam technology to absorb shock. Imported.</p>
				       		<span>DETAILS:</span>
				       		<div class="product-fea">
				       			<p>100% organic cotton laces</p>
				       			<p>SmartWool® fabric-lined anti-fatigue footbed provides superior, all-day comfort and climate control</p>
				       			<p>Timberland® exclusive Gripstick™ and Green Rubber™ outsole is made with 42% recycled rubber</p>
				       			<p>Premium burnished full-grain leather and suede upper</p>
				       			<p>Leather is from a tannery rated Silver for its water, energy and waste-management practices</p>
				       			<p>Leather lining and footbed for a premium feel and optimal comfort</p>
				       			<p>SmartWool® faux shearling lining is made with 60% merino wool and 40% PET</p>
				       			<p>Reflective insole board for additional warmth under foot</p>
				       			<p>100% organic cotton laces</p>
				       			<p>SmartWool® fabric-lined anti-fatigue footbed provides superior, all-day comfort and climate control</p>
				       			<p>Timberland® exclusive Gripstick™ and Green Rubber™ outsole is made with 42% recycled rubber</p>
				       		</div>
				        </div>
				    </div>
				    <!-- Responsive Tabs JS -->
				    <script src="js/jquery.responsiveTabs.js" type="text/javascript"></script>
				
				    <script type="text/javascript">
				        $(document).ready(function () {
				            $('#horizontalTab').responsiveTabs({
				                rotate: false,
				                startCollapsed: 'accordion',
				                collapsible: 'accordion',
				                setHash: true,
				                disabled: [3,4],
				                activate: function(e, tab) {
				                    $('.info').html('Tab <strong>' + tab.id + '</strong> activated!');
				                }
				            });
				
				            $('#start-rotation').on('click', function() {
				                $('#horizontalTab').responsiveTabs('active');
				            });
				            $('#stop-rotation').on('click', function() {
				                $('#horizontalTab').responsiveTabs('stopRotation');
				            });
				            $('#start-rotation').on('click', function() {
				                $('#horizontalTab').responsiveTabs('active');
				            });
				            $('.select-tab').on('click', function() {
				                $('#horizontalTab').responsiveTabs('activate', $(this).val());
				            });
				
				        });
				    </script>
				</div>
				<!-- //product-details ---->
				</div>
				</div>
			<!----content---->
			<div class="clearfix"> </div>
			<!----footer--->
			<div class="footer">
				<div class="container">
					<div class="col-md-3 footer-logo">
						<a href="index.php"><img src="images/flogo.png" title="brand-logo" /></a>
					</div>
					<div class="col-md-7 footer-links">
						<ul class="unstyled-list list-inline">
							<li><a href="#"> Faq</a> <span> </span></li>
							<li><a href="#"> Terms and Conditions</a> <span> </span></li>
							<li><a href="#"> Secure Payments</a> <span> </span></li>
							<li><a href="#"> Shipping</a> <span> </span></li>
							<li><a href="contact.html"> Contact</a> </li>
							<div class="clearfix"> </div>
						</ul>
					</div>
					<div class="col-md-2 footer-social">
						<ul class="unstyled-list list-inline">
							<li><a class="pin" href="#"><span> </span></a></li>
							<li><a class="twitter" href="#"><span> </span></a></li>
							<li><a class="facebook" href="#"><span> </span></a></li>
							<div class="clearfix"> </div>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			 </div>
			 <div class="clearfix"> </div>
			<!---//footer--->
			<!---copy-right--->
					<div class="copy-right">
						<div class="container">
							<p>Template by <a href="http://w3layouts.com/">W3layouts</a></p>
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
						</div>
					</div>
			<!--//copy-right--->
		</div>
		<!----container---->
	</body>
</html>

