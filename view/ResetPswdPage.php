<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Récupération de mot de passe</title>
        <link rel="icon" type="image/png" href="../img/logo.png">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <header>
                <a href="index.php"><img src="../img/logo3.jpg" alt="logo"></a>
                <ul id="listeHeader1">
                    <li><a href="Login.php" id="connexion">Connexion</a>
                    </li>
                </ul>
        </header>
        <h1 class="titre-h1">Récupération de mot de passe</h1>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                <?php
                    session_start();
                    require_once '../src/dbconnexion.php';

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            if ($_POST['mdp'] === $_POST['mdp1']) {
                                $nouveau_mot_de_passe = $_POST['mdp'];
                                $mot_de_passe_hashe = password_hash($nouveau_mot_de_passe, PASSWORD_DEFAULT);
                                $email = $_SESSION['email'];
                                $query = "UPDATE client SET motdepasse = :motdepasse WHERE email = :email";
                                $stmt = $conn->prepare($query);
                                $stmt->bindParam(':motdepasse', $mot_de_passe_hashe);
                                $stmt->bindParam(':email', $email);
                                $stmt->execute();
                        
                                if ($stmt->rowCount() > 0) {
                                    echo '<div class="alert alert-success" role="alert">Mot de passe mis à jour avec succès!</div>';
                                    echo '<script>setTimeout(function(){ window.location.href = "Login.php"; }, 2000);</script>';
                                } else {
                                    echo '<div class="alert alert-danger" role="alert">Aucun utilisateur trouvé avec cet e-mail!</div>';
                                }
                            } else {
                                echo '<div class="alert alert-danger" role="alert">Les mots de passe ne correspondent pas!</div>';
                            }
                        session_destroy();
                        }
                ?>
                    <form action="" method="POST" onsubmit="return CheckPassword()">
                        <div class="form-group">
                            <span id="emailError" style="color:red;"></span><br>
                            <label for="mdp">Entrez votre nouveau mot de passe :</label>
                            <input type="password" class="form-control" id="mdp" name="mdp" required><br>
                            <label for="mdp2">Confirmez votre mot de passe : </label>
                            <input type="password" class="form-control" id="mdp1" name="mdp1" required><br>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <script src="../Js/ResetPswd.js" async defer></script>
    </body>
</html>
