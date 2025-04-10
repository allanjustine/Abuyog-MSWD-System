<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIS Mapping</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <style>
        /* Container for the whole page */
        .container-scroller {
            height: 100vh;
            flex-direction: row;
        }

        #sidebar {
            position: fixed;
            height: 100vh;

        }

        #map {
            position: fixed;
            height: 100vh;
            /* Full viewport height */
            width: calc(102% - 258px);
            /* Adjust map width for sidebar */
            border-radius: 5px;
            margin-top: 70px;
            /* Space for navbar */
            margin-left: 230px;
            /* Adjust to sidebar width */
            /* Ensure it's above other content */
            transition: all 0.3s ease;
            /* Smooth transition */
        }


        .controls {
            position: fixed;
            bottom: 2%;
            left: 21%;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 20px;
            padding: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            width: auto;
        }

        .controls label {
            font-weight: bold;
        }

        .controls select {
            padding: 5px;
            border-radius: 8px;
            width: 130px;
            font-size: 14px;
            margin-left: 10px;
            margin-right: 10px;
        }

        .controls button {
            padding: 5px 15px;
            border-radius: 8px;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .controls {
                flex-direction: column;
                align-items: flex-start;
                padding: 10px;
            }

            .controls select,
            .controls button {
                width: 100%;
                margin-bottom: 10px;
            }
        }

        #location-track {
            margin-top: 20px;
        }

        #loading-message {
            display: none;
        }

        /* Added section for color label explanation */
        .color-legend {
            position: fixed;
            top: 12%;
            left: 23%;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            font-size: 14px;
        }

        /* Define the styles for the marker colors */
        .marker-color-blue {
            background-color: blue !important;
        }

        .marker-color-green {
            background-color: green !important;
        }

        .marker-color-orange {
            background-color: orange !important;
        }

        .marker-color-red {
            background-color: red !important;
        }

        .marker-color-gray {
            background-color: gray !important;
        }
    </style>

    @include('admin.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>
    <div class="container-scroller">
        @include('admin.sidebar')
        @include('admin.navbar')


        <!-- Color Legend Section (explanation of label colors) -->
        <div class="color-legend">
            <span style="color: red;">&#11044;</span>OSCA(Office of Senior Citizens)<br>
            <span style="color: green;">&#11044;</span> PWD<br>
            <span style="color: orange;">&#11044;</span> Solo Parent<br>
            <span style="color: blue;">&#11044;</span> AICS (Assistance)<br>
        </div>

        <!-- Controls -->
        <div class="controls">
            <label for="program">Program:</label>
            <select id="program" onchange="updateBarangays()">
                <option value="all">All Programs</option>
                @foreach ($services as $service)
                    @if ($service->name)
                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                    @endif
                @endforeach

            </select>

            <label for="barangay">Barangay:</label>
            <select id="barangay">
                <option value="all">All Barangays</option>
                @foreach ($barangays as $barangay)
                    @if ($barangay->barangay && $barangay->barangay->name)
                        <option value="{{ $barangay->barangay_id }}">{{ $barangay->barangay->name }}</option>
                    @endif
                @endforeach

            </select>


            <button id="load-button" class="btn btn-primary" onclick="updateMap()">Load</button>
        </div>

        <!-- Location Track Section -->
        <div id="map"></div>
        <div id="loading-message" class="alert alert-info">Loading data, please wait...</div>

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

        @include('admin.script')
</body>

</html>



{{--
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIS Mapping</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <style>
        /* Container for the whole page */
        .container-scroller {
            height: 100vh;
            flex-direction: row;
        }

        #sidebar {
            position: fixed;

            height: 100vh;

        }

        #map {
            position: fixed;
            height: 100vh;
            /* Fixed height to take the full viewport height */
            width: calc(102% - 258px);
            /* Adjust the map width to leave space for the sidebar */
            border-radius: 5px;
            margin-top: 70px;
            /* Leave space for navbar */
            margin-left: 230px;
            /* Adjust to the sidebar width */
            z-index: 1;
            /* Smooth transition */
        }

        .controls {
            position: fixed;
            bottom: 2%;
            left: 21%;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 20px;
            padding: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            width: auto;
        }

        .controls label {
            font-weight: bold;
        }

        .controls select {
            padding: 5px;
            border-radius: 8px;
            width: 130px;
            font-size: 14px;
            margin-left: 10px;
            margin-right: 10px;
        }

        .controls button {
            padding: 5px 15px;
            border-radius: 8px;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .controls {
                flex-direction: column;
                align-items: flex-start;
                padding: 10px;
            }

            .controls select,
            .controls button {
                width: 100%;
                margin-bottom: 10px;
            }
        }

        #location-track {
            margin-top: 20px;
        }

        #loading-message {
            display: none;
        }

        /* Added section for color label explanation */
        .color-legend {
            position: fixed;
            top: 12%;
            left: 23%;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            font-size: 14px;
        }

        /* Define the styles for the marker colors */
        .marker-color-blue {
            background-color: blue !important;
        }

        .marker-color-green {
            background-color: green !important;
        }

        .marker-color-orange {
            background-color: orange !important;
        }

        .marker-color-red {
            background-color: red !important;
        }

        .marker-color-gray {
            background-color: gray !important;
        }
    </style>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>
    <div class="container-scroller">
        @include('admin.sidebar')
        @include('admin.navbar')

        <!-- Color Legend Section (explanation of label colors) -->
        <div class="color-legend">
            <span style="color: rgb(114, 114, 114);">&#11044;</span> All Programs<br>
            <span style="color: red;">&#11044;</span>OSCA(Office of Senior Citizens)<br>
            <span style="color: green;">&#11044;</span> PWD<br>
            <span style="color: orange;">&#11044;</span> Solo Parent<br>
            <span style="color: blue;">&#11044;</span> AICS (Assistance)<br>
        </div>

        <!-- Controls -->
        <div class="controls">
            <label for="program">Program:</label>
            <select id="program" onchange="updateBarangays()">
                <option value="all">All Programs</option>
                @foreach ($services as $service)
                <option value="{{ $service->id }}">{{ $service->name }}</option>
                @endforeach
            </select>

            <label for="barangay">Barangay:</label>
            <select id="barangay">
                <option value="all">All Barangays</option>
                @foreach ($barangays as $barangay)
                <option value="{{ $barangay->barangay_id }}">{{ $barangay->barangay->name }}</option>
                @endforeach
            </select>

            <button id="load-button" class="btn btn-primary" onclick="updateMap()">Load</button>
        </div>

        <!-- Location Track Section -->
        <div id="map"></div>
        <div id="loading-message" class="alert alert-info">Loading data, please wait...</div>

        <script>
            var map;

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
            }

            initMap();

            function getProgramColor(beneficiaries, program) {
    if (program.toLowerCase() === 'all' || beneficiaries.length === 0) {
        return 'gray'; // Default color for "All Programs" or no beneficiaries
    }

    // Safeguard for when beneficiaries[0] or program_enrolled might be undefined
    var programEnrolled = (beneficiaries[0]?.program_enrolled || '').toLowerCase();

    switch (programEnrolled) {
        case 'osca(office of senior citizens)':
            return 'red';
        case 'pwd(persons with disabilities)':
            return 'green';
        case 'solo parent':
            return 'orange';
        case 'aics(assistance)':
            return 'blue';
        default:
            return 'gray'; // Default for unrecognized programs
    }

            }

            function updateMap() {
                var program = $('#program').val(); // Get the selected program from dropdown
                var barangay = $('#barangay').val();
                $('#loading-message').show();

                map.eachLayer(function(layer) {
                    if (layer instanceof L.Marker) map.removeLayer(layer);
                });

                $.ajax({
                    url: '/gis-beneficiaries',
                    method: 'GET',
                    data: {
                        program: program,
                        barangay_id: barangay
                    },
                    success: function(data) {
                        $('#loading-message').hide();

                        if (data.message) {
                            alert(data.message);
                            return;
                        }

                        var bounds = [];
                        data.barangays.forEach(function(b) {
                            var filteredBeneficiaries = data.beneficiaries.filter(function(beneficiary) {
                                return beneficiary.barangay_id === b.id;
                            });

                            // Determine label color based on selected program and beneficiaries data
                            var labelColor = getProgramColor(filteredBeneficiaries, program);

                            // Use default Leaflet marker icon with shadow
                            var locationIcon = L.icon({
                                iconUrl: 'https://unpkg.com/leaflet/dist/images/marker-icon.png', // Built-in location pin
                                iconSize: [25, 41], // Adjust size of the marker
                                iconAnchor: [12, 41], // Set the anchor point
                                popupAnchor: [0, -41], // Position popup above the marker
                                shadowUrl: 'https://unpkg.com/leaflet/dist/images/marker-shadow.png', // Marker shadow
                                shadowSize: [41, 41], // Size of the shadow (same as marker size)
                                shadowAnchor: [12,
                                    41
                                ] // Position of the shadow relative to the marker
                            });

                            // Prepare the content for the popup
                            var totalBeneficiaries = filteredBeneficiaries.length;

                            // Create the marker with the default location icon
                            var marker = L.marker([b.lat, b.lon], {
                                icon: locationIcon
                            }).addTo(map);

                            // Add a custom label for total beneficiaries above the marker icon
                            var labelContent = `
                                <div class="beneficiaries-label" style="background-color: ${labelColor}; color: white; padding: 2px 8px; font-size: 12px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5); position: absolute; top: -20px; left: -10px;">
                                    ${totalBeneficiaries}
                                </div>
                            `;

                            // Create a custom DivIcon to display the label above the marker
                            var labelIcon = L.divIcon({
                                className: 'label-icon',
                                html: labelContent,
                                iconSize: [30, 30],
                                iconAnchor: [15, 0], // Anchor at the top center
                                popupAnchor: [0, -20] // Position the popup above the marker
                            });

                            // Re-create the marker with the label divIcon
                            var markerWithLabel = L.marker([b.lat, b.lon], {
                                icon: locationIcon
                            }).addTo(map);

                            // Attach the label to the top of the marker
                            markerWithLabel.setIcon(labelIcon);

                            // Add the number of beneficiaries to the popup content
                            var bubbleContent = `
                                <div style="padding: 10px; border-radius: 8px; background-color: rgba(0, 0, 0, 0.7); color: white; font-size: 14px; text-align: center;">
                                    <div style="font-size: 16px; font-weight: bold; margin-bottom: 8px;">${b.name}</div>
                                    <div><strong>Total Beneficiaries: ${totalBeneficiaries}</strong></div>
                                    <ul style="text-align: left; padding: 0 15px; list-style-type: disc;">
                            `;

                            if (filteredBeneficiaries.length > 0) {
                                filteredBeneficiaries.forEach(function(beneficiary) {
                                    bubbleContent += '<li>' + beneficiary.last_name + ' ' +
                                        beneficiary.first_name + ' (' + beneficiary
                                        .program_enrolled + ')</li>';
                                });
                            } else {
                                bubbleContent += '<p>No beneficiaries found for this barangay.</p>';
                            }

                            bubbleContent += '</ul></div>';

                            // Bind the popup content to the marker
                            markerWithLabel.bindPopup(bubbleContent);

                            bounds.push([b.lat, b.lon]);
                        });

                        if (bounds.length) map.fitBounds(bounds);
                    }
                });
            }

            function updateBarangays() {
                var program = $('#program').val();
                $.ajax({
                    url: '/barangays',
                    method: 'GET',
                    data: {
                        program: program
                    },
                    success: function(data) {
                        $('#barangay').empty();
                        $('#barangay').append('<option value="all">All Barangays</option>');
                        data.barangays.forEach(function(barangay) {
                            $('#barangay').append('<option value="' + barangay.barangay_id + '">' + barangay
                                .barangay
                                .name + '</option>');
                        });
                    }
                });
            }

            $(document).ready(function() {
                updateBarangays();
            });
        </script>
</body>

</html> --}}
