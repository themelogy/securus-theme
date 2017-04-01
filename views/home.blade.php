@extends('layouts.master')

@section('content')
    @include('partials.home.slider.revolution')

    @include('partials.home.welcome')

    @if('asgard'==1)

        @include('partials.home.benefits')

        @include('partials.home.funfacts')

        @include('partials.home.different-service')

        @include('partials.home.who-is-behind')

        @include('partials.home.contact-us-bar')

        @include('partials.home.meet-our-advisors')

        @include('partials.home.testimonials')

        @include('partials.home.request-callback')

    @endif
@endsection