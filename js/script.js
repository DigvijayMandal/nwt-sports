

$(document).ready(function(){
    
    //navigation bar toggler
    $('#navbar-toggler').click(function(){
        $('.navbar-collapse').slideToggle(400);
    });

    //navbar change 
    $(window).scroll(function(){
        let pos = $(window).scrollTop();
        if(pos >= 100){
            $('.navbar').addClass('cng-navbar');
        } else{
            $('.navbar').removeClass('cng-navbar');
        }
    });

    //our-partners
    $('.our-partners .owl-carousel').owlCarousel({
        loop:true,
        autoplay:true,
        dots:true,
        nav:false,
        items:1
    });

    
});

