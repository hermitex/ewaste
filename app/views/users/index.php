<?php
require_once APPROOT . '/views/includes/head.php';
?>

    <div>
        <?php
        require_once APPROOT . '/views/includes/navigation.php';
        ?>
    </div>

<h1>User Home page</h1>
<?php if(isset($_SESSION['first_name'])) : ?>
    Howdy, <?php echo $_SESSION['first_name']; ?>!
<?php endif; ?>



<?php
require_once APPROOT . '/views/pages/index.php';
?>

<?php
require_once APPROOT . '/views/includes/footer.php';
?>