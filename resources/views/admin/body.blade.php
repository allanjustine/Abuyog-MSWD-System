<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Services Dashboard</title>

    <!-- Required meta tags -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --accent-color: #4895ef;
            --success-color: #4cc9f0;
            --danger-color: #f72585;
            --warning-color: #f8961e;
            --info-color: #43aa8b;
            --dark-color: #212529;
            --light-color: #f8f9fa;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f7fa;
            color: #333;
        }

        .dashboard-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 1.5rem;
            border-radius: 10px;
            margin-bottom: 2rem;
            box-shadow: 0 4px 20px rgba(67, 97, 238, 0.15);
        }

        .card-stat {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.05);
            position: relative;
            background: white;
        }

        .card-stat:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.1);
        }

        .card-stat::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: var(--primary-color);
        }

        .card-stat .card-body {
            padding: 1.5rem;
        }

        .card-stat h6 {
            color: #6c757d;
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        .card-stat h4 {
            font-weight: 700;
            color: var(--dark-color);
            margin-bottom: 0;
        }

        .card-stat i {
            font-size: 2rem;
            opacity: 0.2;
            position: absolute;
            right: 1.5rem;
            bottom: 1.5rem;
        }

        .stat-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
        }

        .stat-icon i {
            font-size: 1.5rem;
            position: relative;
            opacity: 1;
        }

        .map-container {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.05);
            margin-top: 2rem;
        }

        .map-container .card {
            border: none;
        }

        #map {
            height: 500px;
            border-radius: 8px;
        }

        .view-map-btn {
            background: var(--primary-color);
            color: white;
            border: none;
            padding: 0.5rem 1.5rem;
            border-radius: 30px;
            font-weight: 500;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            box-shadow: 0 4px 10px rgba(67, 97, 238, 0.3);
        }

        .view-map-btn:hover {
            background: var(--secondary-color);
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(67, 97, 238, 0.4);
        }

        .view-map-btn i {
            margin-left: 8px;
            font-size: 0.9rem;
        }

        .beneficiaries-label {
            background: var(--primary-color);
            color: white;
            padding: 2px 10px;
            font-size: 12px;
            border-radius: 15px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
            font-weight: 600;
            border: 2px solid white;
        }

        .leaflet-popup-content {
            font-family: 'Poppins', sans-serif;
        }

        .progress-thin {
            height: 6px;
            border-radius: 3px;
        }

        .stat-card-applications {
            border-left: 4px solid var(--primary-color);
        }

        .stat-card-beneficiaries {
            border-left: 4px solid var(--danger-color);
        }

        .stat-card-services {
            border-left: 4px solid var(--info-color);
        }

        .stat-card-users {
            border-left: 4px solid var(--success-color);
        }

        .stat-card-released {
            border-left: 4px solid var(--warning-color);
        }

        .stat-card-accepted {
            border-left: 4px solid var(--accent-color);
        }

        .stat-card-pending {
            border-left: 4px solid #9d4edd;
        }

        .stat-card-rejected {
            border-left: 4px solid #ef233c;
        }
    </style>
</head>

<body>
    <div class="container-fluid py-4">
        <div class="container mt-5">
            <div class="dashboard-header" data-aos="fade-down">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h2 class="mb-2">Admin Dashboard</h2>
                        <p class="mb-0">Overview of beneficiaries and services</p>
                    </div>
                    <div class="col-md-4 text-md-end">
                        <button class="view-map-btn" id="viewMapButton">
                            View Full Map <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <!-- First Row of Stats -->
                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-stat stat-card-applications">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="text-muted">TOTAL APPLICATIONS</h6>
                                    <h4>{{ $approvedApplicationsCount }}</h4>
                                    <div class="progress progress-thin mt-2">
                                        <div class="progress-bar bg-primary" style="width: 75%"></div>
                                    </div>
                                </div>
                                <div class="bg-primary bg-opacity-10 text-primary">
                                    <i class="fas fa-calendar-check"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-stat stat-card-beneficiaries">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="text-muted">TOTAL BENEFICIARIES</h6>
                                    <h4>{{ $totalBeneficiaries }}</h4>
                                    <div class="progress progress-thin mt-2">
                                        <div class="progress-bar bg-danger" style="width: 65%"></div>
                                    </div>
                                </div>
                                <div class="bg-danger bg-opacity-10 text-danger">
                                    <i class="fas fa-wheelchair"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-stat stat-card-services">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="text-muted">TOTAL SERVICES</h6>
                                    <h4>{{ $totalServices }}</h4>
                                    <div class="progress progress-thin mt-2">
                                        <div class="progress-bar bg-info" style="width: 85%"></div>
                                    </div>
                                </div>
                                <div class="bg-info bg-opacity-10 text-info">
                                    <i class="fas fa-hands-helping"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-stat stat-card-users">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="text-muted">TOTAL USERS</h6>
                                    <h4>{{ $totalUsers }}</h4>
                                    <div class="progress progress-thin mt-2">
                                        <div class="progress-bar bg-success" style="width: 60%"></div>
                                    </div>
                                </div>
                                <div class="bg-success bg-opacity-10 text-success">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Second Row of Stats -->
                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-stat stat-card-released">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="text-muted">RELEASED APPLICATIONS</h6>
                                    <h4>{{ $releasedBeneficiary }}</h4>
                                    <div class="progress progress-thin mt-2">
                                        <div class="progress-bar bg-warning" style="width: 55%"></div>
                                    </div>
                                </div>
                                <div class="bg-warning bg-opacity-10 text-warning">
                                    <i class="fas fa-paper-plane"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-stat stat-card-accepted">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="text-muted">ACCEPTED APPLICATIONS</h6>
                                    <h4>{{ $acceptedBeneficiary }}</h4>
                                    <div class="progress progress-thin mt-2">
                                        <div class="progress-bar" style="background-color: var(--accent-color); width: 70%"></div>
                                    </div>
                                </div>
                                <div style="background-color: rgba(72, 149, 239, 0.1); color: var(--accent-color)">
                                    <i class="fas fa-check-double"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-stat stat-card-pending">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="text-muted">PENDING APPLICATIONS</h6>
                                    <h4>{{ $pendingBeneficiary }}</h4>
                                    <div class="progress progress-thin mt-2">
                                        <div class="progress-bar" style="background-color: #9d4edd; width: 45%"></div>
                                    </div>
                                </div>
                                <div style="background-color: rgba(157, 78, 221, 0.1); color: #9d4edd">
                                    <i class="fas fa-clock"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-stat stat-card-rejected">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="text-muted">REJECTED APPLICATIONS</h6>
                                    <h4>{{ $rejectedBeneficiary }}</h4>
                                    <div class="progress progress-thin mt-2">
                                        <div class="progress-bar" style="background-color: #ef233c; width: 30%"></div>
                                    </div>
                                </div>
                                <div style="background-color: rgba(239, 35, 60, 0.1); color: #ef233c">
                                    <i class="fas fa-times"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Map Container -->
            <div class="map-container mt-4" data-aos="fade-up">
                <div class="card">
                    <div class="card-header bg-white border-0 py-3">
                        <h5 class="mb-0"><i class="fas fa-map-marked-alt me-2 text-primary"></i> Beneficiaries Location Map</h5>
                    </div>
                    <div class="card-body pt-0">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Leaflet CSS and JS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // Initialize AOS animations
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });

        var map;

        // Initialize the map
        function initMap() {
            map = L.map('map').setView([10.63966298802748, 125.0262333631705], 13);

            // Add the default street map layer
            var streetLayer = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; OpenStreetMap contributors'
            });

            // Add satellite layer using Esri
            var satelliteLayer = L.tileLayer(
                'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
                    attribution: '&copy; <a href="https://www.esri.com/">Esri</a>'
                });

            // Add terrain layer using OpenTopoMap
            var terrainLayer = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.opentopomap.org/copyright">OpenTopoMap</a> &copy; <a href="http://openstreetmap.org/copyright">OpenStreetMap</a>'
            });

            // Add layers control to switch between layers
            var baseMaps = {
                "Street Map": streetLayer,
                "Satellite": satelliteLayer,
                "Terrain": terrainLayer
            };
            L.control.layers(baseMaps).addTo(map);

            // Set the default layer
            streetLayer.addTo(map);

            // Automatically update the map when the page loads
            updateMap();
        }

        initMap();

        function getProgramColor(program) {
            switch (program.toLowerCase()) {
                case 'osca(office of senior citizens)':
                    return '#f72585'; // Pink
                case 'pwd(persons with disabilities)':
                    return '#4cc9f0'; // Teal
                case 'solo parent':
                    return '#7209b7'; // Purple
                case 'aics(assistance to individuals in crisis)':
                    return '#f8961e'; // Orange
                default:
                    return '#4361ee'; // Blue
            }
        }

        // Function to update the map with beneficiaries
        function updateMap() {
            var program = $('#program').val() || 'all'; // Default to 'all' if nothing is selected
            var barangay = $('#barangay').val() || 'all'; // Default to 'all' if nothing is selected
            $('#loading-message').show();

            // Remove existing markers
            map.eachLayer(layer => {
                if (layer instanceof L.Marker) map.removeLayer(layer);
            });

            $.get('/gis-beneficiaries', {
                program,
                barangay_id: barangay
            }, function(data) {
                $('#loading-message').hide();
                if (data.message) return alert(data.message);

                var bounds = [];
                Object.values(data.barangays).forEach(b => {
                    var filteredBeneficiaries = Object.values(data.beneficiaries).filter(ben => ben
                        .barangay_id === b.id);
                    var labelColor = getProgramColor(filteredBeneficiaries[0]?.program_enrolled || '');
                    var totalBeneficiaries = filteredBeneficiaries.length;

                    var marker = L.marker([b.lat, b.lon]).addTo(map);
                    var labelIcon = L.divIcon({
                        className: 'label-icon',
                        html: `<div class="beneficiaries-label" style="background: ${labelColor}">${totalBeneficiaries}</div>`,
                        iconSize: [30, 30],
                        iconAnchor: [15, 0],
                        popupAnchor: [0, -20]
                    });

                    marker.setIcon(labelIcon);
                    marker.bindPopup(`<div style="padding: 10px; min-width: 250px;">
                        <div style="font-size: 16px; font-weight: bold; color: ${labelColor}; margin-bottom: 8px;">${b.name}</div>
                        <div style="background: ${labelColor}20; padding: 8px; border-radius: 6px; margin-bottom: 10px;">
                            <strong style="color: ${labelColor}">Total Beneficiaries: ${totalBeneficiaries}</strong>
                        </div>
                        <div style="max-height: 200px; overflow-y: auto;">
                            <ul style="padding-left: 15px; margin-bottom: 0;">
                                ${filteredBeneficiaries.map(ben => `<li style="margin-bottom: 5px; border-left: 3px solid ${labelColor}; padding-left: 8px;">
                                    <strong>${ben.full_name || ben.name}</strong><br>
                                    <small style="color: #6c757d;">${ben.program_enrolled}</small>
                                </li>`).join('') || '<p style="color: #6c757d;">No beneficiaries found.</p>'}
                            </ul>
                        </div>
                    </div>`);

                    bounds.push([b.lat, b.lon]);
                });

                if (bounds.length) map.fitBounds(bounds);
            });
        }

        // Function to update barangays dropdown based on selected program
        function updateBarangays() {
            $.get('/barangays', {
                program: $('#program').val()
            }, function(data) {
                var barangayDropdown = $('#barangay').empty().append('<option value="all">All Barangays</option>');
                data.barangays.forEach(b => barangayDropdown.append(
                    `<option value="${b.barangay_id}">${b.name}</option>`));
            });
        }

        // Automatically update barangays when page is ready
        $(document).ready(function() {
            updateBarangays();

            // Add click effect to cards
            $('.card-stat').on('click', function() {
                $(this).addClass('animate__animated animate__pulse');
                setTimeout(() => {
                    $(this).removeClass('animate__animated animate__pulse');
                }, 500);
            });
        });
    </script>
</body>

</html>
