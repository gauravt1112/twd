<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
	<head>
		<?php include("includes/include_css.html") ?>
		
		<style>
/* General button style (reset) */
.btni {
	border: none;
	font-family: inherit;
	font-size: inherit;
	color: inherit;
	background: none;
	cursor: pointer;
	padding: 25px 80px;
	display: inline-block;
	margin-bottom: 50px;
	text-transform: uppercase;
	letter-spacing: 1px;
	font-weight: 700;
	outline: none;
	position: relative;
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	transition: all 0.3s;
}
.btni:hover{
background: #fc5979;
 }

/* Filled star */
.icon-truck:before {
	content: url('img/car1.png');
}
/*====================================================================================================================*/
/* Button 7 */
.btni-7 {
	background-color: #ff3369;
	color: #ffffff;
	border: 1px;
	letter-spacing: 2px;
	padding: 15px 20px 15px 20px;
	font-family: 'ceragr-bolduploaded_file';
	margin-left: -25%;
}

/* Button 7a */
.btni-7a {
	overflow: hidden;
	width: 70%;
}

.btni-7a:before {
	position: absolute;
	left: -73px;
    width: 50%;
	font-size: 160%;
	line-height: 0.8;
	color:#711E04;
}

.btni-7a.btni-activated {
	-webkit-animation: fadeOutText 1s;
	-moz-animation: fadeOutText 1s;
	animation: fadeOutText 1s;
}

.btni-7a.btni-activated:before {
	-webkit-animation: moveToRight 1s;
	-moz-animation: moveToRight 1s;
	animation: moveToRight 1s;
}

@-webkit-keyframes fadeOutText {
	0% { color: transparent; }
	80% { color: transparent; }
	100% { color: #fff; }
}

@-moz-keyframes fadeOutText {
	0% { color: transparent; }
	80% { color: transparent; }
	100% { color: #fff; }
}

@keyframes fadeOutText {
	0% { color: transparent; }
	80% { color: transparent; }
	100% { color: #fff; }
}

@-webkit-keyframes moveToRight {
	80% { -webkit-transform: translateX(250%); }
	81% { opacity: 1; -webkit-transform: translateX(250%); }
	82% { opacity: 0; -webkit-transform: translateX(250%); }
	83% { opacity: 0; -webkit-transform: translateX(-50%); }
	84% { opacity: 1; -webkit-transform: translateX(-50%);  }
	100% { -webkit-transform: translateX(0%); }
}

@-moz-keyframes moveToRight {
	80% { -moz-transform: translateX(250%); }
	81% { opacity: 1; -moz-transform: translateX(250%); }
	82% { opacity: 0; -moz-transform: translateX(250%); }
	83% { opacity: 0; -moz-transform: translateX(-50%); }
	84% { opacity: 1; -moz-transform: translateX(-50%);  }
	100% { -moz-transform: translateX(0%); }
}

@keyframes moveToRight {
	80% { transform: translateX(250%); }
	81% { opacity: 1; transform: translateX(250%); }
	82% { opacity: 0; transform: translateX(250%); }
	83% { opacity: 0; transform: translateX(-50%); }
	84% { opacity: 1; transform: translateX(-50%);  }
	100% { transform: translateX(0%); }
}

</style>
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
					<div class="about-heading"><span class="about-nav-text"><span style="font-weight: bolder;">A</span>BOUT <span style="font-weight: bolder;">U</span>S</span></div>
					
					<div class="about-divider"></div>
					
				</div>
			</div>
		</div>
		<div class="about-img-main">
		<p class="about-img-wrap wow fadeInUp">
						<span style="font-size: 18px;">For the past six years, we have been driven by our love for TSD rallies. The journey that commenced in 2009 has only grown in strength and vigour.</span>
					</p>
	<p class="about-img-wrap-inner wow fadeInUp" data-wow-duration="1s">
						It all started with 150 cars from Mumbai, driven exclusively by women all the way to Lavasa. In 2011, we integrated the city of Pune – bringing the tally to 2000 women across both cities, and even endeavouring and winning the Guinness Book of World Records in 2014 for the largest number of women participating in a motorsport event.
					</p>
	<p class="about-img-wrap-inner wow fadeInUp" data-wow-duration="1s">
					But as Mia Hamm had once said, "Celebrate what you have accomplished, but raise the bar a little higher each time you succeed." Well, it stands true for us too – we have been pushing ourselves inch-by-inch for the past six years and now, after becoming the world champions, it’s time for us to change the benchmark - go the distance!
					</p>
	<p class="about-img-wrap-inner-different wow fadeInUp" data-wow-duration="1s">
						Welcome to the 7th edition of the Women’s Drive, this year Times Women’s Drive introduces an incipient city, Bangalore and challenges all you super ladies to take on one of the toughest TSD rallies in the world. We drive to GOA! 
					</p>
	<p class="about-img-wrap-inner-different wow fadeInUp" data-wow-duration="1s">
						It’s not a drive for the faint hearted but the rewards are far more compelling. It’s a stamp of achievement for you, which will never ever fade away.
					</p>
					</div>
					
	
		
		<div class="container-fluid about-img-container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-0 about-img hidden-xs">
				<!--<img src="img/1.jpg" class="img-responsive">-->			
	
			<img src="img/About-1.jpg" class="img-responsive "/> 
			
			<div class="hvr-radial-out" style="position: absolute; left:0;top:0;width:100%;height:100%;"></div>
		
		
		</div>					
				
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-0 about-img">
				
		<img src="img/About-2.jpg" class="img-responsive">
		
		<div class="hvr-radial-out" style="position: absolute; left:0;top:0;width:100%;height:100%;"></div>
		
					
				</div>
			</div>
		</div>
		
		<div class="container-fluid wow fadeInUp" data-wow-duration="1s">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-1 overlay-section">
					<h2 class="overlay-head">A sneak peak into our gallery</h2>
					<a href="image-gallary.php"> <input class="button-style" type="button" value="PREVIOUS EDITIONS"></input></a>
					<p class="about-overlay-text wow fadeIn" data-wow-duration="1s">The drive upgrades in every aspect, flagging off close to International Women’s Day this year, we’re adding satellite tracking for all the participants’ cars, mapping their routes and speed.</p>
					
				</div>
			</div>
		</div>
		
		
		<div class="container-fluid">
			<div class="row" style="width: 60%; margin: 0 auto; padding-bottom: 50px;">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-10 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-1 guiness-img wow fadeInLeft" data-wow-duration="1s">
					<img src="img/Guiness.jpg" class="img-responsive">
				</div>
				
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-10 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-1 limca-img wow fadeInUp" data-wow-duration="1s">
					<img src="img/Limca-Book.jpg" class="img-responsive">
				</div>
				
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-10 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-1 inma-img wow fadeInRight" data-wow-duration="1s">
					<img src="img/INMA.jpg" class="img-responsive">
				</div>
			</div>
		</div>
		
		
		<div class="gbor-para wow fadeInUp" data-wow-duration="1s">
			Having been felicitated by the Guinness Book of World Records, the Limca Book of Records, the INMA Awards, this year, yet again, we're creating an experience like no other for the participants.
		</div>
		

	<div class="about-last-line">
	<div class="review wow fadeInUp" data-wow-duration="1s">
			SO GET CHARGED, WE’RE LOOKING FORWARD TO YOUR REVVING ENGINES!
		</div>
		<div class="review2 wow fadeInUp" data-wow-duration="1s">
			What are you waiting for? Click the registration button NOW!
		</div>
		<div class="wsp-button" id="btni-click">
		<a href="registration-form.php">  
<button style="width: 200px;" class="btni btni-7 btni-7a icon-truck wow fadeInUp" data-wow-duration="1s">REGISTER NOW</button>	</a>				
			</div>
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
		<script src="js/vendor/classie2.js"></script>
		<script>
			var buttons7Click = Array.prototype.slice.call( document.querySelectorAll( '#btni-click button' ) ),
				buttons9Click = Array.prototype.slice.call( document.querySelectorAll( 'button.btni-8g' ) ),
				totalButtons7Click = buttons7Click.length,
				totalButtons9Click = buttons9Click.length;

			buttons7Click.forEach( function( el, i ) { el.addEventListener( 'click', activate, false ); } );
			buttons9Click.forEach( function( el, i ) { el.addEventListener( 'click', activate, false ); } );

			function activate() {
				var self = this, activatedClass = 'btni-activated';

				if( classie.has( this, 'btni-7h' ) ) {
					// if it is the first of the two btni-7h then activatedClass = 'btni-error';
					// if it is the second then activatedClass = 'btni-success'
					activatedClass = buttons7Click.indexOf( this ) === totalButtons7Click-2 ? 'btni-error' : 'btni-success';
				}
				else if( classie.has( this, 'btni-8g' ) ) {
					// if it is the first of the two btni-8g then activatedClass = 'btni-success3d';
					// if it is the second then activatedClass = 'btni-error3d'
					activatedClass = buttons9Click.indexOf( this ) === totalButtons9Click-2 ? 'btni-success3d' : 'btni-error3d';
				}

				if( !classie.has( this, activatedClass ) ) {
					classie.add( this, activatedClass );
					setTimeout( function() { classie.remove( self, activatedClass ) }, 1000 );
				}
			}

			document.querySelector( '.btni-7i' ).addEventListener( 'click', function() {
				classie.add( document.querySelector( '#trash-effect' ), 'trash-effect-active' );
			}, false );
		</script>
		
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