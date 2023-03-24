            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Ajouter un Pays</h6>
                            <form method="post" action="index.php?url=pays&action=valideForm">
                                <div class="mb-3">
                                    <label for="pays" class="form-label">Nom Pays</label>
                                    <input type="hidden" id="idP" name="idP" value="<?php if($mode == "Modifier") {echo $lePays['idP'];} ?>">
                                    <input type="text" class="form-control" id="pays" name='nomP'
                                        aria-describedby="PaysHelp"  value='<?= $mode == "Modifier" ? $lePays['nomP'] : '' ?>'>
                                </div>
                                <div class="mb-3">
                                    <label for="population" class="form-label">Populations</label>
                                    <input type="text" class="form-control" name='population' id="population"
                                    value='<?php if($mode == "Modifier") {echo $lePays['population'] ;} ?>'>
                                </div>
                                <button type="submit" class="btn btn-primary">Valider</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form End -->