<main>
    <div class="register-box-container">
        <div class="register-box">
            <h1>Register</h1>
            <form method="post" action="<?php echo base_url();?>/account/registerpost">
                <input type="text" name="email" type="email" placeholder="email">
                <input type="text" name="username" placeholder="username">
                <input type="password" name="password" placeholder="password">
                <button type="submit" class="primary-button login-button">Create account</button>
            </form>
           <a href="<?= base_url() ?>/account/login">Log in to existing account</a>
        </div>
    </div>
</main>