$(window).scroll(function(){

	if($(this).scrollTop()>100){
		$("#nav").addClass("sticky");
		$("#nav").animate({"top":"0px"},1000);
	}else{
		$("#nav").removeClass("sticky");
		//$("#nav").animate({"height":"50px"},1000);
	}
});