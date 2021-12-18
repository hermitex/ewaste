    <div>
        <?php
        require_once APPROOT.'/views/includes/navigation.php';
        ?>
    </div>

    <?php
    require_once APPROOT.'/views/includes/head.php';
    ?>

    <head>
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/index.css">
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/pick.css">
        <script async
                src="https://maps.googleapis.com/maps/api/js?key=<?php echo KEY; ?>&callback=init_map">
        </script>

    </head>
<?php
var_dump($data);
?>
    <div class="wrapper">
        <div class="hero-section">
            <div class="overlay">
                <div class="inner-div">
                    <div class="left">
                        <h1 class="head-line">Let Us Recycle Today!</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="search-section">
            <?php
            require_once APPROOT.'/views/includes/gmap.php';
            ?>
            <form action="<?php echo URLROOT;  ?>/picks/sendPickupRequest" method="POST" class="pick-form">
                <div class="form-floating input-6">
                    <label for="message">Comment or Message</label>
                    <textarea rows="10"  name="message" id="message"></textarea>
                    <span class="bg bg-warning">
<!--                 --><?php //echo $data['lastNameError']; ?>
                    </span>
                </div>

                <div class="form-floating input-7">
                    <h3>Service Required</h3>

                    <input type="checkbox" class="form-control" id="pickup"  name="pick" value="Electronic Recycling and Pick Up">
                    <label for="pickup">Electronic Recycling and Pick Up</label>

                    <span class="bg bg-warning">
<!--                 --><?php //echo $data['lastNameError']; ?>
                    </span>

                    <input type="checkbox" class="form-control" id="equipment-destruction"  name="destruction" value="Electronic equipment destruction">
                    <label for="equipment-destruction">Electronic equipment destruction</label>

                    <span class="bg bg-warning">
<!--                 --><?php //echo $data['lastNameError']; ?>
                    </span>
                    <input type="checkbox" class="form-control" id="battery-recycling"  name="battery-recycling" value="Battery recycling">
                    <label for="battery-recycling">Battery recycling</label>

                    <span class="bg bg-warning">
<!--                 --><?php //echo $data['lastNameError']; ?>
                    </span>
                </div>


                <div class="form-floating input-8">
                    <h3>Items Required</h3>
                    <input type="checkbox" class="form-control" id="bin-swap"  name="swap" value="eWaste bin swap">
                    <label for="bin-swap">eWaste bin swap</label>

                    <span class="bg bg-warning">
<!--                 --><?php //echo $data['lastNameError']; ?>
                    </span>

                    <input type="checkbox" class="form-control" id="florence-bulbs"  name="florence" value="Florence bulbs">
                    <label for="florence-bulbs">Florence bulbs</label>

                    <span class="bg bg-warning">
<!--                 --><?php //echo $data['lastNameError']; ?>
                    </span>
                    <input type="checkbox" class="form-control" id="battery-buckets"  name="battery-buckets" value="Battery recycling">
                    <label for="battery-buckets">Battery recycling</label>

                    <span class="bg bg-warning">
<!--                 --><?php //echo $data['lastNameError']; ?>
                    </span>
                </div>

                <div class="input-9">
                    <input class="w-100 btn btn-lg btn-primary button-green " type="submit" value="Submit">
                </div>

            </form>
        </div>

</div>


    <script src="<?php echo URLROOT; ?>/public/js/map.js"></script>


<?php
require_once APPROOT.'/views/includes/footer.php';
?>