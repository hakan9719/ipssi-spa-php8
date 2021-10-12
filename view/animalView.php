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
    <?php if($animal['status'] == 1 ):?>
    <a href="">Adopter Moi</a>
    <a href="">Formulaire de contact le refuge</a>
    <!--Mettre en base les contact -->
    <?php endif ?>
</div>