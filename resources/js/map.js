import jsVectorMap from 'jsvectormap';
import 'jsvectormap/dist/maps/world';
import 'jsvectormap/dist/jsvectormap.min.css';

export const initMap = () => {
    const mapElement = document.querySelector('#mapOne');

    if (mapElement && mapElement.dataset.mapReady !== 'true') {
        mapElement.dataset.mapReady = 'true';

        new jsVectorMap({
            selector: mapElement,
            map: "world",
            zoomButtons: false,
            regionStyle: {
                initial: {
                    fontFamily: "Outfit",
                    fill: "#D9D9D9",
                },
                hover: {
                    fillOpacity: 1,
                    fill: "#465fff",
                },
            },
            markers: [
                {
                    name: "Sydney",
                    coords: [-33.876735, 151.209028],
                },
                {
                    name: "Kuala Lumpur",
                    coords: [3.067812, 101.660145],
                },
                {
                    name: "Dhaka",
                    coords: [23.746142, 90.404215],
                },
            ],

            markerStyle: {
                initial: {
                    strokeWidth: 1,
                    fill: "#465fff",
                    fillOpacity: 1,
                    r: 4,
                },
                hover: {
                    fill: "#465fff",
                    fillOpacity: 1,
                },
                selected: {},
                selectedHover: {},
            },
        });
    }
};

export default initMap;
