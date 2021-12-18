<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js'></script>
<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css' rel='stylesheet' />.
<head>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/index.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/drop.css">


</head>

<div class="location-header">
    <h1>eWaste Locations</h1>
</div>
<!--<div class="sidebar">-->
<!--    <div id="location" class="location location-1">-->
<!---->
<!--    </div>-->
<!--    <div id="map" class="map"></div>-->
<!--</div>-->

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
        <form action="" method="">
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


    <div class="map" id="map">

    </div>
    <div id="location-header">
        <h1>Locations</h1>
    </div>
    <div class="location" id="locations">

    </div>

</div>

<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiaGVybWl0ZXgiLCJhIjoiY2twOWxlM2pkMGY2aTJwbGw3Y3NkYTMzbiJ9.FU8pM1-GhV3KyA1IkbY32A';

    const map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/light-v10',
        center: [36.81667, -1.28333],
        zoom: 12,
        scrollZoom: false
    });


    const locations = {
        "type": "FeatureCollection",
        "features": [
            {
                "type": "Feature",
                "geometry": {
                    "type": "Point",
                    "coordinates": [
                        -77.034084142948,
                        38.909671288923
                    ]
                },
                "properties": {
                    "phoneFormatted": "(202) 234-7336",
                    "phone": "2022347336",
                    "address": "1471 P St NW",
                    "city": "Washington DC",
                    "country": "United States",
                    "crossStreet": "at 15th St NW",
                    "postalCode": "20005",
                    "state": "D.C."
                }
            },
            {
                "type": "Feature",
                "geometry": {
                    "type": "Point",
                    "coordinates": [
                        -77.049766,
                        38.900772
                    ]
                },
                "properties": {
                    "phoneFormatted": "(202) 507-8357",
                    "phone": "2025078357",
                    "address": "2221 I St NW",
                    "city": "Washington DC",
                    "country": "United States",
                    "crossStreet": "at 22nd St NW",
                    "postalCode": "20037",
                    "state": "D.C."
                }
            },
            {
                "type": "Feature",
                "geometry": {
                    "type": "Point",
                    "coordinates": [
                        -77.043929,
                        38.910525
                    ]
                },
                "properties": {
                    "phoneFormatted": "(202) 387-9338",
                    "phone": "2023879338",
                    "address": "1512 Connecticut Ave NW",
                    "city": "Washington DC",
                    "country": "United States",
                    "crossStreet": "at Dupont Circle",
                    "postalCode": "20036",
                    "state": "D.C."
                }
            },
            {
                "type": "Feature",
                "geometry": {
                    "type": "Point",
                    "coordinates": [
                        -77.0672,
                        38.90516896
                    ]
                },
                "properties": {
                    "phoneFormatted": "(202) 337-9338",
                    "phone": "2023379338",
                    "address": "3333 M St NW",
                    "city": "Washington DC",
                    "country": "United States",
                    "crossStreet": "at 34th St NW",
                    "postalCode": "20007",
                    "state": "D.C."
                }
            },
            {
                "type": "Feature",
                "geometry": {
                    "type": "Point",
                    "coordinates": [
                        -77.002583742142,
                        38.887041080933
                    ]
                },
                "properties": {
                    "phoneFormatted": "(202) 547-9338",
                    "phone": "2025479338",
                    "address": "221 Pennsylvania Ave SE",
                    "city": "Washington DC",
                    "country": "United States",
                    "crossStreet": "btwn 2nd & 3rd Sts. SE",
                    "postalCode": "20003",
                    "state": "D.C."
                }
            },
            {
                "type": "Feature",
                "geometry": {
                    "type": "Point",
                    "coordinates": [
                        -76.933492720127,
                        38.99225245786
                    ]
                },
                "properties": {
                    "address": "8204 Baltimore Ave",
                    "city": "College Park",
                    "country": "United States",
                    "postalCode": "20740",
                    "state": "MD"
                }
            },
            {
                "type": "Feature",
                "geometry": {
                    "type": "Point",
                    "coordinates": [
                        -77.097083330154,
                        38.980979
                    ]
                },
                "properties": {
                    "phoneFormatted": "(301) 654-7336",
                    "phone": "3016547336",
                    "address": "4831 Bethesda Ave",
                    "cc": "US",
                    "city": "Bethesda",
                    "country": "United States",
                    "postalCode": "20814",
                    "state": "MD"
                }
            },
            {
                "type": "Feature",
                "geometry": {
                    "type": "Point",
                    "coordinates": [
                        -77.359425054188,
                        38.958058116661
                    ]
                },
                "properties": {
                    "phoneFormatted": "(571) 203-0082",
                    "phone": "5712030082",
                    "address": "11935 Democracy Dr",
                    "city": "Reston",
                    "country": "United States",
                    "crossStreet": "btw Explorer & Library",
                    "postalCode": "20190",
                    "state": "VA"
                }
            },
            {
                "type": "Feature",
                "geometry": {
                    "type": "Point",
                    "coordinates": [
                        -77.10853099823,
                        38.880100922392
                    ]
                },
                "properties": {
                    "phoneFormatted": "(703) 522-2016",
                    "phone": "7035222016",
                    "address": "4075 Wilson Blvd",
                    "city": "Arlington",
                    "country": "United States",
                    "crossStreet": "at N Randolph St.",
                    "postalCode": "22203",
                    "state": "VA"
                }
            },
            {
                "type": "Feature",
                "geometry": {
                    "type": "Point",
                    "coordinates": [
                        -75.28784,
                        40.008008
                    ]
                },
                "properties": {
                    "phoneFormatted": "(610) 642-9400",
                    "phone": "6106429400",
                    "address": "68 Coulter Ave",
                    "city": "Ardmore",
                    "country": "United States",
                    "postalCode": "19003",
                    "state": "PA"
                }
            },
            {
                "type": "Feature",
                "geometry": {
                    "type": "Point",
                    "coordinates": [
                        -75.20121216774,
                        39.954030175164
                    ]
                },
                "properties": {
                    "phoneFormatted": "(215) 386-1365",
                    "phone": "2153861365",
                    "address": "3925 Walnut St",
                    "city": "Philadelphia",
                    "country": "United States",
                    "postalCode": "19104",
                    "state": "PA"
                }
            },
            {
                "type": "Feature",
                "geometry": {
                    "type": "Point",
                    "coordinates": [
                        -77.043959498405,
                        38.903883387232
                    ]
                },
                "properties": {
                    "phoneFormatted": "(202) 331-3355",
                    "phone": "2023313355",
                    "address": "1901 L St. NW",
                    "city": "Washington DC",
                    "country": "United States",
                    "crossStreet": "at 19th St",
                    "postalCode": "20036",
                    "state": "D.C."
                }
            }
        ]
    };

    locations.features.forEach((location, i)=>location.properties.id = i);

    map.on('load', () => {
    /*
    Populate the map with the locations data as a layer
     */

        map.addLayer({
            id: 'locations',
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

    function createLocationList(locations){
        for (const location of locations.features){
            console.log(location);
            /*
            Add a new location to the sidebar
             */
            const ewastLocations = document.getElementById('locations');
            let ewasteLocation = ewastLocations.innerHTML +=
                `
                 <div class="text">
            <address>
                eWaste Center<br>
                PO BOX 00100 - 6200,<br>
                NAIROBI.<br>
                Phone: (079) - 716 - 741
                ${location.properties.address}
            </address>
        </div>
        <div class="info">
            <p class="distance">15.7 KM</p>
            <a class="button-green" href="<?php echo URLROOT; ?>/pages/direction">Directions</a>
        </div>
                `
            ;
        }
    }


</script>



