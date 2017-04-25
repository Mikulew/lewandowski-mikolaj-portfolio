<script src="{!! URL::asset('/js/main.min.js?250428') !!}"></script>
<script src="https://cdn.jsdelivr.net/semantic-ui/2.2.7/semantic.min.js"></script>
<script>
    var $leftSidebar = $('.ui.sidebar.vertical.left.menu');
    var $leftBtn = $('#toggle');
    $leftSidebar.sidebar('attach events', $leftBtn);
</script>