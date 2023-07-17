<!-- main nav start -->
<header class="header-style-1">
    <div class="top_nav_soc">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xl-8">
                    <div class="left-content-top">
                        <ul>
                            <li class="d-none d-xl-inline-block">
                                Welcome to Yun Nadi Oo Co.,Ltd
                            </li>

                            <li>
                                <a href="tel:+95-9-778944665">
                                    <i class='bx bxs-phone'></i>
                                    +95-9-778944665
                                </a>
                            </li>

                            <li>
                                <a href="mailto:info@yunnadioocompany.com">
                                    <i class='bx bxs-envelope'></i>
                                    info@yunnadioocompany.com
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 col-xl-4">
                    <div class="right-content-top">
                        <ul>
                            <li>
                                <div id="options" data-input-name="country2" data-selected-country="US">
                                </div>
                            </li>
                            <li>
                                <a href="#"><i class='bx bxl-facebook'></i></a>
                            </li>
                            <li>
                                <a href="#"><i class='bx bxl-linkedin'></i></a>
                            </li>
                            <li>
                                <a href="#"><i class='bx bxl-twitter'></i></a>
                            </li>
                            <li>
                                <a href="#"><i class='bx bxl-youtube'></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="navbar-area">

        <div class="main-responsive-nav">
            <div class="container">
                <div class="main-responsive-menu">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="image">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-navbar">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">

                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="image">
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">

                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    Home
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="#" class="nav-link ">
                                    About Us
                                    <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="service.html" class="nav-link ">Service Page</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="service-details.html" class="nav-link ">Service Details</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link ">
                                    Manpower Services
                                    <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    @foreach ($countries as $country)
                                        <li class="nav-item">
                                            <a href="{{ route('job.show', $country->id) }}">
                                                {{ $country->country ?? '' }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Gallery & Activities
                                    <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    @foreach ($categories as $category)
                                        <li class="nav-item">
                                            <a href="{{ route('activities.show', $category->id) }}" class="nav-link ">
                                                {{ $category->title ?? '' }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('contact.index') }}" class="nav-link">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

    </div>
</header>
