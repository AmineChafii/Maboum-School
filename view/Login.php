
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Maboum School</title>
    <link rel="icon" type="image/png" href="../img/logo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <a href="index.php"><img src="../img/logo3.jpg" alt="logo"></a>
        <ul id="listeHeader1">
            <li ><a href="Register.php">Inscription</a>
                <div></div>
            </li>
        </ul>   
    </header>
    <br><br><br><br><br>
    <h1 class="titre-h1">Connexion</h1>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <?php
                require_once '../src/dbconnexion.php';

                session_start();

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $email = $_POST['email'];
                    $motdepasse = $_POST['motdepasse'];

                    try {
                        $sql = "SELECT * FROM client WHERE email = :email";
                        $stmt = $conn->prepare($sql);
                        $stmt->bindParam(':email', $email);
                        $stmt->execute();

                        if ($stmt->rowCount() > 0) {
                            $row = $stmt->fetch(PDO::FETCH_ASSOC);
                            $motdepasse_hash = $row['motdepasse'];
                            
                            $_SESSION['email'] = $email;
                            if (password_verify($motdepasse, $motdepasse_hash)) {

                                $_SESSION['user_id'] = $row['id'];

                                if ($row['admin'] == 1) {
                                    header("Location: ../src/AdminDashboard.php");
                                    exit();
                                } else {
                                    echo '<div class="alert alert-success" role="alert">Connexion réussie !</div>';
                                }

                                // Redirigez l'utilisateur vers la page d'accueil ou une autre page appropriée
                                 header("Location: ClientDashboard.php");
                                 exit();
                            } else {
                                echo '<div class="alert alert-danger" role="alert">Adresse e-mail ou mot de passe incorrect !</div>';
                            }
                        } else {
                            echo '<div class="alert alert-danger" role="alert">Adresse e-mail ou mot de passe incorrect !</div>';
                        }
                    } catch (PDOException $e) {
                        echo "Erreur de connexion : " . $e->getMessage();
                    }
                }
                ?>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="email">Adresse e-mail :</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="motdepasse">Mot de passe :</label>
                        <input type="password" class="form-control" id="motdepasse" name="motdepasse" required>
                        <a href="mot_de_passe_oublie.php">Mot de passe oublié ?</a>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Se connecter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
