@if ($products->hasPages())
    <div class="ps-pagination" id="pagination-links">
        <ul class="pagination">
            {{-- Previous --}}
            @if ($products->onFirstPage())
                <li class="disabled"><span><i class="fa fa-angle-left"></i></span></li>
            @else
                <li><a href="{{ $products->previousPageUrl() }}"><i class="fa fa-angle-left"></i></a></li>
            @endif

            {{-- Page Numbers --}}
            @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                @if ($page == $products->currentPage())
                    <li class="active"><a href="#">{{ $page }}</a></li>
                @else
                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach

            {{-- Next --}}
            @if ($products->hasMorePages())
                <li><a href="{{ $products->nextPageUrl() }}"><i class="fa fa-angle-right"></i></a></li>
            @else
                <li class="disabled"><span><i class="fa fa-angle-right"></i></span></li>
            @endif
        </ul>
    </div>
@endif
