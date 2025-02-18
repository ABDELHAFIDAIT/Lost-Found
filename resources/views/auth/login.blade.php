<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Lost&Found</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background: linear-gradient(135deg, #f6f8ff 0%, #f1f1ff 100%); }
        .gradient-text { background: linear-gradient(45deg, #4f46e5, #7c3aed); background-clip: text; -webkit-text-fill-color: transparent; }
        .auth-gradient { background: linear-gradient(135deg, rgba(79, 70, 229, 0.1) 0%, rgba(124, 58, 237, 0.1) 100%); }
        .custom-shadow { box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1); }
        .input-focus:focus { box-shadow: 0 0 0 2px rgba(79, 70, 229, 0.2); }
    </style>
</head>
<body class="min-h-screen flex flex-col">
    <div class="pt-8 pb-4 text-center">
        <a href="/" class="inline-flex items-center justify-center space-x-2">
            <span class="text-2xl font-bold gradient-text">Lost&Found</span>
        </a>
    </div>

    <div class="flex-1 flex items-center justify-center px-4 py-8">
        <div class="max-w-md w-full">
            <div class="bg-white rounded-3xl custom-shadow overflow-hidden transform hover:scale-[1.02] transition-transform duration-300">
                <div class="auth-gradient px-8 py-12">
                    <div class="text-center mb-10">
                        <h2 class="text-3xl font-bold text-gray-900 mb-3">Bon retour!</h2>
                        <p class="text-gray-600">Nous sommes ravis de vous revoir</p>
                    </div>

                    <form method="POST" action="{{ route('login') }}" class="space-y-6">
                        @csrf
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-envelope text-indigo-500"></i>
                                </div>
                                <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"
                                    class="w-full pl-10 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-0 focus:border-indigo-500 transition-colors input-focus">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Mot de passe</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-lock text-indigo-500"></i>
                                </div>
                                <input id="password" type="password" name="password" required autocomplete="current-password"
                                    class="w-full pl-10 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-0 focus:border-indigo-500 transition-colors input-focus">
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input id="remember_me" type="checkbox" name="remember" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                                <label class="ml-2 block text-sm text-gray-700">Se souvenir de moi</label>
                            </div>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-sm font-medium text-indigo-600 hover:text-indigo-800 transition-colors">
                                    Mot de passe oublié ?
                                </a>
                            @endif
                        </div>

                        <button type="submit" class="w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-4 py-3 rounded-xl hover:shadow-lg transition duration-300 transform hover:scale-105 font-medium">
                            Se connecter
                        </button>
                    </form>

                    <p class="mt-8 text-center text-sm text-gray-600">
                        Pas encore de compte ?
                        <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-800 transition-colors">
                            Créer un compte
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
