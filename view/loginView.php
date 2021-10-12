<div class="container mt-5">
    <form action="<?=URL?>index.php?action=login" method="POST">
         <div class="row g-2 align-items-center">
            <div class="mb-3 row">
                <label for="username" class="col-sm-2 col-form-label">Identifiant</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="username" value="">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="password" class="col-sm-2 col-form-label">Mot de Passe</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="password">
                </div>
            </div>
        </div> 

        <input class="btn btn-primary" type="submit" value="Connexion"></input>
    </form>
</div>