<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Client - Maboum School</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="../dist/output.css" rel="stylesheet">
</head>
<body class="bg-gray-50 font-sans">
    <?php
    session_start();
    if(!isset($_SESSION['email'])) {
        header('Location: Login.php');
        exit();
    }
    ?>

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
                        <a href="mot_de_passe_oublie.php" class="text-white hover:text-secondary-200 transition">
                            Changer le mot de passe
                        </a>
                        <a href="../src/Logout.php" class="bg-red-600 text-white px-4 py-2 rounded-full hover:bg-red-700 transition">
                            Déconnexion
                        </a>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Main Content -->
        <main class="flex-grow container mx-auto px-4 py-8 pt-28">
            <?php
            require_once '../src/dbconnexion.php';
            $user_id = $_SESSION['user_id'];

            try {
                $sql = "SELECT nom, prenom, etablissement, classe, telephone, type_soutien, matiere, campus, heure_payee, heure FROM client WHERE id = :id";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':id', $user_id);
                $stmt->execute();
                $user = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($user) {
                    echo '<div class="flex justify-between items-center mb-8">';
                    echo '<h1 class="text-3xl font-bold text-primary-900">Bienvenue, ' . htmlspecialchars($user['prenom']) . '</h1>';
                    echo '<a href="https://maboum-school.sumupstore.com/" target="_blank" 
                            class="bg-secondary-600 text-white px-6 py-3 rounded-full hover:bg-secondary-700 transition">
                            Recharger votre solde
                          </a>';
                    echo '</div>';

                    // Information Cards
                    echo '<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">';
                    
                    // Heures Card
                    echo '<div class="bg-white rounded-lg shadow-lg p-6">';
                    echo '<h3 class="text-lg font-semibold text-primary-900 mb-2">Heures de cours</h3>';
                    echo '<div class="flex justify-between items-center">';
                    echo '<div>';
                    echo '<p class="text-gray-700">Payées: ' . htmlspecialchars($user['heure_payee']) . '</p>';
                    echo '<p class="text-gray-700">Restantes: ' . htmlspecialchars($user['heure']) . '</p>';
                    echo '</div>';
                    echo '<div class="text-4xl font-bold text-primary-600">' . htmlspecialchars($user['heure']) . '</div>';
                    echo '</div>';
                    echo '</div>';

                    // Campus Card
                    echo '<div class="bg-white rounded-lg shadow-lg p-6">';
                    echo '<h3 class="text-lg font-semibold text-primary-900 mb-2">Campus</h3>';
                    echo '<p class="text-gray-700">' . htmlspecialchars($user['campus']) . '</p>';
                    echo '</div>';

                    // Type de soutien Card
                    echo '<div class="bg-white rounded-lg shadow-lg p-6">';
                    echo '<h3 class="text-lg font-semibold text-primary-900 mb-2">Type de soutien</h3>';
                    echo '<p class="text-gray-700">' . htmlspecialchars($user['type_soutien']) . '</p>';
                    echo '</div>';
                    
                    echo '</div>';

                    // Detailed Information Table
                    echo '<div class="bg-white rounded-lg shadow-lg overflow-hidden">';
                    echo '<div class="overflow-x-auto">';
                    echo '<table class="min-w-full divide-y divide-gray-200">';
                    echo '<thead class="bg-gray-50">';
                    echo '<tr>';
                    echo '<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>';
                    echo '<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Prénom</th>';
                    echo '<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Établissement</th>';
                    echo '<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Classe</th>';
                    echo '<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Téléphone</th>';
                    echo '<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Matières</th>';
                    echo '</tr>';
                    echo '</thead>';
                    echo '<tbody class="bg-white divide-y divide-gray-200">';
                    echo '<tr>';
                    echo '<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">' . htmlspecialchars($user['nom']) . '</td>';
                    echo '<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">' . htmlspecialchars($user['prenom']) . '</td>';
                    echo '<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">' . htmlspecialchars($user['etablissement']) . '</td>';
                    echo '<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">' . htmlspecialchars($user['classe']) . '</td>';
                    echo '<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">' . htmlspecialchars($user['telephone']) . '</td>';
                    echo '<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">' . htmlspecialchars($user['matiere']) . '</td>';
                    echo '</tr>';
                    echo '</tbody>';
                    echo '</table>';
                    echo '</div>';
                    echo '</div>';
                } else {
                    echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">';
                    echo 'Utilisateur non trouvé.';
                    echo '</div>';
                }
            } catch (PDOException $e) {
                echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">';
                echo 'Erreur : ' . $e->getMessage();
                echo '</div>';
            }
            ?>
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