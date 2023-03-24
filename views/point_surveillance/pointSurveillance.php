            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-secondary  h-100 p-4">
                            <h6 class="mb-4">Points Surveillées</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nom Point</th>
                                            <th scope="col">Zone</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($getPS as $ps => $value) { ?>
                                            <tr>
                                                <th scope="row"><?= $value["idPs"] ?></th>
                                                <th scope="col"><?= $value["nomPs"] ?></th>
                                                <th scope="col"><?= $value["nomZ"] ?></th>
                                                <td scope="col">
                                                    <a href="accueil.php?url=pointSurveillance&action=update&id=<?= $value["idZ"] ?>" class="btn btn-outline-warning">Modifier</a>
                                                    <a href="accueil.php?url=pointSurveillance&action=delete&id=<?= $value["idZ"] ?>" id="delete" class="btn btn-outline-danger">Supprimer</a>
                                                </td>
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