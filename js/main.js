$(document).ready(function(){
  //Slider
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
      $('.counter').counter({
        autoStart: true,
        countFrom: 0,
        duration: 9000
      });
});


