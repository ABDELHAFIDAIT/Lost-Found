@extends('layouts.partials')

@section('title')
    Lost&Found - Details de l'Annonce
@endsection


@section('style')
<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
@endsection



@section('content')
    <!-- Item Details Section -->
    <div class="pt-20 pb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                <!-- Image Gallery -->
                <div class="relative">
                    <div class="aspect-w-16 aspect-h-9">
                        <img src="{{asset('storage/' . $annonce->photo)}}" alt="iPhone 13 Pro" class="w-full h-[400px] object-cover">
                    </div>
                    <div class="absolute top-4 left-4">
                        @if($annonce->type =='Perdu')
                            <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-medium bg-red-100 text-red-600">
                                <i class="fas fa-search-location mr-2"></i> {{ $annonce->type }}
                            </span>
                        @else
                            <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-medium bg-green-100 text-green-600">
                                <i class="fas fa-search-location mr-2"></i> {{ $annonce->type }}
                            </span>
                        @endif
                        
                    </div>
                    <div class="absolute top-4 right-4">
                        <button class="bg-white/90 backdrop-blur-sm p-2 rounded-full hover:bg-white transition-colors">
                            <i class="fas fa-share text-gray-700"></i>
                        </button>
                    </div>
                </div>

                <div class="p-6">
                    <div class="md:flex md:justify-between md:items-start">
                        <!-- Left Column - Item Details -->
                        <div class="md:w-2/3 pr-6">
                            <h1 class="text-3xl font-bold text-gray-900 mb-4">{{ $annonce->titre }}</h1>
                            
                            <div class="mb-6">
                                <h2 class="text-xl font-semibold mb-3">Description</h2>
                                <p class="text-gray-600">{{ $annonce->description }}</p>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                                <div class="bg-gray-50 p-4 rounded-xl">
                                    <div class="text-sm text-gray-600">Date</div>
                                    <div class="font-medium">{{ $annonce->date }}</div>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-xl">
                                    <div class="text-sm text-gray-600">Lieu</div>
                                    <div class="font-medium">{{ $annonce->lieu }}</div>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-xl">
                                    <div class="text-sm text-gray-600">Catégorie</div>
                                    <div class="font-medium">{{ $annonce->category->nom }}</div>
                                </div>
                            </div>

                            <div class="mb-6">
                                <h2 class="text-xl font-semibold mb-3">Localisation</h2>
                                <div class="bg-gray-100 rounded-xl h-64 relative">
                                    <div id="map" class="w-full h-full rounded-xl z-0"></div>
                                </div>
                            </div>
                            
                        </div>

                        <!-- Right Column - Contact Info -->
                        <div class="md:w-1/3 mt-6 md:mt-0">
                            <div class="bg-gray-50 rounded-2xl p-6 sticky top-24">
                                <div class="flex items-center mb-6">
                                    <img src="https://raw.githubusercontent.com/ABDELHAFIDAIT/youdemy/refs/heads/main/uploads/user.png" alt="User Avatar" class="w-12 h-12 rounded-full">
                                    <div class="ml-4">
                                        <h3 class="font-semibold">{{ $annonce->user->f_name }} {{ $annonce->user->l_name }}</h3>
                                        <div class="text-sm text-gray-600">Membre depuis {{ $annonce->user->created_at->format('Y') }}</div>
                                    </div>
                                </div>

                                <div class="flex flex-col gap-3">
                                    <a href="tel: {{ $annonce->user->phone }}"><button class="w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-6 py-3 rounded-xl hover:shadow-lg transition duration-300 transform hover:scale-105 flex items-center justify-center">
                                        <i class="fas fa-phone-alt mr-2"></i>
                                        Contacter
                                    </button></a>
                                    <a href="mailto: {{ $annonce->user->email }}"><button class="w-full bg-white border-2 border-indigo-600 text-indigo-600 px-6 py-3 rounded-xl hover:bg-indigo-50 transition duration-300 flex items-center justify-center">
                                        <i class="far fa-comment-alt mr-2"></i>
                                        Envoyer un email
                                    </button></a>
                                </div>

                                <div class="mt-6 pt-6 border-t border-gray-200">
                                    <h3 class="font-semibold mb-4">Conseils de sécurité</h3>
                                    <ul class="space-y-3 text-sm text-gray-600">
                                        <li class="flex items-start">
                                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                            Privilégiez les lieux publics pour les rencontres
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                            Vérifiez l'identité de votre interlocuteur
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                            Ne communiquez jamais vos informations bancaires
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Commentaires -->
    <div class="mt-12">
        <div class="max-w-7xl mx-auto">
            <!-- Formulaire d'ajout de commentaire -->
            @auth()
            <div class="bg-white px-12 py-6 mb-8">
                <h2 class="text-2xl font-bold mb-6">Ajouter un commentaire</h2>
                <form class="space-y-4">
                    <div>
                        <textarea 
                            class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition resize-none"
                            rows="4"
                            placeholder="Écrivez votre commentaire ici..."
                        ></textarea>
                    </div>
                    
                    <div class="flex justify-end">
                        <button name="publish" type="submit" class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-6 py-2 rounded-full hover:shadow-lg transition duration-300 transform hover:scale-105">
                            Publier le commentaire
                        </button>
                    </div>
                </form>
            </div>
            @endauth

            <!-- Liste des commentaires -->
            <div class="bg-white rounded-2xl shadow-lg px-12 py-6">
                <h2 class="text-2xl font-bold mb-6">Commentaires ({{$annonce->comments_count}})</h2>{{-- $comments->user_count --}}
                
                <!-- Commentaire individuel -->
                <div class="space-y-6">
                    @foreach ($annonce->comments as $comment)
                        <div class="border-b border-gray-200 pb-6">
                            <div class="flex items-start space-x-4">
                                <img src="https://raw.githubusercontent.com/ABDELHAFIDAIT/youdemy/refs/heads/main/uploads/user.png" alt="Avatar" class="w-12 h-12 rounded-full">
                                <div class="flex-1">
                                    <div class="flex items-center justify-between mb-1">
                                        <h3 class="font-semibold text-gray-900">{{ $comment->user->f_name}} {{ $comment->user->l_name}}</h3>
                                        <span class="text-sm text-gray-500">Il y a {{ $comment->created_at->diffForHumans() }}</span>
                                    </div>
                                    <p class="text-gray-600">{{ $comment->comment }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection



@section(section: 'script')
    document.addEventListener("DOMContentLoaded", function () {
        // Coordonnées de l'emplacement (ex: Paris)
        var latitude = 48.8566;
        var longitude = 2.3522;

        // Initialisation de la carte
        var map = L.map('map').setView([latitude, longitude], 13);

        // Ajouter une couche de carte OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        // Ajouter un marqueur
        L.marker([latitude, longitude]).addTo(map)
            .bindPopup("Voici votre emplacement")
            .openPopup();
    });
@endsection