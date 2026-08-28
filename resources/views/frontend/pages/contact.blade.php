@extends('frontend.layouts.app')

@section('content')
    <!-- Breadcrumb Section -->
    <section class="relative py-8 md:py-0 min-h-80 md:min-h-90 lg:min-h-110 flex items-center overflow-hidden -mt-4">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('frontend-img/breadcrumb.jpg') }}" alt="Training" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r bg-secondary-500/75 to-transparent"></div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-2xl">
                <h1 class="text-white font-bold text-2xl sm:text-3xl lg:text-4xl leading-tight mb-4 sm:mb-6">
                    Empowering the Next Generation of Professionals
                </h1>
                <p class="text-slate-200 text-base sm:text-lg leading-relaxed mb-6 sm:mb-8">
                    At HBD Services, we bridge the gap between academic knowledge
                    and industry demands. Our mission is to provide world-class
                    vocational education that transforms careers and fuels
                    professional growth.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('courses') }}"
                        class="inline-flex items-center justify-center bg-brand-600 text-white px-5 py-3 lg:px-6 lg:py-3 rounded-lg hover:bg-brand-500 transition duration-300">
                        Our Courses
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- REAL-TIME GOOGLE MAP & GLOBAL OFFICES SECTION -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        
        <!-- Header -->
        <div class="mb-8">
            <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">OUR GLOBAL OFFICES</h2>
            <p class="text-slate-500 text-sm mt-1">Explore our interactive map to find our exact office locations worldwide!</p>
        </div>

        <!-- Real Live Google Map Container -->
        <div class="relative w-full h-[450px] sm:h-[550px] rounded-3xl overflow-hidden shadow-md border border-slate-200/80 mb-10">
            <!-- Google Maps API Canvas -->
            <div id="real-google-map" class="w-full h-full"></div>
        </div>

        <!-- Global Offices Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <!-- Office Card: Sydney -->
            <div onclick="focusOnLocation(-33.8767, 151.2090, 17, 0)" 
                 class="bg-white rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 cursor-pointer group">
                <div class="h-36 overflow-hidden relative">
                    <img src="{{ asset('frontend-img/austolia.avif') }}" alt="Sydney" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <span class="absolute top-3 right-3 bg-brand-600 text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wider shadow-sm">Head Office</span>
                </div>
                <div class="p-5">
                    <div class="flex items-center justify-between mb-2">
                        <h3 class="font-bold text-slate-900 text-base">SYDNEY</h3>
                        <span class="text-xs font-semibold text-brand-600 flex items-center gap-1 group-hover:underline">
                            View on Map <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </span>
                    </div>
                    <p class="text-xs text-slate-500 leading-relaxed mb-3 flex items-start gap-2">
                        <i class="fa-solid fa-location-dot text-brand-500 text-sm mt-0.5 shrink-0"></i>
                        <span>Unit 127 (Level 8), Museum Tower, 267-277 Castlereagh St, Sydney NSW, Australia-2000</span>
                    </p>
                    <p class="text-xs text-slate-600 flex items-center gap-2 font-medium">
                        <i class="fa-solid fa-phone text-slate-400 text-xs"></i>
                        <span>+61 2 8964 8826</span>
                    </p>
                </div>
            </div>

            <!-- Office Card: Kuala Lumpur -->
            <div onclick="focusOnLocation(3.0678, 101.6601, 17, 1)" 
                 class="bg-white rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 cursor-pointer group">
                <div class="h-36 overflow-hidden relative">
                    <img src="{{ asset('frontend-img/city-malaysia.jpg') }}" alt="Kuala Lumpur" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-5">
                    <div class="flex items-center justify-between mb-2">
                        <h3 class="font-bold text-slate-900 text-base">KUALA LUMPUR</h3>
                        <span class="text-xs font-semibold text-brand-600 flex items-center gap-1 group-hover:underline">
                            View on Map <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </span>
                    </div>
                    <p class="text-xs text-slate-500 leading-relaxed mb-3 flex items-start gap-2">
                        <i class="fa-solid fa-location-dot text-brand-500 text-sm mt-0.5 shrink-0"></i>
                        <span>Parklane OUG Block B1 Block B2, Jalan 1/152, Taman Perindustrian Oug, 58200 Kuala Lumpur</span>
                    </p>
                    <p class="text-xs text-slate-600 flex items-center gap-2 font-medium">
                        <i class="fa-solid fa-phone text-slate-400 text-xs"></i>
                        <span>+60 3 7773 2100</span>
                    </p>
                </div>
            </div>

            <!-- Office Card: Dhaka -->
            <div onclick="focusOnLocation(23.7461, 90.4042, 17, 2)" 
                 class="bg-white rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 cursor-pointer group">
                <div class="h-36 overflow-hidden relative">
                    <img src="{{ asset('frontend-img/dhaka.jpg') }}" alt="Dhaka" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-5">
                    <div class="flex items-center justify-between mb-2">
                        <h3 class="font-bold text-slate-900 text-base">DHAKA</h3>
                        <span class="text-xs font-semibold text-brand-600 flex items-center gap-1 group-hover:underline">
                            View on Map <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </span>
                    </div>
                    <p class="text-xs text-slate-500 leading-relaxed mb-3 flex items-start gap-2">
                        <i class="fa-solid fa-location-dot text-brand-500 text-sm mt-0.5 shrink-0"></i>
                        <span>Standard Center, 27/1, 7th Floor, New Eskaton Road, Dhaka-1000</span>
                    </p>
                    <p class="text-xs text-slate-600 flex items-center gap-2 font-medium">
                        <i class="fa-solid fa-phone text-slate-400 text-xs"></i>
                        <span>+880 9614 650050</span>
                    </p>
                </div>
            </div>

        </div>

    </section>

    <!-- Google Maps API JavaScript Initialization -->
    <script>
        let map;
        let markers = [];
        let infoWindows = [];

        // Exact geographical coordinates for the 3 locations
        const locations = [
            {
                title: "StudyNet Sydney (Head Office)",
                lat: -33.876735,
                lng: 151.209028,
                address: "Unit 127 (Level 8), Museum Tower, 267-277 Castlereagh St, Sydney NSW, Australia-2000",
                phone: "+61 2 8964 8826"
            },
            {
                title: "StudyNet Kuala Lumpur",
                lat: 3.067812,
                lng: 101.660145,
                address: "Parklane OUG Block B1 Block B2, Jalan 1/152, Taman Perindustrian Oug, 58200 Kuala Lumpur",
                phone: "+60 3 7773 2100"
            },
            {
                title: "StudyNet Dhaka",
                lat: 23.746142,
                lng: 90.404215,
                address: "Standard Center, 27/1, 7th Floor, New Eskaton Road, Dhaka-1000",
                phone: "+880 9614 650050"
            }
        ];

        function initMap() {
            // Default center showing global view
            const centerWorld = { lat: 10.0, lng: 110.0 };

            map = new google.maps.Map(document.getElementById("real-google-map"), {
                zoom: 3,
                center: centerWorld,
                mapId: 'DEMO_MAP_ID', // Replaces old styles with modern Google Map UI
                streetViewControl: true,
                mapTypeControl: false,
                fullscreenControl: true,
                zoomControl: true,
            });

            // Loop through locations and place real interactive pins
            locations.forEach((loc, index) => {
                const marker = new google.maps.Marker({
                    position: { lat: loc.lat, lng: loc.lng },
                    map: map,
                    title: loc.title,
                    animation: google.maps.Animation.DROP,
                });

                // Google Map Popup Window Content
                const contentString = `
                    <div style="padding: 10px; max-width: 240px; font-family: sans-serif;">
                        <h4 style="margin: 0 0 6px 0; font-size: 14px; font-weight: 700; color: #0f172a;">${loc.title}</h4>
                        <p style="margin: 0 0 8px 0; font-size: 11px; color: #64748b; line-height: 1.4;">${loc.address}</p>
                        <a href="tel:${loc.phone}" style="font-size: 11px; font-weight: 600; color: #831843; text-decoration: none;">📞 ${loc.phone}</a>
                    </div>
                `;

                const infoWindow = new google.maps.InfoWindow({
                    content: contentString,
                });

                marker.addListener("click", () => {
                    closeAllInfoWindows();
                    infoWindow.open(map, marker);
                    map.panTo(marker.getPosition());
                    map.setZoom(16);
                });

                markers.push(marker);
                infoWindows.push(infoWindow);
            });
        }

        function closeAllInfoWindows() {
            infoWindows.forEach(iw => iw.close());
        }

        // Smoothly zoom into exact address when card is clicked
        function focusOnLocation(lat, lng, zoomLevel, index) {
            const targetPos = { lat: lat, lng: lng };
            map.panTo(targetPos);
            map.setZoom(zoomLevel);
            
            // Scroll user smoothly up to map
            document.getElementById('real-google-map').scrollIntoView({ behavior: 'smooth', block: 'center' });

            // Trigger click on marker to pop up InfoWindow
            closeAllInfoWindows();
            infoWindows[index].open(map, markers[index]);
        }
    </script>

    <!-- Load Google Maps Script with Key -->
    <!-- Replace YOUR_GOOGLE_MAPS_API_KEY with your actual key -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&callback=initMap" async defer></script>
@endsection