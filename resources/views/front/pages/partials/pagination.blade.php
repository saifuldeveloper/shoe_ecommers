@if ($products->hasPages())
    <div class="ps-pagination" id="pagination-links">
        <ul class="pagination">
            @if ($products->onFirstPage())
                <li class="disabled"><a style="pointer-events: none; cursor: default; opacity: 0.5;"><i class="fa fa-angle-left"></i></a></li>
            @else
                <li><a href="{{ $products->previousPageUrl() }}"><i class="fa fa-angle-left"></i></a></li>
            @endif

            @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                @if ($page == $products->currentPage())
                    <li class="active"><a style="pointer-events: none; cursor: default;">{{ $page }}</a></li>
                @else
                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach

            {{-- Next Page --}}
            @if ($products->hasMorePages())
                <li><a href="{{ $products->nextPageUrl() }}"><i class="fa fa-angle-right"></i></a></li>
            @else
                <li class="disabled"><a style="pointer-events: none; cursor: default; opacity: 0.5;"><i class="fa fa-angle-right"></i></a></li>
            @endif

        </ul>
    </div>
@endif