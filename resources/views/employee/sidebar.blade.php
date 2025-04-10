<style>
    /* Sidebar styling */
    .sidebar {
        background: linear-gradient(to bottom, #ffeac9, hsl(60, 100%, 97%));
        box-shadow: 4px 0 10px rgba(26, 26, 26, 0.231);
        transition: width 0.3s ease, transform 0.3s ease;
    }

    /* Active menu styling */
    .nav-item.active-menu {
        background-color: #1374ce;
        color: #2bff0f !important;
        border-radius: 8px;
        transform: translateX(10px);
    }

    /* Menu items transition */
    .nav-item.menu-items {
        position: relative;
        padding-left: 10px;
        transition: all 0.3s ease;
    }

    /* Remove hover effect with gradient */
    .nav-item.menu-items:hover {
        transform: translateX(10px);
        /* Remove gradient or leave it as it is */
    }

    /* Sub-menu styling */
    .sub-menu li {
        padding: 5px 0;
    }

    /* Profile styling */
    .profile-desc {
        padding: 15px;
        background-color: #ff7b00;
        border-radius: 15px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.553);
    }

    .profile-pic .img-xs {
        border-radius: 50%;
        border: 3px solid #fff;
    }

    .profile-name h5 {
        color: #fff;
    }

    /* Hover effect for the beneficiaries dropdown items */
    .nav-item.menu-items:hover .sub-menu {
        display: block;
        /* Show the sub-menu on hover */
        background-color: #f0f0f0;
        /* Optional: change background color when hovering */
        transition: all 0.3s ease;
        /* Smooth transition */
    }

    /* Additional styling for dropdown items */
    .sub-menu li {
        transition: background-color 0.3s ease;
    }

    /* Hover effect on dropdown items */
    .sub-menu li:hover {
        background-color: #ff07074f;
        color: #fff;
        /* Text color on hover */
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        /* Shadow effect */
    }



    /* Sub-menu visibility */
    .sub-menu.hidden {
        display: none;
    }

    /* Menu icon rotation */
    .menu-icon {
        transition: all 0.3s ease;
    }

    .nav-item.menu-items:hover .menu-icon {
        transform: rotate(10deg);
    }

    /* Text color adjustments (without hover color change) */
    .nav-item .nav-link {
        color: #ffffff;
        transition: color 0.3s ease;
    }

    /* Smooth transitions for all menu items */
    .nav-item {
        transition: transform 0.3s ease, background-color 0.3s ease;
    }
</style>

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">

    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="../assets/img/mswd-logo.png" alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal"> EMPLOYEE
                        </h5>
                    </div>
                </div>

            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('home') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-view-dashboard"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <div x-data="{ open: {{ request()->is('showapplication*') ? 'true' : 'false' }} }">
            <li class="nav-item menu-items {{ request()->is('showapplication*') ? 'active' : '' }}">
                <button class="nav-link" type="button" @click="open = !open" style="width: 225px;">
                    <span class="menu-icon">
                        <i class="mdi mdi-file-account"></i>
                    </span>
                    <span class="menu-title">Applications</span>
                </button>
            </li>
            <ul x-cloak x-show="open" class="sub-menu">
                <li class="nav-item">
                    <a class="{{ request()->path() === 'showapplication' && request()->query('status') === null ? 'nav-link active-menu' : 'px-5 mt-3' }}"
                        href="{{ url('showapplication') }}">
                        <i class="mdi mdi-view-list"></i> ALL
                    </a>
                </li>
                <li class="nav-item">
                    <a class="{{ request()->query('status') === 'pending' ? 'nav-link active-menu' : 'px-5 mt-3' }}"
                        href="/showapplication?status=pending">
                        <i class="mdi mdi-clock"></i> Pending
                    </a>
                </li>
                <li class="nav-item">
                    <a class="{{ request()->query('status') === 'approved' ? 'nav-link active-menu' : 'px-5 mt-3' }}"
                        href="/showapplication?status=approved">
                        <i class="mdi mdi-check-all"></i> Approved
                    </a>
                </li>
                <li class="nav-item">
                    <a class="{{ request()->query('status') === 'accepted' ? 'nav-link active-menu' : 'px-5 mt-3' }}"
                        href="/showapplication?status=accepted">
                        <i class="mdi mdi-headset"></i> For Interview
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="{{ request()->query('status') === 'rejected' ? 'nav-link active-menu' : 'px-5 mt-3' }}"
                        href="/showapplication?status=rejected">
                        <i class="mdi mdi-close"></i> Rejected
                    </a>
                </li>
            </ul>
        </div>

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('display_beneficiaries') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-account-group"></i>
                </span>
                <span class="menu-title">Beneficiaries</span>
            </a>
        </li>

        <ul class="sub-menu {{ request()->is('display_beneficiaries*') || request()->routeIs('show.beneficiaries_admin') ? '' : 'hidden' }}"
            id="beneficiariesSubMenu">
            <li class="nav-item menu-items">
                <a class="{{ request()->path() === 'display_beneficiaries' && request()->query('service') === null ? 'nav-link active-menu' : 'px-5 mt-3' }}"
                    href="/display_beneficiaries">
                    <i class="mdi mdi-view-list"></i> <span class="menu-title">All</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="{{ request()->query('service') === 'OSCA(Office of Senior Citizens)' ? 'nav-link active-menu' : 'px-5 mt-3' }}"
                    href="/display_beneficiaries?service=OSCA(Office of Senior Citizens)">
                    <i class="mdi mdi-face"></i> OSCA
                </a>
            </li>
            <li class="nav-item">
                <a class="{{ request()->query('service') === 'PWD(Persons with Disabilities)' ? 'nav-link active-menu' : 'px-5 mt-3' }}"
                    href="/display_beneficiaries?service=PWD(Persons with Disabilities)">
                    <i class="mdi mdi-wheelchair-accessibility"></i> PWD
                </a>
            </li>
            <li class="nav-item">
                <a class="{{ request()->query('service') === 'Solo Parent' ? 'nav-link active-menu' : 'px-5 mt-3' }}"
                    href="/display_beneficiaries?service=Solo Parent">
                    <i class="mdi mdi-human-male-female"></i> Solo Parent
                </a>
            </li>
            <li class="nav-item">
                <a class="{{ request()->query('service') === 'AICS(Assistance to Individuals in Crisis)' ? 'nav-link active-menu' : 'px-5 mt-3' }}"
                    href="/display_beneficiaries?service=AICS(Assistance to Individuals in Crisis)">
                    <i class="mdi mdi-account-multiple"></i> AICS
                </a>
            </li>
        </ul>

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('assistance_release') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-cash-marker"></i>
                </span>
                <span class="menu-title">Release of Assistance</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('sms.logs') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-message-text"></i>
                </span>
                <span class="menu-title">SMS Logs</span>
            </a>
        </li>

    </ul>
</nav>
