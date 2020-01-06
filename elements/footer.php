<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php Loader::element('footer_required'); ?>

	<footer>
		<div class="border"></div>
		<div class="topbar">
			<div>
			</div>
			<div>
				<a href='/'>
					<div class="logo">
			  			<span>VIBRANT</span>
					    	<img src="<?php echo $this->getThemePath(); ?>/images/vibrant-logo.png" alt="Vibrant Logo">
					    <span>BRANDS</span>
			  		</div>
		  		</a>
			</div>
			<div>
				<!--<strong>Newsletter Signup</strong><br /> 
				Enter email address here <div class="arrow"><i class="fas fa-caret-right"></i></div> -->
			</div>
		</div>
		<div class="bottombar">
			<strong><a href="tel:8559462773">(855) 946-2773</a></strong><br />
				543 Loudon Road, Albany, NY 12110<br />
				<div class="social">
					<a href="https://www.facebook.com/vibrantbrands/"><i class="fab fa-facebook-f"></i></a>
					<a href="https://vimeo.com/user3665286"><i class="fab fa-vimeo-v"></i></a>
				</div>
		</div>

	</footer>

		<!-- Calendly badge widget begin -->
		<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
		<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript"></script>
		<script type="text/javascript">Calendly.initBadgeWidget({ url: 'https://calendly.com/rick-vibrant-brands', text: 'Schedule your 30 minute branding consultation', color: '#5A6D7E', textColor: '#ffffff', branding: false });</script>
		<style type="text/css">
.calendly-badge-widget { left: 50% !important; margin-left: -190px!important; }
</style>
		<!-- Calendly badge widget end -->

		<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
		<!-- <script src="<?php echo $this->getThemePath(); ?>/script/vendor/odometer.min.js"></script>  -->
		<script src="<?php echo $this->getThemePath(); ?>/script/vendor/lity.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
		<script src="<?php echo $this->getThemePath(); ?>/script/vendor/aos.js"></script>
		<script src="<?php echo $this->getThemePath(); ?>/script/main.js"></script>
	</div>
</body>
</html>