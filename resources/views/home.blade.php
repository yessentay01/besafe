@extends('layouts.main')

@section('content')
<head>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.9.2/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.2/mapbox-gl.css' rel='stylesheet' />
    <style>
        .addEventBtn{
            position: absolute;
            bottom: 80px;
            right: 15px;
            box-sizing: border-box;
            width: 50px;
            height: 50px;
            text-align: center;
            border-radius: 50%;
            padding-top: 1px;
            font-size: 30px;
        }
    </style>
</head>
<div id="map" style="width: 100%; height: 100vh"></div>
<a class="addEventBtn  bg-gray-600 border-gray-600 text-white" href="#">+</a>

<script type="text/javascript">
    mapboxgl.accessToken = 'pk.eyJ1IjoiZXNlbnRhaSIsImEiOiJjbGR4M2JuamEwNTFmM3B0Y2N1bXJ6eDI5In0.IqcrA1uwWfEInCE4ez4_ng';
    const map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/dark-v11',
        center: [76.9054485,43.2394112], //43.2394112,76.9054485
        zoom: 12
    });
    const geolocate = new mapboxgl.GeolocateControl({
        positionOptions: {
            enableHighAccuracy: true
        },
        trackUserLocation: true
    });
    map.addControl(geolocate);
    geolocate.trigger();

    var marker = new mapboxgl.Marker();

    function add_marker (event) {
        var coordinates = event.lngLat;
        console.log('Lng:', coordinates.lng, 'Lat:', coordinates.lat);
        marker.setLngLat(coordinates).addTo(map);
    }

    map.on('click', add_marker);


</script>
@endsection
