    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/semantic-ui/2.2.7/semantic.min.js"></script>
    <script>
        
       var $leftSidebar = $('.ui.sidebar.vertical.left.menu');
           var $leftBtn = $('#toggle');
               $leftSidebar.sidebar('attach events', $leftBtn);

           var $menu = $(".hamburger");
           var $navbar = $('.navbar');

           $menu.click('click', toggleMenu);
 
           function toggleMenu() {
               $menu.toggleClass('open');
               $navbar.toggleClass('open');
           }
    </script>
    <script src="/js/parsley.min.js"></script>
