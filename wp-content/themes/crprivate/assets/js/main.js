;(function($){

  var $btnMenu = $('#btn-menu'),
      $menu = $('.header-menu');
  
  //new WOW().init();

  $btnMenu.on('click', function (e) {
    
      $menu.toggle();

  });

 $menu.find(".menu-item-has-children").hoverIntent({
      over: function() {
            $(this).find(">.sub-menu").slideDown(200 );
          },
      out:  function() {
            $(this).find(">.sub-menu").slideUp(200);
          },
      timeout: 200

       });

    $(".slider-gallery").owlCarousel({
        animateOut: 'fadeOut',
        items: 1,
        autoplay: true,
        autoplayTimeout: 4000,
        loop: true,
        nav: true,
        navText: ['<i class="icon-angle-left"></i>', '<i class="icon-angle-right"></i>']
        /*onChange : function (e) {
          console.log(e.target);
          $('.owl-item.active span').addClass('animated');
          $('.owl-item.active h1').addClass('animated');
        }*/
        /*slideSpeed : 300,
        paginationSpeed : 400,*/
        /*singleItem:true*/
    });
 $(".owl-carousel").owlCarousel({
      items : 1,
      autoplay : false,
      loop : false,
      nav : true,
      navText : ['','']
      /*onChange : function (e) {
        console.log(e.target);
        $('.owl-item.active span').addClass('animated');
        $('.owl-item.active h1').addClass('animated');
      }*/
      /*slideSpeed : 300,
      paginationSpeed : 400,*/
      /*singleItem:true*/
  });

    $('.tour-popup-link').magnificPopup({
        type: 'inline',
        midClick: true,
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function () {

                this.st.mainClass = 'mfp-zoom-out';
                $('body').addClass('mfp-open');
            },
            beforeClose: function () {


                $('body').removeClass('mfp-open');
            }

        }


    });

    $('.tour-popup-link').on('click', function (e) {




        $('#tour-popup').find('input[name="your-subject"]').val('Inquire for ' + $(this).attr('data-title'));




    });

    $('.shuttle-popup-link').magnificPopup({
        type: 'inline',
        midClick: true,
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function () {

                this.st.mainClass = 'mfp-zoom-out';
                $('body').addClass('mfp-open');
            },
            beforeClose: function () {


                $('body').removeClass('mfp-open');
            }

        }


    });

    $('.shuttle-popup-link').on('click', function (e) {




        $('#shuttle-popup').find('input[name="your-subject"]').val('Inquire for ' + $(this).attr('data-title'));




    });

    $(".date").flatpickr({
        minDate: "today",
        onChange: function (selectedDates, dateStr, instance) {
            //$('.filters').find('form').submit();
        },
    });

    

    // FUNCTION FOR FAQS
    var dd = $('.dd'),
        tourDetails = $('.tour-details'),
        shuttleDetails = $('.shuttle-details');

    dd.addClass('hidden');

    tourDetails.on('click', '.dt', function (e) {
        $(this)
            .next()
            .slideDown(200)
            .siblings('.dd')
            .slideUp(200);

    });
    shuttleDetails.on('click', '.dt', function (e) {
        $(this)
            .next()
            .slideDown(200)
            .siblings('.dd')
            .slideUp(200);

    });

 // SMOOTH ANCHOR SCROLLING
    var $root = jQuery('html, body');
    jQuery('a.anchor').click(function(e) {
        var href = jQuery.attr(this, 'href');

        if (typeof(jQuery(href)) != 'undefined' && jQuery(href).length > 0) {
            var anchor = '';

            if (href.indexOf("#") != -1) {
                anchor = href.substring(href.lastIndexOf("#"));
            }
           
            if (anchor.length > 0) {
                /*console.log(jQuery(anchor).offset().top);
                console.log(anchor);*/


                $root.animate({
                    scrollTop: jQuery(anchor).offset().top-155
                }, 500, function() {
                    window.location.hash = anchor;
                });
                e.preventDefault();
            }
        }else{ // si no esta la seccion se va al home
           window.location.replace('/' + href);
        }
    });

 $(window).load(function() {
     
     
      resizes();

    });

    $(window).resize(resizes);

    function resizes()
     {
      
      
        

          $('.tours-img').height($(".tours").height());
        
        
       
      

     }
  

    
})(jQuery);