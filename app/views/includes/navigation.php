<?php

?>
<!--Navigation bar starts here-->
<nav class="navbar">
    <div class="container-fluid">
        <!--The logo goes here-->
        <a class="navbar-brand" href="<?php echo URLROOT; ?>/">EWASTE</a>
        <div class="collapse navbar collapse">
            <!--            Navigation links start here-->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo URLROOT; ?>/pages/drop">Drop Off</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo URLROOT; ?>/pages/pick">Pick Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo URLROOT; ?>/locations/location">Locations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo URLROOT; ?>/pages/about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo URLROOT; ?>/pages/contact">Contact Us</a>
                </li>
                <?php if (isset($_SESSION['user_id'])): ?>
                <li class="nav-item">
                    <a class="nav-link active button-green" href="<?php echo URLROOT; ?>/users/logout">Log Out</a>
                </li>
                <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link active button-green" href="<?php echo URLROOT; ?>/users/login">Login</a>
                </li>
                <?php endif; ?>
            </ul>
            <!--            Navigation links start here-->
        </div>
    </div>

</nav>
