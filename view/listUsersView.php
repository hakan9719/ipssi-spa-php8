<div class="container">
    <h1>Liste Utilisateur</h1>
    <ul>
        <?php foreach ($users as $key => $user) :?>
        <li><?= $user['username'] ?></li>
        <?php endforeach?>
    </ul>
</div>