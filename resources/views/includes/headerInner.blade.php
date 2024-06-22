	<!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-12">
                        <!-- Start Logo -->
                        <div class="logo">
                            <a href="index.html"><img src="{{ asset('assets/img/logo.png') }}" alt="logo"></a>
                        </div>
                        <!-- End Logo -->
                        <!-- Mobile Nav -->
                        <div class="mobile-nav"></div>
                        <!-- End Mobile Nav -->
                    </div>
                    <div class="col-lg-7 col-md-9 col-12">
                        <!-- Main Menu -->
                        <div class="main-menu">
                            <nav class="navigation">
                                <ul class="nav menu">
                                    <li class="{{request()->is('/')?"active" : ""}}"><a href="{{route('home')}}">{{__('messages.Home')}} <i class="icofont-rounded-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home Page 1</a></li>
                                        </ul>
                                    </li>
                                    <li class="{{request()->is('doctor')?"active" : ""}}"><a href="{{route('doctor')}}">{{__('messages.Doctors')}} </a></li>
                                    <li class="{{request()->is('service')?"active" : ""}}"><a href="{{route('service')}}">{{__('messages.Service')}} </a></li>
                                    <li class="{{request()->is('error')?"active" : ""}}"><a href="{{route('error')}}">{{__('messages.Pages')}} <i class="icofont-rounded-down"></i></a>
                                        <ul class="dropdown">
                                            <li class="{{request()->is('error')?"active" : ""}}"><a href="{{route('error')}}">404 Error</a></li>
                                        </ul>
                                    </li>
                                    <li class="{{request()->is('blog')?"active" : ""}}"><a href="{{route('blog')}}">{{__('messages.Blogs')}} <i class="icofont-rounded-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="blog-single.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="{{request()->is('contact')?"active" : ""}}"><a href="{{route('contact')}}">{{__('messages.Contact_us')}}</a></li>
                                </ul>

                            </nav>
                        </div>
                        <!--/ End Main Menu -->
                    </div>
                    <div class="col-lg-2 col-12">
                        <div class="get-quote">
                            <a href="appointment.html" class="btn">{{__('messages.Book_Appointment')}}</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->

</header>
