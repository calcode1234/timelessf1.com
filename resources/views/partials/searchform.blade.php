<form role="search" method="get" id="search-form" action="@php echo esc_url( home_url( '/' ) ) @endphp" class="input-group mb-3 mx-lg-3 mx-0">
  <div class="input-group">
    <label for="content" class="d-flex align-items-center mb-0 mr-3"><strong>{{__('Search:') }}</strong></label>
    <input type="search" class="form-control border-0" placeholder="Search Timeless F1…" aria-label="search nico" name="s" id="content" value="@php echo esc_attr( get_search_query() ) @endphp">
    <div class="input-group-append">
      <span class="input-group-text p-0">
        <i class="fas fa-search text-muted"></i>
      </span>
    </div>
  </div>
</form>