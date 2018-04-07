<footer id="footer">
    <div class="container">
        <div class="footer-top clearfix">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div class="footer-logo animate fadeInLeft"><a href="{{ url(locale()) }}"><img src="{{ Theme::url('images/footer-logo.png') }}" alt=""></a></div>
                </div>
                <div class="col-md-9 col-sm-9">
                    <p>{!! trans('themes::theme.footer.intro') !!}</p>
                </div>
            </div>

            <div class="height-50"></div>

            <div class="container">
                <div class="row">
                    <div class="col-md-4 contact-info">
                        <div class="clearfix">
                            <ul class="list-unstyled address">
                                <li>
                                    <i class="icon-icons74"></i>
                                    <span>{!! setting('theme::address') !!}</span>
                                </li>
                                <li>
                                    <i class="icon-telephone114"></i>
                                    <span>{{ setting('theme::phone') }} <br/> <a href="mailto:{!! HTML::email(setting('theme::email')) !!}">{!! HTML::email(setting('theme::email')) !!}</a></span>
                                </li>
                            </ul>
                            <div class="height-30"></div>
                            <ul class="social">
                                @if(setting('theme::facebook'))
                                    <li class="animate bounceIn">
                                        <a href="{{ setting('theme::facebook') }}" class="facebook"><i class="icon-facebook-1"></i></a>
                                    </li>
                                @endif
                                @if(setting('theme::twitter'))
                                    <li class="animate bounceIn" data-delay="100">
                                        <a href="{{ setting('theme::twitter') }}" class="twitter"><i class="icon-twitter-1"></i></a>
                                    </li>
                                @endif
                                @if(setting('theme::google'))
                                    <li class="animate bounceIn" data-delay="200">
                                        <a href="{{ setting('theme::google') }}" class="google-plus"><i class="icon-google"></i></a>
                                    </li>
                                @endif
                                @if(setting('theme::linkedin'))
                                    <li class="animate bounceIn" data-delay="300">
                                        <a href="{{ setting('theme::linkedin') }}" class="linkedin"><i class="icon-linkedin3"></i></a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    @inject("menuService", "Modules\Menu\Services\MenuService")
                    <div class="col-md-4">
                        <div class="clearfix">
                            <h4>{{ $menuService->title('corporate') }}</h4>
                            {!! Menu::render('corporate', \Themes\Securus\Presenter\FooterMenuLinksPresenter::class) !!}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="clearfix">
                            <h4>{{ $menuService->title('services') }}</h4>
                            {!! Menu::render('services', \Themes\Securus\Presenter\FooterMenuLinksPresenter::class) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6"><p>{{ trans('themes::theme.footer.copyrights', ['company' => setting('theme::company-name')]) }}</p></div>
                <div class="col-md-6 col-sm-6"><p class="text-right">{!! trans('themes::theme.footer.designed by', ['company'=>'<a href="http://www.qbicom.com.tr">Qbicom Digital</a>']) !!}</p></div>
            </div>
        </div>
    </div>

</footer>