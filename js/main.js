$(document).ready(function(){
  $('.places_slider').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true,
    appendDots:('.slider_dots'),
    arrows: false
    });
});