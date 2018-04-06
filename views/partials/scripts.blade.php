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

<script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Montserrat:400,700:latin-ext', 'Open+Sans:300,400,600,700:latin-ext' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); </script>

<script src="{{ elixir('js/all.js', 'themes/securus') }}"></script>

@stack('scripts')
@stack('js_inline')

<?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false): ?>
{!! $googleAnalytics !!}
<?php endif; ?>