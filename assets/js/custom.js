$(document).ready(function(){

   	var $header = $(".navi");
   	$(window).on("scroll resize", function() {
   		if (document.documentElement.offsetWidth > 1199) {
			if($(this).scrollTop() > 100){
	          	$header.css('background-color', "rgba(0, 0, 0, 0.7" );
		    }else{
		        $header.css('background-color', "black" );
			}
		}else{
			$header.css('background-color', 'black');
		}
	});

   	$("nav-item a").click(function(e){
   		e.preventDefault();
   		console.log('veik');
	    $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top-70 }, 1000);
	});

});