@extends('layouts.master')

@section('breadcrumbs')
    <section class="subpage-header">
        <div class="container">
            <div class="site-title clearfix">
                <h2>{{ trans('themes::contact.title') }}</h2>
                {!! Breadcrumbs::renderIfExists('contact') !!}
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 animate fadeInLeft">
                    <div class="row">
                        <div class="col-md-12">
                            <address>
                                <h3>{{ setting('theme::company-name') }}</h3><br>
                                {!! setting('theme::address') !!}<br>
                                <div class="height-10"></div>
                                <abbr title="{{ trans('contact::contacts.form.phone') }}">T:</abbr> {{ setting('theme::phone') }}
                                @if(setting('theme::fax'))
                                <br/>
                                <abbr title="{{ trans('contact::contacts.form.fax') }}">F:</abbr> {{ setting('theme::fax') }}
                                @endif
                                @if(setting('theme::email'))
                                <br/>
                                <abbr title="{{ trans('contact::contacts.form.email') }}">E:</abbr> {{ setting('theme::email') }}
                                @endif
                            </address>
                            <div class="height-20"></div>
                        </div>
                    </div>
                    <div class="height-20"></div>
                    <h3>{{ trans('themes::contact.follow us') }}</h3>
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
                    <div class="height-50"></div>
                </div>

                <div class="form">
                    <div class="col-md-6 col-sm-6 animate fadeInRight">
                        @include('contact::form')
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Google Maps -->
    <div class="map" style="height: 350px;">
        @gmap('300px', '16', 'images/marker.png')
    </div>
    <!-- Google Maps / End -->
@endsection