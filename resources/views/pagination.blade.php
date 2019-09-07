
<style>
.page ul li{
        width:70px;
        height:70px;
        background: #1a1a1a;
        border-radius: 50%;
        color: #ddd;
        font-size: 16px;
        line-height: 70px;
}
.page ul li:hover a {
        text-decoration: none;
}
.page ul li a{
        color: #fff;
}
.page ul .active{
        border: 1px solid #4cc2c0;
        color: #4cc2c0;
}
@media screen and (max-width: 750px) {
        .page ul li {
                width: 30px;
                height: 30px;
                font-size: 13px;
                line-height: 30px;
        }

}
</style>
<div class="page">
    @if ($paginator->hasPages())
        <ul class="list-unstyled btn-toolbar">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled "><span class="fa fa-angle-double-left"></span></li>
            @else
                <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev" style="border-radius: 50%"><span class="fa fa-angle-double-left"></span></a></li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled"><span  style="border-radius: 50%">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active"><span  style="border-radius: 50%">{{ $page }}</span></li>
                        @else
                            <li class="rotate"><a href="{{ $url }}"  style="border-radius: 50%">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}" rel="next"  style="border-radius: 50%"><span class="fa fa-angle-double-right"></span></a></li>
            @else
                <li class="disabled" ><span  style="border-radius: 50%"><span class="fa fa-angle-double-right"></span></li>
            @endif
        </ul>
    @endif
</div>