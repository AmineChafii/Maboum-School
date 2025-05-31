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
    session_start();

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
            $user_verifcode = $_POST['code'];
            $verification_code_reset = $_SESSION['verification_code_reset'];

            if ($user_verifcode === $_SESSION['verification_code_reset']) {
                header("Location:../view/ResetPswdPage.php");
                exit();
            } else {
                echo "Code de vérification incorrect. Veuillez réessayer.";
            }
        }
    }

    if (!isset($_SESSION['verification_code_reset']) || empty($_SESSION['verification_code_reset'])) {
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
