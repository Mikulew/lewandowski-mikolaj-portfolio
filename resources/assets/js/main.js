(function(){
   let imgHeader = new Image(),
       imgAbout = new Image(),
       imgAuthor = new Image(),
       imgContact = new Image(),
       imgProject = new Image(),
       imgCanvas = new Image(),
       imgBook = new Image(),
       imgBlog = new Image(),
       imgLogin = new Image();


   imgHeader.src = '/img/page/welcome-page.jpg',
   imgAbout.src = '/img/page/about-page.jpg',
   imgAuthor.src = '/img/page/mikulew-hawk.jpg',
   imgContact.src = '/img/page/contact-page.jpg',
   imgProject.src = '/img/page/project-page.jpg',
   imgCanvas.src = '/img/page/canvas-page.jpg',
   imgBook.src = '/img/page/book-page.jpg',
   imgBlog.src = '/img/page/blog-page.jpg',
   imgLogin.src = '/img/page/login-page.jpg';

   imgHeader.onload = function() {
      $('#headerImage').attr({src: imgHeader.src});
   };
   imgAbout.onload = function() {
      $('#aboutImage').attr({src: imgAbout.src});
   };
   imgAuthor.onload = function() {
      $('#authorImage').attr({src: imgAuthor.src});
   };
   imgContact.onload = function() {
      $('#contactImage').attr({src: imgContact.src});
   };
   imgProject.onload = function() {
      $('#projectImage').attr({src: imgProject.src});
   };
   imgCanvas.onload = function() {
      $('#canvasImage').attr({src: imgCanvas.src});
   };
   imgBook.onload = function() {
      $('#bookImage').attr({src: imgBook.src});
   };
   imgBlog.onload = function() {
      $('#blogImage').attr({src: imgBlog.src});
   };
   imgLogin.onload = function() {
      $('#loginImage').attr({src: imgLogin.src});
   };

    $('.page-button').click(function(e) {
       $.scrollTo($(e.target.getAttribute('href')), 1000);
    });

   let $menu = $(".hamburger");
   let $navbar = $('.navbar');

   $menu.click('click', toggleMenu);

   function toggleMenu() {
      $menu.toggleClass('open');
      $navbar.toggleClass('open');
   }

   $(window).scroll(function(){
      $('.history-column.history-first').each(function(){
         let bottom_of_object = $(this).offset().top + $(this).outerHeight();
         let bottom_of_window = $(window).scrollTop() + $(window).height();
         if (bottom_of_window > bottom_of_object) {
            $('.history-column.history-first').css("visibility", "visible").addClass('animated fadeInLeft');
         }
      });
      $('.history-column.history-second').each(function(){
         let bottom_of_object = $(this).offset().top + $(this).outerHeight();
         let bottom_of_window = $(window).scrollTop() + $(window).height();
         if (bottom_of_window > bottom_of_object) {
            $('.history-column.history-second').css("visibility", "visible").addClass('animated fadeInRight');
         }
      });
      $('.charts-column').each(function(){
         let bottom_of_object = $(this).offset().top + $(this).outerHeight();
         let bottom_of_window = $(window).scrollTop() + $(window).height();
         if (bottom_of_window > bottom_of_object) {
            $('.charts-column').css("visibility", "visible").addClass('animated flipInX');
         }
      });
   });
})();



