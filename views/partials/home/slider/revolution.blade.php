@if($slide = Slide::findBySlug('anasayfa'))
    @if(count($slide)>0)
        <section class="main-banner">

            <div class="tp-banner-container">
                <div class="tp-banner">
                    <ul>
                        @foreach($slide->sliders()->where('status', 1)->orderBy('ordering', 'asc')->get() as $slider)
                            <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-thumb="{{ $slider->present()->firstImage(300,200,'fit',80) }}" data-saveperformance="on" data-title="">

                                <!-- MAIN IMAGE -->
                                <img src="{{ $slider->present()->firstImage(1600,600,'fit',50) }}" alt="" data-lazyload="{{ $slider->present()->firstImage(1600,600,'fit',50) }}" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                                @if($slider->title)
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption banner-heading lft rs-parallaxlevel-0"
                                     data-x="{{ $slider->position_x }}"
                                     data-y="{{ $slider->position_y+210 }}"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="700"
                                     data-start="700"
                                     data-easing="Power3.easeInOut"
                                     data-elementdelay="0.1"
                                     data-endelementdelay="0.1"
                                     style="z-index: 2;">{!! $slider->title !!}
                                </div>
                                @endif

                                @if($slider->sub_title)
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption banner-heading lft rs-parallaxlevel-0"
                                     data-x="{{ $slider->position_x }}"
                                     data-y="{{ $slider->position_y+270 }}"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="700"
                                     data-start="500"
                                     data-easing="Power3.easeInOut"
                                     data-elementdelay="0.1"
                                     data-endelementdelay="0.1"
                                     style="z-index: 2;">{!! $slider->sub_title !!}
                                </div>
                                @endif

                                @if($slider->content)
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption lft banner-text rs-parallaxlevel-0"
                                     data-x="{{ $slider->position_x }}"
                                     data-y="@if(!$slider->sub_title) {{ $slider->position_y+290 }} @else {{ $slider->position_y+340 }} @endif"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="700"
                                     data-start="1000"
                                     data-easing="Power3.easeInOut"
                                     data-elementdelay="0.1"
                                     data-endelementdelay="0.1"
                                     style="z-index: 3;">{!! $slider->content !!}
                                </div>
                                @endif

                            @if($slider->link_type != 'none')
                                <!-- LAYER NR. 4 -->
                                    <div class="tp-caption banner-btn colored lft banner-btn rs-parallaxlevel-0"
                                         data-x="{{ $slider->position_x }}"
                                         data-y="@if(!$slider->sub_title) {{ $slider->position_y+390 }} @else {{ $slider->position_y+440 }} @endif"
                                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                         data-speed="700"
                                         data-start="1500"
                                         data-easing="Power3.easeInOut"
                                         data-elementdelay="0.1"
                                         data-endelementdelay="0.1"
                                         style="z-index: 4;"><a href="{{ $slider->present()->link()->url }}">{{ $slider->present()->link()->title }}</a>
                                    </div>
                            @endif

                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </section>

        @push('scripts')
        {!! Theme::script('js/jquery.themepunch.plugins.min.js') !!}
        {!! Theme::script('js/jquery.themepunch.revolution.min.js') !!}
        @endpush

        @push('js_inline')
        <script>
            jQuery(document).ready(function () {
                var revapi;
                revapi = jQuery('.tp-banner').revolution(
                        {
                            delay: 9000,
                            startwidth: 1140,
                            startheight: 600,
                            hideThumbs: 200,
                            fullWidth: "on",
                            forceFullWidth: "on"
                        });

            });
        </script>
        @endpush
    @endif
@endif