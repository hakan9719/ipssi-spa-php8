<div class="container">
    <h1>Animaux Disponible</h1>
    <ul>
        <?php foreach ($animals as $key => $value) : ?>
        <li><a href="<?=URL?>index.php?action=animal&id=<?=$value['id']?>"><?=$value['name']?></a></li>
        <?php endforeach ?>
    </ul>
</div>