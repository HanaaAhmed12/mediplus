<!doctype html>
<html class="no-js" lang="{{LaravelLocalization::getCurrentLocale()}}" dir="{{
LaravelLocalization::getCurrentLocaleDirection() }}">
{{-- <html class="no-js" lang="zxx"> --}}
    <head>
   @include('includes.head')

    </head>
    <body>

 @include('includes.preloader')
@include('includes.proButton')

@include('includes.topBar')
		@include('includes.headerInner')
		</header>
		<!-- End Header Area -->

@yield('content')

@include('includes.footer')

@include('includes.footerJs')
    </body>
</html>
