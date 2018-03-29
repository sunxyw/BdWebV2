@if ($paginator->hasPages())
    <ul class="pagination pagination-primary">

        @if ($paginator->onFirstPage())
            <li class="page-item arrow-margin-left">
                <a class="page-link">
                    <span><i class="fa fa-angle-double-left"></i></span>
                </a>
            </li>
            <li class="page-item"><a class="page-link"></a></li>
        @else
            <li class="page-item arrow-margin-left">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}">
                    <span><i class="fa fa-angle-double-left"></i></span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}"></a></li>
        @endif



        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled"><a class="page-link">{{ $element }}</a></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active"><a class="page-link">{{ $page }}</a></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        <li class="page-item arrow-margin-right">
            @if ($paginator->hasMorePages())
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}">
                    <span><i class="fa fa-angle-double-right"></i></span>
                </a>
            @else
                <a class="page-link">
                    <span><i class="fa fa-angle-double-right"></i></span>
                </a>
            @endif
        </li>
    </ul>
@endif


<!--<ul class="pagination">
        {{-- Previous Page Link --}}
@if ($paginator->onFirstPage())
    <li class="disabled"><span>&laquo;</span></li>
        @else
    <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>
        @endif

{{-- Pagination Elements --}}
@foreach ($elements as $element)
    {{-- "Three Dots" Separator --}}
    @if (is_string($element))
        <li class="disabled"><span>{{ $element }}</span></li>
            @endif

    {{-- Array Of Links --}}
    @if (is_array($element))
        @foreach ($element as $page => $url)
            @if ($page == $paginator->currentPage())
                <li class="active"><span>{{ $page }}</span></li>
                    @else
                <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
        @endforeach
    @endif
@endforeach

{{-- Next Page Link --}}
@if ($paginator->hasMorePages())
    <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>
        @else
    <li class="disabled"><span>&raquo;</span></li>
        @endif
        </ul>
-->