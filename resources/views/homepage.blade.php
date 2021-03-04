@extends('web.frontend.layouts.master')
@section('content')
    <!--Slider area start-->
    <section class="etl-main-slider-area-start owl-carousel owl-theme">
        <!--Single slider area start-->
        <div class="etl-single-slider-area-start"
            style="background: url({{ asset('frontend/images/mainSliders/slider2.jpeg') }}) no-repeat scroll center center / cover">
            <div class="etl-single-slider-content">
                <p><i class="fal fa-users"></i> <span class="counter">25000</span> <span>+</span></p>
                <h1>Students are successfully working as <span>Freelancer</span></h1>
            </div>
        </div>
        <!--Single slider area end-->

        <!--Single slider area start-->
        <div class="etl-single-slider-area-start"
            style="background: url({{ asset('frontend/images/mainSliders/slider3.png') }}) no-repeat scroll center center / cover">
            <div class="etl-single-slider-content">
                <p><i class="fal fa-users"></i> <span class="counter">25000</span> <span>+</span></p>
                <h1>Students are successfully working as <span>Freelancer</span></h1>
            </div>
        </div>
        <!--Single slider area end-->

        <!--Single slider area start-->
        <div class="etl-single-slider-area-start"
            style="background: url({{ asset('frontend/images/mainSliders/slider1.jpg') }}) no-repeat scroll center center / cover">
            <div class="etl-single-slider-content">
                <p><i class="fal fa-users"></i> <span class="counter">25000</span> <span>+</span></p>
                <h1>Students are successfully working as <span>Freelancer</span></h1>
            </div>
        </div>
        <!--Single slider area end-->
    </section>
    <!--Slider area end-->

    <!--Service items area start-->
    <section class="etl-service-items-area-start">
        <div class="container">
            <div class="row">
                <!--Single service item area start-->
                <div class="col-md-3">
                    <div class="etl-single-service-item-area text-center mouse-move">
                        <i class="fal fa-desktop"></i>
                        <h5>Web Development</h5>
                        <span>( Courses 4 )</span>
                    </div>
                </div>
                <!--Single service item area end-->

                <!--Single service item area start-->
                <div class="col-md-3">
                    <div class="etl-single-service-item-area text-center mouse-move">
                        <i class="fal fa-layer-group"></i>
                        <h5>Web Designer</h5>
                        <span>( Cousers 10 )</span>
                    </div>
                </div>
                <!--Single service item area end-->

                <!--Single service item area start-->
                <div class="col-md-3">
                    <div class="etl-single-service-item-area text-center mouse-move">
                        <i class="fal fa-bullseye-arrow"></i>
                        <h5>Marketing</h5>
                        <span>( Courses 30 )</span>
                    </div>
                </div>
                <!--Single service item area end-->

                <!--Single service item area start-->
                <div class="col-md-3">
                    <div class="etl-single-service-item-area text-center mouse-move">
                        <i class="fal fa-rocket-launch"></i>
                        <h5> Art &amp; Design</h5>
                        <span>( Courses 20 )</span>
                    </div>
                </div>
                <!--Single service item area end-->
            </div>
        </div>
    </section>
    <!--Service items area end-->


    <!--Course area start-->
    <section class="etl-course-area-start space">
        <div class="container">
            <div class="row">
                <!--Project title area start-->
                <div class="col-md-12">
                    <!--Project title area start-->
                    <div class="etl-project-title">
                        <span>Our courses</span>
                        <h2>Courses</h2>
                        <p>Porro nesciunt quis assumenda cumque quisquam eaque sed expedita qui aliquam?</p>
                    </div>
                    <!--Project title area end-->
                </div>
                <!--Project title area end-->

                <!--Single course area start-->

                @if ($courses)
                @foreach ($courses as $course)
                <div class="col-md-3">
                    <div class="etl-single-course-content">
                        <div class="etl-course-image">
                            <a href="javascript:void(0)"><img
                                    src="{{ $course->image ? asset("uploads/images/course/$course->image") : asset('frontend/images/mainSliders/slider2.jpeg') }}" alt="Web Design"></a>
                        </div>
                        <div class="etl-course-body">
                            <a href="javascript:void(0)" class="etl-course-title">{{$course->name}}</a>
                            <p>{{$course->description}}</p>
                            <a href="javascript:void(0)" class="learn-btn">Learn More</a>

                            <div class="etl-course-name-top">
                                <span>Admission Going</span>
                                <span>Fee</span>
                            </div>
                            <div class="etl-course-body-top">
                                <span>{{ date('d/m/Y', strtotime($course->start)) }} - {{ date('d/m/Y', strtotime($course->close)) }}</span>
                                <span>{{$course->fee}}Tk.</span>
                            </div>
                        </div>
                        <div class="etl-course-footer">
                            <span>Total hours: {{$course->duration}}</span>
                            <a href="javascript:void(0)">Enroll Now</a>
                        </div>
                    </div>
                </div>
                @endforeach
                    
                @endif
                
                <!--Single course area end-->

                {{-- <!--Single course area start-->
                <div class="col-md-3">
                    <div class="etl-single-course-content">
                        <div class="etl-course-image">
                            <a href="javascript:void(0)"><img src="{{ asset('frontend/images/mainSliders/slider3.png') }}"
                                    alt="Web Design"></a>
                        </div>
                        <div class="etl-course-body">
                            <a href="javascript:void(0)" class="etl-course-title">Website Development</a>
                            <p>Earum dicta consequuntur neque necessitatibus delectus a repellendus reprehenderit alias!</p>
                            <a href="javascript:void(0)" class="learn-btn">Learn More</a>

                            <div class="etl-course-name-top">
                                <span>Admission Going</span>
                                <span>Fee</span>
                            </div>
                            <div class="etl-course-body-top">
                                <span>Feb 2, 2021 - Mar 10, 2021</span>
                                <span>12000Tk.</span>
                            </div>
                        </div>
                        <div class="etl-course-footer">
                            <span>Total hours: 50</span>
                            <a href="javascript:void(0)">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <!--Single course area end-->

                <!--Single course area start-->
                <div class="col-md-3">
                    <div class="etl-single-course-content">
                        <div class="etl-course-image">
                            <a href="javascript:void(0)"><img src="{{ asset('frontend/images/mainSliders/slider1.jpg') }}"
                                    alt="Web Design"></a>
                        </div>
                        <div class="etl-course-body">
                            <a href="javascript:void(0)" class="etl-course-title">Graphics Design</a>
                            <p>Earum dicta consequuntur neque necessitatibus delectus a repellendus reprehenderit alias!</p>
                            <a href="javascript:void(0)" class="learn-btn">Learn More</a>

                            <div class="etl-course-name-top">
                                <span>Admission Going</span>
                                <span>Fee</span>
                            </div>
                            <div class="etl-course-body-top">
                                <span>Feb 2, 2021 - Mar 10, 2021</span>
                                <span>12000Tk.</span>
                            </div>
                        </div>
                        <div class="etl-course-footer">
                            <span>Total hours: 50</span>
                            <a href="javascript:void(0)">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <!--Single course area end-->

                <!--Single course area start-->
                <div class="col-md-3">
                    <div class="etl-single-course-content">
                        <div class="etl-course-image">
                            <a href="javascript:void(0)"><img src="{{ asset('frontend/images/mainSliders/slider3.png') }}"
                                    alt="Web Design"></a>
                        </div>
                        <div class="etl-course-body">
                            <a href="javascript:void(0)" class="etl-course-title">Graphics Motion</a>
                            <p>Earum dicta consequuntur neque necessitatibus delectus a repellendus reprehenderit alias!</p>
                            <a href="javascript:void(0)" class="learn-btn">Learn More</a>

                            <div class="etl-course-name-top">
                                <span>Admission Going</span>
                                <span>Fee</span>
                            </div>
                            <div class="etl-course-body-top">
                                <span>Feb 2, 2021 - Mar 10, 2021</span>
                                <span>12000Tk.</span>
                            </div>
                        </div>
                        <div class="etl-course-footer">
                            <span>Total hours: 50</span>
                            <a href="javascript:void(0)">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <!--Single course area end-->

                <!--Single course area start-->
                <div class="col-md-3">
                    <div class="etl-single-course-content">
                        <div class="etl-course-image">
                            <a href="javascript:void(0)"><img
                                    src="{{ asset('frontend/images/mainSliders/slider2.jpeg') }}" alt="Web Design"></a>
                        </div>
                        <div class="etl-course-body">
                            <a href="javascript:void(0)" class="etl-course-title">Interior Design</a>
                            <p>Earum dicta consequuntur neque necessitatibus delectus a repellendus reprehenderit alias!</p>
                            <a href="javascript:void(0)" class="learn-btn">Learn More</a>

                            <div class="etl-course-name-top">
                                <span>Admission Going</span>
                                <span>Fee</span>
                            </div>
                            <div class="etl-course-body-top">
                                <span>Feb 2, 2021 - Mar 10, 2021</span>
                                <span>12000Tk.</span>
                            </div>
                        </div>
                        <div class="etl-course-footer">
                            <span>Total hours: 50</span>
                            <a href="javascript:void(0)">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <!--Single course area end-->

                <!--Single course area start-->
                <div class="col-md-3">
                    <div class="etl-single-course-content">
                        <div class="etl-course-image">
                            <a href="javascript:void(0)"><img src="{{ asset('frontend/images/mainSliders/slider1.jpg') }}"
                                    alt="Web Design"></a>
                        </div>
                        <div class="etl-course-body">
                            <a href="javascript:void(0)" class="etl-course-title">Laravel Application</a>
                            <p>Earum dicta consequuntur neque necessitatibus delectus a repellendus reprehenderit alias!</p>
                            <a href="javascript:void(0)" class="learn-btn">Learn More</a>

                            <div class="etl-course-name-top">
                                <span>Admission Going</span>
                                <span>Fee</span>
                            </div>
                            <div class="etl-course-body-top">
                                <span>Feb 2, 2021 - Mar 10, 2021</span>
                                <span>12000Tk.</span>
                            </div>
                        </div>
                        <div class="etl-course-footer">
                            <span>Total hours: 50</span>
                            <a href="javascript:void(0)">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <!--Single course area end-->

                <!--Single course area start-->
                <div class="col-md-3">
                    <div class="etl-single-course-content">
                        <div class="etl-course-image">
                            <a href="javascript:void(0)"><img
                                    src="{{ asset('frontend/images/mainSliders/slider2.jpeg') }}" alt="Web Design"></a>
                        </div>
                        <div class="etl-course-body">
                            <a href="javascript:void(0)" class="etl-course-title">Programming</a>
                            <p>Earum dicta consequuntur neque necessitatibus delectus a repellendus reprehenderit alias!</p>
                            <a href="javascript:void(0)" class="learn-btn">Learn More</a>

                            <div class="etl-course-name-top">
                                <span>Admission Going</span>
                                <span>Fee</span>
                            </div>
                            <div class="etl-course-body-top">
                                <span>Feb 2, 2021 - Mar 10, 2021</span>
                                <span>12000Tk.</span>
                            </div>
                        </div>
                        <div class="etl-course-footer">
                            <span>Total hours: 50</span>
                            <a href="javascript:void(0)">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <!--Single course area end-->

                <!--Single course area start-->
                <div class="col-md-3">
                    <div class="etl-single-course-content">
                        <div class="etl-course-image">
                            <a href="javascript:void(0)"><img
                                    src="{{ asset('frontend/images/mainSliders/slider3.png') }}" alt="Web Design"></a>
                        </div>
                        <div class="etl-course-body">
                            <a href="javascript:void(0)" class="etl-course-title">ITC</a>
                            <p>Earum dicta consequuntur neque necessitatibus delectus a repellendus reprehenderit alias!</p>
                            <a href="javascript:void(0)" class="learn-btn">Learn More</a>

                            <div class="etl-course-name-top">
                                <span>Admission Going</span>
                                <span>Fee</span>
                            </div>
                            <div class="etl-course-body-top">
                                <span>Feb 2, 2021 - Mar 10, 2021</span>
                                <span>12000Tk.</span>
                            </div>
                        </div>
                        <div class="etl-course-footer">
                            <span>Total hours: 50</span>
                            <a href="javascript:void(0)">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <!--Single course area end--> --}}
            </div>
        </div>
    </section>
    <!--Course area end-->


    <!--Seminar area start-->
    <section class="etl-seminar-area-start space df-bg">
        <div class="container">
            <div class="row">

                <!--Seminar left tab start-->
                <div class="col-md-4">
                    <!--Project title area start-->
                    <div class="etl-project-title">
                        <span>Upcomming...</span>
                        <h2>Courses / Workshops</h2>
                        <p>Porro nesciunt quis assumenda cumque quisquam eaque sed expedita qui aliquam?</p>
                    </div>
                    <!--Project title area end-->

                    <div class="etl-seminar-left-content">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                                role="tab" aria-controls="v-pills-home" aria-selected="true">Click here to know our
                                upcomming courses</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                                role="tab" aria-controls="v-pills-profile" aria-selected="false">Click here to know our
                                upcomming workshops</a>
                        </div>
                    </div>
                </div>
                <!--Seminar left tab end-->

                <!--Seminar right tab content start-->
                <div class="col-md-8">
                    <div class="etl-seminar-tab-content">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <div class="etl-seminar-table table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead class="bg-dark text-light">
                                            <tr>
                                                <th>Course Name</th>
                                                <th>Admission Start</th>
                                                <th>Admission Closed</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Web Design &amp; Develoment</td>
                                                <td>05 Feb, 2021 ( Friday )</td>
                                                <td>05 March, 2021 ( Sunday )</td>
                                                <td><a href="javascript:void(0)">Apply</a></td>
                                            </tr>
                                            <tr>
                                                <td>Graphics Design &amp; Motion graphics</td>
                                                <td>06 Feb, 2021 ( Saturday )</td>
                                                <td>07 March, 2021 ( Tuesday )</td>
                                                <td><a href="javascript:void(0)">Apply</a></td>
                                            </tr>
                                            <tr>
                                                <td>Online Marketplace</td>
                                                <td>09 Feb, 2021 ( Sunday )</td>
                                                <td>09 March, 2021 ( Friday )</td>
                                                <td><a href="javascript:void(0)">Apply</a></td>
                                            </tr>
                                            <tr>
                                                <td>Marketplace Account Approvement</td>
                                                <td>08 Feb, 2021 ( Monday )</td>
                                                <td>08 March, 2021 ( Monday )</td>
                                                <td><a href="javascript:void(0)">Apply</a></td>
                                            </tr>
                                            <tr>
                                                <td>Spoken English</td>
                                                <td>09 Feb, 2021 ( Tuesday )</td>
                                                <td>09 March, 2021 ( Tuesday )</td>
                                                <td><a href="javascript:void(0)">Apply</a></td>
                                            </tr>
                                            <tr>
                                                <td>Freelancing career</td>
                                                <td>10 Feb, 2021 ( Wednesday )</td>
                                                <td>10 March, 2021 ( Wednesday )</td>
                                                <td><a href="javascript:void(0)">Apply</a></td>
                                            </tr>
                                            <tr>
                                                <td>Interior Design</td>
                                                <td>20 Feb, 2021 ( Monday )</td>
                                                <td>20 March, 2021 ( Monday )</td>
                                                <td><a href="javascript:void(0)">Apply</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                <div class="etl-seminar-table table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead class="bg-dark text-light">
                                            <tr>
                                                <th>Workshop Name</th>
                                                <th>Workshop Date</th>
                                                <th>Time</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Spoken English</td>
                                                <td>09 March, 2021 ( Tuesday )</td>
                                                <td>21.00</td>
                                                <td><a href="javascript:void(0)">Join</a></td>
                                            </tr>
                                            <tr>
                                                <td>Web Design &amp; Develoment</td>
                                                <td>05 March, 2021 ( Friday )</td>
                                                <td>18.00</td>
                                                <td><a href="javascript:void(0)">Join</a></td>
                                            </tr>
                                            <tr>
                                                <td>Online Marketplace</td>
                                                <td>07 March, 2021 ( Sunday )</td>
                                                <td>14.00</td>
                                                <td><a href="javascript:void(0)">Join</a></td>
                                            </tr>
                                            <tr>
                                                <td>Marketplace Account Approvement</td>
                                                <td>08 March, 2021 ( Monday )</td>
                                                <td>20.00</td>
                                                <td><a href="javascript:void(0)">Join</a></td>
                                            </tr>
                                            <tr>
                                                <td>Graphics Design &amp; Motion graphics</td>
                                                <td>06 March, 2021 ( Saturday )</td>
                                                <td>16.00</td>
                                                <td><a href="javascript:void(0)">Join</a></td>
                                            </tr>
                                            <tr>
                                                <td>Freelancing career</td>
                                                <td>10 March, 2021 ( Wednesday )</td>
                                                <td>11.00</td>
                                                <td><a href="javascript:void(0)">Join</a></td>
                                            </tr>
                                            <tr>
                                                <td>Interior Design</td>
                                                <td>20 March, 2021 ( Monday )</td>
                                                <td>18.00</td>
                                                <td><a href="javascript:void(0)">Join</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Seminar right tab content end-->

            </div>
        </div>
    </section>
    <!--Seminar area end-->




    <!--Services area start-->
    <section class="etl-service-area-start space">
        <div class="container">
            <div class="row">
                <!--Service area left start-->
                <div class="col-md-6">
                    <div class="etl-service-area-left-content">
                        <span>our facilities</span>
                        <h2>Learn new skills to go ahead for your career</h2>
                        <p>Ducimus provident eum doloremque molestiae voluptatibus ab, laborum sunt, saepe dolore vero omnis
                            quod commodi. Magni totam magnam esse assumenda! Similique error nam, quod magnam eum rem
                            expedita doloremque sed possimus ullam corrupti nulla eos eligendi recusandae suscipit quibusdam
                            fugiat repudiandae. Corrupti?</p>
                        <a href="javascript:void(0)" class="df-btn">learn more <i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <!--Service area left end-->

                <!--Service area right start-->
                <div class="col-md-6">
                    <div class="row">
                        <!--Single service content start-->
                        <div class="col-md-4">
                            <div class="etl-single-service-content text-center">
                                <i class="fal fa-user-graduate"></i>
                                <h5>Expert teachers</h5>
                            </div>
                        </div>
                        <!--Single service content end-->

                        <!--Single service content start-->
                        <div class="col-md-4">
                            <div class="etl-single-service-content text-center">
                                <i class="fal fa-newspaper"></i>
                                <h5>Quality Education</h5>
                            </div>
                        </div>
                        <!--Single service content end-->

                        <!--Single service content start-->
                        <div class="col-md-4">
                            <div class="etl-single-service-content text-center">
                                <i class="fal fa-headset"></i>
                                <h5>24/7 Live support</h5>
                            </div>
                        </div>
                        <!--Single service content end-->

                        <!--Single service content start-->
                        <div class="col-md-4">
                            <div class="etl-single-service-content text-center">
                                <i class="fal fa-user-headset"></i>
                                <h5>Lifetime Support</h5>
                            </div>
                        </div>
                        <!--Single service content end-->

                        <!--Single service content start-->
                        <div class="col-md-4">
                            <div class="etl-single-service-content text-center">
                                <i class="fal fa-browser"></i>
                                <h5>Full Class Video</h5>
                            </div>
                        </div>
                        <!--Single service content end-->

                        <!--Single service content start-->
                        <div class="col-md-4">
                            <div class="etl-single-service-content text-center">
                                <i class="fal fa-users-class"></i>
                                <h5>Review Classes</h5>
                            </div>
                        </div>
                        <!--Single service content end-->

                        <!--Single service content start-->
                        <div class="col-md-4">
                            <div class="etl-single-service-content text-center">
                                <i class="fal fa-tasks-alt"></i>
                                <h5>Online Live Projects</h5>
                            </div>
                        </div>
                        <!--Single service content end-->

                        <!--Single service content start-->
                        <div class="col-md-4">
                            <div class="etl-single-service-content text-center">
                                <i class="fal fa-envelope-open-text"></i>
                                <h5>Job Placement</h5>
                            </div>
                        </div>
                        <!--Single service content end-->

                        <!--Single service content start-->
                        <div class="col-md-4">
                            <div class="etl-single-service-content text-center">
                                <i class="fab fa-wordpress-simple"></i>
                                <h5>Marketplace Account</h5>
                            </div>
                        </div>
                        <!--Single service content end-->
                    </div>
                </div>
                <!--Service area right end-->
            </div>
        </div>
    </section>
    <!--Services area end-->


    <!--Leader area start-->
    <section class="etl-leader-area-start space">
        <div class="container">
            <div class="row">
                <!--Leader area left content start-->
                <div class="col-md-6">
                    <div class="etl-leader-area-left-content">
                        <img src="assets/images/portfolios/boss.png" alt="boss">
                        <span class="online"></span>
                    </div>
                </div>
                <!--Leader area left content end-->

                <!--Leader area right content start-->
                <div class="col-md-6">
                    <div class="etl-leader-area-right-content">
                        <!--Project title area start-->
                        <div class="etl-project-title">
                            <span>Our Leader</span>
                            <h2>EZZETECH LTD.</h2>
                            <p>Dolorem blanditiis rem eligendi voluptatum cum iusto enim nesciunt quis.</p>
                        </div>
                        <!--Project title area end-->

                        <p>Nobis nemo, odit suscipit aspernatur doloribus quidem minima repellendus neque similique
                            dignissimos facilis praesentium, sit omnis culpa at! Ex ratione dolorem enim necessitatibus
                            accusamus vero aut ipsum sapiente in porro, eos sed quia quasi officia autem illum quidem illo
                            minima modi consequatur.</p>
                        <p>Similique maxime, officiis eos repudiandae voluptates quae nesciunt quisquam excepturi iusto,
                            nisi eveniet ullam nam dolore, libero, aspernatur incidunt fugiat ipsum laboriosam.</p>
                        <p>Ratione perferendis quam, iste doloremque reprehenderit voluptatem nobis, maxime quasi ipsam
                            voluptatum debitis error. Animi repudiandae aperiam laboriosam dolorum vero optio ullam!</p>
                        <a href="javascript:void(0)" class="df-btn">learn more <i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <!--Leader area right content end-->
            </div>
        </div>
    </section>
    <!--Leader area end-->

    <!--Counter area start-->
    <div class="etl-counter-area-start space">
        <div class="container">
            <div class="row">
                <!--Single counter area start-->
                <div class="col-md-3">
                    <div class="etl-single-counter-content">
                        <i class="fal fa-users"></i>
                        <span class="counter">150</span> <span>&plus;</span>
                        <h5>Expert Instructors</h5>
                    </div>
                </div>
                <!--Single counter area end-->

                <!--Single counter area start-->
                <div class="col-md-3">
                    <div class="etl-single-counter-content">
                        <i class="fal fa-newspaper"></i>
                        <span class="counter">1050</span> <span>&plus;</span>
                        <h5>Total Courses</h5>
                    </div>
                </div>
                <!--Single counter area end-->

                <!--Single counter area start-->
                <div class="col-md-3">
                    <div class="etl-single-counter-content">
                        <i class="fal fa-heart"></i>
                        <span class="counter">25000</span> <span>&plus;</span>
                        <h5>Happy Students</h5>
                    </div>
                </div>
                <!--Single counter area end-->

                <!--Single counter area start-->
                <div class="col-md-3">
                    <div class="etl-single-counter-content">
                        <i class="fal fa-users-class"></i>
                        <span class="counter">150</span> <span>&plus;</span>
                        <h5>Seminars / Workshops</h5>
                    </div>
                </div>
                <!--Single counter area end-->
            </div>
        </div>
    </div>
    <!--Counter area end-->


    <!--Who we are area start-->
    <section class="etl-weare-area-start space">
        <div class="container">
            <div class="row">
                <!--wearea left content start-->
                <div class="col-md-4">
                    <div class="etl-weare-left-content">
                        <!--Project title area start-->
                        <div class="etl-project-title">
                            <span>EZZE TECHNOLOGY LTD.</span>
                            <h2>Who we are ?</h2>
                            <p>Porro nesciunt quis assumenda cumque quisquam eaque sed expedita qui aliquam?</p>
                        </div>
                        <!--Project title area end-->

                        <div class="etl-seminar-left-content">
                            <div class="nav flex-column nav-pills" id="v-pills-tabs" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-work-tab" data-toggle="pill" href="#v-pills-work"
                                    role="tab" aria-controls="v-pills-work" aria-selected="true">EZZE TECHNOLOGY LTD.
                                    Working with ( Clients )</a>
                                <a class="nav-link" id="v-pills-member-tab" data-toggle="pill" href="#v-pills-member"
                                    role="tab" aria-controls="v-pills-member" aria-selected="false">EZZE TECHNOLOGY LTD.
                                    Members of ( Partners )</a>
                                <a class="nav-link" id="v-pills-concern-tab" data-toggle="pill" href="#v-pills-concern"
                                    role="tab" aria-controls="v-pills-concern" aria-selected="false">EZZE TECHNOLOGY LTD.
                                    Concerns of ( Brands )</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--wearea left content end-->

                <!--Weare right content start-->
                <div class="col-md-8">
                    <div class="etl-weare-right-content">
                        <div class="tab-content" id="v-pills-tabContents">
                            <!--Single tab content start-->
                            <div class="tab-pane fade show active" id="v-pills-work" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <div class="etl-weare-right-tab-content">
                                    <a href="javascript:void(0)"><img src="{{ asset('frontend/images/clients/2.png') }}"
                                            alt="clients"></a>
                                    <a href="javascript:void(0)"><img src="{{ asset('frontend/images/clients/1.png') }}"
                                            alt="clients"></a>
                                    <a href="javascript:void(0)"><img src="{{ asset('frontend/images/clients/3.png') }}"
                                            alt="clients"></a>
                                    <a href="javascript:void(0)"><img src="{{ asset('frontend/images/clients/4.png') }}"
                                            alt="clients"></a>
                                    <a href="javascript:void(0)"><img src="{{ asset('frontend/images/clients/5.png') }}"
                                            alt="clients"></a>
                                    <a href="javascript:void(0)"><img src="{{ asset('frontend/images/clients/6.png') }}"
                                            alt="clients"></a>
                                    <a href="javascript:void(0)"><img src="{{ asset('frontend/images/clients/7.png') }}"
                                            alt="clients"></a>
                                    <a href="javascript:void(0)"><img src="{{ asset('frontend/images/clients/8.png') }}"
                                            alt="clients"></a>
                                    <a href="javascript:void(0)"><img src="{{ asset('frontend/images/clients/9.png') }}"
                                            alt="clients"></a>
                                    <a href="javascript:void(0)"><img src="{{ asset('frontend/images/clients/10.png') }}"
                                            alt="clients"></a>
                                    <a href="javascript:void(0)"><img src="{{ asset('frontend/images/clients/11.png') }}"
                                            alt="clients"></a>
                                    <a href="javascript:void(0)"><img src="{{ asset('frontend/images/clients/12.png') }}"
                                            alt="clients"></a>
                                    <a href="javascript:void(0)"><img src="{{ asset('frontend/images/clients/13.png') }}"
                                            alt="clients"></a>
                                    <a href="javascript:void(0)"><img src="{{ asset('frontend/images/clients/14.png') }}"
                                            alt="clients"></a>
                                    <a href="javascript:void(0)"><img src="{{ asset('frontend/images/clients/15.png') }}"
                                            alt="clients"></a>
                                    <a href="javascript:void(0)"><img src="{{ asset('frontend/images/clients/16.png') }}"
                                            alt="clients"></a>
                                </div>
                            </div>
                            <!--Single tab content end-->

                            <!--Single tab content start-->
                            <div class="tab-pane fade" id="v-pills-member" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <div class="etl-weare-right-tab-content">
                                    <a href="javascript:void(0)"><img src="{{ asset('frontend/images/partners/1.png') }}"
                                            alt="clients"></a>
                                    <a href="javascript:void(0)"><img src="{{ asset('frontend/images/partners/2.png') }}"
                                            alt="clients"></a>
                                    <a href="javascript:void(0)"><img src="{{ asset('frontend/images/partners/3.png') }}"
                                            alt="clients"></a>
                                    <a href="javascript:void(0)"><img src="{{ asset('frontend/images/partners/4.png') }}"
                                            alt="clients"></a>
                                    <a href="javascript:void(0)"><img src="{{ asset('frontend/images/partners/5.png') }}"
                                            alt="clients"></a>
                                    <a href="javascript:void(0)"><img src="{{ asset('frontend/images/partners/6.png') }}"
                                            alt="clients"></a>
                                    <a href="javascript:void(0)"><img src="{{ asset('frontend/images/partners/7.png') }}"
                                            alt="clients"></a>
                                    <a href="javascript:void(0)"><img src="{{ asset('frontend/images/partners/8.png') }}"
                                            alt="clients"></a>
                                    <a href="javascript:void(0)"><img src="{{ asset('frontend/images/partners/9.png') }}"
                                            alt="clients"></a>
                                    <a href="javascript:void(0)"><img
                                            src="{{ asset('frontend/images/partners/10.png') }}" alt="clients"></a>
                                    <a href="javascript:void(0)"><img
                                            src="{{ asset('frontend/images/partners/11.png') }}" alt="clients"></a>
                                    <a href="javascript:void(0)"><img
                                            src="{{ asset('frontend/images/partners/12.png') }}" alt="clients"></a>
                                    <a href="javascript:void(0)"><img
                                            src="{{ asset('frontend/images/partners/13.png') }}" alt="clients"></a>
                                    <a href="javascript:void(0)"><img
                                            src="{{ asset('frontend/images/partners/14.png') }}" alt="clients"></a>
                                    <a href="javascript:void(0)"><img
                                            src="{{ asset('frontend/images/partners/15.png') }}" alt="clients"></a>
                                </div>
                            </div>
                            <!--Single tab content end-->

                            <!--Single tab content start-->
                            <div class="tab-pane fade" id="v-pills-concern" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <div class="etl-weare-right-tab-content">
                                    <a href="javascript:void(0)"><img src="{{ asset('frontend/images/brands/1.png') }}"
                                            alt="clients"></a>
                                    <a href="javascript:void(0)"><img src="{{ asset('frontend/images/brands/2.png') }}"
                                            alt="clients"></a>
                                    <a href="javascript:void(0)"><img src="{{ asset('frontend/images/brands/3.png') }}"
                                            alt="clients"></a>
                                    <a href="javascript:void(0)"><img src="{{ asset('frontend/images/brands/4.png') }}"
                                            alt="clients"></a>
                                </div>
                            </div>
                            <!--Single tab content end-->
                        </div>
                    </div>
                </div>
                <!--Weare right content end-->
            </div>
        </div>
    </section>
    <!--Who we are area end-->

    <!--Contact Area start-->
    <section class="etl-contact-area-start space">
        <div class="container">
            <div class="row">
                <!--Single contact area start-->
                <div class="col-md-6">

                    <!--Project title area start-->
                    <div class="etl-project-title">
                        <span>Consulting area</span>
                        <h2>Contact us</h2>
                        <p>Porro nesciunt quis assumenda cumque quisquam eaque sed expedita qui aliquam?</p>
                    </div>
                    <!--Project title area end-->

                    <div class="etl-single-contact-content">
                        <form action="#" method="POST">
                            <input type="text" name="uname" id="uname" placeholder="Your Name *" autocomplete="off" required
                                class="form-control">
                            <input type="email" name="email" id="email" placeholder="Your Email *" autocomplete="off"
                                required class="form-control">
                            <input type="text" name="phone" id="phone" placeholder="Your Phone Number *" autocomplete="off"
                                required class="form-control">
                            <textarea name="message" id="message" cols="30" rows="4" placeholder="Your Message"
                                class="form-control"></textarea>
                            <button type="submit" class="df-btn"><i class="fal fa-envelope"></i> Send Message</button>
                        </form>
                    </div>
                </div>
                <!--Single contact area end-->

                <!--Single contact area start-->
                <div class="col-md-6">
                    <div class="etl-single-contact-right-content">
                        <img src="assets/images/contact/contact-bg.jpg" alt="contact-bg">
                    </div>
                </div>
                <!--Single contact area end-->
            </div>
        </div>
    </section>
    <!--Contact Area end-->

@endsection
