/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(window).load(function() {
    $('#side-menu').metisMenu();
    $('.dataTables').DataTable({
                responsive: true,
                "bAutoWidth":false,
                 language: {        
                     processing:   "Proceseaza...",
                     lengthMenu:   "Afiseaza _MENU_ inregistrari pe pagina",
                     zeroRecords:   "Nu am gasit nimic - ne pare rau",
                     info: "Afisate de la _START_ la _END_ din _TOTAL_ inregistrari",
                     infoEmpty: "Afisate de la 0 la 0 din 0 inregistrari",
                     infoFiltered:  "(filtrate dintr-un total de _MAX_ inregistrari)",
                     infoPostFix:   "",
                     loadingRecords: "Incarcare in curs ...",
                     search:       "Cauta:",
                     emptyTable: "Nu am gasit nimic",
                      paginate: {
                         first:   "Prima", 
                         previous:  "Precedenta",
                         next:       "Urmatoarea", 
                         last:      "Ultima"
                     }    
                 }
    });
  $(".lazy").unveil(100);
  $("div#carousel").css('z-index','200');
  $('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: true,
    slideshow: false,
    itemWidth: 210,
    itemMargin: 0,
    asNavFor: '#slider'
  });
 
  $('#slider').flexslider({
    animation: "fade",
    easing: "swing", 
    controlNav: true,
    animationLoop: true,
    slideshow: true,
    sync: "#carousel",
    slideshowSpeed: 3000

  });
  $('#vehicle-carousel').flexslider({
    animation: "slide",
    controlNav: true,
    animationLoop: true,
    slideshow: false,
    itemWidth: 220,
    itemMargin: 5,
    asNavFor: '#vehicle-slider'
  });
 
  $('#vehicle-slider').flexslider({
    animation: "slide",
    controlNav: true,
    animationLoop: true,
    slideshow: true,
    sync: "#carousel"
  });
  
  $('#colorboxExample').justifiedGallery({
    lastRow : 'nojustify', 
    rowHeight : 100, 
    rel : 'gallery1', //replace with 'gallery1' the rel attribute of each link
    margins : 1
    }).on('jg.complete', function () {
        $(this).find('a').colorbox({
            maxWidth : '80%',
            maxHeight : '80%',
            opacity : 0.8,
            transition : 'elastic',
            current : ''
        });
    });
  
  $(document).on("scroll", onScroll);
  
  function onScroll(){
    var scrollPos = $(document).scrollTop();
    if (scrollPos > 50) {
        $('div.nav-wrap').addClass('sticky');
    } 
    if (scrollPos < 50){
         $('div.nav-wrap').removeClass('sticky');
    }
    
    // Scroll to top 
    if (scrollPos > 250) {
        $("div.scrollup").fadeIn(400);
    }
    if (scrollPos < 250) {
        $("div.scrollup").fadeOut(400);
    }

  }  
  
  
    //Click event to scroll to top
    $('div.scrollup').click(function(){
            $('html, body').animate({scrollTop : 0},600);
            return false;
    });
   
    // OWL Carousel
    var owl = $("#firstPageCarousel");
    
    owl.owlCarousel({
 
        // Most important owl features
        items : 3,
        itemsCustom : false,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [980,2],
        itemsTablet: [768,1],
        itemsTabletSmall: false,
        itemsMobile : [479,1],
        singleItem : false,
        itemsScaleUp : true,

        //Basic Speeds
        slideSpeed : 200,
        paginationSpeed : 800,
        rewindSpeed : 1000,

        //Autoplay
        autoPlay : false,
        stopOnHover : false,

        // Navigation
        navigation : false,
        navigationText : ["prev","next"],
        rewindNav : true,
        scrollPerPage : false,

        //Pagination
        pagination : false,
        paginationNumbers: false,

        // Responsive 
        responsive: true,
        responsiveRefreshRate : 200,
        responsiveBaseWidth: window,

        // CSS Styles
        baseClass : "owl-carousel",
        
        //Lazy load
        lazyLoad : true,
        lazyFollow : true,
        lazyEffect : "fade",

        //Auto height
        autoHeight : false,

        //JSON 
        jsonPath : false, 
        jsonSuccess : false,

        //Mouse Events
        dragBeforeAnimFinish : true,
        mouseDrag : true,
        touchDrag : true,

        //Transitions
        transitionStyle : false,

        // Other
        addClassActive : false,

        //Callbacks
        beforeUpdate : false,
        afterUpdate : false,
        beforeInit: false, 
        afterInit: false, 
        beforeMove: false, 
        afterMove: false,
        afterAction: false,
        startDragging : false,
        afterLazyLoad : false
 
    });
    // Custom Navigation Events
    $(".carouselNext").click(function(){
        owl.trigger('owl.next');
    });
    $(".carouselPrev").click(function(){
        owl.trigger('owl.prev');
    });
    
    
    $("#cursePageCarousel").owlCarousel({
 
        // Most important owl features
        items : 2,
        itemsCustom : false,
        itemsDesktop : [1199,2],
        itemsDesktopSmall : [980,2],
        itemsTablet: [768,1],
        itemsTabletSmall: false,
        itemsMobile : [479,1],
        singleItem : false,
        itemsScaleUp : true,

        //Basic Speeds
        slideSpeed : 200,
        paginationSpeed : 800,
        rewindSpeed : 1000,

        // Navigation
        navigation : false,
        navigationText : ["prev","next"],
        rewindNav : true,
        scrollPerPage : false,

        // Responsive 
        responsive: true,
        responsiveRefreshRate : 200,
        responsiveBaseWidth: window,

        // CSS Styles
        baseClass : "owl-carousel",

        //Mouse Events
        dragBeforeAnimFinish : true,
        mouseDrag : true,
        touchDrag : true
 
    });
    // Custom Navigation Events for curse evvents
    $(".curseCarouselNext").click(function(){
         $("#cursePageCarousel").trigger('owl.next');
    });
    $(".curseCarouselPrev").click(function(){
        $("#cursePageCarousel").trigger('owl.prev');
    });
    
    $('#oferte').validator({
        delay: 500,
        html: false,
        disable: true,
        custom: {},
        errors: {
          match: 'Campurile nu corespund!',
          minlength: 'Not long enough!',
          required: 'Campul nu poate fi gol!'
        },
        feedback: {
          success: 'glyphicon-ok',
          error: 'glyphicon-remove'
        }
    });
    $("button#toate").click(function () {
       $("li.autocare").show();
       $("li.mini-autocare").show();
       $("li.microbuze").show();
       $("li.autobuze").show();
    });
    $("button#autocare").click(function () {
       $("li.autocare").show();
       $("li.mini-autocare").hide();
       $("li.microbuze").hide();
       $("li.autobuze").hide();
    });
    $("button#mini").click(function () {
       $("li.autocare").hide();
       $("li.mini-autocare").show();
       $("li.microbuze").hide();
       $("li.autobuze").hide();
    });
    $("button#microbuze").click(function () {
       $("li.autocare").hide();
       $("li.mini-autocare").hide();
       $("li.microbuze").show();
       $("li.autobuze").hide();
    });
    $("button#autobuze").click(function () {
       $("li.autocare").hide();
       $("li.mini-autocare").hide();
       $("li.microbuze").hide();
       $("li.autobuze").show();
    });


});
