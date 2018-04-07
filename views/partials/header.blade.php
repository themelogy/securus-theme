
<!-- HERDER -->
<header id="header" class="h-one-h">

    <div class="container">

        <!-- TOP BAR -->
        <div class="top-bar clearfix">
            <p>{{ trans('themes::theme.top.slogan') }}</p>
            <ul>
                <li><i class="icon-telephone114"></i> {{ setting('theme::phone') }}</li>
                <li><i class="icon-icons74"></i> {{ strip_tags(setting('theme::address')) }}</li>
            </ul>
        </div>
        <!-- / TOP BAR -->

        <!-- HEADER INNER -->
        <div class="header clearfix">

            <a href="{{ url(locale()) }}" class="logo"><img src="{{ Theme::url('images/logo.png') }}" alt=""></a>

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-nav" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <div class="search-btn">
                <a href="javascript:void(0);" class="search-trigger"><i class="icon-icons185"></i></a>
            </div>

            <div class="search-container">
                <i class="fa fa-times header-search-close"></i>
                <div class="search-overlay"></div>
                <div class="search">
                    <form>
                        <label>{{ trans('themes::theme.search.title') }}:</label>
                        <input type="text" placeholder="">
                        <button><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>

            <nav class="main-nav navbar-collapse collapse" id="primary-nav">
                {!! Menu::render('header', \Themes\Securus\Presenter\HeaderMenuPresenter::class) !!}
            </nav>

        </div><!-- / HEADER INNER -->

    </div><!-- / CONTAINER -->

</header>
<!-- / HERDER -->