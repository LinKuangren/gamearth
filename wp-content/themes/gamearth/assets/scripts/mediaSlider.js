$(document).ready(function(){
    $('.media-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 20000,
        pauseOnFocus: true,
        pauseOnHover: true,
        pauseOnDotsHover: true,
        fade: true,
        lazyLoad: 'ondemand',
        dots: true,
        mobileFirst: true,
        arrows: false,
        dotsClass: 'my-dots',
    });
});


$(".media-slider").on("mouseenter", function(){
    $(this).slick("slickPause");
});
$(".media-slider").on("mouseleave", function(){
    $(this).slick("slickPlay");
});