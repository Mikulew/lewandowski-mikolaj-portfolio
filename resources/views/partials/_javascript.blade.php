    <script src="/js/jquery-3.2.0.min.js"></script>
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
