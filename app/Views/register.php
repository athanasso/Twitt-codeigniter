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
            <div class="register-box-container">
              <div class="register-box">
                  <h1>Register</h1>
                  <form method="post" action="<?php echo base_url();?>/account/registerpost">
                     <input type="text" name="email" type="email" placeholder="email">
                     <input type="text" name="username" placeholder="username">
                     <input type="password" name="password" placeholder="password">
                     <button type="submit" class="primary-button login-button">Create account</button>
                   </form>
                   <a href="login.html">Log in to existing account</a>
                </div>
            </div>
        </main>
        <footer></footer>
    </body>
</html>