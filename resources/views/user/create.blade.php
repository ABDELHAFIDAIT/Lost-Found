@extends('layouts.partials')

@section('title')
    Lost&Found - Annonces
@endsection

@section('content')
    <!-- New Item Form Section -->
    <div class="pt-24 pb-12">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-lg p-6">
                <h1 class="text-2xl font-bold text-gray-900 mb-8">Publier une nouvelle annonce</h1>

                <form method="POST" action="/user/store" class="space-y-6" enctype="multipart/form-data">
                    @csrf
                    <!-- Type d'annonce -->
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700">Type d'annonce*</label>
                        <div class="flex space-x-4">
                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input type="radio" name="type" value="Perdu" class="text-indigo-600 focus:ring-indigo-500" required>
                                <span>Objet Perdu</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input type="radio" name="type" value="Trouvé" class="text-indigo-600 focus:ring-indigo-500" required>
                                <span>Objet Trouvé</span>
                            </label>
                        </div>
                    </div>

                    <!-- Titre -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Titre de l'annonce*</label>
                        <input type="text" required name="titre"
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                            placeholder="Ex: iPhone 13 Pro perdu au parc">
                    </div>

                    <!-- Description -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Description*</label>
                        <textarea rows="4" required name="description"
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                            placeholder="Décrivez l'objet et les circonstances..."></textarea>
                    </div>

                    <!-- Catégorie -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Catégorie*</label>
                        <select required name="id_category"
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                            @foreach ($categories as $categorie)
                                <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Image -->
                    <div>                        
                        <label class="block text-sm font-medium text-gray-700 mb-1">Image</label>
                        {{-- <input name="photo" type="file" class="" accept="image/*"> --}}
                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg">
                            <div class="space-y-1 text-center">
                                <div class="flex flex-col items-center">
                                    <i class="fas fa-image text-gray-400 text-3xl mb-3"></i>
                                    <div class="flex text-sm text-gray-600">
                                        <label class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500">
                                            <span>Télécharger une image</span>
                                            <input name="photo" type="file" class="sr-only" accept="image/*" onchange="previewImage(event)">
                                        </label>
                                    </div>
                                </div>
                                <p class="text-xs text-gray-500">PNG, JPG jusqu'à 5MB</p>
                                <img id="preview" class="hidden mx-auto mt-4 rounded-lg image-preview">
                            </div>
                        </div>
                    </div>

                    <!-- Lieu -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Lieu*</label>
                        <input  name="lieu" type="text" required
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                            placeholder="Ex: Parc Central, Casablanca">
                    </div>

                    <!-- Date -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Date*</label>
                        <input  name="date" type="date" required
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                    </div>

                    <div class="flex justify-end space-x-3 pt-6">
                        <button type="button" onclick="window.history.back()" 
                            class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">
                            Annuler
                        </button>
                        <button type="submit" 
                            class="px-6 py-2 bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-lg hover:shadow-lg transition duration-300">
                            Publier l'annonce
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    // Image preview
    function previewImage(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            const preview = document.getElementById('preview');
            
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('hidden');
            }
            
            reader.readAsDataURL(file);
        }
    }

    // Set default date to today
    document.querySelector('input[type="date"]').valueAsDate = new Date();
@endsection