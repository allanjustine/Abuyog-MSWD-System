<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('user.css')
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->
        @include('user.sidebar')
        <!-- partial -->

        @include('user.navbar')


        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('user.script')
        <!-- End custom js for this page -->
</body>

</html>
