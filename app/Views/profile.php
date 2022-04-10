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
        <main class="profile-main">
            <div class="profile-view">
                <i class="fa-solid fa-circle-user user-profile-pic"></i>
                <h1><?= $user['username'] ?></h1>
                <a href="<? base_url() ?>/follow/addFollow?user=<? $user['id'] ?>" class="primary-button">Follow</a>
                <div class="twitts-feed">
                    <?php foreach ($twitts as $twitt): ?>
                    <div class="twitt">
                        <div class="profile-pic">
                            <i class="fa-solid fa-circle-user profile-pic"></i>
                        </div>
                        <div class="message">
                            <p><?= $twitt->body ?></p>
                            <p class="metadata">Posted on <?= $twitt->created_at ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </main>
        <footer></footer>
    </body>
</html>