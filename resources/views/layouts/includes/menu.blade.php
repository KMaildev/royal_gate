<header class="header-area">
    <!-- Start Top Header -->
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9 col-md-9">
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

                        <li>
                            <span>Mail</span>
                            <a href="mailto:info@royalgatecompany.com">
                                info@royalgatecompany.com
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-3">
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
                                        <a href="{{ route('language.index') }}" class="dropdown-item">
                                            <img src="{{ asset('assets/images/language/english.png') }}"
                                                alt="Flag">
                                            <span>English</span>
                                        </a>

                                        <a href="{{ route('set_jp') }}" class="dropdown-item">
                                            <img src="{{ asset('data/jp.png') }}" alt="Flag">
                                            <span>Japan</span>
                                        </a>

                                        <a href="{{ route('set_mm') }}" class="dropdown-item">
                                            <img src="{{ asset('data/mm.jpeg') }}" alt="Flag">
                                            <span>Myanmar</span>
                                        </a>
                                    </div>
                                </div>
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
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('data/weblogo.png') }}" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="desktop-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{ route('home') }}" style="width: 29%;">
                        <img src="{{ asset('data/weblogo.png') }}" alt="logo">
                    </a>

                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link active">
                                    @if (session()->get('lang') == 'jp')
                                        ???
                                    @elseif (session()->get('lang') == 'mm')
                                        ???????????????????????????????????????
                                    @else
                                        Home
                                    @endif
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    @if (session()->get('lang') == 'jp')
                                        ????????????????????????
                                    @elseif (session()->get('lang') == 'mm')
                                        ?????????????????????
                                    @else
                                        About Us
                                    @endif
                                    <i class="bx bx-chevron-down"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('about.index') }}" class="nav-link active">
                                            @if (session()->get('lang') == 'jp')
                                                ????????????
                                            @elseif (session()->get('lang') == 'mm')
                                                ?????????????????????????????????????????????
                                            @else
                                                Company Profile
                                            @endif
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('director_message.index') }}" class="nav-link active">
                                            @if (session()->get('lang') == 'jp')
                                                ?????????????????????????????????
                                            @elseif (session()->get('lang') == 'mm')
                                                Director Message
                                            @else
                                                Director Message
                                            @endif
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('statement.index') }}" class="nav-link active">
                                            @if (session()->get('lang') == 'jp')
                                                ??????????????????????????????
                                            @elseif (session()->get('lang') == 'mm')
                                                Vision & Misstion
                                            @else
                                                Vision & Misstion
                                            @endif
                                        </a>
                                    </li>


                                    <li class="nav-item">
                                        <a href="{{ route('process_chart.index') }}" class="nav-link active">
                                            @if (session()->get('lang') == 'jp')
                                                ????????????????????????
                                            @elseif (session()->get('lang') == 'mm')
                                                Process Chart
                                            @else
                                                Process Chart
                                            @endif
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ asset('data/royal_gate.pdf') }}" class="nav-link active"
                                            target="_blank">
                                            @if (session()->get('lang') == 'jp')
                                                ???????????????????????????
                                            @elseif (session()->get('lang') == 'mm')
                                                Company Brochure
                                            @else
                                                Company Brochure
                                            @endif
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('organization.index') }}" class="nav-link active">
                                            @if (session()->get('lang') == 'jp')
                                                ?????????????????????
                                            @elseif (session()->get('lang') == 'mm')
                                                Our Organization Chart
                                            @else
                                                Our Organization Chart
                                            @endif
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('team.index') }}" class="nav-link active">
                                            @if (session()->get('lang') == 'jp')
                                                ?????????????????????
                                            @elseif (session()->get('lang') == 'mm')
                                                Our Team
                                            @else
                                                Our Team
                                            @endif
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('partners.index') }}" class="nav-link active">
                                            @if (session()->get('lang') == 'jp')
                                                ???????????????????????????
                                            @elseif (session()->get('lang') == 'mm')
                                                Our Partners
                                            @else
                                                Our Partners
                                            @endif
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    @if (session()->get('lang') == 'jp')
                                        ???????????????????????????
                                    @elseif (session()->get('lang') == 'mm')
                                        Manpower Services
                                    @else
                                        Manpower Services
                                    @endif
                                    <i class="bx bx-chevron-down"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('country.index') }}" class="nav-link active">
                                            @if (session()->get('lang') == 'jp')
                                                ???
                                            @elseif (session()->get('lang') == 'mm')
                                                Countries We Serve
                                            @else
                                                Countries We Serve
                                            @endif
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('recruitment_services.index') }}" class="nav-link active">
                                            @if (session()->get('lang') == 'jp')
                                                ??????????????????????????????
                                            @elseif (session()->get('lang') == 'mm')
                                                Our Recruitment Services
                                            @else
                                                Our Recruitment Services
                                            @endif
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('milestones.index') }}" class="nav-link active">
                                            @if (session()->get('lang') == 'jp')
                                                ?????????????????????
                                            @elseif (session()->get('lang') == 'mm')
                                                Milestones
                                            @else
                                                Milestones
                                            @endif
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    @if (session()->get('lang') == 'jp')
                                        ??????
                                    @elseif (session()->get('lang') == 'mm')
                                        Application
                                    @else
                                        Application
                                    @endif
                                    <i class="bx bx-chevron-down"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('cv.index') }}" class="nav-link active">
                                            @if (session()->get('lang') == 'jp')
                                                ????????????????????????
                                            @elseif (session()->get('lang') == 'mm')
                                                Submit CV
                                            @else
                                                Submit CV
                                            @endif
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('employer.index') }}" class="nav-link active">
                                            @if (session()->get('lang') == 'jp')
                                                ?????????????????????
                                            @elseif (session()->get('lang') == 'mm')
                                                Employer Form
                                            @else
                                                Employer Form
                                            @endif
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            <li class="nav-item">
                                <a href="{{ route('news.index') }}" class="nav-link active">
                                    @if (session()->get('lang') == 'jp')
                                        ????????????
                                    @elseif (session()->get('lang') == 'mm')
                                        News
                                    @else
                                        News
                                    @endif
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('activities.index') }}" class="nav-link active">
                                    @if (session()->get('lang') == 'jp')
                                        ??????
                                    @elseif (session()->get('lang') == 'mm')
                                        Activities
                                    @else
                                        Activities
                                    @endif
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('contact.index') }}" class="nav-link active">
                                    @if (session()->get('lang') == 'jp')
                                        ??????????????????
                                    @elseif (session()->get('lang') == 'mm')
                                        ??????????????????????????????
                                    @else
                                        Contact Us
                                    @endif
                                </a>
                            </li>
                        </ul>

                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->
</header>
