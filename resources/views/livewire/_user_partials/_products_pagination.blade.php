@if ($paginator->hasPages())
    <ul class="pagination">
        @if ($paginator->onFirstPage())
            <li class="page-item disabled">
                <a class="page-link">
                    <i class='bx bx-chevron-left'></i>
                    Prev
                </a>
            </li>
        @else
            <li class="page-item">
                <a class="page-link" wire:click="previousPage">
                    <i class='bx bx-chevron-left'></i>
                    Prev
                </a>
            </li>
        @endif
    </ul>
    <ul class="pagination">
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="page-item disabled d-none d-sm-block"><a class="page-link">{{ $element }}</a>
            @endif

            @if (is_array($element))
                @foreach ($element as $page=>$url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active d-none d-sm-block" aria-current="page">
                            <a class="page-link" wire:click="gotoPage({{ $page }})">
                                <span>{{ $page }}</span>
                            </a>
                        </li>
                    @else
                        <li class="page-item d-none d-sm-block">
                            <a class="page-link" wire:click="gotoPage({{ $page }})">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach
    </ul>

    <ul class="pagination">
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link" wire:click="nextPage" aria-label="Next">Next
                    <i class='bx bx-chevron-right'></i>
                </a>
            </li>
        @else
            <li class="page-item disabled">
                <a class="page-link" aria-label="Next">Next
                    <i class='bx bx-chevron-right'></i>
                </a>
            </li>
        @endif
    </ul>
@endif
