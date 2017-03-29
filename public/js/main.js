(function(){
   var imgHeader = new Image(),
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

   $('#headerButton').click(function(){
      $.scrollTo($('#sectionNewspaper'), 1000);
   });
   $('#newspaperButton').click(function(){
      $.scrollTo($('#sectionCharts'), 1000);
   });
   $('#chartsButton').click(function(){
      $.scrollTo($('#sectionHistory'), 1000);
   });
   $('#historyButton').click(function(){
      $.scrollTo(0, 1500);
   });

   var $menu = $(".hamburger");
   var $navbar = $('.navbar');

   $menu.click('click', toggleMenu);

   function toggleMenu() {
      $menu.toggleClass('open');
      $navbar.toggleClass('open');
   }

   $(window).scroll(function(){
      $('.history-column.history-first').each(function(){
         var bottom_of_object = $(this).offset().top + $(this).outerHeight();
         var bottom_of_window = $(window).scrollTop() + $(window).height();
         if (bottom_of_window > bottom_of_object) {
            $('.history-column.history-first').css("visibility", "visible").addClass('animated fadeInLeft');
         }
      });
      $('.history-column.history-second').each(function(){
         var bottom_of_object = $(this).offset().top + $(this).outerHeight();
         var bottom_of_window = $(window).scrollTop() + $(window).height();
         if (bottom_of_window > bottom_of_object) {
            $('.history-column.history-second').css("visibility", "visible").addClass('animated fadeInRight');
         }
      });
      $('.charts-column').each(function(){
         var bottom_of_object = $(this).offset().top + $(this).outerHeight();
         var bottom_of_window = $(window).scrollTop() + $(window).height();
         if (bottom_of_window > bottom_of_object) {
            $('.charts-column').css("visibility", "visible").addClass('animated flipInX');
         }
      });
   });
})();



