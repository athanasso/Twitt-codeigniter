<main class="home-main">
    <div class="timeline-container">
        <div class="twitts-feed">
            <h1>Twitts</h1>
            <?php foreach ($recentTwitts as $twitt): ?>
               <div class="twitt">
                <div class="profile-pic">
                    <?php if ($twitt->profile_pic): ?>
                        <img src="<?= base_url() ?>/<?= $twitt->profile_pic ?>">
                    <?php else: ?>
                        <i class="fa-solid fa-circle-user"></i>
                    <?php endif; ?>
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
                    <?php if ($user->profile_pic): ?>
                        <img src="<?= base_url() ?>/<?= $user->profile_pic ?>">
                    <?php else: ?>
                        <i class="fa-solid fa-circle-user"></i>
                    <?php endif; ?>
                </div>
                <div class="name">
                    <p><a class="no-link-style" href="<?= base_url() ?>/profile/viewprofile?id=<?= $user->id ?>"><?= $user->username ?></a></p>
                    <a href="<?= base_url() ?>/follow/addfollow?user=<?= $user->id ?>" class="primary-button">Follow</a>
                </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</main>
