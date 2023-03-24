            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Ajouter surveillance pour une zone </h6>
                            <form method="post" action="accueil.php?url=pointSurveillance&action=validerForm">
                                <div class="mb-3">
                                    <label for="pays" class="form-label">Nom Point de surveillance</label>
                                    <input type="hidden" id="idPs" name="idPs" value="<?php if ($mode == "Modifier") {
                                                                                            echo $ps['idPs'];
                                                                                        } ?>">
                                    <input type="text" class="form-control" id="pays" aria-describedby="PaysHelp" name='nomPs' value='<?= $mode == "Modifier" ? $ps['nomPs'] : '' ?>'>
                                </div>
                                <div class="mb-3">
                                    <select name="idZone" class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                                        <option selected disabled>Choisir la zone à surveiller</option>
                                        <?php
                                        foreach ($lesZones as $zone) {
                                            if ($mode == "Modifier") {
                                                $selection = $zone['idZ'] == $zone['idZone'] ? 'selected' : '';
                                            }
                                            echo "<option value='" . $zone['idZ'] . "'" . $selection . ">" . $zone['nomZ'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Valider</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form End -->