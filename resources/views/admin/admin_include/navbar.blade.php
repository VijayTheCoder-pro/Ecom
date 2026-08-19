<body class="app">
<header class="app-header fixed-top">
<div class="app-header-inner">
    <div class="container-fluid py-2">
        <div class="app-header-content">
            <div class="row justify-content-between align-items-center">

                <div class="col-auto">
                    <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                            viewBox="0 0 30 30" role="img">
                            <title>Menu</title>
                            <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                                stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path>
                        </svg>
                    </a>
                </div><!--//col-->
                <div class="search-mobile-trigger d-sm-none col">
                    <i class="search-mobile-trigger-icon fa-solid fa-magnifying-glass"></i>
                </div><!--//col-->
                <div class="app-search-box col">
                    <form class="app-search-form">
                        <input type="text" placeholder="Search..." name="search"
                            class="form-control search-input">
                        <button type="submit" class="btn search-btn btn-primary" value="Search"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div><!--//app-search-box-->

                <div class="app-utilities col-auto">
                    <div class="app-utility-item app-notifications-dropdown dropdown">
                        <a class="dropdown-toggle no-toggle-arrow" id="notifications-dropdown-toggle"
                            data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"
                            title="Notifications">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bell icon"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z" />
                                <path fill-rule="evenodd"
                                    d="M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                            </svg>
                            <span class="icon-badge">3</span>
                        </a><!--//dropdown-toggle-->

                        <div class="dropdown-menu p-0" aria-labelledby="notifications-dropdown-toggle">
                            <div class="dropdown-menu-header p-3">
                                <h5 class="dropdown-menu-title mb-0">Notifications</h5>
                            </div><!--//dropdown-menu-title-->
                            <div class="dropdown-menu-content">
                                <div class="item p-3">
                                    <div class="row gx-2 justify-content-between align-items-center">
                                        <div class="col-auto">
                                            <img class="profile-image"
                                                src="assets/images/profiles/profile-1.png" alt="">
                                        </div><!--//col-->
                                        <div class="col">
                                            <div class="info">
                                                <div class="desc">Amy shared a file with you. Lorem ipsum
                                                    dolor sit amet, consectetur adipiscing elit. </div>
                                                <div class="meta"> 2 hrs ago</div>
                                            </div>
                                        </div><!--//col-->
                                    </div><!--//row-->
                                    <a class="link-mask" href="{{ route('notification') }}"></a>
                                </div><!--//item-->
                                <div class="item p-3">
                                    <div class="row gx-2 justify-content-between align-items-center">
                                        <div class="col-auto">
                                            <div class="app-icon-holder">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                    class="bi bi-receipt" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                                    <path fill-rule="evenodd"
                                                        d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                                </svg>
                                            </div>
                                        </div><!--//col-->
                                        <div class="col">
                                            <div class="info">
                                                <div class="desc">You have a new invoice. Proin venenatis
                                                    interdum est.</div>
                                                <div class="meta"> 1 day ago</div>
                                            </div>
                                        </div><!--//col-->
                                    </div><!--//row-->
                                    <a class="link-mask" href="{{ route('notification') }}"></a>
                                </div><!--//item-->
                                <div class="item p-3">
                                    <div class="row gx-2 justify-content-between align-items-center">
                                        <div class="col-auto">
                                            <div class="app-icon-holder icon-holder-mono">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                    class="bi bi-bar-chart-line" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z" />
                                                </svg>
                                            </div>
                                        </div><!--//col-->
                                        <div class="col">
                                            <div class="info">
                                                <div class="desc">Your report is ready. Proin venenatis
                                                    interdum est.</div>
                                                <div class="meta"> 3 days ago</div>
                                            </div>
                                        </div><!--//col-->
                                    </div><!--//row-->
                                    <a class="link-mask" href="{{ route('notification') }}"></a>
                                </div><!--//item-->
                                <div class="item p-3">
                                    <div class="row gx-2 justify-content-between align-items-center">
                                        <div class="col-auto">
                                            <img class="profile-image"
                                                src="assets/images/profiles/profile-2.png" alt="">
                                        </div><!--//col-->
                                        <div class="col">
                                            <div class="info">
                                                <div class="desc">James sent you a new message.</div>
                                                <div class="meta"> 7 days ago</div>
                                            </div>
                                        </div><!--//col-->
                                    </div><!--//row-->
                                    <a class="link-mask" href="{{ route('notification') }}"></a>
                                </div><!--//item-->
                            </div><!--//dropdown-menu-content-->

                            <div class="dropdown-menu-footer p-2 text-center">
                                <a href="{{ route('notification') }}">View all</a>
                            </div>

                        </div><!--//dropdown-menu-->
                    </div><!--//app-utility-item-->


                </div><!--//app-utilities-->
            </div><!--//row-->
        </div><!--//app-header-content-->
    </div><!--//container-fluid-->
</div><!--//app-header-inner-->


        <div id="app-sidepanel" class="app-sidepanel">

            <div id="sidepanel-drop" class="sidepanel-drop"></div>
            <div class="sidepanel-inner d-flex flex-column">
                <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>

                <div class="app-branding">
                    <a class="app-logo" href="{{ route('index') }}">
                        <img class="logo-icon me-2" src="assets/images/app-logo.svg" alt="logo">
                        <span class="logo-text">PORTAL</span>
                    </a>
                </div><!--//app-branding-->

                <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
                    <ul class="app-menu list-unstyled accordion" id="menu-accordion">

                        <li class="nav-item">
                            <a class="nav-link
                             {{ request()->routeIs('manage_users') ? 'active' : '' }}"
                                href="{{ route('manage_users') }}
                                ">
                                <span class="nav-icon">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16"
                                        class="bi bi-people" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z" />
                                    </svg>
                                </span>
                                <span class="nav-link-text">Manage Users</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('category') ? 'active' : '' }}"
                                href="{{ route('category') }}">
                                <span class="nav-icon">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16"
                                        class="bi bi-tags" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3 2v4.586l7 7L14.586 9l-7-7H3zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2z" />
                                        <path
                                            d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                        <path
                                            d="M1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z" />
                                    </svg>
                                </span>
                                <span class="nav-link-text">Manage Category</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link 
                            {{ request()->routeIs('manage_product') ? 'active' : '' }}"
                                href="{{ route('manage_product') }}
                                ">
                                <span class="nav-icon">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16"
                                        class="bi bi-box-seam" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5 8.186 1.113ZM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24ZM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6ZM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184Z" />
                                    </svg>
                                </span>
                                <span class="nav-link-text">Manage Product</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link 
                            {{ request()->routeIs('manage_contact') ? 'active' : '' }}"
                                href="{{ route('manage_contact') }}">
                                <span class="nav-icon">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16"
                                        class="bi bi-person-lines-fill" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10ZM12 8a.5.5 0 0 1 .5.5V10h1.5a.5.5 0 0 1 0 1h-1.5v1.5a.5.5 0 0 1-1 0V11h-1.5a.5.5 0 0 1 0-1h1.5V8.5A.5.5 0 0 1 12 8Z" />
                                    </svg>
                                </span>
                                <span class="nav-link-text">Manage Contact</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link 
                            {{ request()->routeIs('manage_report') ? 'active' : '' }}"
                                href="{{ route('manage_report') }}
                                ">
                                <span class="nav-icon">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16"
                                        class="bi bi-bar-chart-line" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z" />
                                    </svg>
                                </span>
                                <span class="nav-link-text">Manage Report</span>
                            </a>
                        </li>

                    </ul><!--//app-menu-->
                </nav><!--//app-nav-->

                {{-- ============ Sidebar Footer: Logged-in user card ============ --}}
                <div class="app-sidepanel-footer p-3 border-top">
                    <div class="d-flex align-items-center">
                        <img src="assets/images/profiles/profile-1.png" alt="admin"
                            class="rounded-circle me-2" width="40" height="40"
                            style="object-fit: cover;">

                        <div class="flex-grow-1" style="min-width: 0;">
                            <div class="fw-semibold text-truncate" style="font-size: 0.9rem;">
                                {{ auth()->user()->name ?? 'Admin' }}
                            </div>
                            <div class="text-muted text-truncate" style="font-size: 0.75rem;">
                                {{ auth()->user()->email ?? 'admin@example.com' }}
                            </div>
                        </div>

                        <a href="#" class="text-muted ms-2" title="Logout">
                            <svg width="18" height="18" viewBox="0 0 16 16" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                                <path fill-rule="evenodd"
                                    d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                            </svg>
                        </a>
                    </div>
                </div><!--//app-sidepanel-footer-->

            </div><!--//sidepanel-inner-->

        </div><!--//app-sidepanel-->

    </div><!--//sidepanel-inner-->

</div><!--//app-sidepanel-->
</header><!--//app-header-->
