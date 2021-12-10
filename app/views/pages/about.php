
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
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/about.css">
</head>

<div class="wrapper">
    <div class="hero-section">
        <div class="overlay">
            <div class="inner-div">
                <div class="left">
                    <h1 class="head-line">We Love Earth</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="about-line">
        <h2><span class="span-left">About</span> <span class="span-mid" id="blurred-text" style="color: rgba(0, 0, 0, 0.82)">u</span> <span class="span-right">  Us<span class="span-right text-muted">ujj</span></span>  </h2>
    </div>


<div class="sbout-section">
    <div class="about-overlay">
        <div class="inner-div">
            <div class="left" style="margin-right: 1.5rem;">
                <img src="<?php echo URLROOT; ?>/public/img/driver.jpg" alt="A track driver smiling.">
            </div>
            <div class="right">
                <h1 class="head-line">You are in the right place!</h1>
                <p class="head-para">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda, ex!Amet delectus iusto modi consequuntur nulla sequi. Delectus, dolorum sequi totam reiciendis dolore sit illum consectetur, voluptas recusandae repellat
                    illo porro possimus animi veniam dolores modi ullam aperiam rem dicta  placeat itaque rerum accusantium enim aspernatur? Suscipit perspiciatistempora architecto.
                </p>

            </div>
        </div>
    </div>
</div>
</div>
<?php
require_once APPROOT.'/views/includes/footer.php';
?>
