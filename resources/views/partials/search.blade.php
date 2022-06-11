<!-- Full screen search box -->
<div id="searchModal" class="search-modal">
    <button type="button" class="close" aria-label="Close" data-dismiss="searchModal">
        <span aria-hidden="true">&times;</span>
    </button>
    <form action="/blog" class="oleez-overlay-search-form">
        @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        @if (request('author'))
        <input type="hidden" name="author" value="{{ request('author') }}">
    @endif
        <label for="search" class="sr-only">Search</label>
        <input type="search" class="oleez-overlay-search-input" id="search" name="search"
            value="{{ request('search') }}" placeholder="Search here">
    </form>
</div>
