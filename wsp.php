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
					<div class="wsp-heading"><span class="about-nav-text"><span style="font-weight: bolder;">W</span>HO <span style="font-weight: bolder;">S</span>HOULD <span style="font-weight: bolder;">P</span>ARTICIPATE</span></div>
					
					<div class="about-divider"></div>
					
				</div>
			</div>
		</div>				
	
	<div class="wsp-icon-wrapper">
	<div class="wsp-icon-inner-wrapper">
		<div class="wsp-first-icon-section">
				<p class="wsp-icon-divider-para1">Women only (Sorry guys!) </p>
		</div>
		<div class="wsp-first-icon-section">
				<p class="wsp-icon-divider-para5">Do you want to help the world get rid of cancer? (Obviously)</p>
		</div>
		<div class="wsp-first-icon-section">
				<p class="wsp-icon-divider-para2">Do you have a valid driver’s license?</p>
		</div>
		<div class="wsp-first-icon-section">
				<p class="wsp-icon-divider-para3">	Are you good with directions?</p>
		</div>
		<div class="wsp-first-icon-section">
				<p class="wsp-icon-divider-para4">Up for an adventure where you get to spend quality time with friends?</p>
		</div>
		
		</div>
	</div>
	
	<div class="answer">
		If your answer to all the above is YES, then wait no longer! 
	</div>

		
		<div class="wsp-button" id="btni-click">
		<a href="registration-form.php">  
<button style="width: 200px;" class="btni btni-7 btni-7a icon-truck  wow fadeInUp" data-wow-duration="1s">REGISTER NOW</button>	</a>				
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
              new WOW().init();
              </script>
	<!-- End Include JS File -->
	
	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<?php include("includes/GoogleAnalytics.html") ?>
	<!-- End Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	
	</body>
</html>
