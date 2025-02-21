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
                        <h1 class="mt-4 text-2xl font-bold">{{Auth::user()->f_name}} {{Auth::user()->l_name}}</h1>
                        <p class="text-gray-600">Membre depuis {{Auth::user()->created_at->format('Y')}}</p>
                        <a href="tel: {{Auth::user()->phone}}"><p class="text-gray-600">{{Auth::user()->phone}}</p></a>
                        <a href="mailto: {{Auth::user()->email}}"><p class="text-gray-600">{{Auth::user()->email}}</p></a>
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
                <!-- Tab Content -->
                <div class="p-6">
                    <div class="flex items-center justify-center p-4 mb-6">
                        <a href="/user/create"><button class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-6 py-2 rounded-full hover:shadow-lg transition duration-300 transform hover:scale-105">
                            Publier une Annonce
                        </button></a>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($annonces as $annonce)

                            <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                                <img src="{{ asset('storage/' . $annonce->photo) }}" alt="iPhone perdu" class="w-full h-56 object-cover">
                                <div class="p-6">
                                    <h1></h1>
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
            </div>
        </div>
    </div>
@endsection