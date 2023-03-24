<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary  h-100 p-4">
                <h6 class="mb-4">Liste Pays</h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nom Pays</th>
                                <th scope="col">Population</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($getPays as $key ) { ?>
                                <tr>
                                    <th scope="row"><?=$key["idP"]?></th>
                                    <th scope="col"><?=$key["nomP"]?></th>
                                    <th scope="col"><?=$key["population"]?></th>
                                    <th scope="col">
                                        <a href="index.php?url=pays&action=update&id=<?=$key["idP"]?>"   class="btn btn-outline-warning">Modifier</a>
                                        <a href="index.php?url=pays&action=delete&id=<?=$key["idP"]?>" id="delete" class="btn btn-outline-danger">Supprimer</a>
                                        
                                    </th>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Table End -->