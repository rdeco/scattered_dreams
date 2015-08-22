if ( $(window).width() > 767) {
	$('#ninja').hide().slideToggle(2000, function(){
		$('#ninja').hide(1500);
	});
	
	$('#msg').hide().show(4000, function(){
		$('#msg').hide("slow");
	});
	
	$('#ninja-head').hide().slideToggle(8500);
	
	
	$( "#search-form-404").hide().slideToggle(9500);
}