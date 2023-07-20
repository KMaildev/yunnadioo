@extends('layouts.main')
@section('content')
    <div class="page-banner-brd" style="background-image: url({{ asset('data/2.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="inner-brd-text text-center">
                        <h1>
                            Apply for your job!
                        </h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Submit CV</li>
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

    <div class="our-services-sec py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-xl-4">
                    <iframe width="100%" height="300" src="https://www.youtube.com/embed/TXNAcbAOq48"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>


                <div class="col-md-4 col-lg-4 col-xl-4">
                    <iframe width="100%" height="300" src="https://www.youtube.com/embed/zo1e7XUWkME"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>

                <div class="col-md-4 col-lg-4 col-xl-4">
                    <iframe width="100%" height="300" src="https://www.youtube.com/embed/6llQB4p9NT4"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>


    <section class="about-ortency-v1 px-120">
        <div class="container">
            <div class="row gy-5 align-items-center">


                <div class="col-md-6">
                    <div class="left-images-about">
                        <form autocomplete="off" method="POST" action="{{ route('cv.store') }}"
                            enctype="multipart/form-data" id="create-form" novalidate="novalidate">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Name*</label>
                                        <input type="text" name="name" class="form-control " value="">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone" class="form-control " value="">
                                    </div>
                                </div>

                                <div class="col-lg-12 py-3">
                                    <div class="form-group">
                                        <label>Additional Note</label>
                                        <textarea class="form-control" rows="5" name="additional_note"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12 py-3">
                                    <div class="form-group">
                                        <label for="img" style="color: black">
                                            Select your CV to upload
                                        </label>
                                        <br>
                                        <input type="file" name="attachment_file" accept=".doc, .docx, .pdf"
                                            class="form-control-file" required>
                                    </div>
                                </div>

                                <div class="col-md-12 py-3">
                                    <button type="submit" class="btn btn-default">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="right-content-about">
                        <div class="sec-title">
                            <h3>
                                <img src="{{ asset('assets/img/icons/title-icon.svg') }}" alt="">
                                Apply for your job!
                            </h3>
                            <h2 class="tag1">
                                Submit CV
                            </h2>
                        </div>
                        <p style="text-align: justify">
                            <span style="color: black; font-weight: bold">
                                Expertise and Experience:
                            </span> We have a team of experienced professionals who specialize in
                            recruitment and talent acquisition. Our expertise allows us to understand the
                            intricacies of various industries and job markets, enabling us to find the best
                            candidates for your organization.
                        </p>

                        <p style="text-align: justify">
                            <span style="color: black; font-weight: bold">
                                Time and Cost Savings:
                            </span>
                            Recruiting and hiring can be time-consuming and expensive. As an
                            employment agency, we handle the entire process for you, from sourcing candidates to
                            conducting initial screenings and interviews. This saves you valuable time and resources
                            that can be better utilized for other core business activities.
                        </p>

                        <p style="text-align: justify">
                            <span style="color: black; font-weight: bold">
                                Ongoing Support:
                            </span>
                            Our relationship with you does not end once a candidate is hired. We
                            provide ongoing support to ensure a smooth transition and integration for the new
                            employee. Additionally, we offer post-placement follow-ups to address any concerns or
                            issues that may arise.
                        </p>
                    </div>
                    <!--/.right-content-about-->
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreCv', '#create-form') !!}
@endsection
