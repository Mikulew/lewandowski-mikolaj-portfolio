@if ($paginator->hasPages())
    <div class="blog-pagination">
        <!-- Previous Page Link -->
<!--
    {{--        @if ($paginator->onFirstPage())
                <a class="disabled item">
                    <i class="angle double left icon"></i>
                </a>
            @else
                <a class="item" href="{{ $paginator->previousPageUrl() }}" rel="prev">
                    <i class="angle double left icon"></i>
                </a>
            @endif--}}
-->
    <!-- Pagination Elements -->
    @foreach ($elements as $element)
        <!-- "Three Dots" Separator -->
            @if (is_string($element))
                <a class="blog-number-disabled">{{ $element }}</a>
            @endif
        <!-- Array Of Links -->
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="blog-number active">{{ $page }}</a>
                    @else
                        <a class="blog-number" href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

    <!-- Next Page Link -->
        {{--        @if ($paginator->hasMorePages())
                    <a class="item" href="{{ $paginator->nextPageUrl() }}" rel="next">
                        <i class="angle double right icon"></i>
                    </a>
                @else
                    <a class="item disabled">
                        <i class="angle double right icon"></i>
                    </a>
                @endif--}}
</div>
@endif