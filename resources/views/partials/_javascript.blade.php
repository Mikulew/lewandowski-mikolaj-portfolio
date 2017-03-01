    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/semantic-ui/2.2.7/semantic.min.js"></script>
    <script>
        $leftSidebar = $('.ui.sidebar.vertical.left.menu');
        $rightSidebar = $('.ui.sidebar.vertical.right.menu');
        $leftBtn = $('#toggle');
        $rightBtn = $('#toggleAdmin');
        
            $leftSidebar.sidebar('attach events', $leftBtn);
        
            $rightSidebar.sidebar('attach events' ,$rightBtn);
    </script>
    <script src="/js/parsley.min.js"></script>
