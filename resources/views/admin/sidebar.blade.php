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
        @laravelPWA

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
                        <h5 class="mb-0 font-weight-normal">MSWDO</h5>
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
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('gis') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-map-marker-multiple"></i>
                </span>
                <span class="menu-title">Mapping</span>
            </a>
        </li>

        <div x-data="{ open: {{ request()->is('displayapplication*') ? 'true' : 'false' }} }">
            <li class="nav-item menu-items {{ request()->is('displayapplication*') ? 'active' : '' }}">
                <button class="nav-link" type="button" @click="open = !open" style="width: 225px;">
                    <span class="menu-icon">
                        <i class="mdi mdi-file-account"></i>
                    </span>
                    <span class="menu-title">Applications</span>
                </button>
            </li>
            <ul x-cloak x-show="open" class="sub-menu">
                <li class="nav-item">
                    <a class="text-dark {{ request()->path() === 'displayapplication' && request()->query('status') === null ? 'nav-link active-menu' : 'px-5 mt-3' }}"
                        href="{{ url('displayapplication') }}">
                        <i class="mdi mdi-view-list"></i> <span>ALL</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="text-dark {{ request()->query('status') === 'approved' ? 'nav-link active-menu' : 'px-5 mt-3' }}"
                        href="/displayapplication?status=approved">
                        <i class="mdi mdi-check-all"></i> Approved
                    </a>
                </li>
                <li class="nav-item">
                    <a class="text-dark {{ request()->query('status') === 'accepted' ? 'nav-link active-menu' : 'px-5 mt-3' }}"
                        href="/displayapplication?status=accepted">
                        <i class="mdi mdi-headset"></i> For Interview
                    </a>
                </li>
                <li class="nav-item">
                    <a class="text-dark {{ request()->query('status') === 'pending' ? 'nav-link active-menu' : 'px-5 mt-3' }}"
                        href="/displayapplication?status=pending">
                        <i class="mdi mdi-clock"></i> Pending
                    </a>
                </li>
                <li class="nav-item">
                    <a class="text-dark {{ request()->query('status') === 'rejected' ? 'nav-link active-menu' : 'px-5 mt-3' }}"
                        href="/displayapplication?status=rejected">
                        <i class="mdi mdi-close"></i> Rejected
                    </a>
                </li>
            </ul>
        </div>

        <!-- Beneficiaries Menu -->
        <li class="nav-item menu-items" id="beneficiariesMenu">
            <a class="nav-link" href="" onclick="toggleSubMenu(event, 'beneficiariesSubMenu')">
                <span class="menu-icon">
                    <i class="mdi mdi-account-group"></i>
                </span>
                <span class="menu-title">Beneficiaries</span>
            </a>
        </li>

        <ul class="sub-menu {{ request()->is('showbeneficiaries_admin*') || request()->routeIs('show.beneficiaries_admin') ? '' : 'hidden' }}"
            id="beneficiariesSubMenu">
            <li class="nav-item menu-items">
                <a class="text-dark {{ request()->path() === 'showbeneficiaries_admin' && request()->query('service') === null ? 'nav-link active-menu' : 'px-5 mt-3' }}"
                    href="{{ route('show.beneficiaries_admin') }}">
                    <i class="mdi mdi-view-list"></i> <span class="menu-title">All</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="text-dark {{ request()->query('service') === 'OSCA(Office of Senior Citizens)' ? 'nav-link active-menu' : 'px-5 mt-3' }}"
                    href="/showbeneficiaries_admin?service=OSCA(Office of Senior Citizens)">
                    <i class="mdi mdi-face"></i> OSCA
                </a>
            </li>
            <li class="nav-item">
                <a class="text-dark {{ request()->query('service') === 'PWD(Persons with Disabilities)' ? 'nav-link active-menu' : 'px-5 mt-3' }}"
                    href="/showbeneficiaries_admin?service=PWD(Persons with Disabilities)">
                    <i class="mdi mdi-wheelchair-accessibility"></i> PWD
                </a>
            </li>
            <li class="nav-item">
                <a class="text-dark {{ request()->query('service') === 'Solo Parent' ? 'nav-link active-menu' : 'px-5 mt-3' }}"
                    href="/showbeneficiaries_admin?service=Solo Parent">
                    <i class="mdi mdi-human-male-female"></i> Solo Parent
                </a>
            </li>
            <li class="nav-item">
                <a class="text-dark {{ request()->query('service') === 'AICS(Assistance to Individuals in Crisis)' ? 'nav-link active-menu' : 'px-5 mt-3' }}"
                    href="/showbeneficiaries_admin?service=AICS(Assistance to Individuals in Crisis)">
                    <i class="mdi mdi-account-multiple"></i> AICS
                </a>
            </li>
            <li class="nav-item">
                <a class="text-dark {{ request()->query('service') === 'Deceased' ? 'nav-link active-menu' : 'px-5 mt-3' }}"
                    href="/showbeneficiaries_admin?service=Deceased">
                    <i class="mdi mdi-coffin"></i> <span class="menu-title">All Deceased</span>
                </a>
            </li>
        </ul>

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('shownewbenefits') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-assistant"></i>
                </span>
                <span class="menu-title">Other Benefits</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('reports') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-chart-bar"></i>
                </span>
                <span class="menu-title">Reports</span>
            </a>
        </li>


        <!-- Beneficiaries Menu -->
        <li class="nav-item menu-items" id="adminMenu">
            <a class="nav-link" href="" onclick="toggleSubMenu(event, 'adminSubMenu')">
                <span class="menu-icon">
                    <i class="mdi mdi-account-group"></i>
                </span>
                <span class="menu-title">Administration</span>
            </a>
        </li>

        <ul class="sub-menu {{ request()->is('showservices*') || request()->routeIs('admin.showservices') ? '' : 'hidden' }}"
            id="adminSubMenu">
            <li class="nav-item menu-items">
                <a class="text-dark {{ request()->path() === 'showservices' && request()->query('service') === null ? 'nav-link active-menu' : 'px-5 mt-3' }}"
                    href="{{ route('admin.showservices') }}">
                    <i class="mdi mdi-file-document-box"></i> <span class="menu-title">All Services</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="text-dark {{ request()->path() === 'showusermanagement' && request()->query('service') === null ? 'nav-link active-menu' : 'px-5 mt-3' }}"
                    href="{{ route('showusermanagement.index') }}">
                    <i class="mdi mdi-account-key"></i> <span class="menu-title">User Management</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="text-dark {{ request()->path() === 'logs' ? 'nav-link active-menu' : 'px-5 mt-3' }}"
                    href="/logs">
                    <i class="mdi mdi-file-document"></i> <span class="menu-title">Logs</span>
                </a>
            </li>
        </ul>



        {{--  <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('showservices') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">All Services</span>
            </a>
        </li>  --}}







        {{-- <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('all_benefitsreceived') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-cash"></i>
                </span>
                <span class="menu-title">All Benefits Received</span>
            </a>
        </li> --}}

        {{--  <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('deceased') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-coffin"></i>
                </span>
                <span class="menu-title">All Deceased</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('showusermanagement') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-account-key"></i>
                </span>
                <span class="menu-title">User Management</span>
            </a>
        </li>  --}}
    </ul>
</nav>
<script>
    function toggleSubMenu(event, subMenuId) {
        event.preventDefault();
        const subMenu = document.getElementById(subMenuId);

        // Toggle visibility
        if (subMenu.classList.contains("hidden")) {
            subMenu.classList.remove("hidden");
        } else {
            subMenu.classList.add("hidden");
        }
    }
</script>
