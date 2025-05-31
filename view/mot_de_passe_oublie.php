<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récupération de mot de passe - Maboum School</title>
    <link rel="icon" type="image/png" href="../img/logo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <a href="index.php"><img src="../img/logo3.jpg" alt="logo"></a>
        <ul id="listeHeader1">
            <li><a href="view/Register.php" id="inscription">Inscription</a></li>
        </ul>   
    </header>
    <br><br><br><br><br>
    <h1 class="titre-h1">Récupération de mot de passe</h1>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="../src/ResetPswdEngine.php" method="POST">
                    <div class="form-group">
                        <?php 
                        session_start();
                        echo isset($_SESSION['error-email']) ? '<div class="alert alert-danger" role="alert">' . $_SESSION['error-email'] . '</div>' : ''; 
                        ?>
                        <label for="email">Adresse e-mail :</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
