    // Nav Fixed
    $(window).on('scroll', function(){
        if ($(window).scrollTop()){
            $('top-nav').addClass('hide');
        }

        else {
            $('top-nav').removeClass('hide');
        }

        if ($(window).scrollTop()){
            $('.navbar').addClass('nav-sticky');
        }

        else {
            $('.navbar').removeClass('nav-sticky');
        }
    });
    // End Nav Fixed

    // Actived Nav
    $(document).ready(function() 
    {

      var scrollLink = $('.scroll');

      // Smooth scrolling
      scrollLink.click(function(e) {
        e.preventDefault();
        $('body,html').animate({
          scrollTop: $(this.hash).offset().top - 20
        }, 1000 );
      });

      // Active link switching
      $(window).scroll(function() {
        var scrollbarLocation = $(this).scrollTop();
        
        scrollLink.each(function() {            
          var sectionOffset = $(this.hash).offset().top - 100;
          
          if ( sectionOffset <= scrollbarLocation ) {
            $(this).addClass('actived');
            $(this).siblings().removeClass('actived');
          }
        })
      })

    })
    // End Actived Nav