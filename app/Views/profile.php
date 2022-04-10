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