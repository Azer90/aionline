<style>
    .list_page a{
        color: #fff;
    }
</style>

@if ($paginator->hasPages())
    <div class="list_page">

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <p class="disabled"><span>上一页</span></p>
        @else
            <p><a href="{{ $paginator->previousPageUrl() }}" rel="prev">上一页</a></p>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="disabled"><span>{{ $element }}</span></span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="active">{{ $page }}</span>
                    @else
                        <span><a href="{{ $url }}">{{ $page }}</a></span>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <p><a href="{{ $paginator->nextPageUrl() }}" rel="next">下一页</a></p>
        @else
            <p class="disabled"><span>下一页</span></p>
        @endif

    </div>
@endif
