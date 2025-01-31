<!-- Include animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

<style>
    /* Cool hover effect for cards */
    .card-doctor {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-doctor:hover {
        transform: translateY(-10px) scale(1.05);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    /* Image effect */
    .card-doctor .header img {
        border-radius: 15px 15px 0 0;
        transition: transform 0.3s ease;
    }

    .card-doctor:hover .header img {
        transform: scale(1.1);
    }

    /* Button hover effect */
    .apply-btn {
        position: relative;
        overflow: hidden;
        z-index: 1;
        transition: background 0.3s ease, color 0.3s ease;
    }

    .apply-btn:hover {
        background-color: #ff3b3b;
        color: #fff;
    }

    /* Button ripple effect */
    .apply-btn::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        background: rgba(255, 255, 255, 0.5);
        border-radius: 50%;
        transform: translate(-50%, -50%);
        transition: width 0.4s ease, height 0.4s ease;
        z-index: 0;
    }

    .apply-btn:hover::after {
        width: 300px;
        height: 300px;
    }

    .apply-btn:hover {
        color: white;
        z-index: 2;
    }
</style>

<div class="page-section">
    <div class="container">
        <!-- Animated Title -->
        <h1 class="mb-5 text-center animate__animated animate__zoomIn">🌟 PROGRAMS 🌟</h1>

        <!-- Animated Owl Carousel -->
        <div class="owl-carousel" id="doctorSlideshow">
            @foreach ($service as $services)
                <div class="item animate__animated animate__fadeInUp" style="animation-delay: 0.2s;">
                    <div class="card-doctor">
                        <div class="header">
                            <img height="300px" src="serviceimage/{{ $services->image }}" alt="">
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
                                style="display: block; max-height: 60px; overflow: hidden;"
                                id="desc-{{ $services->id }}">
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

    // Handle Apply Now click for services
    function handleApplyClick(serviceId, isAics) {
        let redirectUrl = `{{ url('applications') }}/${serviceId}`;
        window.location.href = redirectUrl; // Redirect to the appropriate application page
    }
</script>
