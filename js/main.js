/*	==========================================================================
  	Author: Gaurav Tiwari
	Updated: --/--/--
	Notes: Hand Coded JS.
   	========================================================================== */
   	
/*	==========================================================================
	Window Load Function
	========================================================================== */
	
	$(window).load(function(){
		setbodyDiv();
		SectionTransition();
		$(".loader123").fadeOut(500);
		new WOW().init();
//		carAnimation();
//		ResizeHeader();
	});
	
/*	==========================================================================
	Document Ready Function
	========================================================================== */
	
	$(document).ready(function(){
		invokeScrollForNav();
		pic = new Image();
		pic.src="img/back-nav-arrow.png";
		/*typeText();*/
	});
	
/*	==========================================================================
	Window Resize Function
	========================================================================== */
	
	$(window).resize(function(){
		setbodyDiv();
		SectionTransition();
//		carAnimation();
//		ResizeHeader();
	});
	
/*	==========================================================================
	Global Functions
	========================================================================== */
	
	function setbodyDiv(){
		$(".st-content-inner").height((window.innerHeight - 100)+"px");
	}
	
	function invokeScrollForNav(){
		$("#sidebar-nav").mCustomScrollbar({
			mouseWheel:{ scrollAmount: 80 },
			scrollInertia: 1000,
			autoDraggerLength: false
		});
	}
	
	function invokeScrollForBody(){
		$("..st-content").mCustomScrollbar();
	}
	
	/*function typeText(){
		$("#typed").typed({
            // strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
        	stringsElement: $('#typed-strings'),
            typeSpeed: 300,
            backDelay: 4000,
            loop: false,
            showCursor: false,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: false
          //  onStringTyped: function(){animateCar(event);}
        });
	}*/
	
	/*function animateCar(event){
		$(".fadejs").fadeIn(500);
		$(".fadejs").fadeOut(1200);
		
	}*/
	
	function attachWave(){
	    Waves.attach('.flat-buttons', ['waves-button']);
	    Waves.attach('.float-buttons', ['waves-button', 'waves-float']);
	    Waves.attach('.float-button-light', ['waves-button', 'waves-float', 'waves-light']);
	}
	
	$('.collapse').on('shown.bs.collapse', function(){
$(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
}).on('hidden.bs.collapse', function(){
$(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
});



  /*$("#team2 a").click(function(){
        if ($(this).hasClass("no_action")) {
          return false;
        }
        if ($(this).hasClass("current_team2")) {
          $("#team12 a").removeClass("current_team12");
          $("#team2 a").removeClass("current_team2");
          $("#team3 a").removeClass("current_team3");
          $("#team4 a").removeClass("current_team4");
          $("#team5 a").removeClass("current_team5");
          $("#team_details12").slideUp(400);
          $("#team_details2").slideUp(400);
          $("#team_details3").slideUp(400);
          $("#team_details4").slideUp(400);
          $("#team_details5").slideUp(400);
          $(".hidden2").fadeOut(600);
          return false;
        }
        rel = $(this).attr("rel");
        $(".hidden2").fadeOut(0);
        $("#"+rel).fadeIn(900);
          $("#team12 a").removeClass("current_team12");
          $("#team2 a").removeClass("current_team2");
          $("#team3 a").removeClass("current_team3");
          $("#team4 a").removeClass("current_team4");
          $("#team5 a").removeClass("current_team5");
        $(this).addClass("current_team2");
          $("#team_details12").slideUp(400);
          $("#team_details2").slideUp(400);
          $("#team_details3").slideUp(400);
          $("#team_details4").slideUp(400);
          $("#team_details5").slideUp(400);
        $("#team_details2").slideDown(400);
    });

 
  $("#team12 a").click(function(){
        if ($(this).hasClass("no_action")) {
          return false;
        }
        if ($(this).hasClass("current_team12")) {
          $("#team12 a").removeClass("current_team12");
          $("#team2 a").removeClass("current_team2");
          $("#team3 a").removeClass("current_team3");
          $("#team4 a").removeClass("current_team4");
          $("#team5 a").removeClass("current_team5");
          $("#team_details12").slideUp(400);
          $("#team_details2").slideUp(400);
          $("#team_details3").slideUp(400);
          $("#team_details4").slideUp(400);
          $("#team_details5").slideUp(400);
          $(".hidden12").fadeOut(600);
          return false;
        }
        rel = $(this).attr("rel");
        $(".hidden12").fadeOut(0);
        $("#"+rel).fadeIn(900);
          $("#team12 a").removeClass("current_team12");
          $("#team2 a").removeClass("current_team2");
          $("#team3 a").removeClass("current_team3");
          $("#team4 a").removeClass("current_team4");
          $("#team5 a").removeClass("current_team5");
        $(this).addClass("current_team12");
          $("#team_details12").slideUp(400);
          $("#team_details2").slideUp(400);
          $("#team_details3").slideUp(400);
          $("#team_details4").slideUp(400);
          $("#team_details5").slideUp(400);
        $("#team_details12").slideDown(400);
    });
*/

/*function ResizeHeader(){
$('.logo-container').css("width",$(window).width()-17+"px");
}*/

function SectionTransition(){
	  $("#section-one").delay(6000).fadeOut(1000, function() {
        $("#section-two").fadeIn(1000, function(){	
        $(".sec-one-icon-10").delay(1000).animate({left: '100%'},2000);	
        	$(this).delay(4000).fadeOut(1000,function(){
        		$("#section-three").fadeIn(1000,function(){
        			$(this).delay(7000).fadeOut(1000,function(){
        				$("#section-four").fadeIn(1000, function(){
        					$(this).delay(5000).fadeOut(1000,function(){
        						$("#section-five").fadeIn(1000);
        					});
        				});
        			});
        		});
        	});
        });
    });
}

  $( ".dropdown" ).click(function() {
  $( ".dropdown-menu" ).slideToggle( "slow", function() {
    // Animation complete.
  });
});