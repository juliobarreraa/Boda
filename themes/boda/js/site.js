
	jQuery(document).ready(function($) {
		    // Localscrolling 
    		$('#nav-main, .brand').localScroll();
     		$('#news, .container').localScroll();
	});
	
	

var image_src = {
    topleft: baseUrlTheme + "/images/E50.jpg",
    topright: baseUrlTheme + "/images/E10.jpg",
    bottomleft: baseUrlTheme + "/images/E40.jpg",
    bottomright: baseUrlTheme + "/images/E25.jpg",
    normal: baseUrlTheme + "/images/efrente.jpg",
};

jQuery(function($) {
    $(document).mousemove(function(event){
        var mloc = {
            x: event.pageX,
            y: event.pageY
        };
        
        if( 
            (mloc.x >= 0 && mloc.x <= $(document).width()/2) &&
            (mloc.y >= 0 && mloc.y <= $(document).height()/2)
        ){
            $(".girlfriend").attr("src", image_src.topleft);
        }else if( 
            (mloc.x >= $(document).width()/2 && mloc.x <= $(document).width()) &&
            (mloc.y >= 0 && mloc.y <= $(document).height()/2)
        ){
            $(".girlfriend").attr("src", image_src.topright);
        }else if( 
            (mloc.x >= 0 && mloc.x <= $(document).width()/2) &&
            (mloc.y >= $(document).height()/2 && mloc.y <= $(document).height())
        ){
            $(".girlfriend").attr("src", image_src.bottomleft);
        }else if(
            (mloc.x >= $(document).width()/2 && mloc.x <= $(document).width()) &&
            (mloc.y >= $(document).height()/2 && mloc.y <= $(document).height())
        ){
            $(".girlfriend").attr("src", image_src.bottomright);
        }
        else
        {
            $(".girlfriend").attr("src", image_src.normal);
        }

    });
});


var image_src_boy = {
    topleft: baseUrlTheme + "/images/M50.jpg",
    topright: baseUrlTheme + "/images/M15.jpg",
    bottomleft: baseUrlTheme + "/images/M35.jpg",
    bottomright: baseUrlTheme + "/images/M25.jpg",
    normal: baseUrlTheme + "/images/mfrente.jpg",
};

jQuery(function($) {
    $(document).mousemove(function(event){
        var mloc = {
            x: event.pageX,
            y: event.pageY
        };
        
        if( 
            (mloc.x >= 0 && mloc.x <= $(document).width()/2) &&
            (mloc.y >= 0 && mloc.y <= $(document).height()/2)
        ){
            $(".boyfriend").attr("src", image_src_boy.topleft);
        }else if( 
            (mloc.x >= $(document).width()/2 && mloc.x <= $(document).width()) &&
            (mloc.y >= 0 && mloc.y <= $(document).height()/2)
        ){
            $(".boyfriend").attr("src", image_src_boy.topright);
        }else if( 
            (mloc.x >= 0 && mloc.x <= $(document).width()/2) &&
            (mloc.y >= $(document).height()/2 && mloc.y <= $(document).height())
        ){
            $(".boyfriend").attr("src", image_src_boy.bottomleft);
        }else if(
            (mloc.x >= $(document).width()/2 && mloc.x <= $(document).width()) &&
            (mloc.y >= $(document).height()/2 && mloc.y <= $(document).height())
        ){
            $(".boyfriend").attr("src", image_src_boy.bottomright);
        }
        else
        {
            $(".boyfriend").attr("src", image_src_boy.normal);
        }

    });
});