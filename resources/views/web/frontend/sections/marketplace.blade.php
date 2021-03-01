@extends('web.frontend.layouts.master')
@section('content')
    <!--Breadcrumb area start-->
    <section class="etl-breadcrumb-area-start">
        <h3>MarketPlace Related</h3>
        <div class="etl-breadcrumb-tab">
            <a href="index.php">Home</a> <span> / Marketplace Related</span>
        </div>
    </section>
    <!--Breadcrumb area end-->

    <!-- MarketPlace area start-->
    <section class="etl-feedback-area-start space">
        <div class="container">
            <div class="row">
                <!--Single marketplace area start-->
                <div class="col-md-12">
                    <div class="etl-single-marketplace">
                        <div class="etl-marketplace-left">
                            <img src="{{ asset('frontend/images/marketplace/fiverr.png') }}" alt="fiverr">
                            <h5>Fiverr</h5>
                        </div>
                        <div class="etl-marketplace-right">
                            <h2>Fiverr Market Place related topic title</h2>
                            <p>Odit labore dignissimos quia corporis, inventore mollitia, similique ea voluptas, odio
                                eligendi ducimus aliquam quam, nulla explicabo blanditiis in facere nemo? Dicta.</p>
                            <button class="js-modal-btn" data-video-id="7TUOI23spt0"><i class="fal fa-play"></i> Play
                                Now</button>
                        </div>
                    </div>
                </div>
                <!--Single marketplace area end-->
                <!--Single marketplace area start-->
                <div class="col-md-12">
                    <div class="etl-single-marketplace">
                        <div class="etl-marketplace-left">
                            <img src="{{ asset('frontend/images/marketplace/upwork.jpg') }}" alt="Upwork">
                            <h5>Upwork</h5>
                        </div>
                        <div class="etl-marketplace-right">
                            <h2>Upwork Market Place related topic title</h2>
                            <p>Odit labore dignissimos quia corporis, inventore mollitia, similique ea voluptas, odio
                                eligendi ducimus aliquam quam, nulla explicabo blanditiis in facere nemo? Dicta.</p>
                            <button class="js-modal-btn" data-video-id="7TUOI23spt0"><i class="fal fa-play"></i> Play
                                Now</button>
                        </div>
                    </div>
                </div>
                <!--Single marketplace area end-->
                <!--Single marketplace area start-->
                <div class="col-md-12">
                    <div class="etl-single-marketplace">
                        <div class="etl-marketplace-left">
                            <img src="{{ asset('frontend/images/marketplace/freelancer.png') }}" alt="freelancer">
                            <h5>Freelancer</h5>
                        </div>
                        <div class="etl-marketplace-right">
                            <h2>Freelancer Market Place related topic title</h2>
                            <p>Odit labore dignissimos quia corporis, inventore mollitia, similique ea voluptas, odio
                                eligendi ducimus aliquam quam, nulla explicabo blanditiis in facere nemo? Dicta.</p>
                            <button class="js-modal-btn" data-video-id="7TUOI23spt0"><i class="fal fa-play"></i> Play
                                Now</button>
                        </div>
                    </div>
                </div>
                <!--Single marketplace area end-->

                <!--Single marketplace area start-->
                <div class="col-md-12">
                    <div class="etl-single-marketplace">
                        <div class="etl-marketplace-left">
                            <img src="{{ asset('frontend/images/marketplace/peopleperhour.png') }}" alt="PeoplePerHour">
                            <h5>PeoplePerHour</h5>
                        </div>
                        <div class="etl-marketplace-right">
                            <h2>PeoplePerHour Market Place related topic title</h2>
                            <p>Odit labore dignissimos quia corporis, inventore mollitia, similique ea voluptas, odio
                                eligendi ducimus aliquam quam, nulla explicabo blanditiis in facere nemo? Dicta.</p>
                            <button class="js-modal-btn" data-video-id="7TUOI23spt0"><i class="fal fa-play"></i> Play
                                Now</button>
                        </div>
                    </div>
                </div>
                <!--Single marketplace area end-->
            </div>
        </div>
    </section>
    <!-- MarketPlace area end-->
@endsection
