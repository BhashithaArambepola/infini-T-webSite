

  //Submenu Dropdown Toggle
  if($('.main-header li.dropdown ul').length){
    $('.main-header li.dropdown').append('<div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>');

    //Dropdown Button
    $('.main-header li.dropdown .dropdown-btn').on('click', function() {
      $(this).prev('ul').slideToggle(500);
    });

    //Disable dropdown parent link
    $('.main-header .navigation li.dropdown > a,.hidden-bar .side-menu li.dropdown > a').on('click', function(e) {
      e.preventDefault();
    });
  }

  //Side Content Toggle
  if($('.main-header .outer-box .nav-btn').length){
    //Show Form
    $('.main-header .outer-box .nav-btn').on('click', function(e) {
      e.preventDefault();
      $('body').addClass('side-content-visible');
    });
    //Hide Form
    $('.hidden-bar .inner-box .cross-icon,.form-back-drop,.close-menu').on('click', function(e) {
      e.preventDefault();
      $('body').removeClass('side-content-visible');
    });
    //Dropdown Menu
    $('.fullscreen-menu .navigation li.dropdown > a').on('click', function() {
      $(this).next('ul').slideToggle(500);
    });
  }

//contact form

  $(document).ready(function(){

    $('.input').focus(function(){
      $(this).parent().find(".label-txt").addClass('label-active');
    });

    $(".input").focusout(function(){
      if ($(this).val() == '') {
        $(this).parent().find(".label-txt").removeClass('label-active');
      };
    });

  });

  /***counter******/

  $('.counter').each(function() {
    var $this = $(this),
        countTo = $this.attr('data-count');

    $({ countNum: $this.text()}).animate({
          countNum: countTo
        },

        {

          duration: 500,
          easing:'linear',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
            //alert('finished');
          }

        });



  });

  //------------------------

    $(".carousel").owlCarousel({
    margin: 20,
    loop: true,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    responsive: {
    0:{
    items:1,
    nav: false
  }
  }
  });
