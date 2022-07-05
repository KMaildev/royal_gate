<header class="header-area">
    <!-- Start Top Header -->
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <ul class="header-left-content">
                        <li>
                            <span>Contact No</span>
                            <a href="tel:951 201484">
                                951 201484,
                            </a>
                            <a href="tel:8619080">
                                8619080,
                            </a>
                            <a href="tel:959 5100542">
                                959 5100542,
                            </a>
                        </li>
                        <li>
                            <span>Fax</span>
                            <a href="tel:951 202836">
                                951 202836
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="header-right-content">
                        <ul class="language">
                            <li>
                                <div class="dropdown language-btn">
                                    <button class="dropdown-toggle" type="button" data-toggle="dropdown">
                                        <span>
                                            Language
                                            <i class="bx bx-chevron-down"></i>
                                        </span>
                                    </button>

                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item">
                                            <img src="{{ asset('assets/images/language/english.png') }}"
                                                alt="Flag">
                                            <span>English</span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <ul class="log-in">
                            <li>
                                <a href="#">
                                    <i class="bx bxs-lock"></i>
                                    Log In
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="bx bxs-user"></i>
                                    Register
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Top Header -->

    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <div class="mobile-nav">
            <div class="container">
                <div class="mobile-menu">
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="desktop-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                    </a>

                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link active">
                                    Home
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    About Us
                                    <i class="bx bx-chevron-down"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="job-listing.html" class="nav-link">Job Listing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="post-job.html" class="nav-link">Post A Job</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="job-details.html" class="nav-link">Job Details</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Available Jobs
                                    <i class="bx bx-chevron-down"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="candidates-listing.html" class="nav-link">Candidates Listing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="candidates-details.html" class="nav-link">Candidates Details</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Candidate Dashboard
                                            <i class="bx bx-chevron-down"></i>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="dashboard.html" class="nav-link">Dashboard</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="profile.html" class="nav-link">Profile</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="resume.html" class="nav-link">Resume</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="bookmarks.html" class="nav-link">Bookmarks</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="applied-jobs.html" class="nav-link">Applied Jobs</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="alert-jobs.html" class="nav-link">Alert Jobs</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="message.html" class="nav-link">Message</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="change-password.html" class="nav-link">Change
                                                    Password</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>


                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Application
                                    <i class="bx bx-chevron-down"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('cv.index') }}" class="nav-link">
                                            Submit CV
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('employer.index') }}" class="nav-link">
                                            Employer Form
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Work For Us
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('news.index') }}" class="nav-link">
                                    News
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Activities
                                </a>
                            </li>
                        </ul>

                        <div class="others-option">
                            <div class="get-quote">
                                <a href="{{ route('contact.index') }}" class="default-btn">
                                    Contact Us
                                </a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>

                <div class="container">
                    <div class="option-inner">
                        <div class="others-option justify-content-center d-flex align-items-center">
                            <div class="get-quote">
                                <a href="post-job.html" class="default-btn">
                                    Post a Job
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->
</header>
