$(document).ready(function() {


    // $("#about-button").click(function() {
        // $(window).scrollTop($("#projects-container").offset().top);
    // });


    $('#about-button').click(function(){
    $('html, body').animate({
        scrollTop: $('#about-container').offset().top
    }, 1000);
}); 

});