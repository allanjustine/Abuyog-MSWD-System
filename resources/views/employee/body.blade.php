<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard</title>

    <!-- Required meta tags -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --success-color: #28a745;
            --danger-color: #dc3545;
            --warning-color: #fd7e14;
            --info-color: #17a2b8;
            --light-color: #f8f9fa;
            --dark-color: #343a40;
            --border-radius: 12px;
            --box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            --transition: all 0.3s ease;
        }

        body {
            background-color: #f5f7fb;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container-scroller {
            padding-top: 20px;
        }

        /* Stat Cards */
        .stat-card {
            border: none;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            transition: var(--transition);
            overflow: hidden;
            height: 100%;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .stat-card .card-body {
            padding: 1.5rem;
            position: relative;
        }

        .stat-card h6 {
            font-size: 1rem;
            font-weight: 600;
            color: #6c757d;
            margin-bottom: 0.75rem;
        }

        .stat-card h4 {
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 0;
        }

        .stat-card i {
            font-size: 2rem;
            opacity: 0.8;
        }

        .stat-card-primary {
            border-left: 4px solid var(--primary-color);
        }

        .stat-card-danger {
            border-left: 4px solid var(--danger-color);
        }

        .stat-card-warning {
            border-left: 4px solid var(--warning-color);
        }

        .stat-card-success {
            border-left: 4px solid var(--success-color);
        }

        /* Map Card */
        .map-card {
            border: none;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            overflow: hidden;
            margin-top: 2rem;
        }

        .map-card .card-body {
            padding: 0;
        }

        #map {
            height: 500px;
            width: 100%;
            border-radius: var(--border-radius);
        }

        /* Map Controls */
        .map-controls {
            position: absolute;
            bottom: 20px;
            left: 20px;
            z-index: 1000;
            background: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .map-controls label {
            font-weight: 500;
            margin-bottom: 5px;
            display: block;
        }

        .map-controls select {
            width: 100%;
            padding: 8px 12px;
            border-radius: 6px;
            border: 1px solid #ddd;
            margin-bottom: 10px;
        }

        /* Custom Leaflet Popup */
        .leaflet-popup-content {
            min-width: 200px;
        }

        .leaflet-popup-content-wrapper {
            border-radius: 8px;
            padding: 0;
            overflow: hidden;
        }

        .leaflet-popup-content .popup-header {
            background: var(--primary-color);
            color: white;
            padding: 10px 15px;
            font-weight: 600;
        }

        .leaflet-popup-content .popup-body {
            padding: 15px;
        }

        .leaflet-popup-content .beneficiary-list {
            max-height: 200px;
            overflow-y: auto;
            padding-right: 5px;
        }

        .leaflet-popup-content .beneficiary-list li {
            padding: 5px 0;
            border-bottom: 1px solid #eee;
        }

        .leaflet-popup-content .beneficiary-list li:last-child {
            border-bottom: none;
        }

        /* Custom Marker Labels */
        .label-icon {
            text-align: center;
        }

        .beneficiaries-label {
            background: var(--primary-color);
            color: white;
            padding: 3px 10px;
            font-size: 12px;
            font-weight: 600;
            border-radius: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            display: inline-block;
            min-width: 30px;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .container-scroller {
                padding-top: 60px;
            }

            .stat-card {
                margin-bottom: 15px;
            }

            #map {
                height: 350px;
            }
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <div class="container">
            <div class="main-panel">
                <!-- Stats Row -->
                <div class="row g-4">
                    <!-- Total Applications -->
                    <div class="col-md-3 col-sm-6">
                        <div class="stat-card stat-card-primary">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h6>TOTAL APPLICATIONS</h6>
                                        <h4>{{ $approvedApplicationsCount }}</h4>
                                    </div>
                                    <i class="fas fa-calendar-check text-primary"></i>
                                </div>
                                <div class="mt-3 progress" style="height: 6px;">
                                    <div class="progress-bar bg-primary" style="width: 75%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cancelled Applications -->
                    <div class="col-md-3 col-sm-6">
                        <div class="stat-card stat-card-danger">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h6>CANCELLED APPLICATIONS</h6>
                                        <h4>{{ $cancelledApplicationsCount }}</h4>
                                    </div>
                                    <i class="fas fa-times-circle text-danger"></i>
                                </div>
                                <div class="mt-3 progress" style="height: 6px;">
                                    <div class="progress-bar bg-danger" style="width: 25%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pending Applications -->
                    <div class="col-md-3 col-sm-6">
                        <div class="stat-card stat-card-warning">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h6>PENDING APPLICATIONS</h6>
                                        <h4>{{ $pendingApplicationsCount }}</h4>
                                    </div>
                                    <i class="fas fa-clock text-warning"></i>
                                </div>
                                <div class="mt-3 progress" style="height: 6px;">
                                    <div class="progress-bar bg-warning" style="width: 45%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Beneficiaries -->
                    <div class="col-md-3 col-sm-6">
                        <div class="stat-card stat-card-success">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h6>TOTAL BENEFICIARIES</h6>
                                        <h4>{{ $totalBeneficiaries }}</h4>
                                    </div>
                                    <i class="fas fa-users text-success"></i>
                                </div>
                                <div class="mt-3 progress" style="height: 6px;">
                                    <div class="progress-bar bg-success" style="width: 85%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Map Section -->
                <div class="mt-4 map-card">
                    <div class="card-body">
                        <div id="map"></div>





                    </div>

                    <!-- Scripts -->
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
                    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

                    <script>
                        var map;
                        var markers = [];

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

                        // Initialize map when page loads
                        $(document).ready(function() {
                            initMap();
                            updateBarangays();
                        });

                        function getProgramColor(program) {
                            switch (program.toLowerCase()) {
                                case 'osca(office of senior citizens)':
                                    return '#dc3545'; // Red
                                case 'pwd(persons with disabilities)':
                                    return '#28a745'; // Green
                                case 'solo parent':
                                    return '#fd7e14'; // Orange
                                case 'aics(assistance to individuals in crisis)':
                                    return '#17a2b8'; // Blue
                                default:
                                    return '#6c757d'; // Gray
                            }
                        }

                        // Function to update the map with beneficiaries
                        function updateMap() {
                            var program = $('#program').val() || 'all';
                            var barangay = $('#barangay').val() || 'all';

                            // Show loading indicator
                            Swal.fire({
                                title: 'Loading Map Data',
                                html: 'Please wait while we update the map...',
                                allowOutsideClick: false,
                                didOpen: () => {
                                    Swal.showLoading();
                                }
                            });

                            // Clear existing markers
                            markers.forEach(marker => map.removeLayer(marker));
                            markers = [];

                            $.get('/gis-beneficiaries', {
                                program,
                                barangay_id: barangay
                            }, function(data) {
                                Swal.close();

                                if (data.message) {
                                    return Swal.fire('Info', data.message, 'info');
                                }

                                var bounds = [];
                                Object.values(data.barangays).forEach(b => {
                                    var filteredBeneficiaries = Object.values(data.beneficiaries).filter(ben => ben
                                        .barangay_id === b.id);
                                    var programName = filteredBeneficiaries[0]?.program_enrolled || '';
                                    var labelColor = getProgramColor(programName);
                                    var totalBeneficiaries = filteredBeneficiaries.length;

                                    // Create custom marker with label
                                    var marker = L.marker([b.lat, b.lon], {
                                        riseOnHover: true
                                    });

                                    var labelIcon = L.divIcon({
                                        className: 'label-icon',
                                        html: `<div class="beneficiaries-label" style="background: ${labelColor}">${totalBeneficiaries}</div>`,
                                        iconSize: [30, 30],
                                        iconAnchor: [15, 0],
                                        popupAnchor: [0, -20]
                                    });

                                    marker.setIcon(labelIcon);

                                    // Create custom popup content
                                    var popupContent = `
                        <div class="popup-header">
                            ${b.name}
                        </div>
                        <div class="popup-body">
                            <p><strong>Total Beneficiaries: ${totalBeneficiaries}</strong></p>
                            ${programName ? `<p><strong>Program:</strong> ${programName}</p>` : ''}
                            <div class="beneficiary-list">
                                <ul>
                                    ${filteredBeneficiaries.map(ben => `
                                                                                                                                        <li>
                                                                                                                                            <strong>${ben.full_name || ben.name}</strong>
                                                                                                                                            ${ben.program_enrolled ? `<br><small>${ben.program_enrolled}</small>` : ''}
                                                                                                                                        </li>
                                                                                                                                    `).join('') || '<p>No beneficiaries found.</p>'}
                                </ul>
                            </div>
                        </div>
                    `;

                                    marker.bindPopup(popupContent);
                                    marker.addTo(map);
                                    markers.push(marker);

                                    bounds.push([b.lat, b.lon]);
                                });

                                if (bounds.length > 0) {
                                    map.fitBounds(bounds, {
                                        padding: [50, 50]
                                    });
                                }
                            }).fail(function() {
                                Swal.fire('Error', 'Failed to load map data', 'error');
                            });
                        }

        // Function to update barangays dropdown based on selected program
        function updateBarangays() {
            $.get('/barangays', {
                program: $('#program').val()
            }, function(data) {
                var barangayDropdown = $('#barangay').empty().append('<option value="all">All Barangays</option>');
                data.barangays.forEach(b => barangayDropdown.append(
                    `<option value="${b.id}">${b.name}</option>`));
            });
        }
    </script>
</body>

</html>
