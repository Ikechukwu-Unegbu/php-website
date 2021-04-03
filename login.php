<?php include('bootstrap.php');  ?>

<?php include(ROOT_PATH."inc/head.php");?>
    <section class="section-login" id="section-login">

        <div class="login">
            <div class="login__form">
                <form method="POST">
                    <?php msg('register_success') ?>
                    <div class="login__form-heading">
                        login
                    </div>
                    <div class="login__form-logo">
                        <i class="fa fa-sign-in"></i>
                    </div>


                    <div class="login__form__group">
                            <input type="email" class="login__form__input" placeholder="Email" id="login-email" name="login-email" autocomplete="off" required>
                            <label for="email" class="login__form__label"><i class="fa fa-paper-plane-o"></i> Email Address</label>
                            <div class="login-email-msg login__form__label" style="font-size:1.5rem; padding-left:1.8rem;"></div>
                    </div>
                    <div class="login__form__group">
                            <input type="password" class="login__form__input" placeholder="Choose Password" id="password" name="password" required>
                            <label for="password" class="login__form__label"><i class="fa fa-unlock-alt"></i> Password</label>
                            <div class="login-password-msg login__form__label" style="font-size:1.5rem; padding-left:1.8rem;"></div>
                    </div>
                    

                    <div class="login__form_group progress-bar"></div>

                    <div class="">
                        <button type="submit" class="btn btn-secondary btn-login" id="submit-registration"> Create Account &rarr;</button>
                    </div>
                    <p class="already-member">No Account? Register here? <a href="<?php echo BASE_URL; ?>registration.php" class="to_login">Register</a></p>
                </form>

            </div>
        </div>
    </section>


    <?php include(ROOT_PATH."inc/scripts.php");?>
