@extends('layouts.user')

@section('title')
    Lost&Found - Profile
@endsection

@section('content')
    <!-- Profile Section -->
    <div class="pt-20 pb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Profile Header -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden mb-6">
                <div class="relative h-48 bg-gradient-to-r from-indigo-600 to-purple-600 z-auto">
                    <a href="/profile"><button class="absolute top-4 right-4 bg-white/20 backdrop-blur-sm text-white px-4 py-2 rounded-lg hover:bg-white/30 transition-colors">
                        <i class="fas fa-edit mr-2"></i>
                        Modifier le profil
                    </button></a>
                </div>
                <div class="px-6 pb-6">
                    <div class="flex flex-col items-center -mt-20">
                        <img src="https://raw.githubusercontent.com/ABDELHAFIDAIT/youdemy/refs/heads/main/uploads/user.png" alt="Profile Picture" 
                            class="w-32 h-32 rounded-full border-4 border-white shadow-lg bg-white z-40">
                        <h1 class="mt-4 text-2xl font-bold">Mohammed Alami</h1>
                        <p class="text-gray-600">Membre depuis Janvier 2024</p>
                        <div class="mt-4 flex space-x-4">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-indigo-600">12</div>
                                <div class="text-sm text-gray-600">Annonces</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-green-600">8</div>
                                <div class="text-sm text-gray-600">Retrouvés</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-purple-600">95%</div>
                                <div class="text-sm text-gray-600">Satisfaction</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Profile Content -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                <!-- Tabs -->
                <div class="border-b">
                    <div class="flex">
                        <button class="px-6 py-4 text-sm font-medium tab-active">
                            Mes Annonces
                        </button>
                        <button class="px-6 py-4 text-sm font-medium text-gray-600 hover:text-indigo-600 transition-colors">
                            Paramètres
                        </button>
                        <button class="px-6 py-4 text-sm font-medium text-gray-600 hover:text-indigo-600 transition-colors">
                            Notifications
                        </button>
                    </div>
                </div>

                <!-- Tab Content -->
                <div class="p-6">
                    <!-- Filters -->
                    <div class="flex flex-wrap gap-4 mb-6">
                        <button class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">
                            Tous (12)
                        </button>
                        <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors">
                            Objets Perdus (5)
                        </button>
                        <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors">
                            Objets Trouvés (7)
                        </button>
                    </div>

                    <!-- Announcements Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Announcement Card 1 -->
                        <div class="bg-white rounded-xl border shadow-sm overflow-hidden hover:shadow-lg transition duration-300">
                            <img src="https://i.imgur.com/xJDPGEk.jpg" alt="iPhone" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <div class="flex justify-between items-start mb-2">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-red-100 text-red-600">
                                        <i class="fas fa-search-location mr-2"></i> Perdu
                                    </span>
                                    <div class="flex space-x-2">
                                        <button class="text-gray-400 hover:text-indigo-600 transition-colors">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="text-gray-400 hover:text-red-600 transition-colors">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                                <h3 class="text-lg font-semibold">iPhone 13 Pro</h3>
                                <p class="text-gray-600 text-sm mb-2">Perdu près du Parc Central</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-sm text-gray-500">Il y a 2 jours</span>
                                    <a href="item-details.html" class="text-indigo-600 hover:text-indigo-800 text-sm font-medium">
                                        Voir les détails
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Announcement Card 2 -->
                        <div class="bg-white rounded-xl border shadow-sm overflow-hidden hover:shadow-lg transition duration-300">
                            <img src="https://i.imgur.com/YQkqZZG.jpg" alt="Ring" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <div class="flex justify-between items-start mb-2">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-600">
                                        <i class="fas fa-hand-holding-heart mr-2"></i> Trouvé
                                    </span>
                                    <div class="flex space-x-2">
                                        <button class="text-gray-400 hover:text-indigo-600 transition-colors">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="text-gray-400 hover:text-red-600 transition-colors">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                                <h3 class="text-lg font-semibold">Bague en Or</h3>
                                <p class="text-gray-600 text-sm mb-2">Trouvée au Café du Centre</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-sm text-gray-500">Il y a 5 jours</span>
                                    <a href="item-details.html" class="text-indigo-600 hover:text-indigo-800 text-sm font-medium">
                                        Voir les détails
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Announcement Card 3 -->
                        <div class="bg-white rounded-xl border shadow-sm overflow-hidden hover:shadow-lg transition duration-300">
                            <img src="https://i.imgur.com/L3lNpqF.jpg" alt="Backpack" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <div class="flex justify-between items-start mb-2">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-red-100 text-red-600">
                                        <i class="fas fa-search-location mr-2"></i> Perdu
                                    </span>
                                    <div class="flex space-x-2">
                                        <button class="text-gray-400 hover:text-indigo-600 transition-colors">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="text-gray-400 hover:text-red-600 transition-colors">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                                <h3 class="text-lg font-semibold">Sac à dos noir</h3>
                                <p class="text-gray-600 text-sm mb-2">Perdu dans le Bus 42</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-sm text-gray-500">Il y a 1 semaine</span>
                                    <a href="item-details.html" class="text-indigo-600 hover:text-indigo-800 text-sm font-medium">
                                        Voir les détails
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Load More Button -->
                    <div class="text-center mt-8">
                        <button class="px-6 py-3 bg-gray-100 text-gray-700 rounded-xl hover:bg-gray-200 transition-colors">
                            Charger plus d'annonces
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection