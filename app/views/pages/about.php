
<?php
require_once '../app/require.php';
require_once APPROOT.'/views/includes/head.php';
?>

<div>
    <?php
    require_once APPROOT.'/views/includes/navigation.php';
    ?>
</div>

<head>
    <link rel="stylesheet" href="css/about.css">
</head>

<div class="wrapper">
    <div class="hero-section">
        <div class="overlay">
            <div class="inner-div">
                <div class="left">
                    <h1 class="head-line">Stay Green, Leave Long</h1>
                    <p class="head-para">Stay Green, Leave Long
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. In, deserunt!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. In, deserunt!
                    </p>
                    <div>
                        <a class="button-green"  href="<?php echo URLROOT; ?>/pages/pick">Request Pick Up</a>
                        <a class="button-colorless" href="<?php echo URLROOT; ?>/pages/pick">Drop Off</a>
                    </div>
                </div>
                <div class="right">
                    <img src="img/recycler.jpg" alt="A man holding a recycle bin">
                </div>
            </div>
        </div>
    </div>

    <div class="services">
        <div class="service service-1">

        </div>
        <div class="service service-2">

        </div>
        <div class="service service-3">

        </div>
    </div>

    <div class="map" id="map">

    </div>
</div>


<?php
require_once APPROOT.'/views/includes/footer.php';
?>
