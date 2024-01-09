$(document).ready(function(){
  $('.places_slider').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true,
    appendDots:('.slider_dots'),
    arrows: true,
    appendArrows:('.slider_buttons')
    });
    //Gallery
    $('.gallery_box').slick({
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 3000,
      arrows:false
      });
      //Counter
      $('#counter').counter('start')({
        duration: 5000,
        countFrom:0, 
        counTo:1000
      });
});


