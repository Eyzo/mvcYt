
<div class="card-deck" style="margin-top: 30px;">
<?php foreach($users as $user): ?>

    <div class="card">
        <img src="https://www.place-hold.it/300x300" class="card-img-top" width="300" height="300">
        <div class="card-body">
            <h5 class="card-title"><?= $user->username ?></h5>
            <p class="card-text"><?= $user->email ?></p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>

<?php endforeach; ?>
</div>
