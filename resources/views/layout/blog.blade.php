

<!doctype html>
<html class="no-js" lang="{{LaravelLocalization::getCurrentLocale()}}" dir="{{
LaravelLocalization::getCurrentLocaleDirection() }}">
    <head>
       @include('includes.head')
    </head>
    <body>

@include('includes.preloader')
@include('includes.proButton')
@include('includes.topBar')

@include('includes.headerInner')
@yield('blog')
@include('includes.footer')

@include('includes.footerJs')
    </body>
</html>
