jQuery(function($) {
   $(document).ready(function(){
       var header = $('header');
       $('#menu').find('.menu-item-has-children').hover(
           function(){
               header.toggleClass('show-bg');
           }
       );

       // mobile, toggle menu
       $('#mobile-menu-button').click(function(){
           $('#search').removeClass('show');
           $('#mobile-search').removeClass('open');
           $(this).toggleClass('open');
       });
       // mobile toggle submenu
       $('.menu-item-has-children').click(function() {
          $(this).find('ul.sub-menu').toggle();
          $(this).toggleClass('open');
       });

       // toggle search
       var search = $('#search');
       $('.search-icon').click(function(){
           search.toggleClass('show');
       });
       $('#mobile-search').click(function(){
           $('#mobile-menu-button').removeClass('open');
           search.toggleClass('show-mobile'); // class not showing when using "show"
           if (search.hasClass('show')) { // not using toggleClass to avoid issue when resizing
               $(this).addClass('open');
           } else $(this).removeClass('open');
       });
   })
});