<?php
require('../config.php');

session_start();

include('../head.php');
?>
<div class="container">
    <ul>
        <li><a href="<?=URL?>index.php?action=addAdmin">Ajout Admin</a></li>
        <li><a href="<?=URL?>index.php?action=addAnimal">Ajout Animal</a></li>
        <li><a href="<?=URL?>index.php?action=updateAnimal">Update Animal</a></li>
    </ul>
</div>
<?php include('../footer.php')?>