@extends('web.frontend.layouts.master')
@section('content')
    <!--Breadcrumb area start-->
    <section class="etl-breadcrumb-area-start">
        <h3>freaquently Asked Questions</h3>
        <div class="etl-breadcrumb-tab">
            <a href="index.php">Home</a> <span> / FAQ</span>
        </div>
    </section>
    <!--Breadcrumb area end-->


    <!--Faq area start-->
    <section class="etl-faq-area-start space">
        <div class="container">
            <div class="row">
                <!--Project title area start-->
                <div class="col-md-12">
                    <div class="etl-project-title">
                        <span>faq</span>
                        <h2>frequently asked questions</h2>
                        <p>Porro nesciunt quis assumenda cumque quisquam eaque sed expedita qui aliquam?</p>
                    </div>
                </div>
                <!--Project title area end-->

                <!--Faq right area start-->
                <div class="col-md-6">
                    <div class="etl-faq-right-area">
                        <img src="{{ asset('frontend/images/mainSliders/slider3.png') }}" alt="faq">
                    </div>
                </div>
                <!--Faq right area end-->
                <!--Faq left area start-->
                <div class="col-md-6">
                    <div class="etl-faq-area-content">
                        <div class="accordion" id="accordionExample">
                            <!--Single faq area start-->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <button class="btn" type="button" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne"> How Can I Join With ETL Campus
                                        ?</button>
                                </div>

                                <div id="collapseOne" aria-labelledby="headingOne" class="collapse show"
                                    data-parent="#accordionExample">
                                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo
                                        illo odit in reprehenderit quos eos rem, voluptatum amet, magnam saepe eveniet
                                        praesentium numquam fugit ut minima consequatur eius. Eum, dolorem?</div>
                                </div>
                            </div>
                            <!--Single faq area end-->


                            <!--Single faq area start-->
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <button class="btn collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> How
                                        Can I Join With ETL Campus ?</button>
                                </div>
                                <div id="collapseTwo" aria-labelledby="headingTwo" class="collapse"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, inventore. Pariatur
                                        eius, natus ipsam numquam architecto in, nesciunt aspernatur praesentium deserunt
                                        tempora doloremque dolorum necessitatibus officiis nostrum, consectetur unde libero
                                        eligendi blanditiis nulla! Eos praesentium dolores quae, sint odit nostrum,
                                        consequuntur reprehenderit repudiandae hic tempore dolorem nisi amet iusto corrupti,
                                        incidunt, repellat numquam non impedit sapiente quaerat nihil dolorum magni?
                                    </div>
                                </div>
                            </div>
                            <!--Single faq area end-->


                            <!--Single faq area start-->
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <button class="btn collapsed" type="button" data-toggle="collapse"
                                        data-target="#collpaseThree" aria-expanded="false" aria-controls="collapseThree">
                                        How Can I Join With ETL Campus ?</button>
                                </div>
                                <div id="collpaseThree" aria-labelledby="headingThree" class="collapse"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur animi soluta
                                        consequatur minus omnis eum voluptatem commodi qui, maiores tenetur facere inventore
                                        nulla, facilis ad harum unde natus vitae libero non laborum nihil architecto.
                                        Officiis distinctio earum corrupti! Illo molestiae autem minima reiciendis unde
                                        necessitatibus!
                                    </div>
                                </div>
                            </div>
                            <!--Single faq area end-->


                            <!--Single faq area start-->
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <button class="btn collapsed" type="button" data-toggle="collapse"
                                        data-target="#collpaseFour" aria-expanded="false" aria-controls="collapseFour"> How
                                        Can I Join With ETL Campus ?</button>
                                </div>
                                <div id="collpaseFour" aria-labelledby="headingFour" class="collapse"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur animi soluta
                                        consequatur minus omnis eum voluptatem commodi qui, maiores tenetur facere inventore
                                        nulla, facilis ad harum unde natus vitae libero non laborum nihil architecto.
                                        Officiis distinctio earum corrupti! Illo molestiae autem minima reiciendis unde
                                        necessitatibus!
                                    </div>
                                </div>
                            </div>
                            <!--Single faq area end-->

                        </div>
                    </div>
                </div>
                <!--Faq left area end-->
            </div>
        </div>
    </section>
    <!--Faq area end-->

@endsection
