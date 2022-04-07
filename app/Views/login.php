<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>/css/styles.css">     
    </head>
    <body>
        <header>
            <div class="logo">Twitt</div>
            <div class="header-actions">
                <a href="home.html">
                    <i class="fa-solid fa-house-chimney-window"></i>   
                </a>
                <a href="#">
                    <i class="fa-solid fa-user"></i>
                </a>
                <a href="#" class="secondary-button">Logout</a>
            </div>
        </header>
        <main>
            <div class="login-box-container">
              <div class="login-box">
                  <h1>Login</h1>
                  <form action="<?=base_url()?>/account/loginpost" method="post">
                     <input type="text" name="username" placeholder="username">
                     <input type="password" name="password" placeholder="password">
                     <button type="submit" class="primary-button login-button">Login</button>
                   </form>
                   <a href="register.html">Register Now</a>
                </div>
            </div>
        </main>
        <footer></footer>
    </body>
</html>