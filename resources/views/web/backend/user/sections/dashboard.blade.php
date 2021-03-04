@extends('web.backend.user.layouts.master')
@section('content')
    <div class="mdk-drawer-layout__content page-content">
        <!-- Header -->
        <!-- // END Header -->

        <!-- BEFORE Page Content -->

        <!-- // END BEFORE Page Content -->

        <!-- Page Content -->

        <div class="mdk-box mdk-box--bg-primary bg-dark js-mdk-box mb-0"
            data-effects="parallax-background blend-background">
            <div class="mdk-box__bg">
                <div class="mdk-box__bg-front"
                    style="background-image: url(../../public/images/photodune-4161018-group-of-students-m.jpg);">
                </div>
            </div>
            <div class="mdk-box__content justify-content-center">
                <div class="hero container-fluid page__container text-center py-112pt">
                    <h1 class="text-white text-shadow">Learn to Code</h1>
                    <p class="lead measure-hero-lead mx-auto text-white text-shadow mb-48pt">Business, Technology
                        and Creative Skills taught by industry experts. Explore a wide range of skills with our
                        professional tutorials.</p>

                    <a href="courses.html" class="btn btn-lg btn-white btn--raised mb-16pt">Browse Courses</a>

                    <p class="mb-0"><a href="" class="text-white text-shadow"><strong>Are you a
                                teacher?</strong></a></p>

                </div>
            </div>
        </div>

        <div class="border-bottom-2 py-16pt navbar-light bg-white border-bottom-2">
            <div class="container-fluid page__container">
                <div class="row align-items-center">
                    <div class="d-flex col-md align-items-center border-bottom border-md-0 mb-16pt mb-md-0 pb-16pt pb-md-0">
                        <div
                            class="rounded-circle bg-primary w-64 h-64 d-inline-flex align-items-center justify-content-center mr-16pt">
                            <i class="material-icons text-white">subscriptions</i>
                        </div>
                        <div class="flex">
                            <div class="card-title mb-4pt">8,000+ Courses</div>
                            <p class="card-subtitle text-70">Explore a wide range of skills.</p>
                        </div>
                    </div>
                    <div class="d-flex col-md align-items-center border-bottom border-md-0 mb-16pt mb-md-0 pb-16pt pb-md-0">
                        <div
                            class="rounded-circle bg-primary w-64 h-64 d-inline-flex align-items-center justify-content-center mr-16pt">
                            <i class="material-icons text-white">verified_user</i>
                        </div>
                        <div class="flex">
                            <div class="card-title mb-4pt">By Industry Experts</div>
                            <p class="card-subtitle text-70">Professional development from the best people.</p>
                        </div>
                    </div>
                    <div class="d-flex col-md align-items-center">
                        <div
                            class="rounded-circle bg-primary w-64 h-64 d-inline-flex align-items-center justify-content-center mr-16pt">
                            <i class="material-icons text-white">update</i>
                        </div>
                        <div class="flex">
                            <div class="card-title mb-4pt">Unlimited Access</div>
                            <p class="card-subtitle text-70">Unlock Library and learn any topic with one
                                subscription.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-section border-bottom-2">
            <div class="container-fluid page__container">

                <div class="page-separator">
                    <div class="page-separator__text">From the blog</div>
                </div>

                <div class="row card-group-row">

                    <div class="col-md-6 col-lg-4 card-group-row__col">

                        <div class="card card--elevated posts-card-popular overlay card-group-row__card">
                            <img src="{{ asset('backend/user/images/paths/sketch_430x168.png') }}" alt=""
                                class="card-img">
                            <div class="fullbleed bg-primary" style="opacity: .5"></div>
                            <div class="posts-card-popular__content">
                                <div class="card-body d-flex align-items-center">
                                    <div class="avatar-group flex">
                                        <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top"
                                            title="Janell D.">
                                            <a href=""><img
                                                    src="{{ asset('backend/user/images/256_luke-porter-261779-unsplash.jpg') }}"
                                                    alt="Avatar" class="avatar-img rounded-circle"></a>
                                        </div>
                                    </div>
                                    <a style="text-decoration: none;" class="d-flex align-items-center" href=""><i
                                            class="material-icons mr-1" style="font-size: inherit;">remove_red_eye</i>
                                        <small>327</small></a>
                                </div>
                                <div class="posts-card-popular__title card-body">
                                    <small class="text-muted text-uppercase">sketch</small>
                                    <a class="card-title" href="blog-post.html">Merge Duplicates Inconsistent
                                        Symbols</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6 col-lg-4 card-group-row__col">

                        <div class="card card--elevated posts-card-popular overlay card-group-row__card">
                            <img src="{{ asset('backend/user/images/paths/invision_430x168.png') }}" alt=""
                                class="card-img">
                            <div class="fullbleed bg-primary" style="opacity: .5"></div>
                            <div class="posts-card-popular__content">
                                <div class="card-body d-flex align-items-center">
                                    <div class="avatar-group flex">
                                        <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top"
                                            title="Janell D.">
                                            <a href=""><img
                                                    src="{{ asset('backend/user/images/256_michael-dam-258165-unsplash.jpg') }}"
                                                    alt="Avatar" class="avatar-img rounded-circle"></a>
                                        </div>
                                    </div>
                                    <a style="text-decoration: none;" class="d-flex align-items-center" href=""><i
                                            class="material-icons mr-1" style="font-size: inherit;">remove_red_eye</i>
                                        <small>327</small></a>
                                </div>
                                <div class="posts-card-popular__title card-body">
                                    <small class="text-muted text-uppercase">invision</small>
                                    <a class="card-title" href="blog-post.html">Design Systems Essentials</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6 col-lg-4 card-group-row__col">

                        <div class="card card--elevated posts-card-popular overlay card-group-row__card">
                            <img src="{{ asset('backend/user/images/paths/photoshop_430x168.png') }}" alt=""
                                class="card-img">
                            <div class="fullbleed bg-primary" style="opacity: .5"></div>
                            <div class="posts-card-popular__content">
                                <div class="card-body d-flex align-items-center">
                                    <div class="avatar-group flex">
                                        <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top"
                                            title="Janell D.">
                                            <a href=""><img
                                                    src="{{ asset('backend/user/images/256_rsz_1andy-lee-642320-unsplash.jpg') }}"
                                                    alt="Avatar" class="avatar-img rounded-circle"></a>
                                        </div>
                                    </div>
                                    <a style="text-decoration: none;" class="d-flex align-items-center" href=""><i
                                            class="material-icons mr-1" style="font-size: inherit;">remove_red_eye</i>
                                        <small>327</small></a>
                                </div>
                                <div class="posts-card-popular__title card-body">
                                    <small class="text-muted text-uppercase">photoshop</small>
                                    <a class="card-title" href="blog-post.html">Semantic Logo Design</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="posts-cards">

                    <div class="card posts-card mb-0">
                        <div class="posts-card__content d-flex align-items-center flex-wrap">
                            <div class="avatar avatar-lg mr-3">
                                <a href="blog-post.html"><img
                                        src="{{ asset('backend/user/images/paths/invision_200x168.png') }}" alt="avatar"
                                        class="avatar-img rounded"></a>
                            </div>
                            <div class="posts-card__title flex d-flex flex-column">
                                <a href="blog-post.html" class="card-title mr-3">Design Systems Essentials</a>
                                <small class="text-50">35 views last week</small>
                            </div>
                            <div class="d-flex align-items-center flex-column flex-sm-row posts-card__meta">
                                <div class="mr-3 text-50 text-uppercase posts-card__tag d-flex align-items-center">
                                    <i class="material-icons text-muted-light mr-1">folder_open</i> inVision
                                </div>
                                <div class="mr-3 text-50 posts-card__date">
                                    <small>11 Nov, 2018 07:46 AM</small>
                                </div>
                                <div class="media ml-sm-auto align-items-center">
                                    <div class="media-left mr-2 avatar-group">

                                        <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top"
                                            title="Janell D.">
                                            <img src="{{ asset('backend/user/images/256_rsz_1andy-lee-642320-unsplash.jpg') }}"
                                                alt="Avatar" class="avatar-img rounded-circle">
                                        </div>

                                        <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top"
                                            title="Janell D.">
                                            <img src="{{ asset('backend/user/images/256_michael-dam-258165-unsplash.jpg') }}"
                                                alt="Avatar" class="avatar-img rounded-circle">
                                        </div>

                                        <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top"
                                            title="Janell D.">
                                            <img src="{{ asset('backend/user/images/256_luke-porter-261779-unsplash.jpg') }}"
                                                alt="Avatar" class="avatar-img rounded-circle">
                                        </div>

                                    </div>
                                    <div class="media-body">

                                        <a href="">+2 more</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="page-section border-bottom-2">
            <div class="container-fluid page__container">
                <div class="page-separator">
                    <div class="page-separator__text">Learning Paths</div>
                </div>

                <div class="row card-group-row">

                    <div class="col-sm-4 card-group-row__col">

                        <div class="card js-overlay card-sm overlay--primary-dodger-blue stack stack--1 card-group-row__card"
                            data-toggle="popover" data-trigger="click">

                            <div class="card-body d-flex flex-column">
                                <div class="d-flex align-items-center">
                                    <div class="flex">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded mr-12pt z-0 o-hidden">
                                                <div class="overlay">
                                                    <img src="{{ asset('backend/user/images/paths/react_40x40@2x.png') }}"
                                                        width="40" height="40" alt="Angular" class="rounded">
                                                    <span class="overlay__content overlay__content-transparent">
                                                        <span class="overlay__action d-flex flex-column text-center lh-1">
                                                            <small class="h6 small text-white mb-0"
                                                                style="font-weight: 500;">80%</small>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex">
                                                <div class="card-title">React Native</div>
                                                <p class="flex text-50 lh-1 mb-0"><small>18 courses</small></p>
                                            </div>
                                        </div>
                                    </div>

                                    <a href="student-path.html" data-toggle="tooltip" data-title="Add Favorite"
                                        data-placement="top" data-boundary="window"
                                        class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>

                                </div>

                            </div>
                        </div>

                        <div class="popoverContainer d-none">
                            <div class="media">
                                <div class="media-left mr-12pt">
                                    <img src="{{ asset('backend/user/images/paths/react_40x40@2x.png') }}" width="40"
                                        height="40" alt="Angular" class="rounded">
                                </div>
                                <div class="media-body">
                                    <div class="card-title">React Native</div>
                                    <p class="text-50 d-flex lh-1 mb-0 small">18 courses</p>
                                </div>
                            </div>

                            <p class="mt-16pt text-70">Learn the fundamentals of working with React Native and how
                                to create basic applications.</p>

                            <div class="my-32pt">
                                <div class="d-flex align-items-center mb-8pt justify-content-center">
                                    <div class="d-flex align-items-center mr-8pt">
                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>50 minutes left</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a href="student-path.html" class="btn btn-primary mr-8pt">Resume</a>
                                    <a href="student-path.html" class="btn btn-outline-secondary ml-0">Start
                                        over</a>
                                </div>
                            </div>

                            <div class="d-flex align-items-center">
                                <small class="text-50 mr-8pt">Your rating</small>
                                <div class="rating mr-8pt">
                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                    <span class="rating__item"><span
                                            class="material-icons text-primary">star_border</span></span>
                                </div>
                                <small class="text-50">4/5</small>
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-4 card-group-row__col">

                        <div class="card js-overlay card-sm overlay--primary-dodger-blue stack stack--1 card-group-row__card"
                            data-toggle="popover" data-trigger="click">

                            <div class="card-body d-flex flex-column">
                                <div class="d-flex align-items-center">
                                    <div class="flex">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded mr-12pt z-0 o-hidden">
                                                <div class="overlay">
                                                    <img src="{{ asset('backend/user/images/paths/devops_40x40@2x.png') }}"
                                                        width="40" height="40" alt="Angular" class="rounded">
                                                    <span class="overlay__content overlay__content-transparent">
                                                        <span class="overlay__action d-flex flex-column text-center lh-1">
                                                            <small class="h6 small text-white mb-0"
                                                                style="font-weight: 500;">80%</small>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex">
                                                <div class="card-title">Dev Ops</div>
                                                <p class="flex text-50 lh-1 mb-0"><small>18 courses</small></p>
                                            </div>
                                        </div>
                                    </div>

                                    <a href="student-path.html" data-toggle="tooltip" data-title="Add Favorite"
                                        data-placement="top" data-boundary="window"
                                        class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>

                                </div>

                            </div>
                        </div>

                        <div class="popoverContainer d-none">
                            <div class="media">
                                <div class="media-left mr-12pt">
                                    <img src="{{ asset('backend/user/images/paths/devops_40x40@2x.png') }}" width="40"
                                        height="40" alt="Angular" class="rounded">
                                </div>
                                <div class="media-body">
                                    <div class="card-title">Dev Ops</div>
                                    <p class="text-50 d-flex lh-1 mb-0 small">18 courses</p>
                                </div>
                            </div>

                            <p class="mt-16pt text-70">Learn the fundamentals of working with Dev Ops and how to
                                create basic applications.</p>

                            <div class="my-32pt">
                                <div class="d-flex align-items-center mb-8pt justify-content-center">
                                    <div class="d-flex align-items-center mr-8pt">
                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>50 minutes left</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a href="student-path.html" class="btn btn-primary mr-8pt">Resume</a>
                                    <a href="student-path.html" class="btn btn-outline-secondary ml-0">Start
                                        over</a>
                                </div>
                            </div>

                            <div class="d-flex align-items-center">
                                <small class="text-50 mr-8pt">Your rating</small>
                                <div class="rating mr-8pt">
                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                    <span class="rating__item"><span
                                            class="material-icons text-primary">star_border</span></span>
                                </div>
                                <small class="text-50">4/5</small>
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-4 card-group-row__col">

                        <div class="card js-overlay card-sm overlay--primary-dodger-blue stack stack--1 card-group-row__card"
                            data-toggle="popover" data-trigger="click">

                            <div class="card-body d-flex flex-column">
                                <div class="d-flex align-items-center">
                                    <div class="flex">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded mr-12pt z-0 o-hidden">
                                                <div class="overlay">
                                                    <img src="{{ asset('backend/user/images/paths/redis_40x40@2x.png') }}"
                                                        width="40" height="40" alt="Angular" class="rounded">
                                                    <span class="overlay__content overlay__content-transparent">
                                                        <span class="overlay__action d-flex flex-column text-center lh-1">
                                                            <small class="h6 small text-white mb-0"
                                                                style="font-weight: 500;">80%</small>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex">
                                                <div class="card-title">Redis</div>
                                                <p class="flex text-50 lh-1 mb-0"><small>18 courses</small></p>
                                            </div>
                                        </div>
                                    </div>

                                    <a href="student-path.html" data-toggle="tooltip" data-title="Add Favorite"
                                        data-placement="top" data-boundary="window"
                                        class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>

                                </div>

                            </div>
                        </div>

                        <div class="popoverContainer d-none">
                            <div class="media">
                                <div class="media-left mr-12pt">
                                    <img src="{{ asset('backend/user/images/paths/redis_40x40@2x.png') }}" width="40"
                                        height="40" alt="Angular" class="rounded">
                                </div>
                                <div class="media-body">
                                    <div class="card-title">Redis</div>
                                    <p class="text-50 d-flex lh-1 mb-0 small">18 courses</p>
                                </div>
                            </div>

                            <p class="mt-16pt text-70">Learn the fundamentals of working with Redis and how to
                                create basic applications.</p>

                            <div class="my-32pt">
                                <div class="d-flex align-items-center mb-8pt justify-content-center">
                                    <div class="d-flex align-items-center mr-8pt">
                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>50 minutes left</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a href="student-path.html" class="btn btn-primary mr-8pt">Resume</a>
                                    <a href="student-path.html" class="btn btn-outline-secondary ml-0">Start
                                        over</a>
                                </div>
                            </div>

                            <div class="d-flex align-items-center">
                                <small class="text-50 mr-8pt">Your rating</small>
                                <div class="rating mr-8pt">
                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                    <span class="rating__item"><span
                                            class="material-icons text-primary">star_border</span></span>
                                </div>
                                <small class="text-50">4/5</small>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="row card-group-row mb-lg-8pt">

                    <div class="col-sm-4 card-group-row__col">

                        <div class="card js-overlay card-sm overlay--primary-dodger-blue stack stack--1 card-group-row__card mb-lg-0"
                            data-toggle="popover" data-trigger="click">

                            <div class="card-body d-flex flex-column">
                                <div class="d-flex align-items-center">
                                    <div class="flex">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded mr-12pt z-0 o-hidden">
                                                <div class="overlay">
                                                    <img src="{{ asset('backend/user/images/paths/mailchimp_40x40@2x.png') }}"
                                                        width="40" height="40" alt="Angular" class="rounded">
                                                    <span class="overlay__content overlay__content-transparent">
                                                        <span class="overlay__action d-flex flex-column text-center lh-1">
                                                            <small class="h6 small text-white mb-0"
                                                                style="font-weight: 500;">80%</small>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex">
                                                <div class="card-title">MailChimp</div>
                                                <p class="flex text-50 lh-1 mb-0"><small>18 courses</small></p>
                                            </div>
                                        </div>
                                    </div>

                                    <a href="student-path.html" data-toggle="tooltip" data-title="Add Favorite"
                                        data-placement="top" data-boundary="window"
                                        class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>

                                </div>

                            </div>
                        </div>

                        <div class="popoverContainer d-none">
                            <div class="media">
                                <div class="media-left mr-12pt">
                                    <img src="{{ asset('backend/user/images/paths/mailchimp_40x40@2x.png') }}" width="40"
                                        height="40" alt="Angular" class="rounded">
                                </div>
                                <div class="media-body">
                                    <div class="card-title">MailChimp</div>
                                    <p class="text-50 d-flex lh-1 mb-0 small">18 courses</p>
                                </div>
                            </div>

                            <p class="mt-16pt text-70">Learn the fundamentals of working with MailChimp and how to
                                create basic applications.</p>

                            <div class="my-32pt">
                                <div class="d-flex align-items-center mb-8pt justify-content-center">
                                    <div class="d-flex align-items-center mr-8pt">
                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>50 minutes left</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a href="student-path.html" class="btn btn-primary mr-8pt">Resume</a>
                                    <a href="student-path.html" class="btn btn-outline-secondary ml-0">Start
                                        over</a>
                                </div>
                            </div>

                            <div class="d-flex align-items-center">
                                <small class="text-50 mr-8pt">Your rating</small>
                                <div class="rating mr-8pt">
                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                    <span class="rating__item"><span
                                            class="material-icons text-primary">star_border</span></span>
                                </div>
                                <small class="text-50">4/5</small>
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-4 card-group-row__col">

                        <div class="card js-overlay card-sm overlay--primary-dodger-blue stack stack--1 card-group-row__card mb-lg-0"
                            data-toggle="popover" data-trigger="click">

                            <div class="card-body d-flex flex-column">
                                <div class="d-flex align-items-center">
                                    <div class="flex">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded mr-12pt z-0 o-hidden">
                                                <div class="overlay">
                                                    <img src="{{ asset('backend/user/images/paths/swift_40x40@2x.png') }}"
                                                        width="40" height="40" alt="Angular" class="rounded">
                                                    <span class="overlay__content overlay__content-transparent">
                                                        <span class="overlay__action d-flex flex-column text-center lh-1">
                                                            <small class="h6 small text-white mb-0"
                                                                style="font-weight: 500;">80%</small>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex">
                                                <div class="card-title">Swift</div>
                                                <p class="flex text-50 lh-1 mb-0"><small>18 courses</small></p>
                                            </div>
                                        </div>
                                    </div>

                                    <a href="student-path.html" data-toggle="tooltip" data-title="Add Favorite"
                                        data-placement="top" data-boundary="window"
                                        class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>

                                </div>

                            </div>
                        </div>

                        <div class="popoverContainer d-none">
                            <div class="media">
                                <div class="media-left mr-12pt">
                                    <img src="{{ asset('backend/user/images/paths/swift_40x40@2x.png') }}" width="40"
                                        height="40" alt="Angular" class="rounded">
                                </div>
                                <div class="media-body">
                                    <div class="card-title">Swift</div>
                                    <p class="text-50 d-flex lh-1 mb-0 small">18 courses</p>
                                </div>
                            </div>

                            <p class="mt-16pt text-70">Learn the fundamentals of working with Swift and how to
                                create basic applications.</p>

                            <div class="my-32pt">
                                <div class="d-flex align-items-center mb-8pt justify-content-center">
                                    <div class="d-flex align-items-center mr-8pt">
                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>50 minutes left</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a href="student-path.html" class="btn btn-primary mr-8pt">Resume</a>
                                    <a href="student-path.html" class="btn btn-outline-secondary ml-0">Start
                                        over</a>
                                </div>
                            </div>

                            <div class="d-flex align-items-center">
                                <small class="text-50 mr-8pt">Your rating</small>
                                <div class="rating mr-8pt">
                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                    <span class="rating__item"><span
                                            class="material-icons text-primary">star_border</span></span>
                                </div>
                                <small class="text-50">4/5</small>
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-4 card-group-row__col">

                        <div class="card js-overlay card-sm overlay--primary-dodger-blue stack stack--1 card-group-row__card mb-lg-0"
                            data-toggle="popover" data-trigger="click">

                            <div class="card-body d-flex flex-column">
                                <div class="d-flex align-items-center">
                                    <div class="flex">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded mr-12pt z-0 o-hidden">
                                                <div class="overlay">
                                                    <img src="{{ asset('backend/user/images/paths/wordpress_40x40@2x.png') }}"
                                                        width="40" height="40" alt="Angular" class="rounded">
                                                    <span class="overlay__content overlay__content-transparent">
                                                        <span class="overlay__action d-flex flex-column text-center lh-1">
                                                            <small class="h6 small text-white mb-0"
                                                                style="font-weight: 500;">80%</small>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex">
                                                <div class="card-title">WordPress</div>
                                                <p class="flex text-50 lh-1 mb-0"><small>18 courses</small></p>
                                            </div>
                                        </div>
                                    </div>

                                    <a href="student-path.html" data-toggle="tooltip" data-title="Add Favorite"
                                        data-placement="top" data-boundary="window"
                                        class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>

                                </div>

                            </div>
                        </div>

                        <div class="popoverContainer d-none">
                            <div class="media">
                                <div class="media-left mr-12pt">
                                    <img src="{{ asset('backend/user/images/paths/wordpress_40x40@2x.png') }}" width="40"
                                        height="40" alt="Angular" class="rounded">
                                </div>
                                <div class="media-body">
                                    <div class="card-title">WordPress</div>
                                    <p class="text-50 d-flex lh-1 mb-0 small">18 courses</p>
                                </div>
                            </div>

                            <p class="mt-16pt text-70">Learn the fundamentals of working with WordPress and how to
                                create basic applications.</p>

                            <div class="my-32pt">
                                <div class="d-flex align-items-center mb-8pt justify-content-center">
                                    <div class="d-flex align-items-center mr-8pt">
                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>50 minutes left</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a href="student-path.html" class="btn btn-primary mr-8pt">Resume</a>
                                    <a href="student-path.html" class="btn btn-outline-secondary ml-0">Start
                                        over</a>
                                </div>
                            </div>

                            <div class="d-flex align-items-center">
                                <small class="text-50 mr-8pt">Your rating</small>
                                <div class="rating mr-8pt">
                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                    <span class="rating__item"><span
                                            class="material-icons text-primary">star_border</span></span>
                                </div>
                                <small class="text-50">4/5</small>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>

        <div class="page-section border-bottom-2">
            <div class="container-fluid page__container">
                <div class="page-separator">
                    <div class="page-separator__text">Design Courses</div>
                </div>

                <div class="row card-group-row">

                    <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">

                        <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card"
                            data-toggle="popover" data-trigger="click">

                            <a href="student-course.html" class="card-img-top js-image" data-position="" data-height="140">
                                <img src="{{ asset('backend/user/images/paths/sketch_430x168.png') }}" alt="course">
                                <span class="overlay__content">
                                    <span class="overlay__action d-flex flex-column text-center">
                                        <i class="material-icons icon-32pt">play_circle_outline</i>
                                        <span class="card-title text-white">Preview</span>
                                    </span>
                                </span>
                            </a>

                            <div class="card-body flex">
                                <div class="d-flex">
                                    <div class="flex">
                                        <a class="card-title" href="student-course.html">Learn Sketch</a>
                                        <small class="text-50 font-weight-bold mb-4pt">Elijah Murray</small>
                                    </div>
                                    <a href="student-course.html" data-toggle="tooltip" data-title="Add Favorite"
                                        data-placement="top" data-boundary="window"
                                        class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                                </div>
                                <div class="d-flex">
                                    <div class="rating flex">
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star_border</span></span>
                                    </div>
                                    <!-- <small class="text-50">6 hours</small> -->
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row justify-content-between">
                                    <div class="col-auto d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                    </div>
                                    <div class="col-auto d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="popoverContainer d-none">
                            <div class="media">
                                <div class="media-left mr-12pt">
                                    <img src="{{ asset('backend/user/images/paths/sketch_40x40@2x.png') }}" width="40"
                                        height="40" alt="Angular" class="rounded">
                                </div>
                                <div class="media-body">
                                    <div class="card-title mb-0">Learn Sketch</div>
                                    <p class="lh-1 mb-0">
                                        <span class="text-50 small">with</span>
                                        <span class="text-50 small font-weight-bold">Elijah Murray</span>
                                    </p>
                                </div>
                            </div>

                            <p class="my-16pt text-70">Learn the fundamentals of working with Angular and how to
                                create basic applications.</p>

                            <div class="mb-16pt">
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                    <p class="flex text-50 lh-1 mb-0"><small>Fundamentals of working with
                                            Angular</small></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                    <p class="flex text-50 lh-1 mb-0"><small>Create complete Angular
                                            applications</small></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                    <p class="flex text-50 lh-1 mb-0"><small>Working with the Angular CLI</small>
                                    </p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                    <p class="flex text-50 lh-1 mb-0"><small>Understanding Dependency
                                            Injection</small></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                    <p class="flex text-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <div class="d-flex align-items-center mb-4pt">
                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                    </div>
                                    <div class="d-flex align-items-center mb-4pt">
                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                                    </div>
                                </div>
                                <div class="col text-right">
                                    <a href="student-course.html" class="btn btn-primary">Watch trailer</a>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">

                        <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card"
                            data-toggle="popover" data-trigger="click">

                            <a href="student-course.html" class="card-img-top js-image" data-position="" data-height="140">
                                <img src="{{ asset('backend/user/images/paths/flinto_430x168.png') }}" alt="course">
                                <span class="overlay__content">
                                    <span class="overlay__action d-flex flex-column text-center">
                                        <i class="material-icons icon-32pt">play_circle_outline</i>
                                        <span class="card-title text-white">Preview</span>
                                    </span>
                                </span>
                            </a>

                            <div class="card-body flex">
                                <div class="d-flex">
                                    <div class="flex">
                                        <a class="card-title" href="student-course.html">Learn Flinto</a>
                                        <small class="text-50 font-weight-bold mb-4pt">Elijah Murray</small>
                                    </div>
                                    <a href="student-course.html" data-toggle="tooltip" data-title="Add Favorite"
                                        data-placement="top" data-boundary="window"
                                        class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                                </div>
                                <div class="d-flex">
                                    <div class="rating flex">
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star_border</span></span>
                                    </div>
                                    <!-- <small class="text-50">6 hours</small> -->
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row justify-content-between">
                                    <div class="col-auto d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                    </div>
                                    <div class="col-auto d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="popoverContainer d-none">
                            <div class="media">
                                <div class="media-left mr-12pt">
                                    <img src="{{ asset('backend/user/images/paths/flinto_40x40@2x.png') }}" width="40"
                                        height="40" alt="Angular" class="rounded">
                                </div>
                                <div class="media-body">
                                    <div class="card-title mb-0">Learn Flinto</div>
                                    <p class="lh-1 mb-0">
                                        <span class="text-50 small">with</span>
                                        <span class="text-50 small font-weight-bold">Elijah Murray</span>
                                    </p>
                                </div>
                            </div>

                            <p class="my-16pt text-70">Learn the fundamentals of working with Angular and how to
                                create basic applications.</p>

                            <div class="mb-16pt">
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                    <p class="flex text-50 lh-1 mb-0"><small>Fundamentals of working with
                                            Angular</small></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                    <p class="flex text-50 lh-1 mb-0"><small>Create complete Angular
                                            applications</small></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                    <p class="flex text-50 lh-1 mb-0"><small>Working with the Angular CLI</small>
                                    </p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                    <p class="flex text-50 lh-1 mb-0"><small>Understanding Dependency
                                            Injection</small></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                    <p class="flex text-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <div class="d-flex align-items-center mb-4pt">
                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                    </div>
                                    <div class="d-flex align-items-center mb-4pt">
                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                                    </div>
                                </div>
                                <div class="col text-right">
                                    <a href="student-course.html" class="btn btn-primary">Watch trailer</a>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">

                        <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card"
                            data-toggle="popover" data-trigger="click">

                            <a href="student-course.html" class="card-img-top js-image" data-position="" data-height="140">
                                <img src="{{ asset('backend/user/images/paths/photoshop_430x168.png') }}" alt="course">
                                <span class="overlay__content">
                                    <span class="overlay__action d-flex flex-column text-center">
                                        <i class="material-icons icon-32pt">play_circle_outline</i>
                                        <span class="card-title text-white">Preview</span>
                                    </span>
                                </span>
                            </a>

                            <div class="card-body flex">
                                <div class="d-flex">
                                    <div class="flex">
                                        <a class="card-title" href="student-course.html">Learn Photoshop</a>
                                        <small class="text-50 font-weight-bold mb-4pt">Elijah Murray</small>
                                    </div>
                                    <a href="student-course.html" data-toggle="tooltip" data-title="Add Favorite"
                                        data-placement="top" data-boundary="window"
                                        class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                                </div>
                                <div class="d-flex">
                                    <div class="rating flex">
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star_border</span></span>
                                    </div>
                                    <!-- <small class="text-50">6 hours</small> -->
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row justify-content-between">
                                    <div class="col-auto d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                    </div>
                                    <div class="col-auto d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="popoverContainer d-none">
                            <div class="media">
                                <div class="media-left mr-12pt">
                                    <img src="{{ asset('backend/user/images/paths/photoshop_40x40@2x.png') }}" width="40"
                                        height="40" alt="Angular" class="rounded">
                                </div>
                                <div class="media-body">
                                    <div class="card-title mb-0">Learn Photoshop</div>
                                    <p class="lh-1 mb-0">
                                        <span class="text-50 small">with</span>
                                        <span class="text-50 small font-weight-bold">Elijah Murray</span>
                                    </p>
                                </div>
                            </div>

                            <p class="my-16pt text-70">Learn the fundamentals of working with Angular and how to
                                create basic applications.</p>

                            <div class="mb-16pt">
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                    <p class="flex text-50 lh-1 mb-0"><small>Fundamentals of working with
                                            Angular</small></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                    <p class="flex text-50 lh-1 mb-0"><small>Create complete Angular
                                            applications</small></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                    <p class="flex text-50 lh-1 mb-0"><small>Working with the Angular CLI</small>
                                    </p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                    <p class="flex text-50 lh-1 mb-0"><small>Understanding Dependency
                                            Injection</small></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                    <p class="flex text-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <div class="d-flex align-items-center mb-4pt">
                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                    </div>
                                    <div class="d-flex align-items-center mb-4pt">
                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                                    </div>
                                </div>
                                <div class="col text-right">
                                    <a href="student-course.html" class="btn btn-primary">Watch trailer</a>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">

                        <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card"
                            data-toggle="popover" data-trigger="click">

                            <a href="student-course.html" class="card-img-top js-image" data-position="" data-height="140">
                                <img src="{{ asset('backend/user/images/paths/figma_430x168.png') }}" alt="course">
                                <span class="overlay__content">
                                    <span class="overlay__action d-flex flex-column text-center">
                                        <i class="material-icons icon-32pt">play_circle_outline</i>
                                        <span class="card-title text-white">Preview</span>
                                    </span>
                                </span>
                            </a>
                            <div class="card-body flex">
                                <div class="d-flex">
                                    <div class="flex">
                                        <a class="card-title" href="student-course.html">Learn Figma</a>
                                        <small class="text-50 font-weight-bold mb-4pt">Elijah Murray</small>
                                    </div>
                                    <a href="student-course.html" data-toggle="tooltip" data-title="Add Favorite"
                                        data-placement="top" data-boundary="window"
                                        class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                                </div>
                                <div class="d-flex">
                                    <div class="rating flex">
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star_border</span></span>
                                    </div>
                                    <!-- <small class="text-50">6 hours</small> -->
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row justify-content-between">
                                    <div class="col-auto d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                    </div>
                                    <div class="col-auto d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="popoverContainer d-none">
                            <div class="media">
                                <div class="media-left mr-12pt">
                                    <img src="{{ asset('backend/user/images/paths/figma_40x40@2x.png') }}" width="40"
                                        height="40" alt="Angular" class="rounded">
                                </div>
                                <div class="media-body">
                                    <div class="card-title mb-0">Learn Figma</div>
                                    <p class="lh-1 mb-0">
                                        <span class="text-50 small">with</span>
                                        <span class="text-50 small font-weight-bold">Elijah Murray</span>
                                    </p>
                                </div>
                            </div>

                            <p class="my-16pt text-70">Learn the fundamentals of working with Angular and how to
                                create basic applications.</p>

                            <div class="mb-16pt">
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                    <p class="flex text-50 lh-1 mb-0"><small>Fundamentals of working with
                                            Angular</small></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                    <p class="flex text-50 lh-1 mb-0"><small>Create complete Angular
                                            applications</small></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                    <p class="flex text-50 lh-1 mb-0"><small>Working with the Angular CLI</small>
                                    </p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                    <p class="flex text-50 lh-1 mb-0"><small>Understanding Dependency
                                            Injection</small></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                    <p class="flex text-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <div class="d-flex align-items-center mb-4pt">
                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                    </div>
                                    <div class="d-flex align-items-center mb-4pt">
                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                                    </div>
                                </div>
                                <div class="col text-right">
                                    <a href="student-course.html" class="btn btn-primary">Watch trailer</a>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- // END Page Content -->
        <!-- Footer -->
        <!-- // END Footer -->
    </div>
@endsection
