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
                    <a href="<?= base_url() ?>/twitt/post" class="primary-button">Post</a>
                    <a href="<?= base_url() ?>/home">
                        <i class="fa-solid fa-house-chimney-window"></i>   
                    </a>
                    <a href="<?= base_url() ?>/profile/viewprofile">
                        <i class="fa-solid fa-user"></i>
                    </a>
                    <a href="<?= base_url() ?>/account/logout" class="secondary-button">Logout</a>
                </div>
            </header>
            <?= view($body);?>
        </body>
</html>
