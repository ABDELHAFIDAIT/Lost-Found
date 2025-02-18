<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Lost&Found</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f6f8ff 0%, #f1f1ff 100%);
        }
        .gradient-text {
            background: linear-gradient(45deg, #4f46e5, #7c3aed);
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .auth-gradient {
            background: linear-gradient(135deg, rgba(79, 70, 229, 0.1) 0%, rgba(124, 58, 237, 0.1) 100%);
        }
        .custom-shadow {
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        }
        .input-focus:focus {
            box-shadow: 0 0 0 2px rgba(79, 70, 229, 0.2);
        }
    </style>
</head>
<body class="min-h-screen flex flex-col">
    <!-- Logo Section -->
    <div class="pt-8 pb-4 text-center">
        <a href="/" class="inline-flex items-center justify-center space-x-2">
            <span class="text-2xl font-bold gradient-text">Lost&Found</span>
        </a>
    </div>

    <!-- Signup Section -->
    <div class="flex-1 flex items-center justify-center px-4 py-8">
        <div class="max-w-6xl w-full">
            <div class="bg-white rounded-3xl custom-shadow overflow-hidden transform hover:scale-[1.02] transition-transform duration-300">
                <div class="md:flex">
                    <!-- Left side with image -->
                    <div class="md:w-1/2 bg-gradient-to-br from-indigo-600 to-purple-600 p-12 text-white hidden md:block">
                        <div class="h-full flex flex-col justify-center">
                            <h2 class="text-4xl font-bold mb-8">Bienvenue sur Lost&Found</h2>
                            <p class="text-xl mb-8 text-indigo-100">Rejoignez notre communauté et aidez les autres à retrouver leurs objets perdus.</p>
                            <ul class="space-y-6">
                                <li class="flex items-center text-lg">
                                    <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center mr-4">
                                        <i class="fas fa-upload text-2xl"></i>
                                    </div>
                                    Publication gratuite d'annonces
                                </li>
                                <li class="flex items-center text-lg">
                                    <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center mr-4">
                                        <i class="fas fa-bell text-2xl"></i>
                                    </div>
                                    Notifications en temps réel
                                </li>
                                <li class="flex items-center text-lg">
                                    <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center mr-4">
                                        <i class="fas fa-users text-2xl"></i>
                                    </div>
                                    Communauté active et bienveillante
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Right side with form -->
                    <div class="md:w-1/2 auth-gradient px-8 py-12">
                        <div class="text-center mb-10">
                            <h2 class="text-3xl font-bold text-gray-900 mb-3">Créer un compte</h2>
                            <p class="text-gray-600">Commencez votre expérience Lost&Found</p>
                        </div>

                        <!-- Signup Form -->
                        <form class="space-y-6" method="POST" action="{{ route('register') }}">
                            @csrf

                            {{-- First & Last Name --}}
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                {{-- First Name --}}
                                <div>
                                    <label for="f_name" :value="__('First Name')" class="block text-sm font-medium text-gray-700 mb-2">Prénom</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fas fa-user text-indigo-500"></i>
                                        </div>
                                        <input id="f_name" type="text" name="f_name" :value="old('f_name')" required autofocus autocomplete="name" 
                                            class="w-full pl-10 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-0 focus:border-indigo-500 transition-colors input-focus"
                                            placeholder="Votre prénom">
                                    </div>
                                    <x-input-error :messages="$errors->get('f_name')" class="mt-2" />
                                </div>

                                {{-- Last Name --}}
                                <div>
                                    <label for="l_name" class="block text-sm font-medium text-gray-700 mb-2">Nom</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fas fa-user text-indigo-500"></i>
                                        </div>
                                        <input id="l_name" type="text" name="l_name" :value="old('l_name')" required autofocus autocomplete="l_name" 
                                            class="w-full pl-10 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-0 focus:border-indigo-500 transition-colors input-focus"
                                            placeholder="Votre Nom">
                                    </div>
                                    <x-input-error :messages="$errors->get('l_name')" class="mt-2" />
                                </div>
                            </div>

                            {{-- Email --}}
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-envelope text-indigo-500"></i>
                                    </div>
                                    <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" 
                                        class="w-full pl-10 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-0 focus:border-indigo-500 transition-colors input-focus"
                                        placeholder="Votre Email">
                                </div>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            {{-- Phone --}}
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Téléphone</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-phone text-indigo-500"></i>
                                    </div>
                                    <input type="tel" id="phone" name="phone" :value="old('phone')" required autocomplete="phone" 
                                        class="w-full pl-10 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-0 focus:border-indigo-500 transition-colors input-focus"
                                        placeholder="Votre numéro de téléphone">
                                </div>
                                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                            </div>

                            {{-- Password --}}
                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Mot de passe</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-lock text-indigo-500"></i>
                                    </div>
                                    <input type="password" id="password" name="password" required autocomplete="new-password"
                                        class="w-full pl-10 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-0 focus:border-indigo-500 transition-colors input-focus"
                                        placeholder="Créez un mot de passe">
                                </div>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            {{-- Confirm Password --}}
                            <div>
                                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">Confirmer le mot de passe</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-lock text-indigo-500"></i>
                                    </div>
                                    <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                                        class="w-full pl-10 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-0 focus:border-indigo-500 transition-colors input-focus"
                                        placeholder="Confirmez votre mot de passe">
                                </div>
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                            <div class="flex items-center">
                                <input type="checkbox" required class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                                <label class="ml-2 block text-sm text-gray-700">
                                    J'accepte les <a href="#" class="text-indigo-600 hover:text-indigo-800 transition-colors">conditions d'utilisation</a> et la 
                                    <a href="#" class="text-indigo-600 hover:text-indigo-800 transition-colors">politique de confidentialité</a>
                                </label>
                            </div>

                            <button type="submit" 
                                class="w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-4 py-3 rounded-xl hover:shadow-lg transition duration-300 transform hover:scale-105 font-medium">
                                Créer mon compte
                            </button>
                        </form>

                        <!-- Social Signup -->
                        <div class="mt-8">
                            <div class="relative">
                                <div class="absolute inset-0 flex items-center">
                                    <div class="w-full border-t border-gray-300"></div>
                                </div>
                                <div class="relative flex justify-center text-sm">
                                    <span class="px-2 bg-white text-gray-500">Ou s'inscrire avec</span>
                                </div>
                            </div>

                            <div class="mt-6 grid grid-cols-2 gap-4">
                                <button class="flex justify-center items-center px-4 py-3 border-2 border-gray-200 rounded-xl text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 transition-colors transform hover:scale-105">
                                    <i class="fab fa-google text-red-500 mr-2 text-lg"></i>
                                    Google
                                </button>
                                <button class="flex justify-center items-center px-4 py-3 border-2 border-gray-200 rounded-xl text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 transition-colors transform hover:scale-105">
                                    <i class="fab fa-facebook text-blue-600 mr-2 text-lg"></i>
                                    Facebook
                                </button>
                            </div>
                        </div>

                        <!-- Login link -->
                        <p class="mt-8 text-center text-sm text-gray-600">
                            Déjà un compte ?
                            <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-800 transition-colors">
                                Se connecter
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>