<?php
require_once APPROOT.'/views/includes/head.php';
?>

    <div>
        <?php
        require_once APPROOT.'/views/includes/navigation.php';
        ?>
    </div>

    <head>
        <link rel="stylesheet" href="css/index.css">
        <script async
                src="https://maps.googleapis.com/maps/api/js?key=<?php echo KEY; ?>&callback=initMap">
        </script>

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
                            <a class="button-colorless" href="<?php echo URLROOT; ?>/pages/drop">Drop Off</a>
                        </div>
                    </div>
                    <div class="right">
                        <img src="<?php echo URLROOT; ?>/public/img/recycler.jpg" alt="A man holding a recycle bin">
                    </div>
                </div>
            </div>
        </div>
        <div id="service-header">
            <h1>Our Services</h1>
        </div>
        <div class="services">

            <div class="service service-1">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                        <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                    </svg>
                </div>
                <div class="text">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. In, deserunt!
                    </p>
                </div>
            </div>
            <div class="service service-2">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
                        <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </div>
                <div class="text">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. In, deserunt!
                    </p>
                </div>
            </div>
            <div class="service service-3">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-recycle" viewBox="0 0 16 16">
                        <path d="M9.302 1.256a1.5 1.5 0 0 0-2.604 0l-1.704 2.98a.5.5 0 0 0 .869.497l1.703-2.981a.5.5 0 0 1 .868 0l2.54 4.444-1.256-.337a.5.5 0 1 0-.26.966l2.415.647a.5.5 0 0 0 .613-.353l.647-2.415a.5.5 0 1 0-.966-.259l-.333 1.242-2.532-4.431zM2.973 7.773l-1.255.337a.5.5 0 1 1-.26-.966l2.416-.647a.5.5 0 0 1 .612.353l.647 2.415a.5.5 0 0 1-.966.259l-.333-1.242-2.545 4.454a.5.5 0 0 0 .434.748H5a.5.5 0 0 1 0 1H1.723A1.5 1.5 0 0 1 .421 12.24l2.552-4.467zm10.89 1.463a.5.5 0 1 0-.868.496l1.716 3.004a.5.5 0 0 1-.434.748h-5.57l.647-.646a.5.5 0 1 0-.708-.707l-1.5 1.5a.498.498 0 0 0 0 .707l1.5 1.5a.5.5 0 1 0 .708-.707l-.647-.647h5.57a1.5 1.5 0 0 0 1.302-2.244l-1.716-3.004z"/>
                    </svg>
                </div>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In, deserunt!
                </p>

            </div>
        </div>
        <div id="service-header">
            <h1>Locate Us</h1>
        </div>
        <div class="map" id="map">

        </div>
    </div>

    <script src="<?php echo URLROOT; ?>/public/js/map.js"></script>


<?php
require_once APPROOT.'/views/includes/footer.php';
?>