$(document).ready(function(){
    
    if(window.matchMedia('(max-width: 767px)').matches)
    {
        $(".navbar-brand img").attr("src","./img/logo/50-by-50-logo.png").css("margin-top","-15px");
    	$(".jara1").removeClass("jarallax");
    }
});