<!-- main nav start -->
<header class="header-style-1">
    <div class="top_nav_soc">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xl-8">
                    <div class="left-content-top">
                        <ul>
                            <li class="d-none d-xl-inline-block" style="color: white;">
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
                                {{-- <div id="options" data-input-name="country2" data-selected-country="US">
                                </div> --}}
                                <div data-input-name="country2" data-selected-country="US" class="flagstrap">
                                    <button type="button" data-bs-toggle="dropdown" id="flagstrap-drop-down-1VWwkNeO"
                                        class="btn2 btn-info btn-sm dropdown-toggle" aria-expanded="true"><span
                                            class="flagstrap-selected-1VWwkNeO">
                                            <i class="flagstrap-icon flagstrap-us" style="margin-right: 10px;"></i>
                                            English
                                        </span>
                                        <span class="caret" style="margin-left: 10px;"></span>
                                    </button>
                                    <ul id="flagstrap-drop-down-1VWwkNeO-list"
                                        aria-labelled-by="flagstrap-drop-down-1VWwkNeO" class="dropdown-menu"
                                        style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 27px, 0px);"
                                        data-popper-placement="bottom-start">
                                        <li>
                                            <a data-val="">
                                                Please select country
                                            </a>
                                        </li>
                                        <li>
                                            <a data-val="US">
                                                <i class="flagstrap-icon flagstrap-us" style="margin-right: 10px;">
                                                </i>
                                                English
                                            </a>
                                        </li>

                                        <li>
                                            <a data-val="JP">
                                                <i class="flagstrap-icon flagstrap-jp" style="margin-right: 10px;">
                                                </i>
                                                Japan
                                            </a>
                                        </li>

                                        <li>
                                            <a data-val="Th">
                                                <i class="flagstrap-icon flagstrap-th" style="margin-right: 10px;">
                                                </i>
                                                Thailand
                                            </a>
                                        </li>
                                    </ul>
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
        <style>
            .navbar-brand {
                display: flex;
                align-items: center;
            }

            .img-logo {
                max-width: 100%;
                height: auto;
                max-height: 80px !important;
            }

            .ml10 {
                margin-left: 10px;
            }
        </style>
        <div class="main-responsive-nav">
            <div class="container">
                <div class="main-responsive-menu mobile-menu">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('data/logo.jpg') }}" alt="image">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-navbar" style="background-color: white;">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">

                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('data/logo.jpg') }}" alt="image" class="img-logo">

                        <div class="ml10">
                            <h1 style="font-size: 27px;">
                                Yun Nadi Oo Co.,Ltd
                            </h1>
                            <h6 style="font-size: 14px;">
                                Overseas Employment Agency
                            </h6>
                        </div>
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">

                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link">
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
                                        <a href="{{ route('about.index') }}" class="nav-link ">
                                            Our Company
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('ceo_message') }}" class="nav-link ">
                                            President's Message
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('team') }}" class="nav-link ">
                                            Professional Team
                                        </a>
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
                                <a href="#" class="nav-link">
                                    Application
                                    <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('cv.index') }}" class="nav-link">
                                            Submit CV
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('employer.index') }}" class="nav-link">
                                            Employer Form
                                        </a>
                                    </li>
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
