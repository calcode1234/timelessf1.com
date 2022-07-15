<form role="search" method="get" id="search-form" action="@php echo esc_url( home_url( '/' ) ) @endphp" class="input-group mb-3 mx-lg-3 mx-0">
  <div class="input-group">
    <input type="search" class="form-control border-0" placeholder="Search Timeless F1 for specific articles, videos and quizzes…" aria-label="search nico" name="s" id="search-input" value="@php echo esc_attr( get_search_query() ) @endphp">
    <div class="input-group-append">
      <span class="input-group-text p-0">
      <i class="fas fa-search text-muted"></i>
     </span>
    </div>
  </div>
</form>