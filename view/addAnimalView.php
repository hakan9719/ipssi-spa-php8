<div class="container">
    <form action="<?=URL?>index.php?action=addAnimal" method="post" enctype="multipart/form-data">
         <div class="row g-2 align-items-center">
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Nom</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" value="">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="race" class="col-sm-2 col-form-label">Race</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="race" value="">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="color" class="col-sm-2 col-form-label">Couleur</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="color" value="">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="description" value="">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="age" class="col-sm-2 col-form-label">Age</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="age">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="postal_code" class="col-sm-2 col-form-label">Code Postal</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="postal_code">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="image" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name="image">
                </div>
            </div>
        </div> 

        <input class="btn btn-primary" type="submit" value="Ajouter"></input>
    </form>
</div>