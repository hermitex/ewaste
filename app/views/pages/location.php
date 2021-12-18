<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js'></script>
<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css' rel='stylesheet' />
<head>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/index.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/drop.css">
</head>

<?php
require_once APPROOT.'/views/includes/head.php';
?>

<?php
require_once APPROOT.'/views/includes/navigation.php';
?>


<div class="wrapper">
    <div class="hero-section">
        <div class="overlay">
            <div class="inner-div">
                <div class="left">
                    <h1 class="head-line">You Drop. We Pick.</h1>
                    <p class="head-para">
                        Find the nearest place to your location to drop of your electronic waste today!
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="search-section">
        <form action="" method="get">
            <div class="form-floating">
                <label for="city">Name of City</label>
                <input type="text" class="form-control" id="city" placeholder="Nairobi" name="city">
                <span class="bg bg-warning">
               <?php //echo $data['firstNameError']; ?>
             </span>
            </div>

            <div class="form-floating">
                <label for="radius">Search Radius (KM)</label>
                <input type="text" class="form-control" id="radius" placeholder="30" name="radius">
                <span class="bg bg-warning">
                 <?php //echo $data['lastNameError']; ?>
             </span>
            </div>

            <button class="w-100 btn btn-lg btn-primary button-green" type="submit">Search</button>

        </form>
    </div>

<div id="wrapper">
    <div id="locations-wrapper">

    </div>
    <div class="map" id="map">

    </div>
</div>

</div>

<script type="text/javascript">
    mapboxgl.accessToken = 'pk.eyJ1IjoiaGVybWl0ZXgiLCJhIjoiY2twOWxlM2pkMGY2aTJwbGw3Y3NkYTMzbiJ9.FU8pM1-GhV3KyA1IkbY32A';

    const map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/light-v10',
        center: [36.81667, -1.28333],
        zoom: 12,
        scrollZoom: false
    });



    let locationJson = <?php echo json_encode($data['locations'], JSON_PRETTY_PRINT); ?>;

// console.log("JSON LOCATIONS: ", locationJson);
    let locationsOBJ = {};
    let locationsClean = {};
    locationsOBJ.locations = locationJson;

    let locations = [];
    let locationsObj = {};
    // console.log("OBJ LOCATIONS: ", locationsOBJ.locations);
    locationsOBJ.locations.forEach((location)=>{
     locations.push({
     "type": "FeatureCollection",
        "features": [
        {
            "type": "Feature",
            "geometry": {
                "type": "Point",
                "coordinates": [
                    `${parseFloat(location.latitude)}`,`${parseFloat(location.longitude)}`
                    ]
            },
            "properties": {
                "phoneFormatted": "(202) 234-7336",
                "phone": "2022347336",
                "address": "1471 P St NW",
                "city":  `${location.city}`,
                "country": `${location.country}`,
                "postalCode": "20005",
                "state": "D.C."
            }
        }
    ]})
 });


    // console.log(locations);
function addPropertyId(){
    locations.forEach((location, i)=>{
        location.features.forEach( l => l.properties.id = i);
    });
}
   addPropertyId();

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
    // console.log(...locations.features);
    createLocationList(locations);
    function createLocationList(locations){
        const ewasteLocations = document.getElementById('locations-wrapper');
        locations.forEach((location, i)=>{
            location.features.forEach(l => {
                console.log(l.properties);
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
                        ${l.properties.city}<br>
                        Phone: (079) - 716 - 741.<br>
                        ${l.properties.country}
                    </address>
                 </div>
               <div class="info">
                    <p class="distance">15.7 KM</p>
                    <a class="button-green" href="<?php echo URLROOT; ?>/pages/direction">Directions</a>
               </div>
            </div>
          `
            });
        });
    }

</script>


<?php
require_once APPROOT.'/views/includes/footer.php';
?>