<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Donut</title>
	 <link rel="stylesheet" type="text/css" href="<?php echo $view->getThemePath()?>/css/style.css">
</head>
<body class="vibrant" style="background:white;">
	<div class="treat-your-team">
		<div class="container">

			<img src="<?php echo $this->getThemePath(); ?>/images/donut/VibrantBrands_logo.png" alt="Vibrant Logo" class="logo" />

			<img src="<?php echo $this->getThemePath(); ?>/images/donut/Treat-your-team-100-01.png" alt="Treat Your Team" class="treat" />

			<div>
				<div>
					<p>
						Schedule an appointment with Rick below!<br/>
						<strong>We'll send you $100 or donate it to your favorite charity in your name!</strong>
					</p>
					<p style="text-align: left;">&nbsp;</p>
				<!-- Calendly link widget begin -->
					<link href="https://calendly.com/assets/external/widget.css" rel="stylesheet" /><script src="https://calendly.com/assets/external/widget.js" type="text/javascript"></script><!-- Calendly link widget end -->
				<p style="text-align: left;"><button class="btn" onclick="Calendly.showPopupWidget('https://calendly.com/rick-vibrant-brands');return false;">Schedule an Appointment</button></p>
				</div>
				<div>
					<img src="<?php echo $this->getThemePath(); ?>/images/donut/Rick-donut_chs020620.png" alt="Rick holding donut" class="donut" />
				</div>
			</div>
		</div>
	</div>
</body>
</html>