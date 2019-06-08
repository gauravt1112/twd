<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
	<head>
		<?php include("includes/include_css.html") ?>
		 <link href="css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
		 
		 <style>
.kv-avatar .file-preview-frame,.kv-avatar .file-preview-frame:hover {
    margin: 0;
    padding: 0;
    border: none;
    box-shadow: none;
    text-align: center;
}
.kv-avatar .file-input {
    display: table-cell;
    max-width: 220px;
}

.file-preview-thumbnails{
	height: 200px;
}

.center-block{
	margin: 0;
}

.kv-avatar .btn-default{
	display: none;
}

.file-default-preview{
/*	display: none;*/
	background-image: url("http://placehold.it/500x500?text=INSERT+YOUR+PHOTO+HERE");
	background-position: 50%;
	background-repeat: no-repeat;
	min-height: 200px;
}

.file-default-preview img{
	min-width: 200px;
}
.ask-text{
	color: #FC5979;
	padding-top: 5px;
}

 .glyphicon-exclamation-sign{
	color: red;
}
</style>
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
   color: #727a87
 }
 
 .btni-7 {
	background-color: #ff3369;
	color: #ffffff;
	border: 1px;
	letter-spacing: 2px;
	padding: 15px 20px 15px 20px;
	font-family: 'ceragr-bolduploaded_file';
	
}
.msg {
   display: none;
}
.error {
   color: #a94442;
   font-size: 10px;
   font-family: 'ceragr-regularuploaded_file';
}
/*.success {
   color:#a94442;
   font-size: 10px;
   font-family: 'ceragr-regularuploaded_file';
}*/
.vertical-alignment-helper {
			display:table;
			height: 100%;
			width: 100%;
		}
			
		.vertical-align-center {
			display: table-cell;
			vertical-align: middle;
		}
		
		.modal-content {
			width:inherit;
			height:inherit;
			margin: 0 auto;
		}
		.preivew-img{
			position: absolute;
			right:20px;
			top: 20px;
			max-width: 150px;
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
					<div class="sponser-heading"><span class="nav-text"><span style="font-weight: bolder;">R</span>EGISTER 
					<span style="font-weight: bolder;">N</span>OW</span></div>
					
					<div class="sponser-divider"></div>
					
				</div>
			</div>
		</div>
		
		<div class="register-main-wrapper">

   Kindly fill in all the details below to register for Times Women’s Drive.
<br><br>
  Once registered, every participant will get a detailed email from Times Women’s Drive, regarding the event.
			
			<div class="rd-wrap">
			<span class="reg_under" style="border-bottom: 2px solid #6D6E71;">R</span>EGISTRATION FORM
			</div>
			<hr style="border: 0; height: 1px; background: #939598;">
		</div>
	<div class="form-wrapper">
		<form method="post" action="myserver/post_data/thankyou.php" enctype="multipart/form-data" id="registration-form">
<div class="container-fluid" style="padding-left: 0;">
<div class="container kv-main" style="width: 100%; padding-left: 0;">

            
            <!--<form enctype="multipart/form-data">
                <input class="file" type="file" multiple data-min-file-count="1">
              
              
            </form>-->
            
            <div class="kv-avatar center-block" style="width:200px; margin-bottom: 13px;">
            
        <input id="avatar" name="image" type="file" class="file-loading">
        <br>
        <span> (Max file size: 2MB)</span>
    </div>
            
           
        </div>
<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-0">
			
    	<input type="text" name="name" id="namet" class="form-control textbox" placeholder="Full Name" data-validation="custom" data-validation-regexp="^([a-z A-Z]+)$"  data-validation-error-msg="This field is required"/>
    	
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-0">
				
		<input type="text" name="age" id="aget" class="form-control textbox" placeholder="Age" data-validation="custom" data-validation-regexp="^0?([1-9][0-9])$"  data-validation-error-msg="This field is required"/>
			
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-0">
			
    	<input type="text" name="landline" id="lant" class="form-control textbox" placeholder="Landline Number" data-validation="custom" data-validation-regexp="^[0-9]\d{5,}$"  data-validation-error-msg="This field is required"/>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-0">
			
		<input type="text" name="mobile" id="mobt" class="form-control textbox" placeholder="Mobile Number" data-validation="custom" data-validation-regexp="^[789]\d{9}$"  data-validation-error-msg="Please enter a valid number"/>
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-0">
			
    	<!--<input type="email" name="email" class="form-control textbox" placeholder="Email ID" data-validation="custom" data-validation-regexp=""  data-validation-error-msg="This field is required"/>-->
    	<input id="emt" name="email" type="email" class="required form-control textbox" title="This is a required field" data-validation="required" placeholder="Email ID" /> <span class="msg error">Not a valid email address</span>
<!--<span class="msg success">A valid email address!</span>-->
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-0">
			
		<input type="text" name="license" id="lct" class="form-control textbox" placeholder="Driving Licence Number" data-validation="required"  data-validation-error-msg="This field is required"/>

		</div>
	</div>
	
	
	
	<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-0">
			
		<select class="form-control" name="city" id="sel1" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"  data-validation-error-msg="This field is required" onchange="if (this.value=='other'){this.form['other'].style.display='block'}else {this.form['other'].style.display='none'};">
        <option>Mumbai</option>
        <option>Pune</option>
        <option>Bangalore</option>
      </select>

		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-0">
			
    	<input type="text" name="cardrive" id="prt" class="form-control textbox" placeholder="Profession" data-validation="custom" data-validation-regexp="^([a-z A-Z]+)$"  data-validation-error-msg="This field is required"/>
		</div>
		
	</div>
	
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-0">
		<div>
			<textarea name="ask" id="txt" class="form-control textbox1" placeholder="Why should you vote for me." maxlength="250" style="height: 100px;"></textarea>
			<p class="ask-text">
				This will be displayed for all your friends and voters. Make sure its catch and interesting (only 250 characters allowed).
			</p>
		</div>
		
		<!--============== Summary Dialog ====================-->
		
						<div class="modal fade" id="myModal" role="dialog">
						   <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center ">
						    
						      <!-- Modal content-->
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal">&times;</button>
						          <h4 class="modal-title text-center">
								  This information once submitted is non-editable.
								  </h4>
						        </div>
						        <div class="modal-body">
								  <img class="preivew-img" src="" alt="not found" id="cli">
						          <p id="fname"></p>
						          <p id="ag"></p>
						          <p id="lan"></p>
						          <p id="mob"></p>
						          <p id="em"></p>
						          <p id="lice"></p>
						          <p id="ci"></p>
						          <p id="pr"></p>
						          <p id="cm"></p>
						        </div>
						        <div class="modal-footer">
						        <input type="submit" name="submit" class="btni btni-7" value="submit" style="color: #fff;" id="fs">
						        </div>
						      </div>
						      
						    </div>
						    
						    </div>
						</div>
		<!--============== Summary Dialog ====================-->
		
		
		</div>
	</div>
	
	<div class="row" style="padding-top: 15px;padding-bottom: 15px;">
		<div class="col-lg-12 col-md-12 col-sm-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-10 col-xs-offset-1">
		
		
		<div class="about-us-btn">
		
		
		 
     <button class="btni btni-7" style="width: 200px;color:#fff;" id="openSummary">Submit</button>						
			</div>

		</div>
	</div>
	
</div>
</form>

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
		<script src="js/fileinput.js" type="text/javascript"></script>
		<script>
var btnCust = '<button type="button" class="btn btn-default" title="Add picture tags" ' + 
    'onclick="alert(\'Call your custom code here.\')">' +
    '<i class="glyphicon glyphicon-tag"></i>' +
    '</button>'; 
$("#avatar").fileinput({
    overwriteInitial: true,
    maxFileSize: 1500,
    showClose: false,
    showCaption: false,
 //   browseLabel: '',
//    removeLabel: '',
  /*  browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>',
    removeIcon: '<i class="glyphicon glyphicon-remove"></i>',*/
    removeTitle: 'Cancel or reset changes',
    elErrorContainer: '#kv-avatar-errors',
    msgErrorClass: 'alert alert-block alert-danger',
    defaultPreviewContent: '<img src="" alt="" style="width:160px">',
    layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
    allowedFileExtensions: ["jpg", "png", "gif"]
});
</script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.2.1/jquery.form-validator.min.js"></script>

<script>
   function getExtension(filename) {
   var parts = filename.split('.');
   return parts[parts.length - 1];
}

function isImage(filename) {
   var ext = getExtension(filename);
   switch (ext.toLowerCase()) {
   case 'jpg':
   case 'gif':
   case 'jpeg':
   case 'png':
       //etc
       return true;
   }
   return false;
}
</script>

<script>
var v = false;
$("#fs").click(function(){
	v = true;
});
		   $.validate({
	form : '#registration-form',
	onSuccess : function($form) {
		
		function failValidation(msg) {
           alert(msg); // just an alert for now but you can spice this up later
           return false;
       }
	   
	   var file = $('#avatar');
	   
	   
		var file = $('#avatar');
		if (!isImage(file.val())) {
           return failValidation('Please select a valid image');
       }
       $("#myModal").modal('show');
	  return v;
    }
});
</script>

<script>
$('form input[name="email"]').blur(function () {
   var email = $(this).val();
var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/igm;
if (re.test(email)) {
   $('.msg').hide();
   $('.success').show();
} else {
   $('.msg').hide();
   $('.error').show();
}

});
</script>

<script>
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#cli').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
	 $("#avatar").change(function(){
        readURL(this);
    });
$('#myModal').on('shown.bs.modal', function () {
				$("#fname").html("Full Name : "+$("#namet").val());
				$("#ag").html("Age : "+$("#aget").val());
				$("#lan").html("Landline : "+$("#lant").val());
				$("#mob").html("Mobile : "+$("#mobt").val());
				$("#em").html("Email : "+$("#emt").val());
				$("#lice").html("License : "+$("#lct").val());
				$("#ci").html("City : "+$("#sel1").val());
				$("#pr").html("Profession : "+$("#prt").val());
				$("#cm").html("Comment : "+$("#txt").val());
				//$("#cli").attr("src",$("#avatar").val());
			});

</script>
		
	<!-- End Include JS File -->
	
	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<?php include("includes/GoogleAnalytics.html") ?>
	<!-- End Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	
	</body>
</html>
