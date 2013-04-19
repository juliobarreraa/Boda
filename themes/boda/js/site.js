
	jQuery(document).ready(function($) {
		    // Localscrolling 
    		$('#nav-main, .brand').localScroll();
     		$('#news, .container').localScroll();


            imageX = $('.girlfriend').offset().left;
            imageY = $('.girlfriend').offset().top;

            imageMauX = $('.boyfriend').offset().left;
            imageMauY = $('.boyfriend').offset().top;

            $(document).mousemove(function(event) {
                var mousePos = new Array(event.pageX, event.pageY);
                interact(mousePos, ["0px", "-288px", "-576px"]);
                interactMau(mousePos, ["0px", "-288px", "-576px"]);
            });

            var image_src = {
                top: baseUrlTheme + "/images/E60.jpg",
                topleft: baseUrlTheme + "/images/E55.jpg",
                topright: baseUrlTheme + "/images/E10.jpg",
                bottom:  baseUrlTheme + "/images/E30.jpg",
                bottomleft: baseUrlTheme + "/images/E35.jpg",
                bottomleftSquare: baseUrlTheme + "/images/E40.jpg",
                bottomright: baseUrlTheme + "/images/E20.jpg",
                bottomrightSquare: baseUrlTheme + "/images/E25.jpg",
                normal: baseUrlTheme + "/images/efrente.jpg",
                right: baseUrlTheme + "/images/E15.jpg",
            };

            var image_src_mau = {
                top: baseUrlTheme + "/images/M60.jpg",
                topleft: baseUrlTheme + "/images/M55.jpg",
                topright: baseUrlTheme + "/images/M10.jpg",
                bottom:  baseUrlTheme + "/images/M30.jpg",
                bottomleft: baseUrlTheme + "/images/M35.jpg",
                bottomleftSquare: baseUrlTheme + "/images/M40.jpg",
                bottomright: baseUrlTheme + "/images/M20.jpg",
                bottomrightSquare: baseUrlTheme + "/images/M25.jpg",
                normal: baseUrlTheme + "/images/mfrente.jpg",
                right: baseUrlTheme + "/images/M15.jpg",
            };

            function interact(mouseCord, aniCord) {

                if (mouseCord[0] < imageX && mouseCord[1] < imageY){ // Box-1
                    $(".girlfriend").attr("src", image_src.topleft);

                } else if (mouseCord[0] > imageX && mouseCord[0] < imageX+285 && mouseCord[1] < imageY){ // Box-2
                    $(".girlfriend").attr("src", image_src.top);

                } else if (mouseCord[0] > imageX+285 && mouseCord[1] < imageY){ // Box-3
                    $(".girlfriend").attr("src", image_src.topright);

                } else if (mouseCord[0] < imageX && mouseCord[1] > imageY && mouseCord[1] < imageY+357){ // Box-4
                    $(".girlfriend").attr("src", image_src.bottomleftSquare);

                } else if (mouseCord[0] > imageX && mouseCord[0] < imageX+285 && mouseCord[1] > imageY && mouseCord[1] < imageY+357){ // Box-5
                    $(".girlfriend").attr("src", image_src.normal);

                }else if (mouseCord[0] > imageX+285 && mouseCord[1] > imageY && mouseCord[1] < imageY+357){ // Box-6
                    $(".girlfriend").attr("src", image_src.right);

                } else if (mouseCord[0] < imageX && mouseCord[1] > imageY+357){ // Box-7
                    $(".girlfriend").attr("src", image_src.bottomleft);

                } else if (mouseCord[0] > imageX && mouseCord[0] < imageX+285 && mouseCord[1] > imageY+357){ // Box-8
                    $(".girlfriend").attr("src", image_src.bottom);

                } else if (mouseCord[0] > imageX+285 && mouseCord[1] > imageY+357){ // Box-9
                    $(".girlfriend").attr("src", image_src.bottomrightSquare);
                }
            };

            function interactMau(mouseCord, aniCord) {

                if (mouseCord[0] < imageMauX && mouseCord[1] < imageMauY){ // Box-1
                    $(".boyfriend").attr("src", image_src_mau.topleft);

                } else if (mouseCord[0] > imageMauX && mouseCord[0] < imageMauX+285 && mouseCord[1] < imageMauY){ // Box-2
                    $(".boyfriend").attr("src", image_src_mau.top);

                } else if (mouseCord[0] > imageMauX+285 && mouseCord[1] < imageMauY){ // Box-3
                    $(".boyfriend").attr("src", image_src_mau.topright);

                } else if (mouseCord[0] < imageMauX && mouseCord[1] > imageMauY && mouseCord[1] < imageMauY+357){ // Box-4
                    $(".boyfriend").attr("src", image_src_mau.bottomleftSquare);

                } else if (mouseCord[0] > imageMauX && mouseCord[0] < imageMauX+285 && mouseCord[1] > imageMauY && mouseCord[1] < imageMauY+357){ // Box-5
                    $(".boyfriend").attr("src", image_src_mau.normal);

                }else if (mouseCord[0] > imageMauX+285 && mouseCord[1] > imageMauY && mouseCord[1] < imageMauY+357){ // Box-6
                    $(".boyfriend").attr("src", image_src_mau.right);

                } else if (mouseCord[0] < imageMauX && mouseCord[1] > imageMauY+357){ // Box-7
                    $(".boyfriend").attr("src", image_src_mau.bottomleft);

                } else if (mouseCord[0] > imageMauX && mouseCord[0] < imageMauX+285 && mouseCord[1] > imageMauY+357){ // Box-8
                    $(".boyfriend").attr("src", image_src_mau.bottom);

                } else if (mouseCord[0] > imageMauX+285 && mouseCord[1] > imageMauY+357){ // Box-9
                    $(".boyfriend").attr("src", image_src_mau.bottomrightSquare);
                }
            };
	});
	
/*
var imageX = null;
var imageY = null;

imageX = $('.girlfriend').offset().left;
imageY = $('.girlfriend').offset().top;

$(document).mousemove(function(event) {
    var mousePos = new Array(event.pageX, event.pageY);
    interact(mousePos, ["0px", "-288px", "-576px"]);
})

function interact(mouseCord, aniCord) {
    if (mouseCord[0] < imageX && mouseCord[1] < imageY){ // Box-1
        $(".girlfriend").css("background-position", aniCord[0]+" 0px");

    } else if (mouseCord[0] > imageX && mouseCord[0] < imageX+285 && mouseCord[1] < imageY){ // Box-2
        $(".girlfriend").css("background-position", aniCord[1]+" 0px");

    } else if (mouseCord[0] > imageX+285 && mouseCord[1] < imageY){ // Box-3
        $(".girlfriend").css("background-position", aniCord[2]+" 0px");

    } else if (mouseCord[0] < imageX && mouseCord[1] > imageY && mouseCord[1] < imageY+357){ // Box-4
        $(".girlfriend").css("background-position", aniCord[0]+" -360px");

    } else if (mouseCord[0] > imageX && mouseCord[0] < imageX+285 && mouseCord[1] > imageY && mouseCord[1] < imageY+357){ // Box-5
        $(".girlfriend").css("background-position", aniCord[1]+" -360px");

    }else if (mouseCord[0] > imageX+285 && mouseCord[1] > imageY && mouseCord[1] < imageY+357){ // Box-6
        $(".girlfriend").css("background-position", aniCord[2]+" -360px");

    } else if (mouseCord[0] < imageX && mouseCord[1] > imageY+357){ // Box-7
        $(".girlfriend").css("background-position", aniCord[0]+" -720px");

    } else if (mouseCord[0] > imageX && mouseCord[0] < imageX+285 && mouseCord[1] > imageY+357){ // Box-8
        $(".girlfriend").css("background-position", aniCord[1]+" -720px");

    } else if (mouseCord[0] > imageX+285 && mouseCord[1] > imageY+357){ // Box-9
        $(".girlfriend").css("background-position", aniCord[2]+" -720px");
    }
};
/*
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
});*/