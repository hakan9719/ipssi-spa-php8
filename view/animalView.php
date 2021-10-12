<div class="container">
    <h1><?=$animal['name']?></h1>
    <img src="<?=URL?>img/<?=$animal['image']?>" width="300px" alt=""/>
    <ul>
        <li><?=$animal['race']?></li>
        <li><?=$animal['age']?></li>
        <li><?=$animal['color']?></li>
        <li><?=$animal['description']?></li>
        <li><?=$animal['status'] == 2 ? 'Réserver': 'Disponible' ?></li>
    </ul>
</div>