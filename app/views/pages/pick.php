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
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/pick.css">
        <script async
                src="https://maps.googleapis.com/maps/api/js?key=<?php echo KEY; ?>&callback=initMap">
        </script>

    </head>

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
            <form action="" method="" class="pick-form">
                <div class="form-floating input-1">
                    <label for="name">What is you name?</label>
                    <input type="text" class="form-control" id="name" placeholder="John Doe" name="name">
                    <span class="bg bg-warning">
<!--                 --><?php //echo $data['firstNameError']; ?>
             </span>
                </div>

                <div class="form-floating input-2">
                    <label for="residency">Where do you leave?</label>
                    <input type="text" class="form-control" id="residency" placeholder="Juja" name="residency">
                    <span class="bg bg-warning">
<!--                 --><?php //echo $data['lastNameError']; ?>
             </span>
                </div>

                <div class="form-floating input-3">
                    <label for="email">What your email address?</label>
                    <input type="text" class="form-control" id="email" placeholder="johndoe@gmai.com" name="email">
                    <span class="bg bg-warning">
<!--                 --><?php //echo $data['lastNameError']; ?>
             </span>
                </div>

                <div class="form-floating input-4">
                    <label for="phone">What is your phone number?</label>
                    <input type="text" class="form-control" id="phone" placeholder="0797165741" name="phone">
                    <span class="bg bg-warning">
<!--                 --><?php //echo $data['lastNameError']; ?>
             </span>
                </div>


                <div class="form-floating input-5">
                    <label for="address">What is your address?</label>
                    <input type="text" class="form-control" id="address" placeholder="PO BOX 00100 - 6200, Nairobi" name="address">
                    <span class="bg bg-warning">
<!--                 --><?php //echo $data['lastNameError']; ?>
             </span>
                </div>



                <div class="form-floating input-6">
                    <label for="message">Comment or Message</label>
                    <textarea rows="10" placeholder="Start typing..." name="message" id="message">

                    </textarea>
                    <span class="bg bg-warning">
<!--                 --><?php //echo $data['lastNameError']; ?>
             </span>
                </div>

                <div class="form-floating input-7">
                    <h3>Service Required</h3>

                    <input type="checkbox" class="form-control" id="pickup"  name="pickup" value="">
                    <label for="pickup">Electronic Recycling and Pick Up</label>

                    <span class="bg bg-warning">
<!--                 --><?php //echo $data['lastNameError']; ?>
                    </span>

                    <input type="checkbox" class="form-control" id="equipment-destruction"  name="equipment-destruction">
                    <label for="equipment-destruction">Electronic equipment destruction</label>

                    <span class="bg bg-warning">
<!--                 --><?php //echo $data['lastNameError']; ?>
                    </span>
                    <input type="checkbox" class="form-control" id="battery-recycling"  name="battery-recycling">
                    <label for="battery-recycling">Battery recycling</label>

                    <span class="bg bg-warning">
<!--                 --><?php //echo $data['lastNameError']; ?>
                    </span>
                </div>


                <div class="form-floating input-8">
                    <h3>Service Required</h3>
                    <input type="checkbox" class="form-control" id="pickup"  name="pickup">
                    <label for="pickup">Electronic Recycling and Pick Up</label>

                    <span class="bg bg-warning">
<!--                 --><?php //echo $data['lastNameError']; ?>
                    </span>

                    <input type="checkbox" class="form-control" id="equipment-destruction"  name="equipment-destruction">
                    <label for="equipment-destruction">Electronic equipment destruction</label>

                    <span class="bg bg-warning">
<!--                 --><?php //echo $data['lastNameError']; ?>
                    </span>
                    <input type="checkbox" class="form-control" id="battery-recycling"  name="battery-recycling">
                    <label for="battery-recycling">Battery recycling</label>

                    <span class="bg bg-warning">
<!--                 --><?php //echo $data['lastNameError']; ?>
                    </span>
                </div>

                <div class="input-9">
                    <button class="w-100 btn btn-lg btn-primary button-green " type="submit">Search</button>

                </div>

            </form>
        </div>

</div>


    <script src="<?php echo URLROOT; ?>/public/js/map.js"></script>


<?php
require_once APPROOT.'/views/includes/footer.php';
?>