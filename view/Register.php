<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Maboum School</title>
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
                    <div class="flex items-center space-x-4">
                        <a href="Login.php" class="text-white hover:text-secondary-200 transition">Connexion</a>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Main Content -->
        <main class="flex-grow container mx-auto px-4 py-12 pt-28">
            <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-lg p-8">
                <h1 class="text-3xl font-bold text-primary-900 text-center mb-8">Inscription</h1>

                <form action="../src/RegisterEngine.php" method="POST" onsubmit="return CheckPassword() && CheckEmail()" class="space-y-6">
                    <!-- Informations de compte -->
                    <div class="bg-gray-50 p-6 rounded-lg mb-8">
                        <h2 class="text-xl font-semibold text-primary-900 mb-4">Informations de compte</h2>
                        <div class="grid grid-cols-1 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <input type="email" name="email" id="email" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                                <span id="emailError" class="text-red-600 text-sm"></span>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Mot de passe</label>
                                <input type="password" name="motdepasse" id="motdepasse" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Confirmer le mot de passe</label>
                                <input type="password" name="cmotdepasse" id="cmotdepasse" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                                <span id="error-msg" class="text-red-600 text-sm">
                                    <?php session_start(); echo isset($_SESSION['error']) ? $_SESSION['error'] : ''; ?>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Informations personnelles -->
                    <div class="bg-gray-50 p-6 rounded-lg mb-8">
                        <h2 class="text-xl font-semibold text-primary-900 mb-4">Informations personnelles</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Nom</label>
                                <input type="text" name="nom" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Prénom</label>
                                <input type="text" name="prenom" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Établissement</label>
                                <input type="text" name="etablissement" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Classe</label>
                                <input type="text" name="classe" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Représentant légal</label>
                                <input type="text" name="representant" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Téléphone</label>
                                <input type="tel" name="telephone" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                            </div>
                        </div>
                    </div>

                    <!-- Adresse -->
                    <div class="bg-gray-50 p-6 rounded-lg mb-8">
                        <h2 class="text-xl font-semibold text-primary-900 mb-4">Adresse</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-700 mb-1">Adresse</label>
                                <input type="text" name="adresse" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                            </div>
                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-700 mb-1">Complément d'adresse</label>
                                <input type="text" name="complement"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Code postal</label>
                                <input type="text" name="codepostal" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Ville</label>
                                <input type="text" name="ville" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                            </div>
                        </div>
                    </div>

                    <!-- Type de cours -->
                    <div class="bg-gray-50 p-6 rounded-lg mb-8">
                        <h2 class="text-xl font-semibold text-primary-900 mb-4">Type de cours</h2>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <input type="checkbox" id="courshebdo" name="type[]" value="Cours hebdomadaire"
                                    class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                                <label for="courshebdo" class="ml-2 text-sm text-gray-700">Cours hebdomadaire</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="stage" name="type[]" value="Stages intensifs de révision"
                                    class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                                <label for="stage" class="ml-2 text-sm text-gray-700">Stages intensifs de révision</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="preparation" name="type[]" value="Préparation aux examens"
                                    class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                                <label for="preparation" class="ml-2 text-sm text-gray-700">Préparation aux examens</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="suivi" name="type[]" value="Suivi pédagogique"
                                    class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                                <label for="suivi" class="ml-2 text-sm text-gray-700">Suivi pédagogique</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="bilan" name="type[]" value="Bilan des compétences"
                                    class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                                <label for="bilan" class="ml-2 text-sm text-gray-700">Bilan des compétences</label>
                            </div>
                        </div>
                    </div>

                    <!-- Matières -->
                    <div class="bg-gray-50 p-6 rounded-lg mb-8">
                        <h2 class="text-xl font-semibold text-primary-900 mb-4">Matières</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="flex items-center">
                                <input type="checkbox" id="math" name="matiere[]" value="Mathématiques"
                                    class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                                <label for="math" class="ml-2 text-sm text-gray-700">Mathématiques</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="pc" name="matiere[]" value="Physique-Chimie"
                                    class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                                <label for="pc" class="ml-2 text-sm text-gray-700">Physique-Chimie</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="fr" name="matiere[]" value="Français"
                                    class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                                <label for="fr" class="ml-2 text-sm text-gray-700">Français</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="an" name="matiere[]" value="Anglais"
                                    class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                                <label for="an" class="ml-2 text-sm text-gray-700">Anglais</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="philo" name="matiere[]" value="Philosophie"
                                    class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                                <label for="philo" class="ml-2 text-sm text-gray-700">Philosophie</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="svt" name="matiere[]" value="SVT"
                                    class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                                <label for="svt" class="ml-2 text-sm text-gray-700">SVT</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="stss" name="matiere[]" value="STSS"
                                    class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                                <label for="stss" class="ml-2 text-sm text-gray-700">STSS</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="histoire" name="matiere[]" value="Histoire"
                                    class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                                <label for="histoire" class="ml-2 text-sm text-gray-700">Histoire</label>
                            </div>
                            <div class="md:col-span-2">
                                <div class="flex items-center">
                                    <input type="checkbox" id="autre" name="matiere[]" value="Autre"
                                        class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                                    <label for="autre" class="ml-2 text-sm text-gray-700">Autre</label>
                                </div>
                                <div id="autreMatiereInput" class="mt-2 hidden">
                                    <input type="text" id="autreInput" name="matiere[]"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Campus -->
                    <div class="bg-gray-50 p-6 rounded-lg mb-8">
                        <h2 class="text-xl font-semibold text-primary-900 mb-4">Campus</h2>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <input type="radio" id="lille" name="campus" value="Lille" required
                                    class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300">
                                <label for="lille" class="ml-2 text-sm text-gray-700">Lille</label>
                            </div>
                            <div class="flex items-center">
                                <input type="radio" id="roubaix" name="campus" value="Roubaix" required
                                    class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300">
                                <label for="roubaix" class="ml-2 text-sm text-gray-700">Roubaix</label>
                            </div>
                            <div class="flex items-center">
                                <input type="radio" id="valenciennes" name="campus" value="Valenciennes" required
                                    class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300">
                                <label for="valenciennes" class="ml-2 text-sm text-gray-700">Valenciennes</label>
                            </div>
                            <div class="flex items-center">
                                <input type="radio" id="tourcoing" name="campus" value="Tourcoing" required
                                    class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300">
                                <label for="tourcoing" class="ml-2 text-sm text-gray-700">Tourcoing</label>
                            </div>
                            <div class="flex items-center">
                                <input type="radio" id="hazebrouck" name="campus" value="Hazebrouck" required
                                    class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300">
                                <label for="hazebrouck" class="ml-2 text-sm text-gray-700">Hazebrouck</label>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <button type="submit"
                            class="px-8 py-3 bg-primary-600 text-white font-medium rounded-full hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition">
                            S'inscrire
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

    <script src="../Js/inscription.js"></script>
</body>
</html>