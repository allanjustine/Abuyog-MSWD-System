<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('operator.css')
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->
        @include('operator.sidebar')
        <!-- partial -->

        @include('operator.navbar')

        @include('operator.body')
        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('operator.script')
        <!-- End custom js for this page -->
</body>

</html>
