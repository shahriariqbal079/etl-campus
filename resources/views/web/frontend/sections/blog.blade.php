@extends('web.frontend.layouts.master')
@section('content')
    <!--Breadcrumb area start-->
    <section class="etl-breadcrumb-area-start">
        <h3>Blog</h3>
        <div class="etl-breadcrumb-tab">
            <a href="index.php">Home</a> <span> / Blog</span>
        </div>
    </section>
    <!--Breadcrumb area end-->

    <!--Blog area start-->
    <section class="etl-blog-area-start space">
        <div class="container">
            <div class="row">
                <!--Blog sidebar area start-->
                <div class="col-md-4">
                    <aside class="etl-sidebar-area-start shadow">
                        <!--Single Widgets area start-->
                        <div class="etl-single-widget">
                            <h3 class="etl-blog-title">Search :-</h3>
                            <div class="etl-blog-body">
                                <form action="#" method="POST">
                                    <div class="input-group">
                                        <input type="text" name="s" id="s" placeholder="Search Anything" autocomplete="off"
                                            class="form-control">
                                        <div class="input-group-text">
                                            <button type="submit" name="sbtn" id="sbtn"><i
                                                    class="fal fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--Single Widgets area end-->

                        <!--Single Widgets area start-->
                        <div class="etl-single-widget">
                            <h3 class="etl-blog-title">Categories :-</h3>
                            <div class="etl-blog-body">
                                <ul class="widget-lists">
                                    <li>
                                        <a href="javascript:void(0)">Web Design</a>
                                        <span>04</span>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Web Development</a>
                                        <span>06</span>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Graphics Design</a>
                                        <span>14</span>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Motion Graphics</a>
                                        <span>15</span>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Android Apps</a>
                                        <span>20</span>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Laravel</a>
                                        <span>55</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--Single Widgets area end-->


                        <!--Single Widgets area start-->
                        <div class="etl-single-widget">
                            <h3 class="etl-blog-title">Related Posts :-</h3>
                            <ul class="related-posts">
                                <li>
                                    <div class="etl-related-post-left">
                                        <a href="javascript:void(0)"><img src="{{ asset('frontend/images/student1.jpg') }}"
                                                alt="student"></a>
                                    </div>
                                    <div class="etl-related-post-right">
                                        <a href="javascript:void(0)">Define World Best IT Solution Technology</a>
                                        <span>February 22, 2021</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="etl-related-post-left">
                                        <a href="javascript:void(0)"><img src="{{ asset('frontend/images/student1.jpg') }}"
                                                alt="student"></a>
                                    </div>
                                    <div class="etl-related-post-right">
                                        <a href="javascript:void(0)">Define World Best IT Solution Technology</a>
                                        <span>February 22, 2021</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="etl-related-post-left">
                                        <a href="javascript:void(0)"><img src="{{ asset('frontend/images/student1.jpg') }}"
                                                alt="student"></a>
                                    </div>
                                    <div class="etl-related-post-right">
                                        <a href="javascript:void(0)">Define World Best IT Solution Technology</a>
                                        <span>February 22, 2021</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--Single Widgets area end-->

                        <!--Single Widgets area start-->
                        <div class="etl-single-widget">
                            <h3 class="etl-blog-title">tag Clouds :-</h3>
                            <ul class="tags-cloud">
                                <li><a href="javascript:void(0)">Design</a></li>
                                <li><a href="javascript:void(0)">Development</a></li>
                                <li><a href="javascript:void(0)">Graphics</a></li>
                                <li><a href="javascript:void(0)">Motions</a></li>
                                <li><a href="javascript:void(0)">Android</a></li>
                                <li><a href="javascript:void(0)">ICT</a></li>
                                <li><a href="javascript:void(0)">Laravel</a></li>
                            </ul>
                        </div>
                        <!--Single Widgets area end-->

                        <!--Single Widgets area start-->
                        <div class="etl-single-widget">
                            <h3 class="etl-blog-title">Archives :-</h3>
                            <ul class="archive-list">
                                <li><a href="javascript:void(0)"><i class="fal fa-folder"> </i> December 2020</a></li>
                                <li><a href="javascript:void(0)"><i class="fal fa-folder"> </i> January 2021</a></li>
                                <li><a href="javascript:void(0)"><i class="fal fa-folder"> </i> February 2021</a></li>
                                <li><a href="javascript:void(0)"><i class="fal fa-folder"> </i> March 2021</a></li>
                            </ul>
                        </div>
                        <!--Single Widgets area end-->



                    </aside>
                </div>
                <!--Blog sidebar area end-->

                <!--Blog content area start-->
                <div class="col-md-8">
                    <div class="row">
                        <!--Single blog area satrt-->
                        <div class="col-md-6">
                            <div class="etl-single-blog-content shadow">
                                <div class="etl-blog-image">
                                    <a href="single.php"><img src="{{ asset('frontend/images/student1.jpg') }}"
                                            alt="blog"></a>
                                </div>
                                <div class="etl-single-blog-body">
                                    <a href="javascript:void(0)">
                                        <h2>Define world best IT solution technology</h2>
                                    </a>
                                    <p>Ullam quis natus suscipit minus, ratione vero vitae iste velit, non dolor quibusdam
                                        doloribus? Atque, et? ...</p>
                                    <a href="javascript:void(0)">Learn more <i class="fal fa-long-arrow-right"></i></a>
                                </div>

                                <div class="etl-blog-footer">
                                    <div class="etl-author">
                                        <p><i class="fal fa-user"></i> Author</p>
                                    </div>
                                    <div class="etl-blog-date">
                                        <span><i class="fal fa-calendar"></i> February 20, 2021</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Single blog area end-->
                        <!--Single blog area satrt-->
                        <div class="col-md-6">
                            <div class="etl-single-blog-content shadow">
                                <div class="etl-blog-image">
                                    <a href="javascript:void(0)"><img src="{{ asset('frontend/images/student1.jpg') }}"
                                            alt="blog"></a>
                                </div>
                                <div class="etl-single-blog-body">
                                    <a href="javascript:void(0)">
                                        <h2>Define world best IT solution technology</h2>
                                    </a>
                                    <p>Ullam quis natus suscipit minus, ratione vero vitae iste velit, non dolor quibusdam
                                        doloribus? Atque, et? ...</p>
                                    <a href="javascript:void(0)">Learn more <i class="fal fa-long-arrow-right"></i></a>
                                </div>

                                <div class="etl-blog-footer">
                                    <div class="etl-author">
                                        <p><i class="fal fa-user"></i> Author</p>
                                    </div>
                                    <div class="etl-blog-date">
                                        <span><i class="fal fa-calendar"></i> February 20, 2021</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Single blog area end-->
                        <!--Single blog area satrt-->
                        <div class="col-md-6">
                            <div class="etl-single-blog-content shadow">
                                <div class="etl-blog-image">
                                    <a href="javascript:void(0)"><img src="{{ asset('frontend/images/student1.jpg') }}"
                                            alt="blog"></a>
                                </div>
                                <div class="etl-single-blog-body">
                                    <a href="javascript:void(0)">
                                        <h2>Define world best IT solution technology</h2>
                                    </a>
                                    <p>Ullam quis natus suscipit minus, ratione vero vitae iste velit, non dolor quibusdam
                                        doloribus? Atque, et? ...</p>
                                    <a href="javascript:void(0)">Learn more <i class="fal fa-long-arrow-right"></i></a>
                                </div>

                                <div class="etl-blog-footer">
                                    <div class="etl-author">
                                        <p><i class="fal fa-user"></i> Author</p>
                                    </div>
                                    <div class="etl-blog-date">
                                        <span><i class="fal fa-calendar"></i> February 20, 2021</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Single blog area end-->

                        <!--Single blog area satrt-->
                        <div class="col-md-6">
                            <div class="etl-single-blog-content shadow">
                                <div class="etl-blog-image">
                                    <a href="javascript:void(0)"><img src="{{ asset('frontend/images/student1.jpg') }}"
                                            alt="blog"></a>
                                </div>
                                <div class="etl-single-blog-body">
                                    <a href="javascript:void(0)">
                                        <h2>Define world best IT solution technology</h2>
                                    </a>
                                    <p>Ullam quis natus suscipit minus, ratione vero vitae iste velit, non dolor quibusdam
                                        doloribus? Atque, et? ...</p>
                                    <a href="javascript:void(0)">Learn more <i class="fal fa-long-arrow-right"></i></a>
                                </div>

                                <div class="etl-blog-footer">
                                    <div class="etl-author">
                                        <p><i class="fal fa-user"></i> Author</p>
                                    </div>
                                    <div class="etl-blog-date">
                                        <span><i class="fal fa-calendar"></i> February 20, 2021</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Single blog area end-->

                        <!--Single blog area satrt-->
                        <div class="col-md-6">
                            <div class="etl-single-blog-content shadow">
                                <div class="etl-blog-image">
                                    <a href="javascript:void(0)"><img src="{{ asset('frontend/images/student1.jpg') }}"
                                            alt="blog"></a>
                                </div>
                                <div class="etl-single-blog-body">
                                    <a href="javascript:void(0)">
                                        <h2>Define world best IT solution technology</h2>
                                    </a>
                                    <p>Ullam quis natus suscipit minus, ratione vero vitae iste velit, non dolor quibusdam
                                        doloribus? Atque, et? ...</p>
                                    <a href="javascript:void(0)">Learn more <i class="fal fa-long-arrow-right"></i></a>
                                </div>

                                <div class="etl-blog-footer">
                                    <div class="etl-author">
                                        <p><i class="fal fa-user"></i> Author</p>
                                    </div>
                                    <div class="etl-blog-date">
                                        <span><i class="fal fa-calendar"></i> February 20, 2021</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Single blog area end-->
                        <!--Single blog area satrt-->
                        <div class="col-md-6">
                            <div class="etl-single-blog-content shadow">
                                <div class="etl-blog-image">
                                    <a href="javascript:void(0)"><img src="{{ asset('frontend/images/student1.jpg') }}"
                                            alt="blog"></a>
                                </div>
                                <div class="etl-single-blog-body">
                                    <a href="javascript:void(0)">
                                        <h2>Define world best IT solution technology</h2>
                                    </a>
                                    <p>Ullam quis natus suscipit minus, ratione vero vitae iste velit, non dolor quibusdam
                                        doloribus? Atque, et? ...</p>
                                    <a href="javascript:void(0)">Learn more <i class="fal fa-long-arrow-right"></i></a>
                                </div>

                                <div class="etl-blog-footer">
                                    <div class="etl-author">
                                        <p><i class="fal fa-user"></i> Author</p>
                                    </div>
                                    <div class="etl-blog-date">
                                        <span><i class="fal fa-calendar"></i> February 20, 2021</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Single blog area end-->
                    </div>

                    <!--pagination area start-->
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="pagination-list">
                                <li><a href="#">Prev</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li class="active"><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                                <li><a href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--pagination area end-->
                </div>
                <!--Blog content area end-->
            </div>
        </div>
    </section>
    <!--Blog area end-->


@endsection
