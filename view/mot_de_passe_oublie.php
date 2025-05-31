```php
<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récupération de mot de passe - Maboum School</title>
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
                        <a href="Register.php" class="text-white hover:text-secondary-200 transition">Inscription</a>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Main Content -->
        <main class="flex-grow flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-md w-full space-y-8 bg-white p-8 rounded-lg shadow-lg">
                <div>
                    <h2 class="text-center text-3xl font-bold text-primary-900">Récupération de mot de passe</h2>
                    <p class="mt-2 text-center text-sm text-gray-600">
                        Entrez votre adresse e-mail pour recevoir les instructions de réinitialisation
                    </p>
                </div>

                <?php 
                session_start();
                if (isset($_SESSION['error-email'])) {
                    echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">' . 
                        $_SESSION['error-email'] . 
                    '</div>';
                }
                ?>

                <form class="mt-8 space-y-6" action="../src/ResetPswdEngine.php" method="POST">
                    <div class="rounded-md shadow-sm space-y-4">
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">
                                Adresse e-mail
                            </label>
                            <input id="email" name="email" type="email" required 
                                class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-primary-500 focus:border-primary-500 focus:z-10 sm:text-sm"
                                placeholder="Votre adresse e-mail">
                        </div>
                    </div>

                    <div>
                        <button type="submit" 
                            class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition">
                            Envoyer les instructions
                        </button>
                    </div>

                    <div class="text-sm text-center">
                        <a href="Login.php" class="font-medium text-primary-600 hover:text-primary-500">
                            Retour à la connexion
                        </a>
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
</body>
</html>
```