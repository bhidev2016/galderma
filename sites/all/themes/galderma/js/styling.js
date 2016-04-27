var bgImg;

jQuery(document).ready(function(){
	bgURL = jQuery("body").css("background-image").split('url("').join('').split('")').join("");
	bgImg = new Image(); jQuery(bgImg).bind("load", changeBGSize); jQuery(bgImg).attr("src", bgURL);
})

changeBGSize = function(){
	imgAr = bgImg.height/bgImg.width;
	winWidth = jQuery(window).innerWidth();
	if(jQuery(".page-user").width() > 0){
		if(winWidth < 1310){
			bgSize = (100/winWidth)*(bgImg.width+10)
			jQuery(".page-user").css("background-size", bgSize+"%");
			jQuery(".page-user").css("background-position", "top center");
		}else{
			bgTop = Math.ceil((winWidth*imgAr)-bgImg.height-10);
			jQuery(".page-user").css("background-size", "100%");
			jQuery(".page-user").css("background-position", "0px -"+bgTop+"px");
		}
	}
	if(jQuery(".section-product").width() > 0){
		if(winWidth < 1390){
			bgSize = Math.floor((100/winWidth)*(bgImg.width)*1.1)
			jQuery(".section-product").css("background-size", bgSize+"%");
			jQuery(".section-product").css("background-position", "top right");
		}else{
			jQuery(".section-product").css("background-size", "100%");
		}
	}
	if(jQuery(".section-patient-support").width() > 0){
		if(winWidth < 1610){
			bgSize = Math.floor((100/winWidth)*(bgImg.width)*0.6)
			jQuery(".section-patient-support").css("background-size", bgSize+"%");
			jQuery(".section-patient-support").css("background-position", "top left");
		}else{
			jQuery(".section-patient-support").css("background-size", "100%");
		}
	}
}

jQuery(window).resize(changeBGSize);