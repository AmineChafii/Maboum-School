<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tableau de bord d'Administrateur - Maboum School</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="../dist/output.css" rel="stylesheet">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
  <style>
    .sticky-header {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 50;
    }
    .modal-dialog {
      max-width: 800px;
    }
    .btn-primary {
      background-color: #0284c7;
      border-color: #0284c7;
    }
    .btn-primary:hover {
      background-color: #0369a1;
      border-color: #0369a1;
    }
    .btn-success {
      background-color: #10b981;
      border-color: #10b981;
    }
    .btn-success:hover {
      background-color: #059669;
      border-color: #059669;
    }
    .btn-danger {
      background-color: #ef4444;
      border-color: #ef4444;
    }
    .btn-danger:hover {
      background-color: #dc2626;
      border-color: #dc2626;
    }
  </style>
</head>

<body class="bg-gray-50 font-sans">
  <!-- Header -->
  <header class="sticky-header bg-primary-900 text-white">
    <nav class="container mx-auto px-6 py-4">
      <div class="flex items-center justify-between">
        <a href="../view/index.php" class="flex items-center">
          <img src="../img/logo3.jpg" alt="Maboum School" class="h-12">
          <span class="text-white text-xl font-bold ml-3">Maboum School</span>
        </a>
        <div class="flex items-center space-x-4">
          <a href="Logout.php" class="bg-red-600 text-white px-4 py-2 rounded-full hover:bg-red-700 transition">Déconnexion</a>
        </div>
      </div>
    </nav>
  </header>

  <div class="container mx-auto px-4 py-8 pt-28">
    <div class="row mt-4">
      <div class="col-lg-12 d-flex justify-content-between align-items-center">
        <div>
          <h1 class="text-3xl font-bold text-primary-900">Tous les clients</h1>
        </div>
        <div>
          <button class="bg-secondary-600 text-white px-6 py-3 rounded-full hover:bg-secondary-700 transition" type="button" data-toggle="modal" data-target="#addNewUserModal">Ajouter un nouveau client</button>
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
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <div class="table-responsive">
            <table class="table table-striped table-bordered text-center">
              <thead class="bg-gray-50">
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
                  <th>Heures payées</th>
                  <th>Heures Restantes</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <!-- Data will be loaded here -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

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
              <input type="text" name="classe" class="form-control form-control-lg" required>
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
              <input type="text" name="complement" class="form-control form-control-lg">
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
              <input type="submit" value="Ajouter le client" class="btn btn-primary btn-block btn-lg w-100" id="add-user-btn">
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
              <input type="submit" value="Mettre à jour l'utilisateur" class="btn btn-success btn-block btn-lg w-100" id="edit-user-btn">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Edit User Modal End -->

  <!-- Footer -->
  <footer class="bg-primary-900 text-white py-6 mt-12">
    <div class="container mx-auto px-6 text-center">
      <p class="text-sm">&copy; 2023 Maboum School. Tous droits réservés.</p>
    </div>
  </footer>

  <script src="../Js/main.js"></script>
</body>

</html>