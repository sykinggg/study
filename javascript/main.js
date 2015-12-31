$(function(){
	$(window).scroll(function(){
		if($(document).scrollTop() >= 300){
			$("#header .title").css({
				"position":"fixed",
			})
		}else{
			$("#header .title").css({
				"position":"relative",
			})
		}
	})
})