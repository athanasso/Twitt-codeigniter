<main>
    <div class="login-box-container">
        <div class="login-box">
            <h1>Login</h1>
            <form action="<?=base_url()?>/account/loginpost" method="post">
                <input type="text" name="username" placeholder="username">
                <input type="password" name="password" placeholder="password">
                <button type="submit" class="primary-button login-button">Login</button>
            </form>
            <a href="<?= base_url() ?>/account/register">Register Now</a>
        </div>
    </div>
</main>