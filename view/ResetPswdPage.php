<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réinitialisation du mot de passe - Maboum School</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="/dist/output.css" rel="stylesheet">
</head>
<body class="bg-gray-50 font-sans">
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="bg-primary-900 text-white">
            <nav class="container mx-auto px-6 py-4">
                <div class="flex items-center justify-between">
                    <a href="index.php" class="flex items-center">
                        <img src="../img/logo3.jpg" alt="Maboum School" class="h-12">
                    </a>
                    <div class="flex items-center space-x-4">
                        <a href="Login.php" class="text-white hover:text-secondary-200 transition">Connexion</a>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Main Content -->
        <main class="flex-grow flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-md w-full space-y-8 bg-white p-8 rounded-lg shadow-lg">
                <div>
                    <h2 class="text-center text-3xl font-bold text-primary-900">Réinitialisation du mot de passe</h2>
                    <p class="mt-2 text-center text-sm text-gray-600">
                        Choisissez votre nouveau mot de passe
                    </p>
                </div>

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
                            echo '<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                                    Mot de passe mis à jour avec succès!
                                </div>';
                            echo '<script>setTimeout(function(){ window.location.href = "Login.php"; }, 2000);</script>';
                        } else {
                            echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                                    Aucun utilisateur trouvé avec cet e-mail!
                                </div>';
                        }
                    } else {
                        echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                                Les mots de passe ne correspondent pas!
                            </div>';
                    }
                    session_destroy();
                }
                ?>

                <form action="" method="POST" onsubmit="return CheckPassword()" class="mt-8 space-y-6">
                    <div class="rounded-md shadow-sm space-y-4">
                        <div>
                            <label for="mdp" class="block text-sm font-medium text-gray-700">
                                Nouveau mot de passe
                            </label>
                            <input id="mdp" name="mdp" type="password" required
                                class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-primary-500 focus:border-primary-500 focus:z-10 sm:text-sm"
                                placeholder="Entrez votre nouveau mot de passe">
                        </div>

                        <div>
                            <label for="mdp1" class="block text-sm font-medium text-gray-700">
                                Confirmer le mot de passe
                            </label>
                            <input id="mdp1" name="mdp1" type="password" required
                                class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-primary-500 focus:border-primary-500 focus:z-10 sm:text-sm"
                                placeholder="Confirmez votre mot de passe">
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                            class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition">
                            Réinitialiser le mot de passe
                        </button>
                    </div>
                </form>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-primary-900 text-white py-6">
            <div class="container mx-auto px-6 text-center">
                <p class="text-sm">&copy; 2023 Maboum School. Tous droits réservés.</p>
            </div>
        </footer>
    </div>

    <script src="../Js/ResetPswd.js"></script>
</body>
</html>