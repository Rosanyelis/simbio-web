<div class="mt-4">
    @if ($paginator->total() > 0)
        <div class="d-flex justify-content-center mb-3">
            <small class="text-muted">
                Mostrando {{ $paginator->firstItem() }} a {{ $paginator->lastItem() }} de {{ $paginator->total() }} resultados
            </small>
        </div>
    @endif

    @if ($paginator->hasPages())
        <nav aria-label="Navegación de páginas">
            <ul class="pagination-modern justify-content-center">
                {{-- Previous Page Link --}}
                @if (!$paginator->onFirstPage())
                    <li class="page-item-modern">
                        <a class="page-link-modern arrow" href="{{ $paginator->previousPageUrl() }}" rel="prev">
                            &lt;
                        </a>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="page-item-modern">
                            <span class="page-link-modern dots">{{ $element }}</span>
                        </li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item-modern">
                                    <span class="page-link-modern active">{{ $page }}</span>
                                </li>
                            @else
                                <li class="page-item-modern">
                                    <a class="page-link-modern" href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item-modern">
                        <a class="page-link-modern arrow" href="{{ $paginator->nextPageUrl() }}" rel="next">
                            &gt;
                        </a>
                    </li>
                @endif
            </ul>
        </nav>
    @endif
</div>

<style>
.pagination-modern {
    display: flex;
    list-style: none;
    padding: 0;
    margin: 0;
    gap: 8px;
    align-items: center;
}

.page-item-modern {
    display: inline-block;
}

.page-link-modern {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    text-decoration: none;
    color: #333;
    font-size: 14px;
    font-weight: 400;
    transition: all 0.3s ease;
    background-color: transparent;
}

.page-link-modern:hover {
    background-color: #f0f0f0;
    color: #333;
}

.page-link-modern.active {
    background-color: #b2d235;
    color: #fff;
    font-weight: 600;
    cursor: default;
}

.page-link-modern.arrow {
    font-size: 16px;
    color: #666;
}

.page-link-modern.arrow:hover {
    background-color: #f0f0f0;
    color: #333;
}

.page-link-modern.dots {
    cursor: default;
    background-color: transparent;
}

.page-link-modern.dots:hover {
    background-color: transparent;
}
</style>

