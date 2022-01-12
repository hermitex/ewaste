<?php
require_once APPROOT.'/views/includes/head.php';
?>

    <div>
        <?php
        require_once APPROOT.'/views/includes/navigation.php';
        ?>
    </div>


        <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/index.css">
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/drop.css">

<style>
    #locations-wrapper{
        display: grid;
        grid-template-columns: repeat(3, 1fr) !important;
        column-gap: 1rem;
        row-gap: 1rem;
        padding:1rem;
        overflow: hidden !important;
        height: auto !important;
        overflow-y: paged-y-controls !important;
        /*margin-top: 1.5rem;*/
        /*margin-bottom: 1.5rem;*/
    }

</style>

    <div class="wrapper">
        <div class="hero-section">
            <div class="overlay">
                <div class="inner-div">
                    <div class="left">
                        <h1 class="head-line">You Drop. We Pick.</h1>
                        <p class="head-para">
                            Find the nearest place to your location to drop of your electronic waste today!
                        </p>
                        <a href="#location-sec" class="button-green">View Drop off Sites</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="search-section" id="location-sec">
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

        <div  id="locations-wrapper">


        </div>

    </div>

<?php
require_once APPROOT.'/views/includes/locationsMap.php';
?>



<?php
require_once APPROOT.'/views/includes/footer.php';
?>