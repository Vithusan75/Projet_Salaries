<?php

include_once("header.html");
?>

<form action="ajoutsalaries.php" method="POST">
    
                <h2 class="mb-3">Ajouter un/e salarié/e</h2>
                <div class="row g-3">
                  <div class="col-md-6">
                    <label for="name" class="form-label">Nom</label>
                    <input
                      type="text"
                      class="form-control"
                      id="name"
                      name="name"
                      required
                    />
                  </div>
                  <div class="col-md-6">
                    <label for="surname" class="form-label">Prénom</label>
                    <input
                      type="text"
                      class="form-control"
                      id="surname"
                      name="surname"
                      required
                    />
                  </div>
                  <div class="col-md-6">
                    <label for="your-email" class="form-label">Date de naissance</label>
                    <input
                      type="date"
                      class="form-control"
                      id="email"
                      name="naissance"
                      required
                    />
                  </div>
                  <div class="col-md-6">
                    <label for="sujet" class="form-label"
                      > Date d'embauche</label
                    >
                    <input
                      type="date"
                      class="form-control"
                      id="naissance"
                      name="embauche"
                      required
                    />
                  </div>
                                    <div class="col-md-6">
                    <label for="sujet" class="form-label"
                      > Salaire</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="saalire"
                      name="salire"
                      required
                    />
                  </div>
                  </div>
                                    <div class="col-md-6">
                    <label for="sujet" class="form-label"
                      > Service</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="saalire"
                      name="service"
                      required
                    />
                  </div>
                  <div class="col-12">
                    <div class="row justify-content-md-end">
                      <div class="col-md-6">
                        <button
                          type="submit"
                          class="btn btn-dark w-100 fw-bold"
                        >
                          Envoyer
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
</form>