<?php
require_once APPROOT.'/views/includes/head.php';
?>

    <div>
        <?php
        require_once APPROOT.'/views/includes/navigation.php';
        ?>
    </div>

    <head>
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/index.css">
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/drop.css">
        <script async
                src="https://maps.googleapis.com/maps/api/js?key=<?php echo KEY; ?>&callback=initMap">
        </script>

    </head>

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
<!--                 --><?php //echo $data['firstNameError']; ?>
             </span>
                </div>

                <div class="form-floating">
                    <label for="radius">Search Radius (KM)</label>
                    <input type="text" class="form-control" id="radius" placeholder="30" name="radius">
                    <span class="bg bg-warning">
<!--                 --><?php //echo $data['lastNameError']; ?>
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
        <div class="locations">

            <div class="location location-1">
                <div class="text">
                    <address>
                        eWaste Center<br>
                        PO BOX 00100 - 6200,<br>
                        NAIROBI.<br>
                        Phone: (079) - 716 - 741
                    </address>
                </div>
                <div class="info">
                    <p class="distance">15.7 KM</p>
                    <a class="button-green" href="<?php echo URLROOT; ?>/pages/direction">Directions</a>
                </div>
            </div>
            <div class="location location-2">
                <div class="text">
                    <div class="text">
                        <address>
                            eWaste Center<br>
                            PO BOX 00100 - 6200,<br>
                            NAIROBI.<br>
                            Phone: (079) - 716 - 741
                        </address>
                    </div>
                </div>
                <div class="info">
                    <p class="distance">15.7 KM</p>
                    <a class="button-green" href="<?php echo URLROOT; ?>/pages/direction">Directions</a>
                </div>
            </div>
            <div class="location location-3">
                <div class="text">
                    <address>
                        eWaste Center<br>
                        PO BOX 00100 - 6200,<br>
                        NAIROBI.<br>
                        Phone: (079) - 716 - 741
                    </address>
                </div>
                <div class="info">
                    <p class="distance">15.7 KM</p>
                    <a class="button-green" href="<?php echo URLROOT; ?>/pages/direction">Directions</a>
                </div>
            </div>

            <div class="location location-3">
                <div class="text">
                    <address>
                        eWaste Center<br>
                        PO BOX 00100 - 6200,<br>
                        NAIROBI.<br>
                        Phone: (079) - 716 - 741
                    </address>
                </div>
                <div class="info">
                    <p class="distance">15.7 KM</p>
                    <a class="button-green" href="<?php echo URLROOT; ?>/pages/direction">Directions</a>
                </div>
            </div>
            <div class="location location-3">
                <div class="text">
                    <address>
                        eWaste Center<br>
                        PO BOX 00100 - 6200,<br>
                        NAIROBI.<br>
                        Phone: (079) - 716 - 741
                    </address>
                </div>
                <div class="info">
                    <p class="distance">15.7 KM</p>
                    <a class="button-green" href="<?php echo URLROOT; ?>/pages/direction">Directions</a>
                </div>
            </div>
            <div class="location location-3">
                <div class="text">
                    <address>
                        eWaste Center<br>
                        PO BOX 00100 - 6200,<br>
                        NAIROBI.<br>
                        Phone: (079) - 716 - 741
                    </address>
                </div>
                <div class="info">
                    <p class="distance">15.7 KM</p>
                    <a class="button-green" href="<?php echo URLROOT; ?>/pages/direction">Directions</a>
                </div>
            </div>
            <div class="location location-3">
                <div class="text">
                    <address>
                        eWaste Center<br>
                        PO BOX 00100 - 6200,<br>
                        NAIROBI.<br>
                        Phone: (079) - 716 - 741
                    </address>
                </div>
                <div class="info">
                    <p class="distance">15.7 KM</p>
                    <a class="button-green" href="<?php echo URLROOT; ?>/pages/direction">Directions</a>
                </div>
            </div>

        </div>

    </div>

    <script src="<?php echo URLROOT; ?>/public/js/map.js"></script>


<?php
require_once APPROOT.'/views/includes/footer.php';
?>