
( function ( $ ) {
  // Initialize Slidebars
  var controller = new slidebars();
  
   // Mobile only function

  $('body #menu-mobile-slidebar ul li a').each(function(index, el) {

     $(this).next().each(function(index, el) {

      $(this).hide();

    });

  });

  var click = 0;

  $('body #menu-mobile-slidebar ul li a').click(function(event) {

    $('body #menu-mobile-slidebar ul li ').removeClass('active');

    $(this).parent().addClass('active');

    $(this).next().each(function(index, el) {

      $(this).hide();

      if ( click == 0 ) {

          $(this).slideDown('slow');

          click++;

      }else{

          $(this).slideUp('slow');
          click--;
      };

      event.preventDefault();

    });

    

  });

  var mobileOnly = function () {
    var windowWidth = $( window ).width();

    if ( windowWidth <= 768 ) {
      // Window is less or equal to 600px wide
      // Only initialize Slidebars if it isn't active.

      $('html body header').hide();

      $('.slide-principal > div > div img').each(function(index, el) {
        var widthImage = $(this).width();
        $(this).css({
          'margin-left': -(widthImage/2)
        });
      });

      if ( ! controller.isActive() ) {
        controller.init();
      }
    } else {
      // Window is more than 768px wide
      // Only exit Slidebars if it currently active.
      if ( controller.isActive() ) {
        controller.exit();
      }
    }
  };

  // Call function now and on window resizes
  mobileOnly();


  // Toggle Slidebars
  $( '.active-mobile' ).on( 'click', function ( event ) {
    // Stop default action and bubbling
    event.stopPropagation();
    event.preventDefault();

    // Toggle the Slidebar with id 'id-1'
    controller.toggle( 'id-1' );
  } );


  $( window ).on( 'resize', mobileOnly );


  //SLIDE PRINCIPAL

  var galleryTop = new Swiper('.slide-principal', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        centeredSlides: true,
        initialSlide: 0,
        pagination: '.galeria-paginacao-1',
        paginationClickable: true,
        paginationElement: 'ol',
        slidesPerView: 1,
        loop: true,
        effect: 'fade',
        autoplay: 5000,
        autoplayDisableOnInteraction: false,
        speed:2500,
    });

  var galleryTop2 = new Swiper('.slide-partners', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 40,
        centeredSlides: true,
        pagination: '.galeria-paginacao-1',
        paginationClickable: true,
        paginationElement: 'ol',
        slidesPerView: 5,
        loop: true,
        autoplay: 5000,
        autoplayDisableOnInteraction: false,
        speed:2500,
    });

  var galleryTop3 = new Swiper('.gallery-top-1', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 40,
        centeredSlides: true,
        pagination: '.galeria-paginacao-1',
        paginationClickable: true,
        slidesPerView: 1,
        loop: true,
        autoplay: 5000,
        autoplayDisableOnInteraction: false,
        speed:2500,
    });
  


  //POSITION H4 THUMB OBRAS

  function position(){
    $('.thumb-obras').each(function(index, el) {
      var position_h1 = $(this).find('h1').height(),
      position_h4 = $(this).find('h4').height();

      $(this).find('h4').css({
        bottom: (position_h1+position_h4), 
        'margin-bottom' : 10
      });

      console.log(position_h4);
    });
  }

  

  //HOVER EFFECT

  function hovereffects() {
    $('.thumb-obras').mouseenter(function(event) {
        var $target = $(this).find('.hover-effect'),
          $other = $target.siblings('.active');

          $target.addClass('active').show().css({
              bottom: -$target.height()
          }).animate({
              bottom: 0
          }, 700);

    });

    $('.thumb-obras').mouseleave(function(event) {

      var $target = $(this).find('.hover-effect'),
              $other = $target.siblings('.active');
              
              $target.addClass('active').css({
                  bottom: 0
              }).animate({
                  bottom: -($target.height()+40)
              }, 500);
    });
  }

  hovereffects()
  position()

} ) ( jQuery );

