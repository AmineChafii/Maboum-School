<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vérification</title>
    <link rel="icon" type="image/png" href="../img/logo.png">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<header>
    <nav>
        <a href="index.php"><img src="../img/logo3.jpg" alt="logo"></a>
        <ul id="listeHeader1">
        </ul>
    </nav> 
</header>
<body>
    <br><br><br>
    <h3>Vérification : </h3>
    <?php

    require_once '../src/dbconnexion.php';
    session_start();

    // Fonction pour vérifier si le code de vérification a expiré
    function isVerificationCodeExpired() {
        // Durée de validité en secondes (30 minutes)
        $validityDuration = 30 * 60;

        // Vérifier si le code a été créé
        if (isset($_SESSION['verification_code_created_at'])) {
            // Calculer le temps écoulé depuis la création du code
            $elapsedTime = time() - $_SESSION['verification_code_created_at'];

            // Vérifier si le temps écoulé est supérieur à la durée de validité
            if ($elapsedTime > $validityDuration) {
                // Le code a expiré
                return true;
            }
        }

        return false;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['code'])) {
            $user_verification_code = $_POST['code'];
            $verification_code = $_SESSION['verification_code'];

            $nom =  $_SESSION['nom'];
            $prenom = $_SESSION['prenom'];
            $etablissement = $_SESSION['etablissement'];
            $classe = $_SESSION['classe'];
            $representant = $_SESSION['representant'];
            $telephone = $_SESSION['telephone'];
            $email = $_SESSION['email'];
            $motdepasse = $_SESSION['motdepasse'];
            $type_soutien = $_SESSION['type_soutien'];
            $matiere = $_SESSION['matiere'];
            $campus = $_SESSION['campus'];
            $adresse = $_SESSION['adresse'];
            $complement = $_SESSION['complement'];
            $codepostal = $_SESSION['codepostal'];
            $ville = $_SESSION['ville'];
            $encrypted_password = $_SESSION['encrypted_password'];


            if ($user_verification_code === $verification_code) {
                $sql = "INSERT INTO client (nom, prenom, etablissement, classe, representant, telephone, adresse, complement, codepostal, ville, email, motdepasse, type_soutien, matiere, campus, admin)
                VALUES (:nom, :prenom, :etablissement, :classe, :representant, :telephone, :adresse, :complement, :codepostal, :ville, :email, :motdepasse, :type_soutien, :matiere, :campus, 0)";
                $stmt = $conn->prepare($sql);


                $stmt->bindParam(':nom', $nom);
                $stmt->bindParam(':prenom', $prenom);
                $stmt->bindParam(':etablissement', $etablissement);
                $stmt->bindParam(':classe', $classe);
                $stmt->bindParam(':representant', $representant);
                $stmt->bindParam(':telephone', $telephone);
                $stmt->bindParam(':adresse', $adresse);
                $stmt->bindParam(':complement', $complement);
                $stmt->bindParam(':codepostal', $codepostal);
                $stmt->bindParam(':ville', $ville);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':motdepasse',$encrypted_password );
                $stmt->bindParam(':type_soutien', $type_soutien);
                $stmt->bindParam(':matiere', $matiere);
                $stmt->bindParam(':campus', $campus);


                $stmt->execute();
                echo "Code de vérification correct. Inscription réussie!";
                header("Location: ../view/Login.php");
            } else {
                echo "Code de vérification incorrect. Veuillez réessayer.";
            }
        }
    }

    // Vérifier si le code de vérification existe dans la session
    if (!isset($_SESSION['verification_code']) || empty($_SESSION['verification_code'])) {
        echo "Le code de vérification est introuvable.";
        exit();
    }

    // Vérifier si le code a expiré
    if (isVerificationCodeExpired()) {
        echo "Le code de vérification a expiré. Veuillez en générer un nouveau.";
        exit();
    }
    ?>
    <form method="POST" action="">
        <div class="form-group">
            <label for="code">Entrez le code que vous avez reçu :</label>
            <input type="text" class="form-control" id="code" name="code" required>
            <p>Vous n'avez pas reçu le code de vérification? <a href="../src/nouveau_code.php">Cliquez ici</a> pour en demander un nouveau.</p>  
        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
    </form> 
    
</body>
</html>
