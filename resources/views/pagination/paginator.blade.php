@if ($paginator->lastPage() != 1)
<div id="pagination">
    [ Prodotti da {{ $paginator->firstItem() }} a {{ $paginator->lastItem() }} di {{ $paginator->total() }} ]

    <!-- Link alla prima pagina -->
    @if (!$paginator->onFirstPage())
        <a href="{{ $paginator->url(1) }}">Prima Pagina</a> {
    @else
        Prima Pagina {
    @endif

    <!-- Link alla pagina precedente -->
    @if ($paginator->currentPage() != 1)
        <a href="{{ $paginator->previousPageUrl() }}">&lt; Indietro</a> |
    @else
        &lt; Indietro |
    @endif

    <!-- Link alla pagina successiva -->
    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}"> Avanti &gt;</a> }
    @else
        Avanti &gt; }
    @endif

    <!-- Link all'ultima pagina -->
    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->url($paginator->lastPage()) }}"> Ultima Pagina </a>
    @else
        Ultima Pagina
    @endif
</div>
@endif