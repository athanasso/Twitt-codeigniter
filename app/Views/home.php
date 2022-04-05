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
                    <div class="twitt">
                        <div class="profile-pic">
                            <i class="fa-solid fa-circle-user"></i>
                        </div>
                        <div class="message">
                            <p>Hello, this is my first Twitt</p>
                            <p class="metadata">Posted by Manos on 20/1/2022</p>
                        </div>
                    </div>
                    <div class="twitt">
                        <div class="profile-pic">
                            <i class="fa-solid fa-circle-user"></i>
                        </div>
                        <div class="message">
                            <p>Hello, this is my Second Twitt</p>
                            <p class="metadata">Posted by Manos on 20/1/2022</p>
                        </div>
                    </div>
                </div>
                <div class="recent-users-feed">
                    <h2>Recent users</h2>
                    <div class="new-user">
                        <div class="profile-pic">
                            <i class="fa-solid fa-circle-user"></i>
                        </div>
                        <div class="name">
                            <p>Manos</p>
                            <a href="#" class="primary-button">Follow</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer></footer>
    </body>
</html>