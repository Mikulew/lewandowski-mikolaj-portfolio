// (function(){
   let $headerImage = $('#headerImage'),
       $aboutImage = $('#aboutImage'),
       $authorImage = $('#authorImage'),
       $contactImage = $('#contactImage'),
       $projectImage = $('#projectImage'),
       $canvasImage = $('#canvasImage'),
       $bookImage = $('#bookImage'),
       $blogImage = $('#blogImage'),
       $loginImage = $('#loginImage');

   if ($headerImage.is("img")) {
      let imgHeader = new Image();
      imgHeader.src = '/img/page/welcome-page.jpg';
      imgHeader.onload = function() {
          $headerImage.attr({src: imgHeader.src});
      };
   }

   if ($aboutImage.is("img")) {
      let imgAbout = new Image();
      imgAbout.src = '/img/page/about-page.jpg';
      imgAbout.onload = function() {
          $aboutImage.attr({src: imgAbout.src});
      };
   }

   if ($authorImage.is("img")) {
       let imgAuthor = new Image();
       imgAuthor.src = '/img/page/mikulew-hawk.jpg';
       imgAuthor.onload = function() {
       $authorImage.attr({src: imgAuthor.src});
      };
   }

   if ($contactImage.is("img")) {
      let imgContact = new Image();
      imgContact.src = '/img/page/contact-page.jpg';
      imgContact.onload = function() {
          $contactImage.attr({src: imgContact.src});
      };
   }

   if ($projectImage.is("img")) {
      let imgProject = new Image();
      imgProject.src = '/img/page/project-page.jpg';
      imgProject.onload = function() {
          $projectImage.attr({src: imgProject.src});
      };
   }

   if ($canvasImage.is("img")) {
      let imgCanvas = new Image();
      imgCanvas.src = '/img/page/canvas-page.jpg';
      imgCanvas.onload = function() {
          $canvasImage.attr({src: imgCanvas.src});
      };
   }

   if ($bookImage.is("img")) {
      let imgBook = new Image();
      imgBook.src = '/img/page/book-page.jpg';
      imgBook.onload = function() {
          $bookImage.attr({src: imgBook.src});
      };
   }

   if ($blogImage.is("img")) {
      let imgBlog = new Image();
      imgBlog.src = '/img/page/blog-page.jpg';
      imgBlog.onload = function() {
          $blogImage.attr({src: imgBlog.src});
      };
   }

   if ($loginImage.is("img")) {
      let imgLogin = new Image();
      imgLogin.src = '/img/page/login-page.jpg';
      imgLogin.onload = function() {
          $loginImage.attr({src: imgLogin.src});
      };
   }

    $('.page-button').click(function(e) {
       e.preventDefault();
       console.log($(this).data("href"));
       $.scrollTo($(this).data("href"), 1000);
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
// })();



