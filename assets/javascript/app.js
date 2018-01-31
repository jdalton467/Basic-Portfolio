$(document).ready(function() {


    // $("#about-button").click(function() {
        // $(window).scrollTop($("#projects-container").offset().top);
    // });


    $('#about-button').click(function(){
    $('html, body').animate({
        scrollTop: $('#about-container').offset().top
    }, 1000);
}); 

    $('#project-button').click(function(){
    $('html, body').animate({
        scrollTop: $('#projects-container').offset().top
    }, 1000);
}); 

    $('#contact-button').click(function(){
    $('html, body').animate({
        scrollTop: $('#contact').offset().top
    }, 1000);
}); 



});