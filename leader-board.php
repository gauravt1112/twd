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
					<div class="sponser-heading"><span class="nav-text"><span style="font-weight: bolder;">L</span>EADER 
					<span style="font-weight: bolder;">B</span>OARD</span></div>
					
					<div class="sponser-divider"></div>
					
				</div>
			</div>
		</div>
		
		<div class="register-main-wrapper">
		<!--<div class="lb-intro">
			Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
			</div>-->
		<ul class="nav nav-tabs" style="position:relative;">
		 <!--<li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="">Select City<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a data-toggle="tab" href="#mumbai">MUMBAI</a></li>
         <li><a data-toggle="tab" href="#pune">PUNE</a></li>
        <li><a data-toggle="tab" href="#bangalore">BANGALORE</a></li>
                               
      </ul>
    </li>-->
    <li class="active"><a data-toggle="tab" href="#mumbai"><span class="under">M</span>UMBAI</a></li>
    <li><a data-toggle="tab" href="#pune"><span class="under">P</span>UNE</a></li>
    <li><a data-toggle="tab" href="#bangalore"><span class="under">B</span>ANGALORE</a></li>
	
    <li style="position: absolute;right:0;top:5px;" class="hidden-xs"><a data-toggle="ta" href="myserver/view/voting-list.php"><span class="under">A</span>ll Contestants</a></li>
    
	<li style="" class="visible-xs"><a data-toggle="ta" href="myserver/view/voting-list.php"><span class="under">A</span>ll Contestant</a></li>
   
  </ul>
  <hr style="border: 0; height: 1px; background: #939598;">
		<div class="tab-content">
    <div id="mumbai" class="tab-pane fade in active">
    	
<!--<div class="lb-head">
	1
</div>
<div class="progress">
  <div class="progress-bar active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
Lorem ipsum
  </div>
</div>-->

    </div>
    <div id="pune" class="tab-pane fade">
    <!--<div class="lb-head">
	
</div>
<div class="progress">
   <div class="progress-bar active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
Lorem ipsum
  </div>
</div>-->
    </div>
    <div id="bangalore" class="tab-pane fade">
     <!--<div class="lb-head">
	
</div>
<div class="progress">
   <div class="progress-bar active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
Lorem ipsum
  </div>
</div>-->
    </div>
    
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
	<!-- End Include JS File -->
	
		<script>
			$(window).load(function(){
				$("#mumbai").load("myserver/view/leader-mumbai.php");
				$("#pune").load("myserver/view/leader-bord.php");
				$("#bangalore").load("myserver/view/leader-banglore.php");
			});
		</script>
	
	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<?php include("includes/GoogleAnalytics.html") ?>
	<!-- End Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	
	</body>
</html>