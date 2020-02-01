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
									<li>
										<p>0 Products</p>
									</li>
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
					<input type="submit" value=" ">
				</form>
			</div>
			<!---top-header-search-box--->
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//top-header-nav---->
	<!----start-slider-script---->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function() {
			// Slideshow 4
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 500,
				namespace: "callbacks",
				before: function() {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function() {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!----//End-slider-script---->
	<!-- Slideshow 4 -->
	<?php include('blocks/slider.php'); ?>
	<!----- //End-slider---->
	<!----content---->
	<div class="content">
		<div class="container">
			<!---top-row--->
			<?php include('blocks/catalogies.php'); ?>
			<!---top-row--->
			<div class="container">
				<!----speical-products---->
				<?php include('blocks/products.php') ?>
				<!---//speical-products---->
			</div>
			<!----content---->
			<!----footer--->
			<?php include('footer.php'); ?>
			<!---//footer--->
			<!---copy-right--->
			<?php include('coppyright.php'); ?>
			<!--//copy-right--->
		</div>
		<!----container---->
	</div>	
</body>

</html>