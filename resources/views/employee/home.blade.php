<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('employee.css')
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->
        @include('employee.sidebar')
        <!-- partial -->

        @include('employee.navbar')

        @include('employee.body')
        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('employee.script')
        <!-- End custom js for this page -->
</body>

</html>
