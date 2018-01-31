$(document).ready(function() {

    console.log("car");

    var $root = $('html, body');
    $('#about-button').click(function() {
        $root.animate({
            scrollTop: $("about-container").offset().top
        }, 500);
        return false;
    });




});