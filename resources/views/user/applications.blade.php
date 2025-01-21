<div class="page-section">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Make an Application</h1>
        @laravelPWA

        <form class="main-form" action="{{ url('application') }}" method="POST">
            @csrf


            <div class="mt-5 row ">
                <div class="py-2 col-12 col-sm-6 wow fadeInLeft">
                    <input type="text" name="name" class="form-control" placeholder="Full name">
                </div>
                <div class="py-2 col-12 col-sm-6 wow fadeInRight">
                    <input type="text" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="py-2 col-12 col-sm-6 wow fadeInLeft" data-wow-delay="300ms">
                    <input type="text" name="phone" class="form-control" placeholder="Phone">
                </div>
                <div class="py-2 col-12 col-sm-6 wow fadeInRight" data-wow-delay="300ms">
                    <select name="service" id="department" class="custom-select">

                        <option>---select programs---</option>

                        @foreach ($service as $services)
                            <option value="{{ $services->name }}">{{ $services->name }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="py-2 col-12 col-sm-6 wow fadeInLeft" data-wow-delay="300ms">
                    <input type="date" name="date_applied" class="form-control">
                </div>

                <button type="submit" class="mt-3 btn btn-primary wow zoomIn">Submit Request</button>
        </form>
    </div>
</div> <!-- .page-section -->
