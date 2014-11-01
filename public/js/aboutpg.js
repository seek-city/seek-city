function menu() {
    $(".menu,.nav .home,.nav .about,.nav .work,.nav .contact ").click(function(){
        $(".nav-section").toggleClass("show");
        $(".menu .nav-bar:nth(0)").toggleClass("animate-0");
        $(".menu .nav-bar:nth(1)").toggleClass("animate-1");
        $(".menu .nav-bar:nth(2)").toggleClass("animate-2");
    });
    var offset = $(".menu").offset();
    var topPadding = 50;
    $(window).scroll(function() {
        if(this.innerWidth > 1100) {$(".menu").stop().animate({
            marginTop: $(window).scrollTop() - offset.top + topPadding
        });
        } else {
        $(".menu").stop().animate({
            marginTop: 0 
        });
    };
    }); 
    $('.scroll').smoothScroll();
}


function backstretch() { // used for fulldiv backgrounds
    $(".bp-post").backstretch("img/11.jpg");
    $(".photo-album").backstretch([
        "img/7.jpg", "img/11.jpg", "img/3.jpg"
        ], {
        duration: 10000,
        fade: 750
    });
    
    $(".portfolio-img.one").backstretch("img/person2.jpg");
    $(".portfolio-img.two").backstretch("img/person.jpg");
    $(".portfolio-img.three").backstretch("img/2.jpg");
    $(window).resize(function () {
    $(".bp-post").backstretch("img/11.jpg");
    $(".photo-album").backstretch([
        "img/7.jpg", "img/11.jpg", "img/3.jpg"
        ], {
        duration: 10000,
        fade: 750
    });
    
    $(".portfolio-img.one").backstretch("img/person2.jpg");
    $(".portfolio-img.two").backstretch("img/person.jpg");
    $(".portfolio-img.three").backstretch("img/2.jpg");
    });
}

function slider() {
    $('#slider').flexslider({
        animation: "slide"
    });
}

function panels() {
    // album panel
    $('#album').on('click', function() {
        $("body").addClass("no-scroll");
        $('.panel').animate({
            'width': 'show'
        }, 1000, function() {
            $('.panel .album').fadeIn(500);
        });
    });
    $('i.closeicon').on('click', function() {
        $('.panel .album').fadeOut(500, function() {
            $("body").removeClass("no-scroll");
            $('.panel').animate({
                'width': 'hide'
            }, 1000);
        });
    }); 
    // portfolio panel
    $("#portfolio, #portfolio2, #portfolio3, #portfolio4, #portfolio5, #portfolio6, #portfolio7, #portfolio8, #portfolio9").on('click', function() {
        $("body").addClass("no-scroll");
        $('.panel').animate({
            'width': 'show'
        }, 1000, function() {
            $('.panel .work').fadeIn(500);
        });
    });
    $('.closeicon').on('click', function() {
        $('.panel .work').fadeOut(500, function() {
            $("body").removeClass("no-scroll");
            $('.panel').animate({
                'width': 'hide'
            }, 1000);
        });
    });
}

function contentslider() {
    $('#content').flexslider({
        animation: "slide",
        controlNav: false,
        directionNav: false
    });
}
