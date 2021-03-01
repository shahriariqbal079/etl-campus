@extends('web.frontend.layouts.master')

@section('content')

    <!--Breadcrumb area start-->
    <section class="etl-breadcrumb-area-start">
        <h3>To Know about ETL CAMPUS</h3>
        <div class="etl-breadcrumb-tab">
            <a href="index.php">Home</a> <span> / About</span>
        </div>
    </section>
    <!--Breadcrumb area end-->

    <!--About area start-->
    <div class="etl-about-area-start space">
        <div class="container">
            <div class="row">
                <!--About left area tab content start-->
                <div class="col-md-4">
                    <div class="etl-about-left-content etl-seminar-left-content">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-overview-tab" data-toggle="pill" href="#v-pills-overview"
                                role="tab" aria-controls="v-pills-overview" aria-selected="true">Overview</a>

                            <a class="nav-link" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission"
                                role="tab" aria-controls="v-pills-mission" aria-selected="false">Mission &amp; Vission</a>

                            <a class="nav-link" id="v-pills-history-tab" data-toggle="pill" href="#v-pills-history"
                                role="tab" aria-controls="v-pills-history" aria-selected="false">History</a>

                            <a class="nav-link" id="v-pills-experiences-tab" data-toggle="pill" href="#v-pills-experiences"
                                role="tab" aria-controls="v-pills-experiences" aria-selected="false">experiences</a>

                            <a class="nav-link" id="v-pills-values-tab" data-toggle="pill" href="#v-pills-values" role="tab"
                                aria-controls="v-pills-values" aria-selected="false">values</a>

                            <a class="nav-link" id="v-pills-capacity-tab" data-toggle="pill" href="#v-pills-capacity"
                                role="tab" aria-controls="v-pills-capacity" aria-selected="false">Office Capacity</a>

                            <a class="nav-link" id="v-pills-address-tab" data-toggle="pill" href="#v-pills-address"
                                role="tab" aria-controls="v-pills-address" aria-selected="false">Office Address</a>

                        </div>
                    </div>
                </div>
                <!--About left area tab content end-->

                <!--About right tab content start-->
                <div class="col-md-8">
                    <div class="etl-avout-right-tab-content-start">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-overview" role="tabpanel"
                                aria-labelledby="v-pills-overview-tab">
                                <h2>ETL CAMPUS</h2>
                                <p>A ipsam modi, consequuntur praesentium sit, quidem. Debitis, repellendus! Odit magni
                                    consequuntur quo explicabo earum maxime iste, doloribus eum, suscipit itaque provident.
                                </p>
                                <p>Cupiditate ratione officiis officia dolorem eveniet quis iusto atque soluta hic assumenda
                                    omnis, deserunt in dolores sed, obcaecati dicta ducimus! Nemo neque eius eos est quasi
                                    nostrum modi excepturi provident sit officiis sunt nam in dolorem totam, commodi hic
                                    perferendis deleniti sequi quas odit quo eveniet quibusdam autem maiores! Tempora
                                    reprehenderit, excepturi minima quis fugit ullam vel quaerat omnis veniam! Eius
                                    laboriosam, earum quis! Accusamus nisi delectus vel consequuntur, velit, dolore rerum
                                    itaque quisquam amet atque soluta. Explicabo aspernatur eligendi quia quibusdam a ab
                                    odit, sunt nulla sed optio molestias maiores velit!</p>
                            </div>

                            <div class="tab-pane fade" id="v-pills-mission" role="tabpanel"
                                aria-labelledby="v-pills-mission-tab">
                                <h2>Our Mission</h2>
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

                                <h2>Our Vission</h2>
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

                            <div class="tab-pane fade" id="v-pills-history" role="tabpanel"
                                aria-labelledby="v-pills-history-tab">
                                <h2>ETL CAMPUS History</h2>
                                <p>A ipsam modi, consequuntur praesentium sit, quidem. Debitis, repellendus! Odit magni
                                    consequuntur quo explicabo earum maxime iste, doloribus eum, suscipit itaque provident.
                                </p>
                                <p>Cupiditate ratione officiis officia dolorem eveniet quis iusto atque soluta hic assumenda
                                    omnis, deserunt in dolores sed, obcaecati dicta ducimus! Nemo neque eius eos est quasi
                                    nostrum modi excepturi provident sit officiis sunt nam in dolorem totam, commodi hic
                                    perferendis deleniti sequi quas odit quo eveniet quibusdam autem maiores! Tempora
                                    reprehenderit, excepturi minima quis fugit ullam vel quaerat omnis veniam! Eius
                                    laboriosam, earum quis! Accusamus nisi delectus vel consequuntur, velit, dolore rerum
                                    itaque quisquam amet atque soluta. Explicabo aspernatur eligendi quia quibusdam a ab
                                    odit, sunt nulla sed optio molestias maiores velit!</p>
                            </div>

                            <div class="tab-pane fade" id="v-pills-experiences" role="tabpanel"
                                aria-labelledby="v-pills-experiences-tab">
                                <h2>ETL CAMPUS Experiences</h2>
                                <p>A ipsam modi, consequuntur praesentium sit, quidem. Debitis, repellendus! Odit magni
                                    consequuntur quo explicabo earum maxime iste, doloribus eum, suscipit itaque provident.
                                </p>
                                <p>Cupiditate ratione officiis officia dolorem eveniet quis iusto atque soluta hic assumenda
                                    omnis, deserunt in dolores sed, obcaecati dicta ducimus! Nemo neque eius eos est quasi
                                    nostrum modi excepturi provident sit officiis sunt nam in dolorem totam, commodi hic
                                    perferendis deleniti sequi quas odit quo eveniet quibusdam autem maiores! Tempora
                                    reprehenderit, excepturi minima quis fugit ullam vel quaerat omnis veniam! Eius
                                    laboriosam, earum quis! Accusamus nisi delectus vel consequuntur, velit, dolore rerum
                                    itaque quisquam amet atque soluta. Explicabo aspernatur eligendi quia quibusdam a ab
                                    odit, sunt nulla sed optio molestias maiores velit!</p>
                            </div>

                            <div class="tab-pane fade" id="v-pills-values" role="tabpanel"
                                aria-labelledby="v-pills-values-tab">
                                <h2>ETL CAMPUS values</h2>
                                <p>A ipsam modi, consequuntur praesentium sit, quidem. Debitis, repellendus! Odit magni
                                    consequuntur quo explicabo earum maxime iste, doloribus eum, suscipit itaque provident.
                                </p>
                                <p>Cupiditate ratione officiis officia dolorem eveniet quis iusto atque soluta hic assumenda
                                    omnis, deserunt in dolores sed, obcaecati dicta ducimus! Nemo neque eius eos est quasi
                                    nostrum modi excepturi provident sit officiis sunt nam in dolorem totam, commodi hic
                                    perferendis deleniti sequi quas odit quo eveniet quibusdam autem maiores! Tempora
                                    reprehenderit, excepturi minima quis fugit ullam vel quaerat omnis veniam! Eius
                                    laboriosam, earum quis! Accusamus nisi delectus vel consequuntur, velit, dolore rerum
                                    itaque quisquam amet atque soluta. Explicabo aspernatur eligendi quia quibusdam a ab
                                    odit, sunt nulla sed optio molestias maiores velit!</p>
                            </div>


                            <div class="tab-pane fade" id="v-pills-capacity" role="tabpanel"
                                aria-labelledby="v-pills-capacity-tab">
                                <h2>Office Capacity</h2>
                                <ul>
                                    <li><strong>Lab Room: </strong> 16</li>
                                    <li><strong>Office Room: </strong> 2</li>
                                    <li><strong>Training Room: </strong> 16</li>
                                    <li><strong>Number of Trainer: </strong> 100</li>
                                </ul>
                            </div>

                            <div class="tab-pane fade" id="v-pills-address" role="tabpanel"
                                aria-labelledby="v-pills-address-tab">
                                <h2>Office Address</h2>
                                <address>
                                    <strong>Corporate Office : </strong> 160/A Mostafa Crystal, Old police Quarter, Ground
                                    Floor, Feni.
                                </address>

                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.8138969016404!2d90.39101441450224!3d23.754014994556123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8a27d05aa07%3A0xd260cef896a1e386!2sSoftware%20Technology%20Park%20(Conference%20Room)!5e0!3m2!1sen!2sbd!4v1613038580254!5m2!1sen!2sbd"
                                    width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""
                                    aria-hidden="false" tabindex="0"></iframe>
                            </div>



                        </div>
                    </div>
                </div>
                <!--About right tab content end-->
            </div>
        </div>
    </div>
    <!--About area end-->

@endsection
