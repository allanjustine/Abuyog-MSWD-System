

<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">

    <style type="text/css">
        label{
            display: inline-block;
            width: 200px;
        }
    </style>


    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      
      @include('admin.navbar')
        <!-- partial -->


        <div class="container-fluid page-body-wrapper">



            <div class="container" align="center" style="padding:100px;">
            @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
        <button type="button" class="close" data-dismiss="alert">
            x
        </button>
    </div>
@endif

                <form action="{{url('updateservice', $data->id)}}" method="POST" enctype="multipart/form-data">

                @csrf

                    <div style="padding:15px">
                        <label>Service Name</label>
                        <input type="text" style="color:black;" name="name" value="{{$data->name}}">
                    </div>

                    <div style="padding:15px">
                        <label>Service Description</label>
                        <input type="text" style="color:black;" name="description" value="{{$data->description}}">
                    </div>

                    <div style="padding:15px">
                        <label>Image</label>
                        <img height="150" width="150" src="serviceimage/{{$data->image}}">
                    </div>

                    <div style="padding:15px">
                        <label>Change Image</label>
                        <input type="file" name="file">
                    </div>

                    <div style="padding:15px">
                        <input type="submit" class="btn btn-primary">
                    </div>

                </form>

            </div>
        </div>



    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
