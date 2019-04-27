$(document).ready(function(){

    $('#owl-gallery').owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        nav: true,
        navText: [" <i class='fas fa-chevron-left'></i>", " <i class='fas fa-chevron-right'></i>"],
        dots: false,
        responsive: {
            0: {
                items: 2,
                stagePadding: 20
            },
            767: {
                items: 4,
                stagePadding: 60
            },
            1200: {
                items: 6,
                stagePadding: 120
            },
        }
    });

    $('#owl-adopt-single').owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        autoplay: true,
        nav: true,
        navText: [" <i class='fas fa-chevron-left'></i>", " <i class='fas fa-chevron-right'></i>"],
        autoplayHoverPause: true,
        dots: true,

    });


});

// Initialize and add the map
function initMap() {
    // The location of Uluru
    var uluru = {lat: -25.344, lng: 131.036};
    // The map, centered at Uluru
    var map = new google.maps.Map(
        document.getElementById('map'), {zoom: 4, center: uluru});
    // The marker, positioned at Uluru
    var marker = new google.maps.Marker({position: uluru, map: map});
}
