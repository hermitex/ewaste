<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js'></script>
<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css' rel='stylesheet' />
<link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/drop.css">
<script type="text/javascript">
    mapboxgl.accessToken = 'pk.eyJ1IjoiaGVybWl0ZXgiLCJhIjoiY2twOWxlM2pkMGY2aTJwbGw3Y3NkYTMzbiJ9.FU8pM1-GhV3KyA1IkbY32A';

    const map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/dark-v10',
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
                "phoneFormatted"=> $location->phone,
                "phone"=>$location->phone,
                "address"=>"1471 P St NW",
                "city"=>$location->city,
                "country"=>$location->country,
                'id' => $location->location_id,
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

    // add markers to map
    for (const feature of locations.features) {
        // create a HTML element for each feature
        const el = document.createElement('span');
        el.className = 'marker';

        // make a marker for each feature and add to the map
        new mapboxgl.Marker(el).setLngLat(feature.geometry.coordinates).addTo(map);
    }


    <?php
$lR = array();
foreach ($data['locations'] as $location){
    $arr = array(
        'bearing' => 90,
        'center' =>  array(
            $location->longitude,
            $location->latitude
        ),
        'zoom' => 17.3,
        'pitch' => 40,
        'id' => $location->location_id
    );
    array_push($lR, $arr);
 }
?>
    let lR = <?php echo json_encode(($lR), JSON_PRETTY_PRINT); ?>;


    map.on('load', () => {
        /*
        Populate the map with the locations data as a layer
         */
        map.addLayer({
            id: 'location',
            // type: 'circle',
            /*
            Add a GeoJSON source containing place coordinates and info
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
        const ewasteLocations =  (document.getElementById('locations-wrapper'));
        locations.features.forEach((location, i) => {
                /*
                Add a new location to the sidebar
                 */
            ewasteLocations.innerHTML+=
                    `
              <div id = ${location.properties.id}  class="location locations">
                 <div class="text">
                    <address>
                        eWaste Center<br>
                        PO BOX 00100 - ${6200+i}<br>
                        ${location.properties.city}<br>
                        Phone: ${location.properties.phoneFormatted}.<br>
                        ${location.properties.country}

                    </address>
                 </div>
               <div class="info">
                    <p class="distance">15.7 KM</p>
                    <a class="button-green" href="<?php echo URLROOT; ?>/pages/direction">Direction</a>
                    <a class="button-green" href="<?php echo URLROOT; ?>/pages/direction">Edit</a>
                    <a class="button-green" href="<?php echo URLROOT; ?>/pages/direction">Remove</a>
               </div>
            </div>
          `
            });

    }

    const ewasteLocations =  (document.querySelectorAll('.locations'));
    const l =  (document.getElementById('locations-wrapper'));
    for (const location of ewasteLocations) {
        let activeLocation = ewasteLocations[0];
        activeLocation.classList.add('active');
        function selectActiveLocation(ewastelocation) {
            if (ewastelocation === activeLocation.id) return;

            console.log(ewastelocation, activeLocation.id);
            let currLoc = getObjectForName(ewastelocation);
            map.flyTo(currLoc);
            console.log(activeLocation)
            document.getElementById(ewastelocation).classList.add('active');
            activeLocation.classList.remove('active');
            console.log(activeLocation)
            activeLocation.id = ewastelocation;
        }


        function getObjectForName(key) {
            for(var i=0; i< lR.length; i++) {
                if(lR[i].id == key){
                    return lR[i];
                }
            }
        }

        function isElementOnScreen(id) {
            let clientHeight = document.getElementById('locations-wrapper').clientHeight;
            const element = document.getElementById(id);
            const bounds = element.getBoundingClientRect();

            return bounds.top < clientHeight && bounds.bottom > 0;
        }



        // On every scroll event, check which element is on screen
        l.onscroll = () => {
            const ewasteL =  (document.querySelectorAll('.locations'));
            for (const location of ewasteL) {
                if (isElementOnScreen(location.id)) {
                    selectActiveLocation(location.id);
                    break;
                }
            }
        };
    }



</script>