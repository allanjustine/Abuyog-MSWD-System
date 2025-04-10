<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Required meta tags -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <div class="container-scroller">
        <div class="container">
            <div class="main-panel" style="padding-top: 10%;">
                <div class="row">
                    <div class="col-sm-3 col-6">
                        <div class="card p-1">
                            <div class="card-body p-2">
                                <h6 class="mb-1 fw-bold fs-5">Total Applications</h6>
                                <div class="d-flex align-items-center justify-content-between w-100">
                                    <h4 class="mb-0">{{ $approvedApplicationsCount }}</h4>
                                    <i class="icon-md mdi mdi-calendar-check text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-6">
                        <div class="card p-1 ">
                            <div class="card-body p-2">
                                <h6 class="mb-1 fw-bold fs-5">Cancelled Applications</h6>
                                <div class="d-flex align-items-center justify-content-between w-100">
                                    <h4 class="mb-0">{{ $cancelledApplicationsCount }}</h4>
                                    <i class="icon-md mdi mdi-close" style="color: rgb(186, 11, 11);"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-6">
                        <div class="card p-1 ">
                            <div class="card-body p-2">
                                <h6 class="mb-1 fw-bold fs-5">Pending Applications</h6>
                                <div class="d-flex align-items-center justify-content-between w-100">
                                    <h4 class="mb-0">{{ $pendingApplicationsCount }}</h4>
                                    <i class="icon-md mdi mdi-clock" style="color: rgb(162, 29, 239);"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-6">
                        <div class="card p-1">
                            <div class="card-body p-2">
                                <h6 class="mb-1 fw-bold fs-5">Total Beneficiaries</h6>
                                <div class="d-flex align-items-center justify-content-between w-100">
                                    <h4 class="mb-0">{{ $totalBeneficiaries }}</h4>
                                    <i class="icon-md mdi mdi-wheelchair-accessibility text-danger"></i>
                                </div>
                            </div>
                        </div>
                    </div>







                </div>
                <!-- Include Leaflet CSS and JS -->
                <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
                <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

                <!-- Map Container -->
                <div class="container mt-4">
                    <div class="card">
                        <div class="card-body">
                            {{--  <a href="{{ route('viewMap') }}" id="viewMapButton"
                                style="text-decoration: none; color: #007bff; font-size: 16px; margin: 10px 0; display: inline-block;">
                                View Map
                            </a>  --}}
                            <div id="map" style="height: 400px;"></div>
                        </div>
                    </div>
                </div>

                <script>
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
                                return 'red';
                            case 'pwd(persons with disabilities)':
                                return 'green';
                            case 'solo parent':
                                return 'orange';
                            case 'aics(assistance to individuals in crisis)':
                                return 'blue';
                            default:
                                return 'gray';
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
                                    html: `<div class="beneficiaries-label" style="background: ${labelColor}; color: white; padding: 2px 8px; font-size: 12px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);">${totalBeneficiaries}</div>`,
                                    iconSize: [30, 30],
                                    iconAnchor: [15, 0],
                                    popupAnchor: [0, -20]
                                });

                                marker.setIcon(labelIcon);
                                marker.bindPopup(`<div style="padding: 10px; background: rgba(0, 0, 0, 0.7); color: white; font-size: 14px;">
                                    <div style="font-size: 16px; font-weight: bold;">${b.name}</div>
                                    <div><strong>Total Beneficiaries: ${totalBeneficiaries}</strong></div>
                                    <ul style="text-align: left; padding-left: 15px; list-style-type: disc;">
                                        ${filteredBeneficiaries.map(ben => `<li>${ben.full_name || ben.name} (${ben.program_enrolled})</li>`).join('') || '<p>No beneficiaries found.</p>'}
                                    </ul>
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
                        // Optionally, call updateMap here if you want the map to refresh when the page is ready
                    });
                </script>
            </div>
        </div>
    </div>
</body>

</html>
