@extends('layouts.user')

@section('title')
    Lost&Found - Annonces
@endsection

@section('content')
    <main class="pt-24">
        <!-- Search Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="bg-white rounded-2xl shadow-xl p-8 bg-gradient-to-br from-indigo-50 via-white to-purple-50">
                <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Rechercher un objet</h2>
                <form method="POST" action="" class="flex items-center justify-center gap-5">
                    <!-- Barre de recherche -->
                    <div class="relative flex-1">
                        <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                        <input name="search" type="text" placeholder="Que recherchez-vous ?" 
                            class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-full focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition">
                    </div>

                    <div class="text-center">
                        <button name="btn-search" class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-8 py-2 rounded-full hover:shadow-lg transition duration-300 transform hover:scale-105">
                            Rechercher
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Filter Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="bg-white rounded-2xl shadow-xl p-8 ">
                <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Filtrer les Annonce</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Filtres par type -->
                    <div class="bg-white p-4 rounded-xl border border-gray-200">
                        <h3 class="font-semibold text-gray-700 mb-3">Type d'annonce</h3>
                        <div class="space-y-2">
                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input type="checkbox" class="form-checkbox text-indigo-600 rounded" value="Perdu">
                                <span class="text-gray-700">Objets Perdus</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input type="checkbox" class="form-checkbox text-indigo-600 rounded" value="Trouvé">
                                <span class="text-gray-700">Objets Trouvés</span>
                            </label>
                        </div>
                    </div>

                    <!-- Filtres par catégorie -->
                    <div class="bg-white p-4 rounded-xl border border-gray-200">
                        <h3 class="font-semibold text-gray-700 mb-3">Catégories</h3>
                        <div class="grid grid-cols-2 gap-2">
                            @foreach ($categories as $category)
                                <label class="flex items-center space-x-2 cursor-pointer">
                                    <input type="checkbox" class="form-checkbox text-indigo-600 rounded" value="{{ $category->id }}">
                                    <span class="text-gray-700">{{ $category->nom }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Items Grid -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Toutes les Annonces</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($annonces as $annonce)
                    
                    <!-- Item Card -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                        <img src="{{asset('storage/' . $annonce->photo)}}" alt="iPhone perdu" class="w-full h-56 object-cover">
                        <div class="p-6">
                            @if($annonce->type == 'Perdu')
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-red-100 text-red-600">
                                    <i class="fas fa-exclamation-triangle mr-2"></i> {{ $annonce->type }}
                                </span>
                            @else
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-600">
                                    <i class="fas fa-check-circle mr-2"></i> {{ $annonce->type }}
                                </span>
                            @endif
                            <div class="flex items-center justify-between">
                                <h3 class="mt-3 text-xl font-semibold text-gray-900">{{ $annonce->titre }}</h3>
                                <p class="mt-2 text-xs text-purple-600 underline">{{ $annonce->category->nom }}</p>
                            </div>
                            <p class="mt-2 text-gray-600">{{ $annonce->lieu }}</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="flex items-center text-sm text-gray-500">
                                    <i class="far fa-clock mr-2"></i> {{ $annonce->created_at->diffForHumans() }}
                                </span>
                                <a href="/guest/annonce/{{ $annonce->id }}"><button class="text-indigo-600 hover:text-indigo-800 font-medium transition">Voir les détails</button></a>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </main>
@endsection