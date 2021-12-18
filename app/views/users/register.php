<?php
require APPROOT.'/views/includes/head.php';
?>
<head>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/login.css">
</head>

<main class="form-signin w-md-100">
    <form action="<?php echo URLROOT; ?>/users/register" method="POST">
        <img class="mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="eWaste logo" width="72" height="57">
        <small class="text-warning" style="display: block">Fields marked with * are required.</small>

        <div class="form-floating">
            <label for="firstName">First Name*</label>
            <input type="text" class="form-control" id="firstName" placeholder="John" name="firstName">
            <span class="bg bg-warning">
                 <?php echo $data['firstNameError']; ?>
             </span>
        </div>

        <div class="form-floating">
            <label for="lastName">Last Name*</label>
            <input type="text" class="form-control" id="lastName" placeholder="Doe" name="lastName">
            <span class="bg bg-warning">
                 <?php echo $data['lastNameError']; ?>
             </span>
        </div>

        <div class="form-floating">
            <label for="email">Email address*</label>
            <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
            <span class="bg bg-warning">
                 <?php echo $data['emailError']; ?>
             </span>
        </div>

        <div class="form-floating">
            <label for="tel">Phone*</label>
            <input type="tel" class="form-control" id="tel" placeholder="0797165741" name="phone">
            <span class="bg bg-warning">
<!--                 --><?php //echo $data['emailError']; ?>
             </span>
        </div>

        <div class="form-floating">
            <label for="password">Password*</label>
            <input type="password" class="form-control" id="password" placeholder="password" name="password">
            <span class="bg bg-warning">
                 <?php echo $data['passwordError']; ?>
             </span>
        </div>

        <div class="form-floating">
            <label for="confirmPassword">Confirm Password*</label>
            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" name="confirmPassword">
            <span class="bg bg-warning">
                 <?php echo $data['confirmPasswordError']; ?>
             </span>
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary button-green" type="submit">Sign Up</button>
        <p class="mt-3">Already registered?<a href="<?php echo URLROOT;?>/users/login" > Login!</a></p>
        <p class="mt-5 mb-3 text-muted">&copy; <?php echo date('Y')?></p>
    </form>
</main>