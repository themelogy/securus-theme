@if ($breadcrumbs)
    <ul class="breadcrumbs">
        <li><a href="{{ route('homepage') }}">{{ Page::findHomepage()->title }}</a></li>
        @foreach ($breadcrumbs as $crumb)
            <?php
            $icon = isset($crumb->icon) ? '<i class="' . $crumb->icon . '"></i> ' : '';
            ?>

            @if ($crumb->url && ! $crumb->last)
                <li>
                    <a href="{{ $crumb->url }}">{!! $crumb->title !!}</a>
                </li>
            @else
                <li>{!! $crumb->title !!}</li>
            @endif
        @endforeach
    </ul>
@endif