@if($paginator->hasPages())
    <nav class="d-flex justify-content-center" aria-label="Page navigation">
        <ul class="pagination">
            <li class="page-item @if($paginator->onFirstPage()) disabled @endif">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" aria-label="Anterior" title="Anterior">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="d-flex align-items-center">
                <span class="text-muted mx-2">
                    Página {{ $paginator->currentPage() }} de {{ count($elements[0]) }}
                </span>
            </li>
            <li class="page-item @if($paginator->onLastPage()) disabled @endif">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Próximo" title="Próximo">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
@endif

