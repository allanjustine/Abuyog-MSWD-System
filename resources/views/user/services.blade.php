<div class="page-section">
    <div class="container">
        <h1 class="mb-5 text-center wow fadeInUp">Programs</h1>

        <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

            @foreach ($service as $services)
                <div class="item">
                    <div class="card-doctor">
                        <div class="header">
                            <img height="300 px" src="serviceimage/{{ $services->image }}" alt="">
                        </div>

                        <!-- Apply Now Button -->
                        <a href="javascript:void(0);" class="btn btn-danger apply-btn"
                            style="margin-top: 20px; margin-left: 50px;" data-service-id="{{ $services->id }}"
                            id="apply-btn-{{ $services->id }}" onclick="handleApplyClick({{ $services->id }}, false)">
                            Apply Now
                        </a>

                        <div class="body">
                            <p class="mb-0 text-xl" style="height: 3em; line-height: 1.5em; margin-bottom: 10px;">
                                {{ $services->name }}
                            </p>
                            <span class="text-sm text-grey description"
                                style="display: block; max-height: 60px; overflow: hidden;" id="desc-{{ $services->id }}">
                                {{ $services->description }}
                            </span>
                            @if (strlen($services->description) > 100)
                                <button class="p-0 btn btn-link text-primary"
                                    onclick="toggleDescription('desc-{{ $services->id }}', this)">
                                    See More
                                </button>
                            @endif
                        </div>


                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>

<script>
    // Toggle description for 'See More' / 'See Less' functionality
    function toggleDescription(id, btn) {
        const descElement = document.getElementById(id);
        const isExpanded = descElement.style.maxHeight === "none";
        if (isExpanded) {
            descElement.style.maxHeight = "60px";
            descElement.style.overflow = "hidden";
            btn.textContent = "See More";
        } else {
            descElement.style.maxHeight = "none";
            descElement.style.overflow = "visible";
            btn.textContent = "See Less";
        }
    }

    // Handle Apply Now click for services (no AICS assistance selection required)
    function handleApplyClick(serviceId, isAics) {
        let redirectUrl = '';

        if (isAics) {
            // This part was for the AICS service, but now we skip the AICS selection step.
            redirectUrl = `{{ url('applications') }}/${serviceId}`;
        } else {
            // For all other services
            redirectUrl = `{{ url('applications') }}/${serviceId}`;
        }

        window.location.href = redirectUrl; // Redirect to the appropriate application page
    }
</script>