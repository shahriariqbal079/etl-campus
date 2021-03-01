@extends('web.frontend.layouts.master')
@section('content')
    <!--Breadcrumb area start-->
    <section class="etl-breadcrumb-area-start">
        <h3>Student Feedback</h3>
        <div class="etl-breadcrumb-tab">
            <a href="index.php">Home</a> <span> / Student Feedback</span>
        </div>
    </section>
    <!--Breadcrumb area end-->

    <!--Student feedback area start-->
    <section class="etl-feedback-area-start space">
        <div class="container">
            <div class="row">
                <!--Single feedback area start-->
                <h2>Student feedback comes from social media via WordPress Media Plugin </h2>
                <div class="col-md-4">
                    <div class="etl-single-feedback">

                    </div>
                </div>
                <!--Single feedback area end-->
            </div>
        </div>
    </section>
    <!--Student feedback area end-->
@endsection
