@if ($paginator->hasPages())
    <div class="ui grid">
        <div class="row">
            <div class="wide column right aligned">
                <div class="ui small pagination menu">
                    <!-- Previous Page Link -->
                {{--        @if ($paginator->onFirstPage())
                            <a class="disabled item">
                                <i class="angle double left icon"></i>
                            </a>
                        @else
                            <a class="item" href="{{ $paginator->previousPageUrl() }}" rel="prev">
                                <i class="angle double left icon"></i>
                            </a>
                        @endif--}}
                <!-- Pagination Elements -->
                @foreach ($elements as $element)
                    <!-- "Three Dots" Separator -->
                        @if (is_string($element))
                            <a class="item disabled">{{ $element }}</a>
                        @endif
                    <!-- Array Of Links -->
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <a class="active item">{{ $page }}</a>
                                @else
                                    <a class="item" href="{{ $url }}">{{ $page }}</a>
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
            </div>
        </div>
    </div>
@endif