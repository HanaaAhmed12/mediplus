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
		</header>
		<!-- End Header Area -->

@include('includes.slider')

@include('includes.Schedule')

@include('includes.feautes')

@include('includes.funFact')

@include('includes.choose')

@include('includes.calltoAction')

@include('includes.portfolio')

@include('includes.service')

@include('includes.pricing')


@include('includes.startBlog')

@include('includes.startClients')

@include('includes.appointment')
@include('includes.newsletter')

@include('includes.footer')

@include('includes.footerJs')
    </body>
</html>
