@extends('layouts.main')

@section('content')
<head>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.9.2/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.2/mapbox-gl.css' rel='stylesheet' />
</head>
<div id="map" style="width: 100%; height: 100vh"></div>


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
</script>
@endsection
