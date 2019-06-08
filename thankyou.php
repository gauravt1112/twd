<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
	<head>
		<?php include("includes/include_css.html") ?>
		<style>
		
		.thank-you-wrapper{
				width: 60%; 
				margin-left: 17%;
					padding-left: 10px;
			}


			@media only screen and (max-width : 992px) {
			.thank-you-wrapper {    
				margin-left: 9%;   
			}
		
		</style>
	</head>
	
	
	
		<?php
include_once "myserver/php_util/dbConnect.php";

//echo("db connected");
$submit=$_POST['submit'];

if(!empty($submit)){

	$user_name = $_POST['name'];
	$user_age = $_POST['age'];
	$user_landline = $_POST["landline"];
	$user_mobile = $_POST["mobile"];
	$user_email = $_POST['email'];
	$license_no = $_POST['license'];
	$user_city = $_POST["city"];
	$user_car = $_POST["cardrive"];
	$user_ask = $_POST["ask"];
	$file_path;
	$current_url = $_SERVER['REQUEST_URI'];

	if(isset($_FILES['image'])){
		$errors= array();
		$file_name = $_FILES['image']['name'];
		$file_size =$_FILES['image']['size'];
		$file_tmp =$_FILES['image']['tmp_name'];
		$file_type=$_FILES['image']['type'];
		$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
		
		$expensions= array("jpeg","jpg","png");
		
		if(in_array($file_ext,$expensions)=== false){
			$errors[]="extension not allowed, please choose a JPEG or PNG file.";
		}
		
		if($file_size > 2097152){
			$errors[]='File size must be excately 2 MB';
		}
	 
		if(empty($errors)==true){
			$file_path = "contestant-image/".strtotime('now')."".$file_name;
			move_uploaded_file($file_tmp,$file_path);
			echo "Success";
		}else{
			print_r($errors);
		}
	}

	$insertQuery = "insert into tblregister (license_no,user_name,email,image_path,age,landline_number,mobile_number,city,car_for_drive,vote_for_me) values('".$license_no."','".$user_name."','".$user_email."','".$file_path."',".$user_age.",".$user_landline.",".$user_mobile.",'".$user_city."','".$user_car."','".$user_ask."')";
	try{
		if ($conn->query($insertQuery) === TRUE) {
			
			$last_id = $conn->insert_id;
			$single_url = $current_url."/".$last_id;

		?>
	
	<body>
    
		<div id="st-container" class="st-container">
		
			<?php include("includes/browser_upgrade.html") ?>
			<?php include("includes/header.html") ?>
			
			<div class="st-content" style="background-color: #ffffff;">
				<div class="st-content-inner-thank-you">
					<?php include("includes/global-header-2.html") ?>
					<div class="logo-space-top"></div>
<!--==========================================================================
	Body Start
	========================================================================== -->
	<div class="container-fluid" style="background-color: #fc5979; padding-bottom: 20px; padding-top: 50px;">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-10 col-xs-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-1">
					<div class="about-heading"><span class="about-nav-text"><span style="font-weight: bolder;">T</span>HANK <span style="font-weight: bolder;">Y</span>OU</span></div>
					
					<div class="about-divider"></div>
					
				</div>
			</div>
		</div>
			
			
				<div class="thank-you-wrapper">
				<div class="thank-you-line">Your form has been successfully submitted.<br>
Below is your unique URL for voting system.</div>
	
		<div><img src="<?php echo $file_path; ?>" style="width:150px; height:150px;"></div>
		
		<div style="margin-top: 30px;"><a href="#" class="lorem-cover" style="margin-top:20px;">http://</a></div>
		
		
		
		<div class="sof-btn">
		<div style="margin-top:35px; margin-bottom: 0px;font-size: 20px; color: #6D6E71;">Share your URL on below social media platforms</div>
		<br>
			<input type="button" value="Share on Facebook" style="margin-right: 15px;  margin-top: 25px;  padding: 10px 10px 10px 10px;   background: #3C5899;   color: #fff;    border: 2px solid #3C5899;"> </button>
			<input type="button" value="Share on Twitter" style="  margin-top: 25px;  padding: 10px 10px 10px 10px;   background: #28A9E0;   color: #fff;    border: 2px solid #28A9E0;"> </button>
		</div>
		
		<div style="margin-top:50px;"><a href="#"><input class="button-style2" type="button" value="BACK"></a></div>
		
		
					</div>
					
					
					<?php    
    
		} else {
			echo "Error: " . $insertQuery . "<br>" . $conn->error;
		}
	}
	catch(Exception $e){
		echo("error");
	}
	$conn->close();

}else{
	header("Location:../view/register-user.php");
}

?>
					
					
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
	
	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<?php include("includes/GoogleAnalytics.html") ?>
	<!-- End Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	
	</body>
</html>
