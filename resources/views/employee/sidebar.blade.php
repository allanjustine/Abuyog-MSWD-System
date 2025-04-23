<style>
    /* ===== Base Sidebar Styles ===== */
    .sidebar {
        background: linear-gradient(to bottom, #ffeac9, hsl(60, 100%, 97%));
        width: 300px;
        min-height: 100vh;
        box-shadow: 5px 0 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        position: relative;
        z-index: 100;
    }

    .sidebar-brand-wrapper {
        padding: 20px 0;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }

    /* ===== Profile Section ===== */
    .profile-desc {
        padding: 20px;
        margin: 15px;
        background-color: #ff7b00;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(255, 123, 0, 0.3);
        transition: all 0.3s ease;
    }

    .profile-desc:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(255, 123, 0, 0.4);
    }

    .profile-pic img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        border: 3px solid rgba(255, 255, 255, 0.8);
        transition: all 0.3s ease;
    }

    .profile-name h5 {
        color: white;
        font-weight: 600;
        margin-top: 10px;
        font-size: 1.1rem;
    }

    /* ===== Navigation Category ===== */
    .nav-category {
        padding: 10px 25px;
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #ff7b00;
        margin-top: 10px;
        font-weight: 600;
    }

    /* ===== Menu Items ===== */
    .nav-item {
        position: relative;
        margin: 3px 15px;
    }

    .nav-item.menu-items .nav-link {
        display: flex;
        align-items: center;
        padding: 12px 15px;
        color: #5a5a5a;
        border-radius: 8px;
        transition: all 0.3s ease;
        text-decoration: none;
        font-weight: 500;
    }

    .nav-item.menu-items .nav-link:hover {
        background: rgba(255, 123, 0, 0.1);
        color: #ff7b00;
    }

    .nav-item.menu-items.active .nav-link,
    .nav-item.menu-items.active-menu .nav-link {
        background: linear-gradient(90deg, rgba(19, 116, 206, 0.1) 0%, rgba(19, 116, 206, 0.2) 100%);
        color: #1374ce;
    }

    .menu-icon {
        margin-right: 12px;
        font-size: 1.2rem;
        width: 24px;
        text-align: center;
        transition: all 0.3s ease;
        color: inherit;
    }

    .nav-item.menu-items:hover .menu-icon {
        transform: scale(1.1);
    }

    .menu-title {
        font-size: 0.95rem;
    }

    /* ===== Sub Menu Styles ===== */
    .sub-menu {
        padding-left: 15px;
        overflow: hidden;
        max-height: 0;
        transition: max-height 0.4s ease, padding 0.3s ease;
    }

    .sub-menu.active {
        max-height: 500px;
        padding: 5px 0 10px 15px;
    }

    .sub-menu li {
        margin: 3px 0;
    }

    .sub-menu .nav-link {
        padding: 8px 15px;
        color: #6b6b6b;
        border-radius: 6px;
        display: flex;
        align-items: center;
        transition: all 0.2s ease;
    }

    .sub-menu .nav-link:hover {
        background: rgba(255, 123, 0, 0.08);
        color: #ff7b00;
    }

    .sub-menu .nav-link.active-menu {
        background: rgba(19, 116, 206, 0.15);
        color: #1374ce;
        font-weight: 500;
    }

    .sub-menu .nav-link i {
        margin-right: 10px;
        font-size: 1rem;
    }

    /* ===== Active Menu Indicator ===== */
    .nav-item.menu-items.active::before {
        content: '';
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        height: 60%;
        width: 4px;
        background: #1374ce;
        border-radius: 0 4px 4px 0;
    }

    /* ===== Hover Effects ===== */
    .nav-item.menu-items:hover .menu-title {
        font-weight: 500;
    }

    /* ===== Button Styles ===== */
    .nav-link button {
        background: transparent;
        border: none;
        width: 100%;
        text-align: left;
        padding: 0;
    }

    /* ===== Responsive Adjustments ===== */
    @media (max-width: 992px) {
        .sidebar {
            width: 250px;
            transform: translateX(-100%);
            position: fixed;
            z-index: 1000;
        }

        .sidebar.active {
            transform: translateX(0);
        }
    }
</style>

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    </div>

    <ul class="nav">
        <!-- Profile Section -->
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic d-flex align-items-center">
                    <div class="mr-3 count-indicator">
                        <img class="img-xs rounded-circle" src="../assets/img/mswd-logo.png" alt="MSWD Logo">
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">EMPLOYEE</h5>
                    </div>
                </div>
            </div>
        </li>

        <!-- Navigation Category -->
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>

        <!-- Dashboard -->
        <li class="nav-item menu-items {{ request()->is('home') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('home') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-view-dashboard"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <!-- Applications Dropdown -->
        <div x-data="{ open: {{ request()->is('showapplication*') ? 'true' : 'false' }} }">
            <li class="nav-item menu-items {{ request()->is('showapplication*') ? 'active' : '' }}">
                <a class="nav-link" @click="open = !open" style="cursor: pointer;">
                    <span class="menu-icon">
                        <i class="mdi mdi-file-account"></i>
                    </span>
                    <span class="menu-title">Applications</span>
                    <span class="menu-arrow" x-text="open ? '▼' : '▶'" style="margin-left: auto;"></span>
                </a>
            </li>
            <ul class="sub-menu" :class="{ 'active': open }">
                <li class="nav-item">
                    <a class="nav-link {{ request()->path() === 'showapplication' && request()->query('status') === null ? 'active-menu' : '' }}"
                       href="{{ url('showapplication') }}">
                        <i class="mdi mdi-view-list"></i> ALL
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->query('status') === 'pending' ? 'active-menu' : '' }}"
                       href="/showapplication?status=pending">
                        <i class="mdi mdi-clock"></i> Pending
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->query('status') === 'approved' ? 'active-menu' : '' }}"
                       href="/showapplication?status=approved">
                        <i class="mdi mdi-check-all"></i> Approved
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->query('status') === 'accepted' ? 'active-menu' : '' }}"
                       href="/showapplication?status=accepted">
                        <i class="mdi mdi-headset"></i> For Interview
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->query('status') === 'rejected' ? 'active-menu' : '' }}"
                       href="/showapplication?status=rejected">
                        <i class="mdi mdi-close"></i> Rejected
                    </a>
                </li>
            </ul>
        </div>

        <!-- Beneficiaries Dropdown -->
        <div x-data="{ open: {{ request()->is('display_beneficiaries*') ? 'true' : 'false' }} }">
            <li class="nav-item menu-items {{ request()->is('display_beneficiaries*') ? 'active' : '' }}">
                <a class="nav-link" @click="open = !open" style="cursor: pointer;">
                    <span class="menu-icon">
                        <i class="mdi mdi-account-group"></i>
                    </span>
                    <span class="menu-title">Beneficiaries</span>
                    <span class="menu-arrow" x-text="open ? '▼' : '▶'" style="margin-left: auto;"></span>
                </a>
            </li>
            <ul class="sub-menu" :class="{ 'active': open }">
                <li class="nav-item">
                    <a class="nav-link {{ request()->path() === 'display_beneficiaries' && request()->query('service') === null ? 'active-menu' : '' }}"
                       href="/display_beneficiaries">
                        <i class="mdi mdi-view-list"></i> All
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->query('service') === 'OSCA(Office of Senior Citizens)' ? 'active-menu' : '' }}"
                       href="/display_beneficiaries?service=OSCA(Office of Senior Citizens)">
                        <i class="mdi mdi-face"></i> OSCA
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->query('service') === 'PWD(Persons with Disabilities)' ? 'active-menu' : '' }}"
                       href="/display_beneficiaries?service=PWD(Persons with Disabilities)">
                        <i class="mdi mdi-wheelchair-accessibility"></i> PWD
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->query('service') === 'Solo Parent' ? 'active-menu' : '' }}"
                       href="/display_beneficiaries?service=Solo Parent">
                        <i class="mdi mdi-human-male-female"></i> Solo Parent
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->query('service') === 'AICS(Assistance to Individuals in Crisis)' ? 'active-menu' : '' }}"
                       href="/display_beneficiaries?service=AICS(Assistance to Individuals in Crisis)">
                        <i class="mdi mdi-account-multiple"></i> AICS
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->query('service') === 'Deceased' ? 'active-menu' : '' }}"
                       href="/display_beneficiaries?service=Deceased">
                        <i class="mdi mdi-coffin"></i> All Deceased
                    </a>
                </li>
            </ul>
        </div>

        <!-- Release of Assistance -->
        <li class="nav-item menu-items {{ request()->is('assistance_release') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('assistance_release') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-cash-marker"></i>
                </span>
                <span class="menu-title">Release of Assistance</span>
            </a>
        </li>

        <!-- SMS Logs -->
        <li class="nav-item menu-items {{ request()->routeIs('sms.logs') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('sms.logs') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-message-text"></i>
                </span>
                <span class="menu-title">SMS Logs</span>
            </a>
        </li>
    </ul>
</nav>
