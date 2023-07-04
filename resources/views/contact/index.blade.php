@extends('layouts.main')
@section('content')
    <div class="page-banner-brd" style="background-image: url({{ asset('data/2.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="inner-brd-text text-center">
                        <h1>Contact Us</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <span class="banner-frame-one"></span>
        <span class="banner-frame-two"></span>
        <span class="banner-frame-three"></span>
        <span class="banner-frame-four"></span>
        <div class="shape-top-left" data-aos="fade-right" data-aos-delay="500"></div>
        <div class="shape-bottom-right" data-aos="fade-left" data-aos-anchor-placement="top-bottom" data-aos-delay="1500">
        </div>
    </div>

    <div class="contact-us-pg px-120" style="padding-bottom: 20px">
        <div class="container">
            <div class="row g-0">
                <div class="col-12">
                    <div class="inner-contact-pg">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="left-content-con-pg">
                                    <div class="sec-title">
                                        <h1>Contact With Us</h1>
                                        <p>Send us a message and we' ll respond as soon as possible</p>
                                    </div>

                                    <form class="cons-contact-form" method="post" action="{{ route('contact.store') }}"
                                        autocomplete="off" id="create-form">
                                        @csrf
                                        <div class="row">

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group mb-3">
                                                    <input name="name" type="text" required class="form-control"
                                                        placeholder="Name">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group mb-3">
                                                    <input name="email" type="text" class="form-control" required
                                                        placeholder="Email">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group mb-3">
                                                    <input name="phone" type="text" class="form-control" required
                                                        placeholder="Phone">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group mb-3">
                                                    <input name="subject" type="text" class="form-control" required
                                                        placeholder="Subject">
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <textarea name="message" class="form-control" rows="3" placeholder="Message"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <button type="submit" class="btn btn-default">Send Message</button>
                                            </div>

                                        </div>
                                    </form>

                                </div>
                            </div>


                            <div class="col-lg-6">
                                <div class="right-content-contact-pg">
                                    <div class="tt">
                                        <h1>Need Any Help?</h1>
                                        <p>Call us or message and we' ll respond as soon as possible</p>
                                    </div>
                                    <div class="row gy-4">
                                        <div class="col-md-6">
                                            <div class="single-con-dts">
                                                <div class="icon"><i class='bx bxs-phone'></i></div>
                                                <h2>Phone</h2>
                                                <a href="tel:98473847383">+(323) 9847 3847 383</a>
                                                <a href="tel:5466546744">+(434) 5466 5467 44</a>
                                            </div>
                                            <!--/.single-con-dts-->
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-con-dts">
                                                <div class="icon"><i class='bx bxs-envelope'></i></div>
                                                <h2>Email</h2>
                                                <a href="mailto:infoyour@email.com">infoyour@email.com</a>
                                                <a href="mailto:domaininfo@email.com">domaininfo@email.com</a>
                                            </div>
                                            <!--/.single-con-dts-->
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single-con-dts">
                                                <div class="icon"><i class='bx bxs-map'></i></div>
                                                <h2>Head Office</h2>
                                                <address>
                                                    No. 1543, Pyi Htaung Su Main Road, 46 Quarter, North Dagon, Yangon
                                                </address>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="single-con-dts">
                                                <div class="icon"><i class='bx bxs-map'></i></div>
                                                <h2>MYAWADDY</h2>
                                                <address>
                                                    Kyauk Lone Gyi Phayar Road, No. (4) Quarter, Myawaddy, Myanmar
                                                </address>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-sm-12 mb-4" style="padding: 10px;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15269.436451462236!2d96.187575!3d16.907569!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c193d6d372453f%3A0xb753e126cf666974!2sYun%20Nadi%20Oo!5e0!3m2!1sen!2smm!4v1688485222344!5m2!1sen!2smm"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>


                <div class="col-md-6 col-lg-6 col-sm-12 mb-4" style="padding: 10px;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15288.179156499937!2d98.503814!3d16.674642!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30dd9ff271d538d5%3A0x27edb5fbb384fe05!2sYun%20Nadi%20Oo%20Co.%2CLtd.!5e0!3m2!1sen!2smm!4v1688485264546!5m2!1sen!2smm"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>


                <div class="promo-text-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="inner-promo-txt">
                                    <div class="d-md-flex justify-content-between align-items-center">
                                        <div class="sec-title">
                                            <h3 class="text-white">
                                                <img src="{{ asset('assets/img/icons/title-icon-infinity.svg') }}"
                                                    alt="">
                                                Interested in discussing?
                                            </h3>
                                            <h2 class="text-white tag2">
                                                IF YOU HAVE ANY QUESTIONS, COMMENTS, <br> WE'RE HERE TO HELP.
                                            </h2>
                                        </div>
                                        <div class="btn-area">
                                            <a href="tel:+95-9-778944665" class="btn btn-default">
                                                Call Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.container-->
                    <span class="banner-frame-one"></span>
                    <span class="banner-frame-two"></span>
                    <span class="banner-frame-three"></span>
                    <span class="banner-frame-four"></span>
                    <div class="shape-top-left" data-aos="fade-down" data-aos-delay="500"></div>
                    <div class="shape-bottom-right" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-delay="1000">
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreContact', '#create-form') !!}
@endsection
