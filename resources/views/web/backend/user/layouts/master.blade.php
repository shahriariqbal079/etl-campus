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

    @yield('css_before')

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

    @yield('css_after')


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

            <!-- Navbar -->

            <div class="navbar navbar-expand pr-0 navbar-dark navbar-dark-pickled-bluewood navbar-shadow"
                id="default-navbar" data-primary>

                <!-- Navbar Toggler -->

                <button class="navbar-toggler w-auto mr-16pt d-block d-lg-none rounded-0" type="button"
                    data-toggle="sidebar">
                    <span class="material-icons">short_text</span>
                </button>

                <!-- // END Navbar Toggler -->

                <!-- Navbar Brand -->

                <a href="index.html" class="navbar-brand mr-16pt d-lg-none">

                    <span class="avatar avatar-sm navbar-brand-icon mr-0 mr-lg-8pt">

                        <span class="avatar-title rounded bg-primary"><img
                                src="../../public/images/illustration/student/128/white.svg" alt="logo"
                                class="img-fluid" /></span>

                    </span>

                    <span class="d-none d-lg-block">Luma</span>
                </a>

                <!-- // END Navbar Brand -->

                <span class="d-none d-md-flex align-items-center mr-16pt">

                    <span class="avatar avatar-sm mr-12pt">

                        <span class="avatar-title rounded navbar-avatar"><i class="material-icons">opacity</i></span>

                    </span>

                    <small class="flex d-flex flex-column">
                        <strong class="navbar-text-100">Experience IQ</strong>
                        <span class="navbar-text-50">2,300 points</span>
                    </small>
                </span>

                <!-- Navbar Search -->

                <form class="search-form navbar-search d-none d-md-flex mr-16pt" action="index.html">
                    <button class="btn" type="submit"><i class="material-icons">search</i></button>
                    <input type="text" class="form-control" placeholder="Search ...">
                </form>

                <!-- // END Navbar Search -->

                <div class="flex"></div>

                <!-- Navbar Menu -->

                <div class="nav navbar-nav flex-nowrap d-flex mr-16pt">

                    <!-- Notifications dropdown -->
                    <div class="nav-item dropdown dropdown-notifications dropdown-xs-down-full" data-toggle="tooltip"
                        data-title="Messages" data-placement="bottom" data-boundary="window">
                        <button class="nav-link btn-flush dropdown-toggle" type="button" data-toggle="dropdown"
                            data-caret="false">
                            <i class="material-icons icon-24pt">mail_outline</i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div data-perfect-scrollbar class="position-relative">
                                <div class="dropdown-header"><strong>Messages</strong></div>
                                <div class="list-group list-group-flush mb-0">

                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action unread">
                                        <span class="d-flex align-items-center mb-1">
                                            <small class="text-black-50">5 minutes ago</small>

                                            <span class="ml-auto unread-indicator bg-accent"></span>

                                        </span>
                                        <span class="d-flex">
                                            <span class="avatar avatar-xs mr-2">
                                                <img src="../../public/images/people/110/woman-5.jpg" alt="people"
                                                    class="avatar-img rounded-circle">
                                            </span>
                                            <span class="flex d-flex flex-column">
                                                <strong class="text-black-100">Michelle</strong>
                                                <span class="text-black-70">Clients loved the new design.</span>
                                            </span>
                                        </span>
                                    </a>

                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action">
                                        <span class="d-flex align-items-center mb-1">
                                            <small class="text-black-50">5 minutes ago</small>

                                        </span>
                                        <span class="d-flex">
                                            <span class="avatar avatar-xs mr-2">
                                                <img src="../../public/images/people/110/woman-5.jpg" alt="people"
                                                    class="avatar-img rounded-circle">
                                            </span>
                                            <span class="flex d-flex flex-column">
                                                <strong class="text-black-100">Michelle</strong>
                                                <span class="text-black-70">🔥 Superb job..</span>
                                            </span>
                                        </span>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // END Notifications dropdown -->

                    <!-- Notifications dropdown -->
                    <div class="nav-item ml-16pt dropdown dropdown-notifications dropdown-xs-down-full"
                        data-toggle="tooltip" data-title="Notifications" data-placement="bottom" data-boundary="window">
                        <button class="nav-link btn-flush dropdown-toggle" type="button" data-toggle="dropdown"
                            data-caret="false">
                            <i class="material-icons">notifications_none</i>
                            <span class="badge badge-notifications badge-accent">2</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div data-perfect-scrollbar class="position-relative">
                                <div class="dropdown-header"><strong>System notifications</strong></div>
                                <div class="list-group list-group-flush mb-0">

                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action unread">
                                        <span class="d-flex align-items-center mb-1">
                                            <small class="text-black-50">3 minutes ago</small>

                                            <span class="ml-auto unread-indicator bg-accent"></span>

                                        </span>
                                        <span class="d-flex">
                                            <span class="avatar avatar-xs mr-2">
                                                <span class="avatar-title rounded-circle bg-light">
                                                    <i
                                                        class="material-icons font-size-16pt text-accent">account_circle</i>
                                                </span>
                                            </span>
                                            <span class="flex d-flex flex-column">

                                                <span class="text-black-70">Your profile information has not been synced
                                                    correctly.</span>
                                            </span>
                                        </span>
                                    </a>

                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action">
                                        <span class="d-flex align-items-center mb-1">
                                            <small class="text-black-50">5 hours ago</small>

                                        </span>
                                        <span class="d-flex">
                                            <span class="avatar avatar-xs mr-2">
                                                <span class="avatar-title rounded-circle bg-light">
                                                    <i class="material-icons font-size-16pt text-primary">group_add</i>
                                                </span>
                                            </span>
                                            <span class="flex d-flex flex-column">
                                                <strong class="text-black-100">Adrian. D</strong>
                                                <span class="text-black-70">Wants to join your private group.</span>
                                            </span>
                                        </span>
                                    </a>

                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action">
                                        <span class="d-flex align-items-center mb-1">
                                            <small class="text-black-50">1 day ago</small>

                                        </span>
                                        <span class="d-flex">
                                            <span class="avatar avatar-xs mr-2">
                                                <span class="avatar-title rounded-circle bg-light">
                                                    <i class="material-icons font-size-16pt text-warning">storage</i>
                                                </span>
                                            </span>
                                            <span class="flex d-flex flex-column">

                                                <span class="text-black-70">Your deploy was successful.</span>
                                            </span>
                                        </span>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // END Notifications dropdown -->

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown"
                            data-caret="false">

                            <span class="avatar avatar-sm mr-8pt2">

                                <span class="avatar-title rounded-circle bg-primary"><i
                                        class="material-icons">account_box</i></span>

                            </span>

                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-header"><strong>Account</strong></div>
                            <a class="dropdown-item" href="edit-account.html">Edit Account</a>
                            <a class="dropdown-item" href="billing.html">Billing</a>
                            <a class="dropdown-item" href="billing-history.html">Payments</a>

                            <a href="{{ route('user.logout') }}" class="dropdown-item">Logout</a>

                        </div>
                    </div>
                </div>

                <!-- // END Navbar Menu -->

            </div>

            <!-- // END Navbar -->

            <!-- // END Header -->

            @yield('content')
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
                                    src="{{ asset('backend/user/images/illustration/student/128/white.svg') }}"
                                    class="img-fluid" alt="logo" /></span>

                        </span>

                        <span>ETL Campus</span>
                    </a>

                    <div class="sidebar-heading">Student</div>
                    <ul class="sidebar-menu">

                        <li class="sidebar-menu-item active">
                            <a class="sidebar-menu-button" href="{{ route('home') }}">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">home</span>
                                <span class="sidebar-menu-text">Home</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{ route('user.browse-courses') }}">
                                <span
                                    class="material-icons sidebar-menu-icon sidebar-menu-icon--left">local_library</span>
                                <span class="sidebar-menu-text">Browse Courses</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{ route('user.student-dashboard') }}">
                                <span
                                    class="material-icons sidebar-menu-icon sidebar-menu-icon--left">account_box</span>
                                <span class="sidebar-menu-text">Student Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{ route('user.courses') }}">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">search</span>
                                <span class="sidebar-menu-text">My Courses</span>
                            </a>
                        </li>


                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{ route('user.course-preview') }}">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">face</span>
                                <span class="sidebar-menu-text">Course Preview</span>
                            </a>
                        </li>



                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{ route('user.take-quiz') }}">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">dvr</span>
                                <span class="sidebar-menu-text">Take Quiz</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{ route('user.my-quizzes') }}">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">poll</span>
                                <span class="sidebar-menu-text">My Quizzes</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{ route('user.quiz-result') }}">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">live_help</span>
                                <span class="sidebar-menu-text">Quiz Result</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{ route('user.skill-assessment') }}">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">layers</span>
                                <span class="sidebar-menu-text">Skill Assessment</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{ route('user.skill-result') }}">
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

    @yield('js_before')

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

    @yield('js_after')

</body>

</html>
