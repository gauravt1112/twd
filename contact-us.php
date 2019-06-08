<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
	<head>
		<?php include("includes/include_css.html") ?>
	</head>
	<body>
    
		<div id="st-container" class="st-container">
		
			<?php include("includes/browser_upgrade.html") ?>
			<?php include("includes/header.html") ?>
			
			<div class="st-content" style="background-color: #ffffff;">
				<div class="st-content-inner">
					<?php include("includes/global-header-2.html") ?>
					<div class="logo-space-top"></div>
<!--==========================================================================
	Body Start
	========================================================================== -->
	
	
		<div class="container-fluid" style="background-color: #fc5979; padding-bottom: 20px; padding-top: 50px;">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-10 col-xs-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-1">
					<div class="about-heading"><span class="about-nav-text"><span style="font-weight: bolder;">C</span>ONTACT <span style="font-weight: bolder;">U</span>S</span></div>
					
					<div class="about-divider"></div>
					
				</div>
			</div>
		</div>
		
		
		<div class="contact-outer-wrap">
		<p class="contact-wrap">
<p class="desktop-address"><span class="contact-head">
You can get in touch with us on the below numbers:</span> <br><br><span class="contact-head-1">Contact No : +91 9341065765 &nbsp;|&nbsp;Bangalore</span> <br><br><span class="contact-head-1">Contact No : +91 9321861308 &nbsp;|&nbsp;Mumbai</span><br><br><span class="contact-head-1">Contact No : +91 9320399179 &nbsp;|&nbsp;Pune</span><br> <br> <span class="contact-head-1">Email ID : <a href="mailto:support@timeswomensdrive.com"> support@timeswomensdrive.com</a></span></p>

<p class="res-address"><span class="contact-head-1">Contact No : +91 9341065765 &nbsp;|&nbsp;Bangalore</span> <br><span class="contact-head-1">Contact No : +91 9321861308 &nbsp;|&nbsp;Mumbai</span><br><span class="contact-head-1">Contact No :+91 9320399179 &nbsp;|&nbsp;Pune</span><br> <span class="contact-head-1">Email ID : <a href="mailto:support@timeswomensdrive.com">support@timeswomensdrive.com</a></span></p>




					</p>
	
					</div>
					
				
	
<!--==========================================================================
	End Body
	========================================================================== -->						
	<?php include("includes/footer1.html") ?>			
				</div>
			</div>

		</div>
    
	<!-- Include JS File -->
		<?php include("includes/include_js.html") ?>
		<script>
		$(document).ready(function(){
			setFooterBottom();
			setFooterBottom1();
		});
		
		$(window).load(function(){
			setFooterBottom();
			setFooterBottom1();
		});
		
		$(window).resize(function(){
			setFooterBottom();
			setFooterBottom1();
		});
			  function setFooterBottom() { var docHeight = $(window).height(); var footerHeight = $('#footer').height(); var footerTop = $('#footer').position().top + footerHeight; if (footerTop < docHeight) { $('#footer').css('margin-top', 0+ (docHeight - footerTop) + 'px'); } }
			  
			  function setFooterBottom1() { var docHeight = $(window).height(); var footerHeight = $('#footer1').height(); var footerTop = $('#footer1').position().top + footerHeight; if (footerTop < docHeight) { $('#footer1').css('margin-top', 0+ (docHeight - footerTop) + 'px'); } }
		</script>
	<!-- End Include JS File -->
	
	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<?php include("includes/GoogleAnalytics.html") ?>
	<!-- End Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	
	</body>
</html>
