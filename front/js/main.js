(function ($) {
  "use strict";

  //use only start screen make fullscreen size, and opacity effect
  var $startSection = $(".start-section");
  if($startSection.length > 0) {
    var $header = $("header.top");
    var winHeight = $(window).height();

    $startSection.css("height", winHeight);
    $(".gallery-cell", ".homepage-gallery").css("height", winHeight);
    $(".flickity-viewport", ".homepage-gallery").css("height", winHeight);


    //Show special menu for mobile device
    if ($(window).width() <= 768) {
      $(".screen").css("marginTop", "0");
      $header.removeClass("default").addClass("in-page");
    } else {
      //Method for scroll transform menu
      $(window).scroll(function () {
        var height = (winHeight + 300) - $(this).scrollTop();
        height = height < 0 ? 0 : height;
        var $startSection = $(".start-section");
        $startSection.css("height", height);
        $startSection.css("paddingBottom", 300);

        var opacity = 1 - (($(this).scrollTop() + 200) / winHeight );
        $(".cell-text").css("opacity", opacity);

        if ($(this).scrollTop() > 190 && $header.hasClass("default")) {
          $(".screen").css("marginTop", "0");
          $header.removeClass("default").addClass("in-page");
        } else if ($(this).scrollTop() <= 181 && $header.hasClass("in-page")) {
          $header.removeClass("in-page").addClass("default");
          $(".screen").css("marginTop", "-214px");
        }
      })
    }

  //Set full sreen size for start screens
    $(document).ready(function () {
      $(window).resize(function () {
        $(".start-section").css("height", $(window).height());
        $(".gallery-cell", ".homepage-gallery").css("height", $(window).height());
        $(".flickity-viewport", ".homepage-gallery").css("height", $(window).height());

        //Show special menu for mobile device
        if ($(window).width() <= 768) {
          $(".screen").css("marginTop", "0");
          $header.removeClass("default").addClass("in-page");
        } else {
          //Method for scroll transform menu
          $(window).scroll(function () {
            var height = (winHeight + 300) - $(this).scrollTop();
            height = height < 0 ? 0 : height;
            var $startSection = $(".start-section");
            $startSection.css("height", height);
            $startSection.css("paddingBottom", 300);

            var opacity = 1 - (($(this).scrollTop() + 200) / winHeight );
            $(".cell-text").css("opacity", opacity);

            if ($(this).scrollTop() > 190 && $header.hasClass("default")) {
              $(".screen").css("marginTop", "0");
              $header.removeClass("default").addClass("in-page");
            } else if ($(this).scrollTop() <= 181 && $header.hasClass("in-page")) {
              $header.removeClass("in-page").addClass("default");
              $(".screen").css("marginTop", "-214px");
            }
          })
        }
      })
    })
  }

//Run instagram feed for special blocks
  if ($("#instagramSide").length > 0) {
    var feed = new Instafeed({
      get: 'user',
      target: 'instagramSide',
      userId: '2281542691',
      limit: 10,
      sortBy: 'most-liked',
      accessToken: '255121997.1677ed0.4b56726731844a7683c7e90673f684ad'
    })

    feed.run()
  }

  if ($("#instagramSidebar").length > 0) {
    var feedSidebar = new Instafeed({
      get: 'user',
      target: 'instagramSidebar',
      userId: '2281542691',
      limit: 9,
      sortBy: 'most-liked',
      accessToken: '255121997.1677ed0.4b56726731844a7683c7e90673f684ad'
    })

    feedSidebar.run()
  }

  if ($('.mansory-grid').length > 0) {
    var mansoryGrid = document.querySelector('.mansory-grid');
    var msnry = new Masonry(mansoryGrid, {
      // options
      itemSelector: '.tile'
    })
  }

  if ($('.product-gallery').length > 0) {
    var productGallery = new Flickity('.product-gallery', {
      contain: false,
      pageDots: false
    })
  }

  if ($('.homepage-gallery').length > 0) {
    var homepageGallery = new Flickity('.homepage-gallery', {
      contain: false,
      pageDots: true,
      prevNextButtons: false,
      autoPlay: 3500,
      wrapAround: true,
      pauseAutoPlayOnHover: false
    })
  }

  if ($('.gallery-nav').length > 0) {
    var productGalleryNav = new Flickity('.gallery-nav', {
      asNavFor: '.product-gallery',
      contain: true,
      pageDots: false,
      prevNextButtons: false
    })
  }

  /* ----------------------------------
  Just for shop page
  -----------------------------------*/
  //Isotpe grid for shop page
  if ($('.item-grid').length > 0) {
    $(window).load(function() {
      //Select products for apply isotope effect
      var products = document.querySelector('.shop-grid');

      // Create element with Isotope effect
      var iso = new Isotope(products, {
        itemSelector: '.item-grid',
        layoutMode: 'fitRows'
      });

      //Apply click event for filters
      $("#allProducts").click(function() {
        iso.arrange({filter: '.item-grid'});
        return false;
      })
      $("#mains").click(function() {
        iso.arrange({filter: '.test1'});
        return false;
      })
      $("#salads").click(function() {
        iso.arrange({filter: '.test2'});
        return false;
      })
      $("#start").click(function() {
        iso.arrange({filter: '.test1'});
        return false;
      })
    })
  }


  //Validate contact form
  if($("#contactForm").length > 0) {
    $("#contactForm").validate({
      rules: {
        name: "required",
        phone: "required",
        email: {
          required: true,
          email: true
        },
        message: "required"
      },
      messages: {
        name: "Enter your name",
        phone: "Enter your phone",
        email: {
          required: "Please enter a valid email address",
          minlength: "Please enter a valid email address"
        },
        message: "Please enter your message"
      },
      errorPlacement: function (error, element) {
        error.appendTo(element.parent());
      },
      submitHandler: function () {
        $.ajax({
          type: "POST",
          url: "sender.php",
          data: $("#contactForm").serialize(),
          success: function () {
            $('#contactForm .respond').append('<p class="success">Thank you for contacting us! We\'ll revert to you shortly!</p>');
          },
          fail: function () {
            $('#contactForm .respond').append('<p class="error">Sorry! Mail could not be send.</p>');
          }
        });
      }
    })
  }

  //Validate reservation form
  if($("#reservationForm").length > 0) {
    $("#reservationForm").validate({
      rules: {
  				name: "required",
  				phone: "required",
  				email: {
  					required: true,
  					email: true
  				},
          date: "required",
          pers: "required",
          time: "required",
  				message: "required"
  		},
  		messages: {
  			name: "Enter your name",
  			phone: "Enter your phone",
  			pers: "Enter your count of persons",
  			time: "Enter your time",
  			date: "Enter your date",
  			email: {
  				required: "Please enter a valid email address",
  				minlength: "Please enter a valid email address"
  			},
  			message: "Please enter your message"
  		},
  		errorPlacement: function(error, element) {
  			error.appendTo(element.parent());
  		},
  		submitHandler: function() {
        $.ajax({
          type: "POST",
          url: "sender.php",
          data: $("#reservationForm").serialize(),
          success: function () {
            $('#reservationForm .respond').append('<p class="success">Thank you for rezervation us! We\'ll revert to you shortly!</p>');
          },
          fail: function () {
            $('#reservationForm .respond').append('<p class="error">Sorry!</p>');
          }
        });
      }
   });
  }

})(jQuery);
