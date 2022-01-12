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
                    <a href="#search-section" class="button-green">View Our Locations</a>

                </div>
            </div>
        </div>
    </div>

    <div class="search-section" id="search-section">
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

<?php
require_once APPROOT.'/views/includes/locationsMap.php';
?>


<?php
require_once APPROOT.'/views/includes/footer.php';
?>