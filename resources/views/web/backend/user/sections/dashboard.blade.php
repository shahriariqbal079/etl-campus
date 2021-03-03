<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Luma</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CRoboto:400,500%7CExo+2:600&display=swap"
        rel="stylesheet">

    <!-- Preloader -->
    <link type="text/css" href="{{ asset('backend/user/vendor/spinkit.css') }}" rel="stylesheet">

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="{{ asset('backend/user/vendor/perfect-scrollbar.css') }}" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="{{ asset('backend/user/css/material-icons.css') }}" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link type="text/css" href="{{ asset('backend/user/css/fontawesome.css') }}" rel="stylesheet">

    <!-- Preloader -->
    <link type="text/css" href="{{ asset('backend/user/css/preloader.css') }}" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="{{ asset('backend/user/css/app.css') }}" rel="stylesheet">

</head>

<body class="layout-boxed ">

    <div class="preloader">
        <div class="sk-chase">
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
        </div>

        <!-- <div class="sk-bounce">
    <div class="sk-bounce-dot"></div>
    <div class="sk-bounce-dot"></div>
  </div> -->

        <!-- More spinner examples at https://github.com/tobiasahlin/SpinKit/blob/master/examples.html -->
    </div>

    <!-- Drawer Layout -->

    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
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
                        <div
                            class="d-flex col-md align-items-center border-bottom border-md-0 mb-16pt mb-md-0 pb-16pt pb-md-0">
                            <div
                                class="rounded-circle bg-primary w-64 h-64 d-inline-flex align-items-center justify-content-center mr-16pt">
                                <i class="material-icons text-white">subscriptions</i>
                            </div>
                            <div class="flex">
                                <div class="card-title mb-4pt">8,000+ Courses</div>
                                <p class="card-subtitle text-70">Explore a wide range of skills.</p>
                            </div>
                        </div>
                        <div
                            class="d-flex col-md align-items-center border-bottom border-md-0 mb-16pt mb-md-0 pb-16pt pb-md-0">
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
                                <img src="{{asset('backend/user/images/paths/sketch_430x168.png')}}" alt="" class="card-img">
                                <div class="fullbleed bg-primary" style="opacity: .5"></div>
                                <div class="posts-card-popular__content">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="avatar-group flex">
                                            <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top"
                                                title="Janell D.">
                                                <a href=""><img
                                                        src="{{asset('backend/user/images/256_luke-porter-261779-unsplash.jpg')}}"
                                                        alt="Avatar" class="avatar-img rounded-circle"></a>
                                            </div>
                                        </div>
                                        <a style="text-decoration: none;" class="d-flex align-items-center" href=""><i
                                                class="material-icons mr-1"
                                                style="font-size: inherit;">remove_red_eye</i> <small>327</small></a>
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
                                <img src="{{asset('backend/user/images/paths/invision_430x168.png')}}" alt="" class="card-img">
                                <div class="fullbleed bg-primary" style="opacity: .5"></div>
                                <div class="posts-card-popular__content">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="avatar-group flex">
                                            <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top"
                                                title="Janell D.">
                                                <a href=""><img
                                                        src="{{asset('backend/user/images/256_michael-dam-258165-unsplash.jpg')}}"
                                                        alt="Avatar" class="avatar-img rounded-circle"></a>
                                            </div>
                                        </div>
                                        <a style="text-decoration: none;" class="d-flex align-items-center" href=""><i
                                                class="material-icons mr-1"
                                                style="font-size: inherit;">remove_red_eye</i> <small>327</small></a>
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
                                <img src="../../public/images/paths/photoshop_430x168.png" alt="" class="card-img">
                                <div class="fullbleed bg-primary" style="opacity: .5"></div>
                                <div class="posts-card-popular__content">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="avatar-group flex">
                                            <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top"
                                                title="Janell D.">
                                                <a href=""><img
                                                        src="../../public/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                        alt="Avatar" class="avatar-img rounded-circle"></a>
                                            </div>
                                        </div>
                                        <a style="text-decoration: none;" class="d-flex align-items-center" href=""><i
                                                class="material-icons mr-1"
                                                style="font-size: inherit;">remove_red_eye</i> <small>327</small></a>
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
                                    <a href="blog-post.html"><img src="../../public/images/paths/invision_200x168.png"
                                            alt="avatar" class="avatar-img rounded"></a>
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
                                                <img src="../../public/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                    alt="Avatar" class="avatar-img rounded-circle">
                                            </div>

                                            <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top"
                                                title="Janell D.">
                                                <img src="../../public/images/256_michael-dam-258165-unsplash.jpg"
                                                    alt="Avatar" class="avatar-img rounded-circle">
                                            </div>

                                            <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top"
                                                title="Janell D.">
                                                <img src="../../public/images/256_luke-porter-261779-unsplash.jpg"
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
                                                        <img src="../../public/images/paths/react_40x40@2x.png"
                                                            width="40" height="40" alt="Angular" class="rounded">
                                                        <span class="overlay__content overlay__content-transparent">
                                                            <span
                                                                class="overlay__action d-flex flex-column text-center lh-1">
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
                                        <img src="../../public/images/paths/react_40x40@2x.png" width="40" height="40"
                                            alt="Angular" class="rounded">
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
                                            <span
                                                class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
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
                                        <span class="rating__item"><span
                                                class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span
                                                class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span
                                                class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span
                                                class="material-icons text-primary">star</span></span>
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
                                                        <img src="../../public/images/paths/devops_40x40@2x.png"
                                                            width="40" height="40" alt="Angular" class="rounded">
                                                        <span class="overlay__content overlay__content-transparent">
                                                            <span
                                                                class="overlay__action d-flex flex-column text-center lh-1">
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
                                        <img src="../../public/images/paths/devops_40x40@2x.png" width="40" height="40"
                                            alt="Angular" class="rounded">
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
                                            <span
                                                class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
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
                                        <span class="rating__item"><span
                                                class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span
                                                class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span
                                                class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span
                                                class="material-icons text-primary">star</span></span>
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
                                                        <img src="../../public/images/paths/redis_40x40@2x.png"
                                                            width="40" height="40" alt="Angular" class="rounded">
                                                        <span class="overlay__content overlay__content-transparent">
                                                            <span
                                                                class="overlay__action d-flex flex-column text-center lh-1">
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
                                        <img src="../../public/images/paths/redis_40x40@2x.png" width="40" height="40"
                                            alt="Angular" class="rounded">
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
                                            <span
                                                class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
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
                                        <span class="rating__item"><span
                                                class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span
                                                class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span
                                                class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span
                                                class="material-icons text-primary">star</span></span>
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
                                                        <img src="../../public/images/paths/mailchimp_40x40@2x.png"
                                                            width="40" height="40" alt="Angular" class="rounded">
                                                        <span class="overlay__content overlay__content-transparent">
                                                            <span
                                                                class="overlay__action d-flex flex-column text-center lh-1">
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
                                        <img src="../../public/images/paths/mailchimp_40x40@2x.png" width="40"
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
                                            <span
                                                class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
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
                                        <span class="rating__item"><span
                                                class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span
                                                class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span
                                                class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span
                                                class="material-icons text-primary">star</span></span>
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
                                                        <img src="../../public/images/paths/swift_40x40@2x.png"
                                                            width="40" height="40" alt="Angular" class="rounded">
                                                        <span class="overlay__content overlay__content-transparent">
                                                            <span
                                                                class="overlay__action d-flex flex-column text-center lh-1">
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
                                        <img src="../../public/images/paths/swift_40x40@2x.png" width="40" height="40"
                                            alt="Angular" class="rounded">
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
                                            <span
                                                class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
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
                                        <span class="rating__item"><span
                                                class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span
                                                class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span
                                                class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span
                                                class="material-icons text-primary">star</span></span>
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
                                                        <img src="../../public/images/paths/wordpress_40x40@2x.png"
                                                            width="40" height="40" alt="Angular" class="rounded">
                                                        <span class="overlay__content overlay__content-transparent">
                                                            <span
                                                                class="overlay__action d-flex flex-column text-center lh-1">
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
                                        <img src="../../public/images/paths/wordpress_40x40@2x.png" width="40"
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
                                            <span
                                                class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
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
                                        <span class="rating__item"><span
                                                class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span
                                                class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span
                                                class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span
                                                class="material-icons text-primary">star</span></span>
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

                                <a href="student-course.html" class="card-img-top js-image" data-position=""
                                    data-height="140">
                                    <img src="../../public/images/paths/sketch_430x168.png" alt="course">
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
                                            <span class="rating__item"><span
                                                    class="material-icons">star_border</span></span>
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
                                            <span
                                                class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                            <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="popoverContainer d-none">
                                <div class="media">
                                    <div class="media-left mr-12pt">
                                        <img src="../../public/images/paths/sketch_40x40@2x.png" width="40" height="40"
                                            alt="Angular" class="rounded">
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
                                            <span
                                                class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
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

                                <a href="student-course.html" class="card-img-top js-image" data-position=""
                                    data-height="140">
                                    <img src="../../public/images/paths/flinto_430x168.png" alt="course">
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
                                            <span class="rating__item"><span
                                                    class="material-icons">star_border</span></span>
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
                                            <span
                                                class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                            <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="popoverContainer d-none">
                                <div class="media">
                                    <div class="media-left mr-12pt">
                                        <img src="../../public/images/paths/flinto_40x40@2x.png" width="40" height="40"
                                            alt="Angular" class="rounded">
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
                                            <span
                                                class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
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

                                <a href="student-course.html" class="card-img-top js-image" data-position=""
                                    data-height="140">
                                    <img src="../../public/images/paths/photoshop_430x168.png" alt="course">
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
                                            <span class="rating__item"><span
                                                    class="material-icons">star_border</span></span>
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
                                            <span
                                                class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                            <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="popoverContainer d-none">
                                <div class="media">
                                    <div class="media-left mr-12pt">
                                        <img src="../../public/images/paths/photoshop_40x40@2x.png" width="40"
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
                                            <span
                                                class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
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

                                <a href="student-course.html" class="card-img-top js-image" data-position=""
                                    data-height="140">
                                    <img src="../../public/images/paths/figma_430x168.png" alt="course">
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
                                            <span class="rating__item"><span
                                                    class="material-icons">star_border</span></span>
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
                                            <span
                                                class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                            <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="popoverContainer d-none">
                                <div class="media">
                                    <div class="media-left mr-12pt">
                                        <img src="../../public/images/paths/figma_40x40@2x.png" width="40" height="40"
                                            alt="Angular" class="rounded">
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
                                            <span
                                                class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
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

        <!-- // END drawer-layout__content -->

        <!-- Drawer -->

        <div class="mdk-drawer js-mdk-drawer" id="default-drawer">
            <div class="mdk-drawer__content">
                <div class="sidebar sidebar-light sidebar-light-dodger-blue sidebar-left" data-perfect-scrollbar>

                    <!-- Sidebar Content -->

                    <a href="index.html" class="sidebar-brand sidebar-brand-dark bg-primary-pickled-bluewood">
                        <!-- <img class="sidebar-brand-icon" src="../../public/images/illustration/student/128/white.svg" alt="Luma"> -->

                        <span class="avatar avatar-xl sidebar-brand-icon h-auto">

                            <span class="avatar-title rounded bg-primary"><img
                                    src="{{asset('backend/user/images/illustration/student/128/white.svg')}}" class="img-fluid"
                                    alt="logo" /></span>

                        </span>

                        <span>ETL Campus</span>
                    </a>

                    <div class="sidebar-heading">Student</div>
                    <ul class="sidebar-menu">

                        <li class="sidebar-menu-item active">
                            <a class="sidebar-menu-button" href="index.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">home</span>
                                <span class="sidebar-menu-text">Home</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="courses.html">
                                <span
                                    class="material-icons sidebar-menu-icon sidebar-menu-icon--left">local_library</span>
                                <span class="sidebar-menu-text">Browse Courses</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="paths.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">style</span>
                                <span class="sidebar-menu-text">Browse Paths</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="student-dashboard.html">
                                <span
                                    class="material-icons sidebar-menu-icon sidebar-menu-icon--left">account_box</span>
                                <span class="sidebar-menu-text">Student Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="student-my-courses.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">search</span>
                                <span class="sidebar-menu-text">My Courses</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="student-paths.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">timeline</span>
                                <span class="sidebar-menu-text">My Paths</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="student-path.html">
                                <span
                                    class="material-icons sidebar-menu-icon sidebar-menu-icon--left">change_history</span>
                                <span class="sidebar-menu-text">Path Details</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="student-course.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">face</span>
                                <span class="sidebar-menu-text">Course Preview</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="student-lesson.html">
                                <span
                                    class="material-icons sidebar-menu-icon sidebar-menu-icon--left">panorama_fish_eye</span>
                                <span class="sidebar-menu-text">Lesson Preview</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="student-take-course.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">class</span>
                                <span class="sidebar-menu-text">Take Course</span>
                                <span
                                    class="sidebar-menu-badge badge badge-accent badge-notifications ml-auto">PRO</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="student-take-lesson.html">
                                <span
                                    class="material-icons sidebar-menu-icon sidebar-menu-icon--left">import_contacts</span>
                                <span class="sidebar-menu-text">Take Lesson</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="student-take-quiz.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">dvr</span>
                                <span class="sidebar-menu-text">Take Quiz</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="student-quiz-results.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">poll</span>
                                <span class="sidebar-menu-text">My Quizzes</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="student-quiz-result-details.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">live_help</span>
                                <span class="sidebar-menu-text">Quiz Result</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="student-path-assessment.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">layers</span>
                                <span class="sidebar-menu-text">Skill Assessment</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="student-path-assessment-result.html">
                                <span
                                    class="material-icons sidebar-menu-icon sidebar-menu-icon--left">assignment_turned_in</span>
                                <span class="sidebar-menu-text">Skill Result</span>
                            </a>
                        </li>

                    </ul>
                    


              

                    <!-- // END Sidebar Content -->

                </div>
            </div>
        </div>

        <!-- // END Drawer -->

    </div>

    <!-- // END Drawer Layout -->

    <!-- jQuery -->
    <script src="{{ asset('backend/user/vendor/jquery.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('backend/user/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('backend/user/vendor/bootstrap.min.js') }}"></script>

    <!-- Perfect Scrollbar -->
    <script src="{{ asset('backend/user/vendor/perfect-scrollbar.min.js') }}"></script>

    <!-- DOM Factory -->
    <script src="{{ asset('backend/user/vendor/dom-factory.js') }}"></script>

    <!-- MDK -->
    <script src="{{ asset('backend/user/vendor/material-design-kit.js') }}"></script>

    <!-- App JS -->
    <script src="{{ asset('backend/user/js/app.js') }}"></script>

    <!-- Preloader -->
    <script src="{{ asset('backend/user/js/preloader.js') }}"></script>

</body>

</html>
