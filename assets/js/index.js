jQuery(document).ready(function($){
  $(".postPage #content blockquote, .page #content blockquote").each(function(){
    $this = $(this);
    $(".svgBlockquote").clone().appendTo($this)
  })

  $(".a1,.a2,.a3,.a4,.a5").css("opacity","0");
  $animationFlag = false;
  if($("#howItWorks").length){
  $offset = $("#howItWorks").offset().top;
  $(window).scroll(function(){
    if(($offset - 750) < $(document).scrollTop()){
      if(!$animationFlag){
        $animationFlag = true;        
        triggerAnimations();
      }
    }    
  })
  }

  var locArray = window.location.href.split("/");
  $("#mainnav a").each(function(){
    var theHref = $(this).attr("href").replace(/\//g, "")
    $this = $(this);
    locArray.forEach(function(el){   
      if(theHref == el){
        $this.addClass("activeNavLink")
      }
    })    
  })


  $(window).on('load',function(){
    if(window.location.hash){
      triggerAnimations();
    }
  })

  $(".navOpen, .navClose").click(function(){
    $("header.header").toggleClass("isMob").fadeToggle(300)
  })

  $(window).resize(function(){
    if($(window).width()>768){
      $("header.header").show()
    }
  })

  // find a way to do this in Jekyll
  $("style").each(function(){
    $(this).clone().appendTo("head");
  }).promise().done(function(){
    $("body style").remove()
  })

  // Lazy Smooth Scrolling for Anchors.
  // Select all links with hashes
$('a[href*="#"]')
// Remove links that don't actually link to anything
.not('[href="#"]')
.not('[href="#0"]')
.click(function(event) {
  $("header.header.isMob").fadeOut(300)
  // On-page links
  // if (
  //   location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
  //   && 
  //   location.hostname == this.hostname
  // ) {
    // Figure out element to scroll to
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    // Does a scroll target exist?
    if (target.length) {
      // Only prevent default if animation is actually gonna happen
      event.preventDefault();
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 1000, function() {
        /*
        // Callback after animation
        // Must change focus!
        var $target = $(target);
        $target.focus();
        if ($target.is(":focus")) { // Checking if the target was focused
          return false;
        } else {
          $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
          $target.focus(); // Set focus again
        };
        */
      });
    }
  //}
});
})

function triggerAnimations(){
  $(".a1").addClass("anim").fadeTo("300", 1, function(){
    $(".a2").addClass("anim").fadeTo("1200", 1, function(){
      $(".a3").addClass("anim").fadeTo("2500", 1, function(){
        $(".a4").addClass("anim").fadeTo("750", 1, function(){
          $(".a5").addClass("anim").fadeTo("500", 1, function(){
            // :)
          })
        })
      })
    })
  })  
}