<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérification - Maboum School</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="../dist/output.css" rel="stylesheet">
</head>
<body class="bg-gray-50 font-sans">
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="bg-primary-900 text-white fixed w-full z-50">
            <nav class="container mx-auto px-6 py-4">
                <div class="flex items-center justify-between">
                    <a href="index.php" class="flex items-center">
                        <img src="../img/logo3.jpg" alt="Maboum School" class="h-12">
                        <span class="text-white text-xl font-bold ml-3">Maboum School</span>
                    </a>
                </div>
            </nav>
        </header>

        <!-- Main Content -->
        <main class="flex-grow flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 pt-28">
            <div class="max-w-md w-full space-y-8 bg-white p-8 rounded-lg shadow-lg">
                <div>
                    <h2 class="text-center text-3xl font-bold text-primary-900">Vérification</h2>
                    <p class="mt-2 text-center text-sm text-gray-700">
                        Veuillez entrer le code de vérification reçu par e-mail
                    </p>
                </div>

                <?php
                session_start();

                function isVerificationCodeExpired() {
                    $validityDuration = 30 * 60;
                    if (isset($_SESSION['verification_code_created_at'])) {
                        $elapsedTime = time() - $_SESSION['verification_code_created_at'];
                        if ($elapsedTime > $validityDuration) {
                            return true;
                        }
                    }
                    return false;
                }

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST['code'])) {
                        $user_verifcode = $_POST['code'];
                        if ($user_verifcode === $_SESSION['verification_code_reset']) {
                            header("Location:../view/ResetPswdPage.php");
                            exit();
                        } else {
                            echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">Code de vérification incorrect. Veuillez réessayer.</div>';
                        }
                    }
                }

                if (!isset($_SESSION['verification_code_reset']) || empty($_SESSION['verification_code_reset'])) {
                    echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">Le code de vérification est introuvable.</div>';
                    exit();
                }

                if (isVerificationCodeExpired()) {
                    echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">Le code de vérification a expiré. Veuillez en générer un nouveau.</div>';
                    exit();
                }
                ?>

                <form method="POST" action="" class="mt-8 space-y-6">
                    <div class="rounded-md shadow-sm space-y-4">
                        <div>
                            <label for="code" class="block text-sm font-medium text-gray-700">
                                Code de vérification
                            </label>
                            <input id="code" name="code" type="text" required
                                class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-primary-500 focus:border-primary-500 focus:z-10 sm:text-sm"
                                placeholder="Entrez le code reçu">
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                            class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition">
                            Valider
                        </button>
                    </div>

                    <div class="text-sm text-center">
                        <p class="text-gray-700">
                            Vous n'avez pas reçu le code ? 
                            <a href="../src/nouveau_code.php" class="font-medium text-primary-600 hover:text-primary-500">
                                Demander un nouveau code
                            </a>
                        </p>
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