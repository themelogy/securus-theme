<!-- WELCOME -->
<section class="bg-blue">
    <div class="container">
        <div class="row">
            @if($safety = Page::find(4))
            <div class="col-md-6 animate fadeInLeft">
                <h2>{{ $safety->title }}</h2>
                <div class="height-10"></div>
                {!! Str::words($safety->body, 65) !!}
                <div class="height-20"></div>
                <a href="{{ $safety->url }}" class="btn btn-bordered-dark" data-text="read more">{{ trans('global.buttons.read more') }}</a>
                <div class="height-40"></div>
            </div>
            <div class="col-md-6 animate fadeInRight">
                <div class="video-widget">
                    <img src="{{ $safety->present()->firstImage(555,378,'resize', 80) }}" class="img-shadow" alt="{{ $safety->title }}">
                </div>
            </div>
            @endif
        </div>
    </div>
</section><!-- / WELCOME -->