<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vérification</title>
    <link rel="icon" type="image/png" href="../img/logo.png">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

<?php
require_once 'dbconnexion.php';

try {
    $sql = "SELECT nom, prenom, etablissement, representant, telephone, type_soutien, matiere, campus, heure_payee,  heure FROM client";
    $stmt = $conn->query($sql);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row["nom"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["prenom"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["etablissement"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["representant"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["telephone"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["type_soutien"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["matiere"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["campus"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["heure_payee"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["heure"]) . "</td>";
        echo "<td>";
        echo "<a href=''><i class='bi bi-pencil-square' style='font-size: 19px;'></i></a> - ";
        echo "<a href=''><i class='bi bi-trash-fill' style='font-size: 19px; color: red;'></i></a>";
        echo "</td>";
        echo "</tr>";
    }
} catch(PDOException $e) {
    echo "Erreur de requête : " . $e->getMessage();
}

$conn = null;
?>

</body>
</html>
