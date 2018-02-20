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