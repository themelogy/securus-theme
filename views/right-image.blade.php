@extends('layouts.master')

@section('breadcrumbs')
    <section class="subpage-header">
        <div class="container">
            <div class="site-title clearfix">
                <h2 class="title">{{ $page->title }}</h2>
                {!! Breadcrumbs::renderIfExists('page') !!}
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="image-widget pull-right margin-left-20 margin-bottom-20">
                        <img src="{{ $page->present()->firstImage(500, 348, 'resize', 80) }}" class="img-shadow" alt="{{ $page->title }}">
                    </div>
                    {!! $page->body !!}
                </div>
            </div>
        </div>
    </section>
@stop
