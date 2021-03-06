@extends('public-layouts.layouts')

@section('title')
All Jobs
@endsection


@section('content')

<!-- Hero Area Start-->
<div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center"
        data-background="{{ asset('public-theme/assets/img/hero/about.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>ALL Job We Have</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End -->
<!-- Job List Area Start -->
<div class="job-listing-area pt-120 pb-120">

    <div class="container">
        {{--        <div class="apply-btn2 m-auto">--}}
        {{--            <a href="\applied" class="btn">Apply Now</a>--}}
        {{--        </div>--}}
        <div class="row">

            <div class="col-xl-9 col-lg-9 col-md-8">
                <!-- Featured_job_start -->

                <section class="featured-job-area">

                    <div class="container">
                        @foreach ($job as $job)
                        <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="{{ route('job.details',$job->id) }}"><img
                                            src="{{asset("uploads/images/$job->job_image")}}" alt=""></a>
                                </div>
                                <div class="job-tittle job-tittle2">
                                    <a href="{{ route('job.details',$job->id) }}">
                                        <h4>{{ $job->job_title }}</h4>
                                    </a>
                                    <ul>
                                        <li>{{ $job->job_company }}</li>
                                        <li><i class="fas fa-map-marker-alt"></i>{{ $job->job_location }}</li>
                                        <li>{{ $job->job_salary }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link items-link2 f-right">
                                {{--                                <a href="job_details.html">Full Time</a>--}}
                                {{--                                 <div class="apply-btn2 m-auto">--}}
                                <a href="{{route('applied',$job->id)}}" class="items-link items-link2">Apply Now</a>
                                {{--                                 </div>--}}
                                {{--                                <span>7 hours ago</span>--}}
                            </div>
                        </div>

                        @endforeach
                    </div>
                </section>
                <!-- Featured_job_end -->
            </div>
        </div>
    </div>
</div>
<!-- Job List Area End -->
<!--Pagination Start  -->
<div class="pagination-area pb-115 text-center">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="single-wrap d-flex justify-content-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-start">
                            <li class="page-item active"><a class="page-link"
                                    href="{{ route('publicjob.all') }}?page=2">01</a></li>
                            <li class="page-item"><a class="page-link" href="{{ route('publicjob.all') }}?page=2">02</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="{{ route('publicjob.all') }}?page=3">03</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#"><span class="ti-angle-right"></span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Pagination End  -->

@endsection
