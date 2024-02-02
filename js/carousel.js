$(document).ready(function(){
    // Banner
    $('.banner_carousel').slick( {
        arrows : false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 275
    });

    // Partners
    $('.partners_carousel').slick( {
        autoplay: true,
        autoplaySpeed: 3500,
        speed: 250,
        variableWidth: true,
        draggable: false,
        swipe: false
    });

    // Clients
    $('.clients_carousel').slick( {
        autoplay: true,
        autoplaySpeed: 3500,
        speed: 250,
        variableWidth: true,
        draggable: false,
        swipe: false
    });
});
