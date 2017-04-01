@stack('styles')
@stack('css_inline')

@if(App::environment()=='deneme')
{!! Theme::script('js/jquery-2.2.0.js') !!}
{!! Theme::script('js/smooth-scroll.js') !!}
{!! Theme::script('js/bootstrap.min.js') !!}
{!! Theme::script('js/counter.js') !!}
{!! Theme::script('js/common.js') !!}
{!! Theme::script('js/scripts.js') !!}
@endif

<script src="{{ elixir('js/all.js', 'themes/securus') }}"></script>

@stack('scripts')
@stack('js_inline')

@include('partials.analytics')