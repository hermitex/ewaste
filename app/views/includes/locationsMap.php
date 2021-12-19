<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js'></script>
<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css' rel='stylesheet' />
<script type="text/javascript">
    mapboxgl.accessToken = 'pk.eyJ1IjoiaGVybWl0ZXgiLCJhIjoiY2twOWxlM2pkMGY2aTJwbGw3Y3NkYTMzbiJ9.FU8pM1-GhV3KyA1IkbY32A';

    const map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/light-v10',
        center: [36.81667, -1.28333],
        zoom: 5,
        scrollZoom: false
    });


    <?php

    $geojson = array( 'type' => 'FeatureCollection', 'features' => array());

    foreach ($data['locations'] as $location){
        $marker = array(
            'type' => 'Feature',
            'properties' => array(
                "phoneFormatted"=> "(202) 234-7336",
                "phone"=>"2022347336",
                "address"=>"1471 P St NW",
                "city"=>$location->city,
                "country"=>$location->country,
                "postalCode"=> "20005",
                "state"=>"D.C."
            ),
            'geometry' => array(
                'type' => 'Point',
                'coordinates' => array(
                    $location->longitude,
                    $location->latitude
                )
            )
        );
        array_push($geojson['features'], $marker);
    }

    ?>
    let locations = <?php echo json_encode(($geojson), JSON_PRETTY_PRINT); ?>;

    console.log(locations);

    map.on('load', () => {
        /*
        Populate the map with the locations data as a layer
         */
        map.addLayer({
            id: 'location',
            type: 'circle',
            /*
            Add a GeoJSON source containng place coordinates and info
             */
            source: {
                type: 'geojson',
                data: locations
            }
        });
        createLocationList(locations);
    });
    // console.log({...locations});
    createLocationList(locations);
    function createLocationList(locations){
        const ewasteLocations = document.getElementById('locations-wrapper');
        locations.features.forEach(location => {
                /*
                Add a new location to the sidebar
                 */
                ewasteLocations.innerHTML+=
                    `
              <div class="location locations">
                 <div class="text">
                    <address>
                        eWaste Center<br>
                        PO BOX 00100 - 6200<br>
                        ${location.properties.city}<br>
                        Phone: (079) - 716 - 741.<br>
                        ${location.properties.country}
                    </address>
                 </div>
               <div class="info">
                    <p class="distance">15.7 KM</p>
                    <a class="button-green" href="<?php echo URLROOT; ?>/pages/direction">Directions</a>
               </div>
            </div>
          `
            })
    }
</script>