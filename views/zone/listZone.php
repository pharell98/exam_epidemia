          <!-- Table Start -->
          <div class="container-fluid pt-4 px-4">
              <div class="row g-4">
                  <div class="col-12">
                      <div class="bg-secondary  h-100 p-4">
                          <h6 class="mb-4">Zones</h6>
                          <div class="table-responsive">
                              <table class="table">
                                  <thead>
                                      <tr>
                                          <th scope="col">#</th>
                                          <th scope="col">Pays</th>
                                          <th scope="col">Nom Zone</th>
                                          <th scope="col">Nombre D'habitant</th>
                                          <th scope="col">Nombre Pers. symptômes</th>
                                          <th scope="col">Nombre Pers. Positives</th>
                                          <th scope="col">Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php foreach ($getZones as $zones => $value) {
                                            $taux = ($value['nbPersonnesPosi'] * 100) / $value['nbPersonnesTotal'];
                                            if ($taux < 5)
                                                $color = "#90EE90"; //vert
                                            else if ($taux > 5 && $taux < 15)
                                                $color = "#FFA500"; //orange
                                            else if ($taux > 15)
                                                $color = "#FF0000"; //rouge
                                        ?>

                                          <tr style='background-color:<?= $color ?>; color:white'>
                                              <th scope="row"><?= $value["idZ"] ?></th>
                                              <th scope="col"><?= $value["libPays"] ?></th>
                                              <th scope="col"><?= $value["libZone"] ?></th>
                                              <th scope="col"><?= $value["nbPersonnesTotal"] ?></th>
                                              <th scope="row"><?= $value["nbPersonnesSympt"] ?></th>
                                              <th scope="col"><?= $value["nbPersonnesPosi"] ?></th>
                                              <th scope="col">
                                                  <a href="index.php?url=zone&action=update&id=<?= $value["idZ"] ?>" class="btn btn-outline-warning">Modifier</a>
                                                  <a href="index.php?url=zone&action=delete&id=<?= $value["idZ"] ?>" id="delete" class="btn btn-outline-danger">Supprimer</a>
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