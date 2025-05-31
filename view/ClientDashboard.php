<?php

session_start();

if(isset($_SESSION['email'])){

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Espace Client - Maboum School</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <style>
    .btn-custom {
      background-color: #b9a80b; /* Exemple de couleur personnalisée */
      color: white;
    }
    .btn-custom:hover {
      background-color: #817507; /* Couleur personnalisée au survol */
    }
    .custom-margin {
      margin-right: 25px; /* Ajustez la valeur de la marge selon vos besoins */
    }
  </style>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <header>
        <a href="index.php"><img src="../img/logo3.jpg" alt="logo"></a>
        <ul id="listeHeader1">
            <li><a href="../src/Logout.php" id="deconnexion">Changer votre mot de passe</a>
            <div></div>
            </li>
            <li><a href="../src/Logout.php" id="deconnexion">Déconnexion</a>
            <div></div>
            </li>
        </ul>    
    </header>
    <br><br><br><br><br><br>
    <?php
    require_once '../src/dbconnexion.php';
    $user_id = $_SESSION['user_id'];

try {
    // Préparez et exécutez la requête pour récupérer les informations de l'utilisateur
    $sql = "SELECT nom, prenom, etablissement, classe, telephone, type_soutien, matiere, campus, heure_payee, heure FROM client WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $user_id);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
      echo "<div class='d-flex justify-content-between align-items-center mb-3'>";
      echo "<h1>Bienvenue, " . htmlspecialchars($user['prenom']) . "</h1>";
      echo "<a href='https://maboum-school.sumupstore.com/' class='btn btn-custom ms-auto custom-margin' target='_blank'>Recharger votre solde</a>";
      echo "</div>";
        $output = '<tr>
                    <td>' . htmlspecialchars($user['nom']) . '</td>
                    <td>' . htmlspecialchars($user['prenom']) . '</td>
                    <td>' . htmlspecialchars($user['etablissement']) . '</td>
                    <td>' . htmlspecialchars($user['classe']) . '</td>
                    <td>' . htmlspecialchars($user['telephone']) . '</td>
                    <td>' . htmlspecialchars($user['type_soutien']) . '</td>
                    <td>' . htmlspecialchars($user['matiere']) . '</td>
                    <td>' . htmlspecialchars($user['campus']) . '</td>
                    <td>' . htmlspecialchars($user['heure_payee']) . '</td>
                    <td>' . htmlspecialchars($user['heure'] ?? '', ENT_QUOTES, 'UTF-8') . '</td>
                </tr>';
    } else {
        echo "Utilisateur non trouvé.";
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
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
                <th>Nom</th>
                <th>Prénom</th>
                <th>Etablissement</th>
                <th>Classe</th>
                <th>Téléphone</th>
                <th>Type de soutien</th>
                <th>Matière</th>
                <th>Campus</th>
                <th>Heures payées </th>
                <th>Heures Restantes </th>
              </tr>
            </thead>
            <tbody>
            <?php echo $output; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php
}else{
    header('Location:Login.php');
}
?>
