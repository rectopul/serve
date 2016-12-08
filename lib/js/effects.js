
( function ( $ ) {
  // Initialize Slidebars

  var controller = new slidebars();


  //PAGINATION MODIFY 

  $('.pagination > li > .prev').attr('aria-label', 'Previous');

  $('.pagination > li > .next').attr('aria-label', 'Next');

  $('.page-numbers').wrap('<li></li>');

  $('.current').parent().addClass('active');

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


      // Window is less or equal to 600px wide
      // Only initialize Slidebars if it isn't active.

      if ( ! controller.isActive() ) {
        controller.init();
      }

    } else {

      // Window is more than 600px wide
      // Only exit Slidebars if it currently active.
      // if ( controller.isActive() ) {
      //   controller.exit();
      // }

      $('html body header').show();

    }
  };

  // Call function now and on window resizes
  mobileOnly();
  $( window ).on( 'resize', mobileOnly );

  // Toggle Slidebars
  $( '.active-mobile' ).on( 'click', function ( event ) {
    // Stop default action and bubbling
    event.stopPropagation();
    event.preventDefault();

    // Toggle the Slidebar with id 'id-1'
    controller.toggle( 'id-1' );
  } );


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



  //BOOTSTRAPPARALAX EFFECT

  $('.SecondPartSobre').each(function(index, el) {
    $('.partTwo').append( $('.SecondPartSobre').html() );
    $(this).remove();
  });

  $window = $(window);
    //Captura cada elemento section com o data-type "background"
    $('section[data-type="background"]').each(function(){
        var $scroll = $(this);   
            //Captura o evento scroll do navegador e modifica o backgroundPosition de acordo com seu deslocamento.            
            $(window).scroll(function() {
                var yPos = -($window.scrollTop() / $scroll.data('speed')); 
                var coords = '50% '+ yPos + 'px';
                $scroll.css({ backgroundPosition: coords });    
            });
  });  

  hovereffects()
  position()

} ) ( jQuery );

