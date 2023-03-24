                      <!-- Form Start -->
                      <div class="container-fluid pt-4 px-4">
                          <div class="row g-4">
                              <div class="col-sm-12 col-xl-6">
                                  <div class="bg-secondary rounded h-100 p-4">
                                      <h6 class="mb-4">Ajouter une Zone</h6>
                                      <form action="index.php?url=zone&action=validerForm" method="post">
                                          <div class="mb-3">
                                              <label for="population" class="form-label">Pays</label>
                                              <input type="hidden" id="idZ" name="idZ" value="<?php if($mode == "Modifier") {echo $laZone['idZ'] ;} ?>">
                                              <select name="idPays" class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                                                  <option selected disabled>Choisir</option>
                                                  <?php
                                                    foreach ($lesPays as $pays) {
                                                        if ($mode == "Modifier") {
                                                            $selection = $pays['idP'] == $laZone['idPays'] ? 'selected' : '';
                                                        }
                                                        echo "<option value='" . $pays['idP'] . "'" . $selection . ">" . $pays['nomP'] . "</option>";
                                                    }
                                                    ?>
                                              </select>
                                          </div>
                                          <div class="mb-3">
                                              <label for="zone" class="form-label">Nom zone</label>
                                              <input type="text" class="form-control" id="zone" aria-describedby="ZoneHelp" name='nomZ' value='<?= $mode == "Modifier" ? $laZone['nomZ'] : '' ?>'>
                                          </div>

                                          <div class="mb-3">
                                              <label for="population" class="form-label">Nombre d'habitant</label>
                                              <input type="number" class="form-control" id="population" name='nbPersonnesTotal' value='<?php if ($mode == "Modifier") {
                                                                                                                                            echo $laZone['nbPersonnesTotal'];
                                                                                                                                        } ?>'>
                                          </div>
                                          <div class="mb-3">
                                              <label for="population" class="form-label">Le nombre de personnes présentant des
                                                  symptômes !</label>
                                              <input type="number" class="form-control" id="population" name='nbPersonnesSympt' value='<?php if ($mode == "Modifier") {
                                                                                                                                            echo $laZone['nbPersonnesSympt'];
                                                                                                                                        } ?>'>
                                          </div>
                                          <div class="mb-3">
                                              <label for="population" class="form-label">Le nombre de personnes declarées
                                                  positives !</label>
                                              <input type="number" class="form-control" id="population" name='nbPersonnesPosi' value='<?php if ($mode == "Modifier") {
                                                                                                                                        echo $laZone['nbPersonnesPosi'];
                                                                                                                                    } ?>'>
                                          </div>

                                          <button type="submit" class="btn btn-primary">Valider</button>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- Form End -->