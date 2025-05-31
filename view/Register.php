<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inscription - Maboum School</title>
    <link rel="icon" type="image/png" href="../img/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <a href="index.php"><img src="../img/logo3.jpg" alt="logo"></a>
        <ul id="listeHeader1">
            <li><a href="Login.php" id="connexion">Connexion</a>
            <div></div>
        </li>
        </ul>   
    </header>
    <br><br><br><br><br>
    <h1 class="titre-h1">Inscription</h1>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <form action="../src/RegisterEngine.php" method="POST" onclick="return CheckPassword() && CheckEmail()">
                <div class="form-group">
                    <label for="email">Adresse e-mail :</label>
                    <input type="text" class="form-control" id="email" name="email" required>
                    <span id="emailError" style="color:red;"></span>
                </div>
                <div class="form-group">
                    <span id="error-msg"style="color : red;"><?php session_start(); echo isset($_SESSION['error']) ? $_SESSION['error'] : ''; ?></span><br><br>
                    <label for="motdepasse">Mot de passe :</label>
                    <input type="password" class="form-control" id="motdepasse" name="motdepasse" required>
                </div>
                <div class="form-group">
                    <label for="confirmmotdepasse">Confirmez votre mot de passe :</label>
                    <input type="password" class="form-control" id="cmotdepasse" name="cmotdepasse" required>

                </div>
                <div class="separateur"></div>
                <div class="form-group">
                    <label for="nom">Nom :</label>
                    <input type="text" class="form-control" id="nom" name="nom" required>
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom :</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" required>
                </div>
                <div class="form-group">
                    <label for="etablissement">Etablissement :</label>
                    <input type="text" class="form-control" id="etablissement" name="etablissement" required>
                </div>
                <div class="form-group">
                    <label for="classe">Classe :</label>
                    <input type="text" class="form-control" id="classe" name="classe" required>
                </div>
                <div class="form-group">
                    <label for="representant">Representant légal :</label>
                    <input type="text" class="form-control" id="representant" name="representant" required>
                </div>
                <div class="form-group">
                    <label for="telephone">Téléphone :</label>
                    <input type="text" class="form-control" id="telephone" name="telephone" required>
                </div>
                <div class="form-group">
                    <label for="adresse">Adresse :</label>
                    <input type="text" class="form-control" id="adresse" name="adresse" required>
                </div>
                <div class="form-group">
                    <label for="complement">Complèment d'adresse :</label>
                    <input type="text" class="form-control" id="complement" name="complement">
                </div>
                <div class="form-group">
                    <label for="codepostal">Code postal :</label>
                    <input type="text" class="form-control" id="codepostal" name="codepostal" required>
                </div>
                <div class="form-group">
                    <label for="ville">Ville :</label>
                    <input type="text" class="form-control" id="ville" name="ville" required>
                </div>
                <div class="form-group">
                    <label for="cours">Cours hebdomadaires :</label><br>
                    <div class="form-check">
                        <input type="checkbox" id="courshebdo" name="type[]" value="Cours hebdomadaire" class="form-check-input">
                        <label for="courshebdo" class="form-check-label">Cours hebdomadaire</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="stage" name="type[]" value="Stages intensifs de révision" class="form-check-input">
                        <label for="stage" class="form-check-label">Stages intensifs de révision</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="preparation" name="type[]" class="form-check-input" value="Préparation aux examens" >
                        <label for="preparation" class="form-check-label">Préparation aux examens</label><br>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="suivi" name="type[]" class="form-check-input" value="Suivi pédagogique">
                        <label for="suivi" class="form-check-label">Suivi pédagogique</label><br>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="bilan" name="type[]"  class="form-check-input" value="Bilan des compétences">
                        <label for="bilan" class="form-check-label">Bilan des compétances</label><br>
                    </div>
                </div>
                <div class="form-group">
                    <label for="matiere">Matières :</label><br>
                    <div class="form-check">
                        <input type="checkbox" id="math" name="matiere[]" class="form-check-input" value="Mathématiques">
                        <label for="math" class="form-check-label">Mathématiques</label><br>
                        <input type="checkbox" id="pc" name="matiere[]" class="form-check-input" value="Physique-Chimie">
                        <label for="pc" class="form-check-label">Physique-Chimie</label><br>
                        <input type="checkbox" id="fr" name="matiere[]" class="form-check-input" value="Français">
                        <label for="fr" class="form-check-label">Français</label><br>
                        <input type="checkbox" id="an" name="matiere[]" class="form-check-input" value="Anglais">
                        <label for="an" class="form-check-label">Anglais</label><br>
                        <input type="checkbox" id="philo" name="matiere[]" class="form-check-input" value="Philosophie">
                        <label for="philo" class="form-check-label">Philosophie</label><br>
                        <input type="checkbox" id="svt" name="matiere[]" class="form-check-input" value="SVT">
                        <label for="svt" class="form-check-label">SVT</label><br>
                        <input type="checkbox" id="stss" name="matiere[]" class="form-check-input" value="STSS">
                        <label for="stss" class="form-check-label">STSS</label><br>
                        <input type="checkbox" id="histoire" name="matiere[]" class="form-check-input" value="Histoire">
                        <label for="histoire" class="form-check-label">Histoire</label><br>
                        <input type="checkbox" id="autre" name="matiere[]" class="form-check-input" value="Autre">
                        <div id="autreMatiereInput">
                                <label for="autre" class="form-check-label">Autre</label><br>
                                <input type="text" id="autreInput" name="matiere[]" class="form-control"><br>
                        </div>
                    </div>
                    

                    <div class="form-group">
                        <label for="campus" id="campus" class="form-check-label">Campus :</label><br>
                        <div class="form-check">
                            <input type="radio" id="lille" class="form-check-input" name="campus" value="Lille" required>
                            <label for="lille" class="form-check-label">Lille</label><br>
                            <input type="radio" id="roubaix" class="form-check-input" name="campus" value="Roubaix" required>
                            <label for="roubaix" class="form-check-label">Roubaix</label><br>
                            <input type="radio" id="valenciennes" class="form-check-input" name="campus" value="Valenciennes" required>
                            <label for="valenciennes" class="form-check-label">Valenciennes</label><br>
                            <input type="radio" id="tourcoing" class="form-check-input" name="campus" value="Tourcoing" required>
                            <label for="tourcoing" class="form-check-label">Tourcoing</label><br>
                            <input type="radio" id="hazebrouck" class="form-check-input" name="campus" value="Hazebrouck" required>
                            <label for="hazebrouck" class="form-check-label">Hazebrouck</label><br>
                        </div>
                    </div>
                </div>
                <br>
                <div class="text-center">
                <button type="submit" style="color: #052364;">S'inscrire</button>
                </div>
        </form>
        </div>
        </div>
    </div>
    <script src="../Js/inscription.js"></script>
    </body>
</html>