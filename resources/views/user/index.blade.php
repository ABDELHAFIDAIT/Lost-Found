@extends('layouts.user')

@section('title')
    Lost&Found - Accueil
@endsection

@section('content')
    <!-- Hero Section -->
    <div class="pt-24 hero-pattern">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                    <span class="block">Retrouvez vos objets perdus</span>
                    <span class="block gradient-text">avec Lost&Found</span>
                </h1>
                <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    Connectez-vous avec votre communauté pour retrouver vos objets perdus ou aider les autres à retrouver les leurs.
                </p>
                <div class="mt-10 flex justify-center space-x-4">
                    <button class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-full text-white bg-gradient-to-r from-indigo-600 to-purple-600 hover:shadow-lg transition duration-300 transform hover:scale-105">
                        <i class="fas fa-search mr-2"></i> Déclarer un objet perdu
                    </button>
                    <button class="inline-flex items-center justify-center px-8 py-3 border-2 border-indigo-600 text-base font-medium rounded-full text-indigo-600 bg-white hover:bg-indigo-50 transition duration-300 transform hover:scale-105">
                        <i class="fas fa-hand-holding-heart mr-2"></i> Déclarer un objet trouvé
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="bg-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div class="p-6 bg-gradient-to-br from-indigo-50 to-white rounded-xl shadow-sm">
                    <div class="text-4xl font-bold text-indigo-600 mb-2">2,500+</div>
                    <div class="text-gray-600">Objets retrouvés</div>
                </div>
                <div class="p-6 bg-gradient-to-br from-purple-50 to-white rounded-xl shadow-sm">
                    <div class="text-4xl font-bold text-purple-600 mb-2">5,000+</div>
                    <div class="text-gray-600">Utilisateurs actifs</div>
                </div>
                <div class="p-6 bg-gradient-to-br from-indigo-50 to-white rounded-xl shadow-sm">
                    <div class="text-4xl font-bold text-indigo-600 mb-2">98%</div>
                    <div class="text-gray-600">Taux de satisfaction</div>
                </div>
            </div>
        </div>
    </div>

    <!-- How It Works Section -->
    <div class="bg-gradient-to-br from-indigo-50 to-purple-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Comment ça marche ?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-sm text-center">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-upload text-2xl text-indigo-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">1. Publiez votre annonce</h3>
                    <p class="text-gray-600">Décrivez l'objet perdu ou trouvé avec des photos et détails</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-search text-2xl text-purple-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">2. Connectez-vous</h3>
                    <p class="text-gray-600">Trouvez une correspondance dans notre base de données</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm text-center">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-handshake text-2xl text-indigo-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">3. Récupérez l'objet</h3>
                    <p class="text-gray-600">Organisez la récupération en toute sécurité</p>
                </div>
            </div>
        </div>
    </div>
@endsection