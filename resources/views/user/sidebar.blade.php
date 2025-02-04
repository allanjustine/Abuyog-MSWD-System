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
                        <h5 class="mb-0 font-weight-normal"> BENEFICIARIES
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


        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('myapplication') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-file-account"></i>
                </span>
                <span class="menu-title">Applications</span>
            </a>
        </li>



        <!-- <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('assistance_release') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-cash-marker"></i>
                </span>
                <span class="menu-title">Assistance Received</span>
            </a>
        </li> -->



    </ul>
</nav>
