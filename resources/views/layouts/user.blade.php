<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/x-icon" href="./../../../public/images/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .hero-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%234f46e5' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
        }
        .gradient-text {
            background: linear-gradient(45deg, #4f46e5, #7c3aed);
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }        
    </style>

    @yield('style')
    
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="/user" class="flex items-center">
                        <span class="text-xl font-bold gradient-text">Lost&Found</span>
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-4">
                    <a href="/user" class="text-gray-600 hover:text-indigo-600 px-3 py-2 rounded-md transition-colors">Accueil</a>
                    <a href="/user/annonces" class="text-gray-600 hover:text-indigo-600 px-3 py-2 rounded-md transition-colors">Annonces</a>
                    <div class="relative group">
                        <button class="text-gray-600 hover:text-indigo-600 px-3 py-2 rounded-md transition-colors flex items-center">
                            <img src="https://raw.githubusercontent.com/ABDELHAFIDAIT/youdemy/refs/heads/main/uploads/user.png" alt="Avatar" class="h-8 w-8 rounded-full mr-2">
                            <i class="fas fa-chevron-down ml-2 text-sm"></i>
                        </button>
                        <div class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg py-2 hidden group-hover:block">
                            <a href="/user/profile/" class="block px-4 py-2 text-gray-800 hover:bg-indigo-50 hover:text-indigo-600">
                                <i class="fas fa-user mr-2"></i> Profile
                            </a>
                            <div class="border-t border-gray-100 my-1"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="block px-4 py-2 text-red-600 hover:bg-red-50">
                                    <i class="fas fa-sign-out-alt mr-2"></i> Déconnexion
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button type="button" class="text-gray-600 hover:text-indigo-600 focus:outline-none" onclick="toggleMobileMenu()">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile menu -->
        <div class="md:hidden hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="index.html" class="block px-3 py-2 text-gray-600 hover:text-indigo-600 rounded-md">Accueil</a>
                <a href="#" class="block px-3 py-2 text-gray-600 hover:text-indigo-600 rounded-md">Objets Perdus</a>
                <a href="#" class="block px-3 py-2 text-gray-600 hover:text-indigo-600 rounded-md">Objets Trouvés</a>
                <a href="profile.html" class="block px-3 py-2 text-gray-600 hover:text-indigo-600 rounded-md">Mon Profil</a>
                <a href="#" class="block px-3 py-2 text-gray-600 hover:text-indigo-600 rounded-md">Paramètres</a>
                <a href="index.html" class="block px-3 py-2 text-red-600 hover:bg-red-50 rounded-md">Déconnexion</a>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center mb-4">
                        <span class="text-xl font-bold">Lost&Found</span>
                    </div>
                    <p class="text-gray-400 mb-4">Aidons les gens à retrouver leurs objets perdus et à redonner le sourire à notre communauté.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Liens Rapides</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Accueil</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Objets Perdus</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Objets Trouvés</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Comment ça marche</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact</h3>
                    <ul class="space-y-2">
                        <li class="flex items-center text-gray-400">
                            <i class="fas fa-envelope mr-2"></i>
                            support@lostandfound.com
                        </li>
                        <li class="flex items-center text-gray-400">
                            <i class="fas fa-phone mr-2"></i>
                            +212 5XX-XXXXXX
                        </li>
                        <li class="flex items-center text-gray-400">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            Casablanca, Maroc
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-800 text-center text-gray-400">
                <p>&copy; 2025 Lost&Found. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Animate elements on scroll
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in');
                }
            });
        });

        document.querySelectorAll('.card-hover').forEach((el) => observer.observe(el));

        // Mobile menu toggle
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        }
    </script>

    <script>
        @yield('script')
    </script>
</body>
</html>