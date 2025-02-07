<style>
    /* Creating a gradient background for the navbar */
    .navbar {
        background-image: linear-gradient(to right, #ffbf8e, #ff688b);
        /* Gradient from #ffb25f to #ff7f50 */
    }

    /* Prevent the navbar menu from stretching */
    .navbar-menu-wrapper {
        display: flex;
        justify-content: flex-start;
        /* Align items to the left */
    }

    /* Adjusting navbar text color */
    .navbar-nav .nav-link {
        color: white;
        /* Set text color to white */
    }

    /* Optional: Change color on hover for navbar links */
    .navbar-nav .nav-link:hover {
        color: #f0f0f0;
        /* Change hover color */
    }

    /* Optional: Change the navbar toggler color */
    .navbar-toggler {
        color: white;
        /* Set the toggler icon color */
    }
</style>

<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_navbar.html -->
    <nav class="flex-row p-0 navbar fixed-top d-flex">

        <div class="flex-grow navbar-menu-wrapper justify-between d-flex align-items-stretch">
            <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                data-toggle="offcanvas">
                <span class="mdi mdi-format-line-spacing"></span>
            </button>

            <ul class="navbar-nav navbar-nav-right">

                <x-app-layout>

                </x-app-layout>
            </ul>
        </div>
    </nav>
</div>
