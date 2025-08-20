// Google Maps Initialization
function initMap() {
    // Bauchi coordinates
    const bauchi = { lat: 10.3123456789012, lng: 9.8441234567890 };
    
    // Map styling
    const mapStyles = [
        {
            featureType: 'all',
            elementType: 'geometry',
            stylers: [{ color: '#f5f5f5' }]
        },
        {
            featureType: 'water',
            elementType: 'geometry',
            stylers: [{ color: '#46bcec' }]
        },
        {
            featureType: 'poi',
            elementType: 'all',
            stylers: [{ visibility: 'off' }]
        }
    ];

    // Map options
    const mapOptions = {
        zoom: 13,
        center: bauchi,
        mapTypeControl: false,
        streetViewControl: false,
        fullscreenControl: true,
        zoomControl: true,
        styles: mapStyles
    };
    
    // Initialize map
    const map = new google.maps.Map(document.getElementById("map"), mapOptions);
    
    // Custom marker icon
    const customIcon = {
        url: 'data:image/svg+xml;charset=UTF-8,' + encodeURIComponent(`
            <svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <circle cx="20" cy="20" r="18" fill="#16A34A" stroke="white" stroke-width="4"/>
                <path d="M20 10L15 25h10L20 10z" fill="white"/>
            </svg>
        `),
        scaledSize: new google.maps.Size(40, 40),
        anchor: new google.maps.Point(20, 20)
    };

    // Office marker
    const officeMarker = new google.maps.Marker({
        position: bauchi,
        map: map,
        icon: customIcon,
        title: 'KwadagoPlus Office'
    });
    
    // Office info window content
    const officeContent = `
        <div class="map-info-window">
            <h3 class="text-lg font-bold text-[#16A34A] mb-2">KwadagoPlus Office</h3>
            <p class="text-sm text-gray-600 mb-2">123 Ahmadu Bello Way, GRA, Bauchi</p>
            <div class="flex items-center mb-2">
                <span class="text-sm font-medium text-gray-600">Operating Hours:</span>
                <span class="ml-2 text-sm text-gray-500">Mon-Fri: 9AM-6PM</span>
            </div>
            <a href="tel:+2348000000000" class="inline-flex items-center px-3 py-2 bg-[#16A34A] text-white rounded-lg text-sm hover:bg-[#15803D] transition-all">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
                Call Us
            </a>
        </div>
    `;
    
    // Create info window
    const officeInfoWindow = new google.maps.InfoWindow({
        content: officeContent
    });
    
    // Show info window on marker click
    officeMarker.addListener('click', () => {
        officeInfoWindow.open(map, officeMarker);
    });

    // Add service area circle
    const serviceArea = new google.maps.Circle({
        strokeColor: '#16A34A',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: '#16A34A',
        fillOpacity: 0.1,
        map: map,
        center: bauchi,
        radius: 10000 // 10km radius
    });

    // Error handling
    window.gm_authFailure = function() {
        const mapDiv = document.getElementById('map');
        mapDiv.innerHTML = `
            <div class="flex items-center justify-center h-full bg-gray-100 rounded-lg">
                <div class="text-center p-8">
                    <svg class="w-12 h-12 text-red-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                    </svg>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Map Loading Error</h3>
                    <p class="text-gray-600">Please check your internet connection or try again later.</p>
                </div>
            </div>
        `;
    };

    // Performance monitoring
    if (window.performance) {
        const timeSincePageLoad = Math.round(performance.now());
        console.log(`Map loaded in: ${timeSincePageLoad}ms`);
    }
}

// Lazy loading implementation
document.addEventListener('DOMContentLoaded', () => {
    const mapContainer = document.getElementById('map');
    if (mapContainer) {
        const observer = new IntersectionObserver((entries) => {
            if (entries[0].isIntersecting) {
                initMap();
                observer.disconnect();
            }
        });
        observer.observe(mapContainer);
    }
});
