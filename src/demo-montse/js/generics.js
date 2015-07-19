//tabs
	$(document).ready(function(){
		$(".s1").CarouSlide({
			animType:"slide-vertical",
			autoAnim:false,
		
		});
		
		
		
		
	//acordeon	
		
		 $("div.acordeon a").click(function () {
if ($(this).hasClass('acordeonOpen')) {
$(this).removeClass('acordeonOpen');
$(this).next("div").slideUp(200);
}
else {
$(this).addClass('acordeonOpen');
$(this).next("div").slideDown(200);
}
return false;
}); 
		
	});
