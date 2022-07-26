<div id="site-footer" role="contentinfo">
    <div id="top" class="section bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="social mb-0">
                        @if($tiktok)
                            <li>
                                @php $tiktok_url  = $tiktok['url'] @endphp
                                @php $tiktok_title  = $tiktok['title'] @endphp
                                @php $tiktok_target = $tiktok['target'] @endphp @php '_self' @endphp

                                <a href="@php echo esc_url( $tiktok_url ) @endphp" target="@php echo esc_attr( $tiktok_target ) @endphp"><i class="fab fa-tiktok"></i> <span class="sr-only">@php echo esc_html( $tiktok_title ) @endphp</span></a>
                            </li>
                        @endif

                        @if($youtube)
                            <li>
                                @php $youtube_url  = $youtube['url'] @endphp
                                @php $youtube_title  = $youtube['title'] @endphp
                                @php $youtube_target = $youtube['target'] @endphp @php '_self' @endphp

                                <a href="@php echo esc_url( $youtube_url ) @endphp" target="@php echo esc_attr( $youtube_target ) @endphp"><i class="fab fa-youtube"></i> <span class="sr-only">@php echo esc_html( $youtube_title ) @endphp</span></a>
                            </li>
                        @endif

                        @if($instagram)
                            <li>
                                @php $instagram_url  = $instagram['url'] @endphp
                                @php $instagram_title  = $instagram['title'] @endphp
                                @php $instagram_target = $instagram['target'] @endphp @php '_self' @endphp

                                <a href="@php echo esc_url( $instagram_url ) @endphp" target="@php echo esc_attr( $instagram_target ) @endphp"><i class="fab fa-instagram"></i> <span class="sr-only">@php echo esc_html( $instagram_title ) @endphp</span></a>
                            </li>
                        @endif

                        @if($twitter)
                            <li>
                                @php $twitter_url  = $twitter['url'] @endphp
                                @php $twitter_title  = $twitter['title'] @endphp
                                @php $twitter_target = $twitter['target'] @endphp @php '_self' @endphp

                                <a href="@php echo esc_url( $twitter_url ) @endphp" target="@php echo esc_attr( $twitter_target ) @endphp"><i class="fab fa-twitter"></i> <span class="sr-only">@php echo esc_html( $twitter_title ) @endphp</span></a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="middle" class="section">
        
    </div>
</div>