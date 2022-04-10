<html> 
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/d061b336ad.js" crossorigin="anonymous"></script>
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
            <?= view($body);?>
        </body>
</html>
