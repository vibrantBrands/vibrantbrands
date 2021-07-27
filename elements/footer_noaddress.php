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
					    	<img src="<?php echo $this->getThemePath(); ?>/images/vibrant-logo.png" alt="Vibrant Logo">
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
				<a href="/contact" class="contact-link">Contact Us</a>
				<div class="social">
					<a href="https://www.facebook.com/vibrantbrands/"><i class="fab fa-facebook-f"></i></a>
					<a href="https://vimeo.com/user3665286"><i class="fab fa-vimeo-v"></i></a>
				</div>
		</div>
		<a href="/book-appointment"><div class="calendly-btn">
			Schedule your 30 minute branding consultation
		</div></a>

	</footer>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
		<!-- <script src="<?php echo $this->getThemePath(); ?>/script/vendor/odometer.min.js"></script>  -->
		<script src="<?php echo $this->getThemePath(); ?>/script/vendor/lity.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
		<script src="<?php echo $this->getThemePath(); ?>/script/vendor/aos.js"></script>
		<script src="<?php echo $this->getThemePath(); ?>/script/vendor/rellax.min.js"></script>
		<script src="<?php echo $this->getThemePath(); ?>/script/main.js"></script>
	</div>
</body>
</html>