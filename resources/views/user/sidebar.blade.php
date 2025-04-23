<style>
    /* ===== Base Sidebar Styles ===== */
    .sidebar {
        background: linear-gradient(to bottom, #ffeac9, hsl(60, 100%, 97%));
        width: 350px;
        min-height: 100vh;
        box-shadow: 5px 0 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        position: relative;
        z-index: 100;
    }

    /* ===== Profile Section ===== */
    .profile-desc {
        padding: 20px;
        margin: 15px;
        background-color: #ff7b00;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(255, 123, 0, 0.3);
        transition: all 0.3s ease;
        display: flex
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
        transform: translateX(5px);
    }

    .nav-item.menu-items.active .nav-link {
        background: linear-gradient(90deg, rgba(19, 116, 206, 0.1) 0%, rgba(19, 116, 206, 0.2) 100%);
        color: #1374ce;
        transform: translateX(10px);
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
        transform: rotate(10deg) scale(1.1);
    }

    .menu-title {
        font-size: 0.95rem;
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
                    <div class="mr-3 count-indicator" style="width: 50px;">
                        <img class="img-xs rounded-circle" src="../assets/img/mswd-logo.png" alt="MSWD Logo">
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">BENEFICIARIES</h5>
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

        <!-- Applications -->
        <li class="nav-item menu-items {{ request()->is('myapplication') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('myapplication') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-file-account"></i>
                </span>
                <span class="menu-title">Applications</span>
            </a>
        </li>
    </ul>
</nav>
