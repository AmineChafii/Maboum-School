<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maboum School - Excellence Académique</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="/dist/output.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-white font-sans">
    <!-- Header -->
    <header class="bg-gradient-to-r from-primary-800 to-primary-900 fixed w-full z-50">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <a href="/" class="flex items-center">
                    <img src="../img/logo3.jpg" alt="Maboum School" class="h-12">
                    <span class="text-white text-xl font-bold ml-3">Maboum School</span>
                </a>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#qui-sommes-nous" class="text-white hover:text-accent transition">Qui sommes-nous</a>
                    <a href="#nos-campus" class="text-white hover:text-accent transition">Nos campus</a>
                    <a href="#nos-cours" class="text-white hover:text-accent transition">Nos cours</a>
                    <a href="#notre-experience" class="text-white hover:text-accent transition">Notre expérience</a>
                    <a href="#contact" class="text-white hover:text-accent transition">Contact</a>
                    <a href="Register.php" class="text-white hover:text-secondary-200 transition">Inscription</a>
                    <a href="Login.php" class="bg-secondary-600 text-white px-6 py-2 rounded-full hover:bg-secondary-700 transition">Connexion</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="pt-24 bg-gradient-to-r from-primary-800 to-primary-900">
        <div class="container mx-auto px-6 py-24">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2" data-aos="fade-right">
                    <h1 class="text-5xl font-bold text-white leading-tight mb-6">
                        Vous avez des difficultés scolaires ?<br>
                        Nous sommes là pour vous !
                    </h1>
                    <p class="text-xl text-secondary-200 mb-8">
                        Choisissez la matière pour des cours particuliers et programmez votre rendez-vous.
                    </p>
                    <a href="#nos-cours" class="inline-block bg-secondary-600 text-white px-8 py-3 rounded-full text-lg font-semibold hover:bg-secondary-700 transition">
                        Découvrir nos cours
                    </a>
                </div>
                <div class="md:w-1/2 mt-12 md:mt-0" data-aos="fade-left">
                    <img src="../img/first.png" alt="Étudiants" class="rounded-lg shadow-xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Section Qui sommes-nous -->
    <section id="qui-sommes-nous" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2" data-aos="fade-right">
                    <img src="../img/quisommesnous.jpg" alt="À propos de nous" class="rounded-lg shadow-xl">
                </div>
                <div class="md:w-1/2" data-aos="fade-left">
                    <h2 class="text-4xl font-bold text-primary-900 mb-6">QUI SOMMES-NOUS ?</h2>
                    <p class="text-gray-600 mb-6">
                        Maboum School est une enseigne qui donne des cours de soutien. Basé sur Lille / Valenciennes / Roubaix / Tourcoing / Hazebrouck / Dubaï nous proposons des cours de soutien hebdomadaires, des stages intensifs et de l'orientation.
                    </p>
                    <p class="text-gray-600 mb-6">
                        Chez Maboum School, l'avenir de votre enfant est notre priorité. À chaque vacances scolaires, nos professeurs de l'Éducation Nationale organisent des stages pour permettre à votre enfant de se remettre à niveau, de ne pas perdre le rythme de l'école, combler les lacunes mais aussi de s'avancer sur ses devoirs.
                    </p>
                    <p class="text-gray-600 mb-6">
                        Mais ce n'est pas tout Maboum School propose d'autres services comme la mise à disposition d'espace de co-learning afin que les élèves puissent profiter de l'espace pour travailler en autonomie.
                    </p>
                    <p class="text-gray-600 mb-6">
                        Nos équipes assurent un acompagnemet scolaire et établissent un bilan des compétences pour accompagner au mieux votre enfant afin de construire un projet d'évolution professionnelle.
                    </p>
                    <p class="text-gray-600">
                        Personnalisés ou collectifs, Maboum Scolaire propose aussi des cours de soutien hebdomadaire permettant aux élèves de travailler les difficultés rencontrées à l'école.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Nos Campus -->
    <section id="nos-campus" class="py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-primary-900 mb-12">Nos Campus</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden" data-aos="fade-up">
                    <img src="../img/Lille.jpg" alt="Campus Lille" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-primary-900 mb-2">LILLE</h3>
                        <p class="text-gray-600">15 RUE JACQUEMARS GIÉLÉE</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                    <img src="../img/Valenciennes.jpg" alt="Campus Valenciennes" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-primary-900 mb-2">VALENCIENNES</h3>
                        <p class="text-gray-600">84 RUE DE PARIS</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                    <img src="../img/Hazebrouck.jpg" alt="Campus Hazebrouck" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-primary-900 mb-2">HAZEBROUCK</h3>
                        <p class="text-gray-600">50 RUE DE LA CLEF</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden" data-aos="fade-up" data-aos-delay="300">
                    <img src="../img/Tourcoing.png" alt="Campus Tourcoing" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-primary-900 mb-2">TOURCOING</h3>
                        <p class="text-gray-600">25 RUE DE LILLE</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden" data-aos="fade-up" data-aos-delay="400">
                    <img src="../img/Roubaix.jpg" alt="Campus Roubaix" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-primary-900 mb-2">ROUBAIX</h3>
                        <p class="text-gray-600">69 RUE JULES WATTEEUW</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden" data-aos="fade-up" data-aos-delay="500">
                    <img src="../img/Dubai.jpg" alt="Campus Dubai" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-primary-900 mb-2">DUBAÏ</h3>
                        <p class="text-gray-600">ATELIER BUSINESS CENER-AL AMERI TOWER 19TH FLOOR-BARSHA HEIGHTS</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Nos Cours -->
    <section id="nos-cours" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-primary-900 mb-12">Nos Cours</h2>
            
            <!-- Stages Intensifs -->
            <div class="flex flex-col md:flex-row items-center gap-12 mb-12" data-aos="fade-up">
                <div class="md:w-1/2">
                    <img src="../img/stage-intensif.png" alt="Stages intensifs" class="rounded-lg shadow-xl">
                </div>
                <div class="md:w-1/2">
                    <div class="flex items-center mb-2">
                        <h3 class="text-3xl font-bold text-gray-900">Stages</h3>
                        <h3 class="text-3xl font-bold text-primary-600 ml-2">Intensifs</h3>
                    </div>
                    <h4 class="text-xl text-gray-700 mb-4">Pour s'entraîner avec efficacité pendant les vacances !</h4>
                    <p class="text-gray-600">
                        A chaque vacances scolaires, Maboum School met en place des stages intensifs de révisions. L'objectif ? Remettre à niveau les étudiants dans le besoin, garder un rythme d'étude soutenu ou encore prendre de l'avance sur les devoirs ! Nos stages de révision proposent 10h de cours par matière pendant une semaine pour travailler vos matières en profondeur.
                    </p>
                </div>
            </div>
            
            <div class="border-t border-gray-300 my-12"></div>
            
            <!-- Cours Hebdomadaires -->
            <div class="flex flex-col md:flex-row-reverse items-center gap-12 mb-12" data-aos="fade-up">
                <div class="md:w-1/2">
                    <img src="../img/courshebdo.png" alt="Cours hebdomadaires" class="rounded-lg shadow-xl">
                </div>
                <div class="md:w-1/2">
                    <div class="flex items-center mb-2">
                        <h3 class="text-3xl font-bold text-gray-900">Cours</h3>
                        <h3 class="text-3xl font-bold text-primary-600 ml-2">Hebdomadaires</h3>
                    </div>
                    <h4 class="text-xl text-gray-700 mb-4">Pour s'entraîner tout au long de l'année !</h4>
                    <p class="text-gray-600">
                        Nos cours hebdomadaires vous permettront de travailler durant toute l'année scolaire sur une ou plusieurs matières, en personnalisé ou collectivement. Nos cours hebdomadaires ont lieux une à deux fois par semaine.
                    </p>
                </div>
            </div>
            
            <div class="border-t border-gray-300 my-12"></div>
            
            <!-- Coaching Scolaire -->
            <div class="flex flex-col md:flex-row items-center gap-12 mb-12" data-aos="fade-up">
                <div class="md:w-1/2">
                    <img src="../img/orientation.png" alt="Coaching scolaire" class="rounded-lg shadow-xl">
                </div>
                <div class="md:w-1/2">
                    <div class="flex items-center mb-2">
                        <h3 class="text-3xl font-bold text-gray-900">Coaching</h3>
                        <h3 class="text-3xl font-bold text-primary-600 ml-2">Scolaire</h3>
                    </div>
                    <h4 class="text-xl text-gray-700 mb-4">Accompagner les étudiants dans leur futur !</h4>
                    <p class="text-gray-600">
                        Maboum School aide les élèves à réfléchir sur leurs ambitions, leurs centres d'intérêt, leurs qualifications et leurs compétences, à comprendre le marché du travail et les systèmes éducatifs et à articuler cette information avec la connaissance qu'elles ont d'elles-mêmes.
                    </p>
                </div>
            </div>
            
            <div class="border-t border-gray-300 my-12"></div>
            
            <!-- Cours En ligne -->
            <div class="flex flex-col md:flex-row-reverse items-center gap-12" data-aos="fade-up">
                <div class="md:w-1/2">
                    <img src="../img/cours-en-ligne.png" alt="Cours en ligne" class="rounded-lg shadow-xl">
                </div>
                <div class="md:w-1/2">
                    <div class="flex items-center mb-2">
                        <h3 class="text-3xl font-bold text-gray-900">Cours</h3>
                        <h3 class="text-3xl font-bold text-primary-600 ml-2">En ligne</h3>
                    </div>
                    <h4 class="text-xl text-gray-700 mb-4">Pour apprendre partout !</h4>
                    <p class="text-gray-600">
                        Maboum School vous propose aussi des cours en ligne individuelles ou collectifs pour enseigner depuis n'importe où.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Notre Expérience -->
    <section id="notre-experience" class="py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-primary-900 mb-12">Notre expérience</h2>
            
            <!-- Nos enseignants -->
            <div class="mb-20">
                <h3 class="text-2xl font-bold text-center text-primary-800 mb-8">Nos enseignants</h3>
                <div class="flex flex-col md:flex-row items-center gap-12 bg-white rounded-lg shadow-lg p-8" data-aos="fade-up">
                    <div class="md:w-1/2">
                        <img src="../img/NosEnseignants.png" alt="Nos enseignants" class="rounded-lg shadow-xl">
                    </div>
                    <div class="md:w-1/2">
                        <h4 class="text-2xl font-bold text-primary-900 mb-4">Des professeurs compétents</h4>
                        <p class="text-gray-600 mb-4">
                            Votre enfant a besoin d'une attention particulière et souhaite travailler en prenant le temps de revenir sur des points ou des notions précises du programme scolaire ? Habitués à travailler avec des élèves, nos professeurs de l'Education Nationale sauront répondre à leurs attentes.
                        </p>
                        <p class="text-gray-600">
                            Ils sauront accompagner et guider vos enfants de la meilleure des manières et le plus efficacement possible.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Témoignages -->
            <div class="mb-20">
                <h3 class="text-2xl font-bold text-center text-primary-800 mb-8">Témoignages</h3>
                <div class="flex flex-col md:flex-row items-center gap-12 bg-white rounded-lg shadow-lg p-8" data-aos="fade-up">
                    <div class="md:w-1/2">
                        <img src="../img/imgTemoignage.png" alt="Témoignages" class="rounded-lg shadow-xl">
                    </div>
                    <div class="md:w-1/2">
                        <h4 class="text-2xl font-bold text-primary-900 mb-4">Retour des élèves et des parents</h4>
                        <div class="space-y-4">
                            <blockquote class="italic text-gray-600 border-l-4 border-primary-600 pl-4">
                                "J'ai gagné deux points sur ma moyenne de maths après avoir effectué un stage chez Maboum School en février"
                                <footer class="text-right font-semibold">- Kimillia</footer>
                            </blockquote>
                            <blockquote class="italic text-gray-600 border-l-4 border-primary-600 pl-4">
                                "Moi j'ai vu ma moyenne passer de 8 à 10,5 grâce au stage intensif que j'ai fait chez Maboum School"
                                <footer class="text-right font-semibold">- Soussana</footer>
                            </blockquote>
                            <blockquote class="italic text-gray-600 border-l-4 border-primary-600 pl-4">
                                "Mon enfant a doublé sa moyenne grâce à Maboum School, je vous le conseille"
                                <footer class="text-right font-semibold">- Zahra</footer>
                            </blockquote>
                            <blockquote class="italic text-gray-600 border-l-4 border-primary-600 pl-4">
                                "La rentrée s'est bien déroulée comme d'habitude grâce aux stages que nos enfants passent avec vous. Une fois de plus, mon fils reprend les bancs de l'école confiant et sûr de lui. Merci pour cet accompagnement. C'est toujours un plaisir de vous revoir."
                                <footer class="text-right font-semibold">- Halya</footer>
                            </blockquote>
                            <blockquote class="italic text-gray-600 border-l-4 border-primary-600 pl-4">
                                "Très bonne école de soutien. Mon fils reussi a augmenter sa moyenne considérablement et a gagné en confiance en lui."
                                <footer class="text-right font-semibold">- Sabrina</footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Nos tarifs -->
            <div>
                <h3 class="text-2xl font-bold text-center text-primary-800 mb-8">Nos tarifs</h3>
                <div class="bg-primary-800 text-white rounded-lg shadow-lg p-8 max-w-2xl mx-auto" data-aos="fade-up">
                    <h4 class="text-2xl font-bold mb-4 text-center">Tarifs simples et transparents</h4>
                    <div class="text-center text-xl space-y-2">
                        <p>Primaire : 12€/heure</p>
                        <p>Collège : 14€/heure</p>
                        <p>Lycée : 18€/heure</p>
                    </div>
                    <p class="text-center mt-4 text-secondary-200">Tout cela sans frais supplémentaire !</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Contact -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-primary-900 mb-12">Contact</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <div class="bg-white rounded-lg shadow-lg p-6 text-center" data-aos="fade-up">
                    <div class="flex justify-center mb-4">
                        <img src="../img/imgadresse.png" alt="Adresse" class="w-16 h-16">
                    </div>
                    <h3 class="text-xl font-bold text-primary-900 mb-2">Adresse du siège</h3>
                    <p class="text-gray-600">69 rue Jules Watteeuw, Roubaix</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6 text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex justify-center mb-4">
                        <img src="../img/imgtelephone.png" alt="Téléphone" class="w-16 h-16">
                    </div>
                    <h3 class="text-xl font-bold text-primary-900 mb-2">Téléphone</h3>
                    <p class="text-gray-600">06 22 11 89 32</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6 text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex justify-center mb-4">
                        <img src="../img/imgmail.png" alt="Email" class="w-16 h-16">
                    </div>
                    <h3 class="text-xl font-bold text-primary-900 mb-2">Adresse mail</h3>
                    <p class="text-gray-600">direction.pedagogique@maboum-school.fr</p>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-lg p-8" data-aos="fade-up">
                <div class="text-center mb-8">
                    <h3 class="text-2xl font-bold text-primary-900 mb-2">Une question ? Un conseil ?</h3>
                    <h4 class="text-xl text-primary-600">Contactez-nous</h4>
                </div>
                
                <form action="https://formsubmit.co/direction.pedagogique@maboum-school.fr" method="POST" class="max-w-3xl mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <input type="text" name="prenom" placeholder="Entrer votre prénom..." required 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-primary-500 focus:border-primary-500">
                        </div>
                        <div>
                            <input type="text" name="name" placeholder="Entrer votre nom..." required 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-primary-500 focus:border-primary-500">
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <input type="email" name="email" placeholder="Entrer votre email..." required 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-primary-500 focus:border-primary-500">
                    </div>
                    
                    <div class="mb-6">
                        <input type="text" name="subject" placeholder="Entrer le sujet..." required 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-primary-500 focus:border-primary-500">
                    </div>
                    
                    <div class="mb-6">
                        <input type="text" name="number" placeholder="Entrer votre numéro de téléphone" required 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-primary-500 focus:border-primary-500">
                    </div>
                    
                    <div class="mb-6">
                        <textarea name="message" placeholder="Entrer votre message..." required 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-primary-500 focus:border-primary-500 h-32"></textarea>
                    </div>
                    
                    <div class="text-center">
                        <button type="submit" 
                            class="bg-primary-600 text-white px-8 py-3 rounded-full hover:bg-primary-700 transition">
                            Envoyer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary-900 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <img src="../img/logo.png" alt="Maboum School" class="h-16 mb-4">
                    <p class="text-sm">Excellence académique et accompagnement personnalisé</p>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-4">QUI SOMMES NOUS</h3>
                    <p class="text-sm">
                        Maboum School est une entreprise de soutien scolaire présente à Lille / Valenciennes / Hazebrouck / Tourcoing / Roubaix / Dubaï
                    </p>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-4">CONTACT</h3>
                    <ul class="space-y-2">
                        <li class="flex items-center">
                            <img src="../img/imgtelephone.png" alt="Téléphone" class="w-5 h-5 mr-2">
                            <span>06 22 11 89 32</span>
                        </li>
                        <li class="flex items-center">
                            <img src="../img/imgmail.png" alt="Email" class="w-5 h-5 mr-2">
                            <span>direction.pedagogique@maboum-school.fr</span>
                        </li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-4">NOS CAMPUS</h3>
                    <ul class="space-y-2 text-sm">
                        <li>LILLE : 15 rue Jacquemars Giélée</li>
                        <li>VALENCIENNES : 84 rue de Paris</li>
                        <li>ROUBAIX : 69 rue Jules Watteeuw</li>
                        <li>TOURCOING : 25 rue de Lille</li>
                        <li>HAZEBROUCK : 50 rue de la clef</li>
                        <li>DUBAÏ : Atelier business center-Al Ameri Tower 19th floor-Barsha Heights</li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-8 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-sm mb-4 md:mb-0">&copy; 2023 Maboum School. Tous droits réservés.</p>
                    <div class="flex space-x-4">
                        <a href="https://www.facebook.com/maboumschool" target="_blank" class="hover:text-secondary-200">
                            <img src="../img/facebook.webp" alt="Facebook" class="w-6 h-6">
                        </a>
                        <a href="https://www.instagram.com/maboumschool/" target="_blank" class="hover:text-secondary-200">
                            <img src="../img/instagram.png" alt="Instagram" class="w-6 h-6">
                        </a>
                        <a href="https://www.linkedin.com/company/maboum-school/" target="_blank" class="hover:text-secondary-200">
                            <img src="../img/linkedin.png" alt="LinkedIn" class="w-6 h-6">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 1000,
                once: true,
                offset: 100
            });
            
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);
                    
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 100,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>