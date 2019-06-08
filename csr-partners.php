<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
	<head>
		<?php include("includes/include_css.html") ?>
		
	<style>/*image style*/
		.hvr-radial-out {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  position: relative;
  overflow: hidden;
  background: rgba(0,0,0,0);
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
}
.hvr-radial-out:before {
  content: "";
  position: absolute;
  z-index: -1;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0,0,0,0.1);
  border-radius: 100%;
  -webkit-transform: scale(0);
  transform: scale(0);
  -webkit-transition-property: transform;
  transition-property: transform;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}
.hvr-radial-out:hover, .hvr-radial-out:focus, .hvr-radial-out:active {
  color:white;
}
.hvr-radial-out:hover:before, .hvr-radial-out:focus:before, .hvr-radial-out:active:before {
  -webkit-transform: scale(2);
  transform: scale(2);
}
		</style>
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
					<div class="about-heading"><span class="about-nav-text"><span style="font-weight: bolder;">CSR</span> <span style="font-weight: bolder;">P</span>ARTNERS</span></div>
					
					<div class="about-divider"></div>
					
				</div>
			</div>
		</div>
		<div class="wyw-first-para">
		<p class="csr-wrap wow fadeInUp" data-wow-duration="1s">
						The Times Women's Drive is more than a race. It is also an initiative to educate and raise awareness about breast cancer. 
					</p>
	
					</div>
					
	<div class="container-fluid">
		<div class="row">
			<div class="csr-banner" style="position: relative;">
			<div class="hvr-radial-out" style="position: absolute; left:0;top:0;width:100%;height:100%;"></div>		
			</div>
			
		</div>
	</div>
	
	<div class="wyw-first-para">
		<p class="csr-heading wow fadeInUp" data-wow-duration="1s">
						TATA MEMORIAL CENTRE
					</p>
		<p class="csr-para-last wow fadeInUp" data-wow-duration="1s">According to a study by the World Health Organization, one in 12 women in urban India will develop cancer in their lifetime.  The apathy of the statement is relative to those who have experienced this dreaded malady.   As a people-centric publication that reports and highlights women’s causes, the Times of India felt the need to create a platform that celebrates the spirit of womanhood and salutes the stories of triumph and empowerment among cancer survivors- Women with Drive. It is a platform created to sensitize and engage women to be a part of a movement that spreads education and awareness on women’s cancer.<br><br>
A platform created to sensitize and engage women to be a part of a movement that spreads education and awareness on women’s cancer. The Times Group along with the Women’s Cancer Initiative - Tata Memorial Hospital under the able guidance of Ms. Devieka Bhojwani conceptualized a drive where women could come together to support this cause.<br><br>
The cause of women’s cancer is supported by all participants as proceeds from the registration go towards the Women’s Cancer Initiative – Tata Memorial Hospital. </p>
	
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
              $(window).load(function(){
              	new WOW().init();
              });
              </script>
	<!-- End Include JS File -->
	
	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<?php include("includes/GoogleAnalytics.html") ?>
	<!-- End Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	
	</body>
</html>
