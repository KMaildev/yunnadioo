@extends('layouts.main')
@section('title', 'Activities')
@section('content')

    <section class="portfolio-sec-pg px-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-title text-center mb-50">
                        <h3><img src="{{ asset('assets/img/icons/title-icon.svg') }}" alt=""> Our Portfolio</h3>
                        <h1>Our Impressive Portfolio</h1>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row g-4">

                        <div class="col-md-6 col-lg-4">
                            <div class="portfolio-inner-sl">
                                <div class="imgs">
                                    <img src="{{ asset('assets/img/home2/portfolio1.jpg') }}" alt="">
                                </div>
                                <div class="hidden-cont">
                                    <div class="d-flex justify-content-between">
                                        <div class="name">
                                            <h3>Monthly Design Magazine </h3>
                                            <p>Print, Books</p>
                                        </div>
                                        <div class="btns">
                                            <a href="portfolio-details.html" class="btn"><i class='bx bx-plus'></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a href="portfolio-details.html" class="go-hidden"><i class='bx bx-plus'></i></a>
                            </div>
                            <!--/.portfolio-inner-sl-->
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
