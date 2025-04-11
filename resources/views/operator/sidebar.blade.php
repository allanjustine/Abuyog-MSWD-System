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
                        <h5 class="mb-0 font-weight-normal"> OPERATOR
                        </h5>
                    </div>
                </div>
                {{--  <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
                    aria-labelledby="profile-dropdown">
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-primary"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="mb-1 preview-subject ellipsis text-small">Account settings</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-onepassword text-info"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="mb-1 preview-subject ellipsis text-small">Change Password</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-calendar-today text-success"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="mb-1 preview-subject ellipsis text-small">To-do list</p>
                        </div>
                    </a>
                </div>  --}}
            </div>

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
            <a class="nav-link" href="{{ url('showservicesope') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">All Services</span>
            </a>
        </li>

        <!-- Beneficiaries Menu -->
        <li class="nav-item menu-items" id="beneficiariesMenu">
            <a class="nav-link" href="#" onclick="toggleSubMenu(event, 'beneficiariesSubMenu')">
                <span class="menu-icon">
                    <i class="mdi mdi-account-group"></i>
                </span>
                <span class="menu-title">Beneficiaries</span>
            </a>
        </li>

        <ul class="sub-menu {{ request()->is('showbeneficiaries_operator*') || request()->routeIs('show.beneficiaries_operator_index') ? '' : 'hidden' }}"
            id="beneficiariesSubMenu">
            <li class="nav-item">
                <a class="text-dark {{ request()->path() === 'showbeneficiaries_operator' && request()->query('service') === null ? 'nav-link active-menu' : 'px-5 mt-3' }}"
                    href="{{ route('show.beneficiaries_operator_index') }}">
                    <i class="mdi mdi-view-list"></i> ALL
                </a>
            </li>
            <li class="nav-item">
                <a class="text-dark {{ request()->query('service') === 'OSCA(Office of Senior Citizens)' ? 'nav-link active-menu' : 'px-5 mt-3' }}"
                    href="/showbeneficiaries_operator?service=OSCA(Office of Senior Citizens)">
                    <i class="mdi mdi-face"></i> OSCA
                </a>
            </li>
            <li class="nav-item">
                <a class="text-dark {{ request()->query('service') === 'PWD(Persons with Disabilities)' ? 'nav-link active-menu' : 'px-5 mt-3' }}"
                    href="/showbeneficiaries_operator?service=PWD(Persons with Disabilities)">
                    <i class="mdi mdi-wheelchair-accessibility"></i> PWD
                </a>
            </li>
            <li class="nav-item">
                <a class="text-dark {{ request()->query('service') === 'Solo Parent' ? 'nav-link active-menu' : 'px-5 mt-3' }}"
                    href="/showbeneficiaries_operator?service=Solo Parent">
                    <i class="mdi mdi-human-male-female"></i> Solo Parent
                </a>
            </li>
            <li class="nav-item">
                <a class="text-dark {{ request()->query('service') === 'AICS(Assistance to Individuals in Crisis)' ? 'nav-link active-menu' : 'px-5 mt-3' }}"
                    href="/showbeneficiaries_operator?service=AICS(Assistance to Individuals in Crisis)">
                    <i class="mdi mdi-account-multiple"></i> AICS
                </a>
            </li>
            <li class="nav-item">
                <a class="text-dark {{ request()->query('service') === 'Deceased' ? 'nav-link active-menu' : 'px-5 mt-3' }}"
                    href="/showbeneficiaries_operator?service=Deceased">
                    <i class="mdi mdi-coffin"></i> <span class="menu-title">All Deceased</span>
                </a>
            </li>
        </ul>



        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('report') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-chart-bar"></i>
                </span>
                <span class="menu-title">Reports</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('shownewbenefits') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-assistant"></i>
                </span>
                <span class="menu-title">Other Benefits</span>
            </a>
        </li>

        {{-- <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('all_benefitsreceived_operator') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-cash"></i>
                </span>
                <span class="menu-title">All Benefits Received</span>
            </a>
        </li> --}}

        {{--  <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('inventory_operator') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-calculator-variant"></i>
                </span>
                <span class="menu-title">Inventory</span>
            </a>
        </li>  --}}

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('deceased_operator') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-coffin"></i>
                </span>
                <span class="menu-title">All Deceased</span>
            </a>
        </li>

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
