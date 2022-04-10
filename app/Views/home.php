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
                <a href="profile.html">
                    <i class="fa-solid fa-user"></i>
                </a>
                <a href="#" class="secondary-button">Logout</a>
            </div>
        </header>
        <main class="home-main">
            <div class="timeline-container">
                <div class="twitts-feed">
                    <h1>Twitts</h1>
                    <?php foreach ($recentTwitts as $twitt): ?>
                    <div class="twitt">
                        <div class="profile-pic">
                            <i class="fa-solid fa-circle-user"></i>
                        </div>
                        <div class="message">
                            <p><?= $twitt->body ?></p>
                            <p class="metadata"><?= 'Created by ', $twitt->username, ' at ' , $twitt->created_at ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="recent-users-feed">
                    <h2>Recent users</h2>
                    <?php foreach ($recentUsers as $user): ?>
                        <div class="new-user">
                        <div class="profile-pic">
                            <i class="fa-solid fa-circle-user"></i>
                        </div>
                        <div class="name">
                            <p><?= $user['username'] ?></p>
                            <a href="<?= base_url() ?>/follow/addfollow?user=<?= $user['id'] ?>" class="primary-button">Follow</a>
                        </div>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
        </main>
    </body>
</html>