    <nav class="pc-sidebar">
        <div class="navbar-wrapper">
            <div class="m-header">
                <a href="{{ asset('/') }}/dashboard/index.html" class="b-brand text-primary">
                    <!-- ========   Change your logo from here   ============ -->
                    <img src="{{ asset('/') }}/assets/images/logo-dark.svg" class="img-fluid logo-lg" alt="logo">
                </a>
            </div>
            <div class="navbar-content">
                <ul class="pc-navbar">
                    <li class="pc-item">
                        <a href="{{ route('dashboard') }}" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#dashboard"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext">Dashboard</span>
                        </a>
                    </li>

                    <li class="pc-item pc-caption">
                        <label data-i18n="Widget">UI Components</label>
                        <i class="pc-micon">
                            <svg class="pc-icon">
                                <use xlink:href="#line-chart"></use>
                            </svg>
                        </i>
                    </li>
                    <li class="pc-item">
                        <a href="{{ route('typography') }}" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#font-size"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext">Typography</span>
                        </a>
                    </li>
                    <li class="pc-item">
                        <a href="{{ route('color') }}" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#bg-colors"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext">Color</span>
                        </a>
                    </li>
                    <li class="pc-item">
                        <a href="{{ route('icons') }}" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#highlight"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext">Icons</span>
                        </a>
                    </li>
                    <li class="pc-item pc-caption">
                        <label data-i18n="Widget">Pages</label>
                        <i class="pc-micon">
                            <svg class="pc-icon">
                                <use xlink:href="#line-chart"></use>
                            </svg>
                        </i>
                    </li>
                    <li class="pc-item">
                        <a href="{{ url('/url-login') }}" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#lock"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext">Login</span>
                        </a>
                    </li>
                    <li class="pc-item">
                        <a href="{{ url('/url-register') }}" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#user-add"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext">Register</span>
                        </a>
                    </li>
                    <li class="pc-item pc-caption">
                        <label data-i18n="Widget">Other</label>
                        <i class="pc-micon">
                            <svg class="pc-icon">
                                <use xlink:href="#line-chart"></use>
                            </svg>
                        </i>
                    </li>

                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#swap"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext" data-i18n="Menu levels">Menu levels</span>
                            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                        </a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="#!" data-i18n="Level 2.1">Level
                                    2.1</a></li>
                            <li class="pc-item pc-hasmenu">
                                <a href="#!" class="pc-link">
                                    <span data-i18n="Level 2.2">Level 2.2</span>
                                    <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                                </a>
                                <ul class="pc-submenu">
                                    <li class="pc-item"><a class="pc-link" href="#!" data-i18n="Level 3.1">Level
                                            3.1</a></li>
                                    <li class="pc-item"><a class="pc-link" href="#!" data-i18n="Level 3.2">Level
                                            3.2</a></li>
                                    <li class="pc-item pc-hasmenu">
                                        <a href="#!" class="pc-link">
                                            <span data-i18n="Level 3.3">Level 3.3</span>
                                            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                                        </a>
                                        <ul class="pc-submenu">
                                            <li class="pc-item"><a class="pc-link" href="#!"
                                                    data-i18n="Level 4.1">Level 4.1</a></li>
                                            <li class="pc-item"><a class="pc-link" href="#!"
                                                    data-i18n="Level 4.2">Level 4.2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="pc-item pc-hasmenu">
                                <a href="#!" class="pc-link">
                                    <span data-i18n="Level 2.2">Level 2.3</span>
                                    <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                                </a>
                                <ul class="pc-submenu">
                                    <li class="pc-item"><a class="pc-link" href="#!"
                                            data-i18n="Level 3.1">Level 3.1</a></li>
                                    <li class="pc-item"><a class="pc-link" href="#!"
                                            data-i18n="Level 3.2">Level 3.2</a></li>
                                    <li class="pc-item pc-hasmenu">
                                        <a href="#!" class="pc-link">
                                            <span data-i18n="Level 3.3">Level 3.3</span>
                                            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                                        </a>
                                        <ul class="pc-submenu">
                                            <li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a></li>
                                            <li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="pc-item">
                        <a href="{{ url('sample-page') }}" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#chrome"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext" data-i18n="Sample Page">Sample page</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
