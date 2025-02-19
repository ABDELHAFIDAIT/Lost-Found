@extends('layouts.partials')

@section('title')
    Lost&Found - Annonces
@endsection

@section('content')
    <main class="pt-24">
        <!-- Search Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="bg-white rounded-2xl shadow-xl p-8 bg-gradient-to-br from-indigo-50 via-white to-purple-50">
                <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Rechercher un objet</h2>
                <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4">
                    <div class="flex-1">
                        <div class="relative">
                            <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                            <input type="text" placeholder="Que recherchez-vous ?" 
                                class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-full focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition">
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="relative">
                            <i class="fas fa-tag absolute left-3 top-3 text-gray-400"></i>
                            <select class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-full focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 appearance-none transition">
                                <option value="">Sélectionner une catégorie</option>
                                <option value="electronics">Électronique</option>
                                <option value="jewelry">Bijoux</option>
                                <option value="pets">Animaux</option>
                                <option value="documents">Documents</option>
                                <option value="other">Autre</option>
                            </select>
                            <i class="fas fa-chevron-down absolute right-3 top-3 text-gray-400"></i>
                        </div>
                    </div>
                    <button class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-8 py-2 rounded-full hover:shadow-lg transition duration-300 transform hover:scale-105">
                        Rechercher
                    </button>
                </div>
            </div>
        </div>

        <!-- Recent Items Grid -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Objets Récents</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($annonces as $annonce)
                    
                    <!-- Item Card -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                        <img src="{{ $annonce->photo }}" alt="iPhone perdu" class="w-full h-56 object-cover">
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
                            <h3 class="mt-3 text-xl font-semibold text-gray-900">{{ $annonce->titre }}</h3>
                            <p class="mt-2 text-gray-600">{{ $annonce->lieu }}</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="flex items-center text-sm text-gray-500">
                                    <i class="far fa-clock mr-2"></i> {{ $annonce->created_at->diffForHumans() }}
                                </span>
                                <a href="/annonce/{{ $annonce->id }}"><button class="text-indigo-600 hover:text-indigo-800 font-medium transition">Voir les détails</button></a>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </main>
@endsection