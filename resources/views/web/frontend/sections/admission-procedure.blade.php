@extends('web.frontend.layouts.master')

@section('content')
    <!--Breadcrumb area start-->
    <section class="etl-breadcrumb-area-start">
        <h3>Admission procedure</h3>
        <div class="etl-breadcrumb-tab">
            <a href="index.php">Home</a> <span> / admission procedure</span>
        </div>
    </section>
    <!--Breadcrumb area end-->

    <!--Admission Procedure area start-->
    <section class="etl-procedure-area-start space">
        <div class="container">
            <div class="row">
                <!--Procedure left tab start-->
                <div class="col-md-4">
                    <div class="etl-about-left-content etl-seminar-left-content">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-online-tab" data-toggle="pill" href="#v-pills-online"
                                role="tab" aria-controls="v-pills-online" aria-selected="true">Online Admission
                                Procedure</a>

                            <a class="nav-link" id="v-pills-offline-tab" data-toggle="pill" href="#v-pills-offline"
                                role="tab" aria-controls="v-pills-offline" aria-selected="false">Offline Admission
                                Procedure</a>
                        </div>

                        <img src="{{ asset('frontend/images/mainSliders/slider1.jpg') }}" alt="Image">
                        <img src="{{ asset('frontend/images/mainSliders/slider2.jpeg') }}" alt="Image">
                    </div>
                </div>
                <!--Procedure left tab end-->

                <!--Procedure right tab content start-->
                <div class="col-md-8">
                    <div class="etl-avout-right-tab-content-start etl-procedure-content">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-online" role="tabpanel"
                                aria-labelledby="v-pills-online-tab">
                                <h2>Online Procedure</h2>
                                <p>Odio animi consectetur ducimus, hic, sunt cumque adipisci, quibusdam nulla velit
                                    repellendus doloremque asperiores voluptatibus labore. Reprehenderit eveniet cumque
                                    officia velit nesciunt assumenda, perspiciatis numquam deserunt praesentium rerum quia,
                                    enim ipsa illo iste fugit, labore quasi aperiam! Ullam nihil enim nisi dignissimos?</p>
                                <ul>
                                    <li>
                                        Harum corporis dolore recusandae nulla ea dicta, id adipisci minus error enim vitae
                                        beatae dolores aliquam minima, esse illum officia asperiores voluptate!
                                    </li>
                                    <li>Deserunt aspernatur quasi, consequuntur id praesentium debitis rem beatae error?
                                    </li>
                                    <li>Harum voluptatibus aperiam at dolorem mollitia culpa voluptas odio hic.</li>
                                    <li>Voluptate temporibus animi eum dignissimos tempora sed, similique magnam!</li>
                                    <li>Repellat quod id molestiae!</li>
                                    <li><a href="javascript:void(0)">Click here for admission</a></li>
                                </ul>
                            </div>

                            <div class="tab-pane fade" id="v-pills-offline" role="tabpanel"
                                aria-labelledby="v-pills-offline-tab">
                                <h2>Offline Procedure</h2>
                                <ul>
                                    <li>
                                        Harum corporis dolore recusandae nulla ea dicta, id adipisci minus error enim vitae
                                        beatae dolores aliquam minima, esse illum officia asperiores voluptate!
                                    </li>
                                    <li>Deserunt aspernatur quasi, consequuntur id praesentium debitis rem beatae error?
                                    </li>
                                    <li>Harum voluptatibus aperiam at dolorem mollitia culpa voluptas odio hic.</li>
                                    <li>Voluptate temporibus animi eum dignissimos tempora sed, similique magnam!</li>
                                    <li>Repellat quod id molestiae!</li>
                                </ul>

                            </div>

                        </div>
                    </div>
                </div>
                <!--Procedure right tab content end-->
            </div>
        </div>
    </section>
    <!--Admission Procedure area end-->

@endsection
