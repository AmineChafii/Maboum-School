<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tableau de bord d'Administrateur - Maboum School</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <header>
        <a href="../view/index.php"><img src="../img/logo3.jpg" alt="logo"></a>
        <ul id="listeHeader1">
            <li><a href="Logout.php" id="deconnexion">Déconnexion</a>
            <div></div>
          </li>
        </ul>
           
    </header>
    <br><br><br><br><br>

  <!-- Add New User Modal Start -->
  <div class="modal fade" tabindex="-1" id="addNewUserModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Ajouter un nouveau client</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form id="add-user-form" class="p-2" novalidate>
    <div class="row mb-3 gx-3">
        <div class="col">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" name="nom" class="form-control form-control-lg" required>
            <div class="invalid-feedback">Ce champ est obligatoire !</div>
        </div>

        <div class="col">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" name="prenom" class="form-control form-control-lg" required>
            <div class="invalid-feedback">Ce champ est obligatoire !</div>
        </div>
    </div>

    <div class="mb-3">
        <label for="etablissement" class="form-label">Etablissement</label>
        <input type="text" name="etablissement" class="form-control form-control-lg" required>
        <div class="invalid-feedback">Ce champ est obligatoire !</div>
    </div>

    <div class="mb-3">
        <label for="classe" class="form-label">Classe</label>
        <input type="text" name="classe"  class="form-control form-control-lg" required>
        <div class="invalid-feedback">Ce champ est obligatoire !</div>
    </div>

    <div class="mb-3">
        <label for="representant" class="form-label">Représentant</label>
        <input type="text" name="representant" class="form-control form-control-lg" required>
        <div class="invalid-feedback">Ce champ est obligatoire !</div>
    </div>

    <div class="mb-3">
        <label for="telephone" class="form-label">Téléphone</label>
        <input type="tel" name="telephone" class="form-control form-control-lg" required>
        <div class="invalid-feedback">Ce champ est obligatoire !</div>
    </div>

    <div class="mb-3">
        <label for="adresse" class="form-label">Adresse</label>
        <input type="text" name="adresse" class="form-control form-control-lg" required>
        <div class="invalid-feedback">Ce champ est obligatoire !</div>
    </div>

    <div class="mb-3">
        <label for="complement" class="form-label">Complément d'adresse</label>
        <input type="text" name="complement"  class="form-control form-control-lg">
    </div>

    <div class="row mb-3 gx-3">
    <div class="col">
        <label for="codepostal" class="form-label">Code Postal</label>
        <input type="text" name="codepostal" class="form-control form-control-lg" required>
        <div class="invalid-feedback">Ce champ est obligatoire !</div>
    </div>

    <div class="col">
        <label for="ville" class="form-label">Ville</label>
        <input type="text" name="ville" class="form-control form-control-lg" required>
        <div class="invalid-feedback">Ce champ est obligatoire !</div>
    </div>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control form-control-lg" required>
        <div class="invalid-feedback">Ce champ est obligatoire !</div>
    </div>

    <div class="mb-3">
        <label for="typesoutien" class="form-label">Type de soutien</label>
        <input type="text" name="typesoutien" class="form-control form-control-lg" required>
        <div class="invalid-feedback">Ce champ est obligatoire !</div>
    </div>

    <div class="mb-3">
        <label for="matiere" class="form-label">Matière</label>
        <input type="text" name="matiere" class="form-control form-control-lg" required>
        <div class="invalid-feedback">Ce champ est obligatoire !</div>
    </div>

    <div class="mb-3">
        <label for="campus" class="form-label">Campus</label>
        <input type="text" name="campus" class="form-control form-control-lg" required>
        <div class="invalid-feedback">Ce champ est obligatoire !</div>
    </div>

    <div class="row mb-3 gx-3">
        <div class="col">
          <label for="heurep" class="form-label">Heure payées</label>
          <input type="text" name="heurep" class="form-control form-control-lg">
        </div>
        <div class="col">
          <label for="heure" class="form-label">Heure restantes</label>
          <input type="text" name="heure" class="form-control form-control-lg">
        </div>
    </div>

    <div class="mb-3">
        <input type="submit" value="Ajouter le client" class="btn btn-primary btn-block btn-lg" id="add-user-btn">
    </div>
</form>

        </div>
      </div>
    </div>
  </div>
  <!-- Add New User Modal End -->

  <!-- Edit User Modal Start -->
  <div class="modal fade" tabindex="-1" id="editUserModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Informations sur le client</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="edit-user-form" class="p-2" novalidate>
                    <input type="hidden" name="id" id="id">
                    <div class="row mb-3 gx-3">
                        <div class="col">
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" id="nom" class="form-control form-control-lg">
                        </div>

                        <div class="col">
                            <label for="prenom">Prénom</label>
                            <input type="text" name="prenom" id="prenom" class="form-control form-control-lg">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="etablissement">Etablissement</label>
                        <input type="text" name="etablissement" id="etablissement" class="form-control form-control-lg">
                    </div>

                    <div class="mb-3">
                        <label for="telephone">Téléphone</label>
                        <input type="tel" name="telephone" id="telephone" class="form-control form-control-lg">
                    </div>

                        <div class="mb-3">
                            <label for="class">Classe</label>
                            <input type="text" name="classe" id="classe" class="form-control form-control-lg">
                        </div>

                        <div class="mb-3">
                            <label for="representant">Représentant</label>
                            <input type="text" name="representant" id="representant" class="form-control form-control-lg">
                        </div>

                    <div class="mb-3">
                        <label for="adresse">Adresse</label>
                        <input type="text" name="adresse" id="adresse" class="form-control form-control-lg">
                    </div>


                        <div class="mb-3">
                            <label for="complement">Complément</label>
                            <input type="text" name="complement" id="complement" class="form-control form-control-lg">
                        </div>

                      <div class="row mb-3 gx-3">
                        <div class="col">
                            <label for="codepostal">Code Postal</label>
                            <input type="text" name="codepostal" id="codepostal" class="form-control form-control-lg">
                        </div>
                        <div class="col">
                            <label for="ville">Ville</label>
                            <input type="text" name="ville" id="ville" class="form-control form-control-lg">
                        </div>
                      </div>

                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control form-control-lg">
                        </div>


                        <div class="mb-3">
                            <label for="typesoutien">Type de soutien</label>
                            <input type="text" name="typesoutien" id="typesoutien" class="form-control form-control-lg">
                        </div>
                        <div class="mb-3">
                            <label for="matiere">Matière</label>
                            <input type="text" name="matiere" id="matiere" class="form-control form-control-lg">
                        </div>

                        <div class="mb-3">
                            <label for="campus">Campus</label>
                            <input type="text" name="campus" id="campus" class="form-control form-control-lg">
                        </div>

                        <div class="row mb-3 gx-3">
                            <div class="col">
                              <label for="heurep" class="form-label">Heure payées</label>
                              <input type="text" name="heurep" id="heurep" class="form-control form-control-lg">
                            </div>
                            <div class="col">
                              <label for="heure" class="form-label">Heure restantes</label>
                              <input type="text" name="heure" id="heure" class="form-control form-control-lg">
                            </div>
                        </div>

                    <div class="mb-3">
                        <input type="submit" value="Mettre à jour l'utilisateur" class="btn btn-success btn-block btn-lg" id="edit-user-btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

  <!-- Edit User Modal End -->
  <div class="container">
    <div class="row mt-4">
      <div class="col-lg-12 d-flex justify-content-between align-items-center">
        <div>
          <h4 style="color: #052364;">Touts les clients ! </h4>
        </div>
        <div>
          <button  style="color: #052364;" type="button" data-toggle="modal" data-target="#addNewUserModal">Ajouter un nouveau client</button>
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-lg-12">
        <div id="showAlert"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="table-responsive">
          <table class="table table-striped table-bordered text-center">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Etablissement</th>
                <th>Classe</th>
                <th>Representant</th>
                <th>Téléphone</th>
                <th>Adresse</th>
                <th>Complement</th>
                <th>Code Postal</th>
                <th>Ville</th>
                <th>Email</th>
                <th>Type de soutien</th>
                <th>Matière</th>
                <th>Campus</th>
                <th>Heures payées </th>
                <th>Heures Restantes </th>
              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script src="../Js/main.js"></script>
</body>

</html>