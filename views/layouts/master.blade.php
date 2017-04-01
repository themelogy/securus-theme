<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}" class="no-js">
<head>
@include('partials.metadata')
</head>
<body class="fixed-header">

@include('partials.parts.loader')

@include('partials.header')

@yield('breadcrumbs')

@yield('content')

@include('partials.footer')

@include('partials.scripts')

</body>
</html>