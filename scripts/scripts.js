//const Events = (() => {
//  const navbar = document.querySelector('.navbar');
//
//
////   add class to navbar
////                  window.addEventListener('scroll', () => {
////                    let height = document.documentElement.scrollTop || window.pageYOffset;
////
////                    (height > 76) ? navbar.classList.add('navbar-change')
////                      : navbar.classList.remove('navbar-change');
////                    ;
////
////                  })
//  // hide preloader
//  window.addEventListener('load', () => document.querySelector('.preloader').classList.add('hidePreloader'))
//})();








$(document).ready(function () { /******    Sticky Navigation added from loso website     *******/

    // now adding navigation animation by jquery
    
    'use strict';
    
    // Border navigation animation
  $('.navbar-nav li a').addClass('border-animation');

    //    $(window).scroll(function() {
    //        
    //        'use strict';
    //        
    //        if($(window).scrollTop() < 700 ) {       // old no is 80
    //            
    //            $('.navbar').css ({
    //               'margin-top': '-100px',        //  old no is -100
    //                'opacity': '0'
    //                
    //            });
    //            
    //            $('.navbar-expand-lg').css({
    //                'background-color':  'rgba(59, 59 , 59, 0.7)'               //  'rgba(59, 59 , 59, 0)'
    //                
    //            });
    //            
    //        } else {
    //            
    //            $('.navbar').css ({
    //               'margin-top': '0px',
    //                'opacity': '1'
    //                
    //            });
    //            
    //            $('.navbar-expand-lg').css({
    //                'background-color': 'rgba(255, 255 , 255, 0.7)',    //  (59, 59 , 59, 0.7)
    //                'border-color': '#444'
    //                
    //            });
    //            
    //            $('.navbar-brand img').css({
    //               'height': '35px',
    //                'padding-top': '0px'
    //                
    //            });
    //            
    //            $('.navbar-nav > li > a ').css({
    //                'padding-top': '15px'
    //                
    //                
    //            });           
    //            
    //        }       
    //        
    //    });   
    ///  now adding nav edited code from loso website

    $(window).scroll(function () {

        

        if ($(window).scrollTop() > 60) { // old no is 80

            //            $('.navbar').css ({
            //               'margin-top': '-100px',        //  old no is -100
            //                'opacity': '0'
            //                
            //            });
            $('.navbar-expand-lg').css({
                'background-color': 'rgba(31, 31, 31, .90)', //  (59, 59 , 59, 0.7)
                'border-color': '#444'

            });

            $('.navbar-brand').css({
                'font-size': ' 18px'

            });
            $('.bar').css({

                'width': ' 20px',
                'height': ' 2px',
                'margin': ' 3px'
            });

        } else {
            $('.navbar-expand-lg').css({
                'background-color': 'transparent',
                'border-color': 'none'

            });

            $('.bar').css({

                'width': ' 30px',
                'height': ' 3px',
                'margin': ' 5px'
            });

            //            $('.navbar').css ({
            //               'margin-top': '0px',
            //                'opacity': '1'
            //                
            //            });



            $('.navbar-brand').css({
                'font-size': ' 25px' //  'rgba(59, 59 , 59, 0)'

            });

            $('.navbar-nav > li > a ').css({
                'padding-top': '15px'

            });



        }

    });




    ////// Code for Back-to-top  arrow
    $(window).scroll(function () {

        let position = $(this).scrollTop();

        if (position >= 360) {
            $('#back-to-top').addClass('scrollTop');

        } else {
            $('#back-to-top').removeClass('scrollTop');

        }
    });

    /////////////////////////   writing code for small screen menu button 

    $('.navbar-toggler').click(function () {
    $('.navbar-toggler').toggleClass('change');
    });
    
          //////////// Pricing Animation
      
      var basic_span = '.basic .basic-border:nth-child';
      var enterprise_span = '.enterprise .basic-border:nth-child';
      $('.basic a').hover(
        function(){
        $( basic_span+'(1)').css("width","100%");
        $( basic_span+'(2)').css("height","100%");
        $( basic_span+'(3)').css("height","100%");
        $( basic_span+'(4)').css("width","100%");

        $('.basic hr').css("background-color","red");
      },
      function(){
        $(basic_span+'(1)').css("width","30px");
        $(basic_span+'(2)').css("height","30px");
        $(basic_span+'(3)').css("height","30px");
        $(basic_span+'(4)').css("width","30px");

        $('.basic hr').css("background-color","inherit");
      }
    );

    $('.enterprise a').hover(
      function(){
        $( enterprise_span+'(1)').css("width","100%");
        $( enterprise_span+'(2)').css("height","100%");
        $( enterprise_span+'(3)').css("height","100%");
        $( enterprise_span+'(4)').css("width","100%"); 
        
        $('.enterprise hr').css("background-color","red");
    },
    function(){
      $(enterprise_span+'(1)').css("width","30px");
      $(enterprise_span+'(2)').css("height","30px");
      $(enterprise_span+'(3)').css("height","30px");
      $(enterprise_span+'(4)').css("width","30px");

      $('.enterprise hr').css("background-color","inherit");
    }  
  );


  /////////////////////////////////// Pro animation
 var pro_span = '.pro .pro-span:nth-child';
  $('.pro #pro-button').hover(
    function(){
      $(pro_span+'(1)').css({
        "height" : "100%",
        "bottom" : "0%"
      });

      $(pro_span+'(2)').css({
        "height" : "100%",
        "bottom" : "0%"
      });
  },
  function(){
    $(pro_span+'(1)').css({
      "height" : "130px",
      "bottom" : "40%"
    });

    $(pro_span+'(2)').css({
      "height" : "130px",
      "bottom" : "40%"
    });
  });


});
//////////////////////////////  owl carousel start here    //////////////////////////////////////


$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    rtl: true,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 4
        }
    }
});


//////////////////////////////  owl carousel end here    //////////////////////////////////////

//////////////////////////////  ripple start here    //////////////////////////////////////


$(document).ready(function () {
    /*    ripple effect      */
    $("#header, .header-bg-overlay ").ripples({
        dropRadius: 25, ///  original value was ->   ...
        perturbance: 0.6, ///  original value was ->   ...  and old personally put was 0.6

    });


    /*    2nd  ripple effect      */
    $(".testimonial ").ripples({
        dropRadius: 25, ///  original value was ->   ...
        perturbance: 0.1, ///  original value was ->   ...  and old personally put was 0.6

    });
    //////////////////////////////  ripple end here    //////////////////////////////////////




    /*    Sticky Navigation       

      $('.for-js-waypoint').waypoint(function(direction){
          if(direction == "down" ){
              $("nav").addClass('sticky');
          }
          else {
              $("nav").removeClass('sticky');
          }

    }, { offset: '60px;'
    });                     
    */



    // $('.slider').bxSlider({

    //   speed:500,
    //  pause:4000,
    // ticker:true,
    // tickerHover:true,
    //  autoDelay:4000,
    //   slideWidth: 292.5,         // old width is 292.5
    //  auto: true,
    //   minSlides: 1, 
    //  maxSlides: 4, 
    //   slideMargin: 10

    // slide margin is 30


    //  });

    //////////////////////////////////////////////////////////////////////////////////

    // $('.teamslider').bxSlider({

    //   slideMargin: 10,
    //  speed:500,
    //  pause:0,

    // ticker:true,
    // tickerHover:true,
    //   slideWidth: 292.5,         // old width is 292.5

    //  minSlides: 1, 
    //  maxSlides: 4 
    // slide margin is 30


    // });

    /*    Navigation Scrolling      */



    $(function () {
        $('a[href*="#"]:not([href="#"])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000); /*  <-- 1000 eual to 1 second    */
                    return false;
                }
            }
        });
    });






    /*  <-- Css animation on scroll -- using waypoint   */

    $('.js--waypoint-fadein').waypoint(function (direction) {
        $('.js--waypoint-fadein').addClass('animated fadeIn');
    }, {
        offset: '60%'
    });




    /*  mobile navigation click event   */

    $('.js-mobile-clickable-icon').click(function () {
        var nav = $('.js-main-navigation');
        var icon = $('.js-mobile-clickable-icon i');
        nav.slideToggle(200);
        if (icon.hasClass('ion-navicon-round')) {
            icon.addClass('ion-close-round');
            icon.removeClass('ion-navicon-round');
        } else {
            icon.addClass('ion-navicon-round');
            icon.removeClass('ion-close-round');
        }

    });



});

////////////////////////////////////////////////////////////////////////////////////

/*                                     //     wheel carousel script
  $(document).ready(function() {

                                 var carousel = $(".teamcarousel").waterwheelCarousel({
                                              flankingItems: 3
                                 });

                                  $("#prev").bind('click',function(){
                                      carousel.prev();
                                      return false;
                                  });
                                  $("#next").bind('click',function(){
                                      carousel.next();
                                      return false;
                                  });
  
                  }); */



// Add animation/ Initialize Woo
$(document).ready(function () {

    'use strict';

    new WOW().init();

});
//////////////////////////////////// Add counter   ////////////////////////////

$(document).ready(function () {

    $('.counter-num').counterUp({
        delay: 10,
        time: 2000
    });

});



//////////////////////////////////   function for scrolling toTop     //////////////////////////////////////

//$(document).ready(function() {
//	
//			var defaults = {
//			containerID: 'toTop', // fading element id
//			containerHoverID: 'toTopHover', // fading element hover id
//			scrollSpeed: 1200,
//			easingType: 'linear' 
//			};
//										
//		$().UItoTop({ easingType: 'easeOutQuart' });    
//   
//		});
////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*  backup funtion for scrolling header      */
/*  $(window).scroll(function(){        
   
   var top = $(window).scrollTop();   /*   <- scrollTop function return int value to var top      */

/*      if(top>=480){
                  $("header").addClass('secondry-dark-blue-bg');
      }
      else 
          if($("header").hasClass('secondry-dark-blue-bg')){
          $("header").removeClass('secondry-dark-blue-bg');
          
      }
});           */