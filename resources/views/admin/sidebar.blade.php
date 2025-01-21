<style>
    .sidebar .dropdown-menu .nav-link:hover {
        background-color: #1374ce;
        color: #000000;
        border-radius: 4px;
        padding-left: 10px;
        transition: all 0.3s ease;
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
                <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i
                        class="mdi mdi-dots-vertical"></i></a>
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
                </div>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('home') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="#" onclick="toggleDropdown(event, 'beneficiariesDropdown')">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">Beneficiaries</span>
                <i class="menu-arrow"></i>
            </a>
            <ul class="dropdown-menu" id="beneficiariesDropdown"
                style="display: none; list-style: none; padding-left: 20px;">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('show.beneficiaries_admin') }}">ALL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dropdownadm.osca') }}">OSCA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dropdownadm.pwd') }}">PWD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dropdownadm.solo_parent') }}">Solo Parent</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dropdownadm.aics') }}">AICS</a>
                </li>
            </ul>
        </li>


        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('showservices') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">All Services</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('displayapplication') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">Applications</span>
            </a>
        </li>



        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('gis') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">Mapping</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('reports') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">Reports</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('showusermanagement') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">User Management</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="/benefits-given-record">
                <span class="menu-icon">
                    <i class="mdi mdi-heart"></i>
                </span>
                <span class="menu-title">Benefits Given Record</span>
            </a>
        </li>

    </ul>
</nav>

<script>
    function toggleDropdown(event, dropdownId) {
        event.preventDefault();
        const dropdown = document.getElementById(dropdownId);
        dropdown.style.display = dropdown.style.display === "none" ? "block" : "none";
    }
</script>
