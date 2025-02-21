@extends('layouts.user')

@section('title')
    Lost&Found - Paramètres
@endsection

@section('content')
    <!-- Settings Section -->
    <div class="pt-24 pb-12">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-8">Paramètres du compte</h1>

            <!-- Informations personnelles -->
            <div class="bg-white rounded-2xl shadow-lg p-6 mb-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-xl font-semibold text-gray-900">Informations personnelles</h2>
                    <button id="editProfileBtn" class="text-indigo-600 hover:text-indigo-800 font-medium">
                        <i class="fas fa-edit mr-2"></i>Modifier
                    </button>
                </div>
                <form id="profileForm" class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Prénom</label>
                            <input type="text" value="John" disabled
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 disabled:bg-gray-100">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Nom</label>
                            <input type="text" value="Doe" disabled
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 disabled:bg-gray-100">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Téléphone</label>
                            <input type="tel" value="+212 6XX XXX XXX" disabled
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 disabled:bg-gray-100">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input type="email" value="john.doe@example.com" disabled
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 disabled:bg-gray-100">
                        </div>
                    </div>
                    <div id="profileButtons" class="flex justify-end space-x-3 hidden">
                        <button type="button" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">
                            Annuler
                        </button>
                        <button type="submit" class="px-4 py-2 bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-lg hover:shadow-lg transition duration-300">
                            Enregistrer
                        </button>
                    </div>
                </form>
            </div>

            <!-- Modification du mot de passe -->
            <div class="bg-white rounded-2xl shadow-lg p-6 mb-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-xl font-semibold text-gray-900">Modification du mot de passe</h2>
                    <button id="editPasswordBtn" class="text-indigo-600 hover:text-indigo-800 font-medium">
                        <i class="fas fa-edit mr-2"></i>Modifier
                    </button>
                </div>
                <form id="passwordForm" class="space-y-4">
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Mot de passe actuel</label>
                            <input type="password" disabled placeholder="••••••••"
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 disabled:bg-gray-100">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Nouveau mot de passe</label>
                            <input type="password" disabled placeholder="••••••••"
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 disabled:bg-gray-100">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Confirmer le nouveau mot de passe</label>
                            <input type="password" disabled placeholder="••••••••"
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 disabled:bg-gray-100">
                        </div>
                    </div>
                    <div id="passwordButtons" class="flex justify-end space-x-3 hidden">
                        <button type="button" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">
                            Annuler
                        </button>
                        <button type="submit" class="px-4 py-2 bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-lg hover:shadow-lg transition duration-300">
                            Enregistrer
                        </button>
                    </div>
                </form>
            </div>

            <!-- Suppression du compte -->
            <div class="bg-white rounded-2xl shadow-lg p-6">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-xl font-semibold text-gray-900">Suppression du compte</h2>
                </div>
                <p class="text-gray-600 mb-6">
                    Attention : La suppression de votre compte est irréversible. Toutes vos données seront définitivement effacées.
                </p>
                <button class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition duration-300">
                    <i class="fas fa-trash-alt mr-2"></i>Supprimer mon compte
                </button>
            </div>
        </div>
    </div>
@endsection

@section('script')
// Profile form edit
        const editProfileBtn = document.getElementById('editProfileBtn');
        const profileForm = document.getElementById('profileForm');
        const profileInputs = profileForm.querySelectorAll('input');
        const profileButtons = document.getElementById('profileButtons');

        editProfileBtn.addEventListener('click', () => {
            profileInputs.forEach(input => input.disabled = false);
            profileButtons.classList.remove('hidden');
            editProfileBtn.classList.add('hidden');
        });

        // Password form edit
        const editPasswordBtn = document.getElementById('editPasswordBtn');
        const passwordForm = document.getElementById('passwordForm');
        const passwordInputs = passwordForm.querySelectorAll('input');
        const passwordButtons = document.getElementById('passwordButtons');

        editPasswordBtn.addEventListener('click', () => {
            passwordInputs.forEach(input => input.disabled = false);
            passwordButtons.classList.remove('hidden');
            editPasswordBtn.classList.add('hidden');
        });

        // Cancel buttons
        document.querySelectorAll('button[type="button"]').forEach(button => {
            button.addEventListener('click', () => {
                const form = button.closest('form');
                const inputs = form.querySelectorAll('input');
                const buttons = form.querySelector('div[id$="Buttons"]');
                const editBtn = form.previousElementSibling.querySelector('button');
                
                inputs.forEach(input => input.disabled = true);
                buttons.classList.add('hidden');
                editBtn.classList.remove('hidden');
            });
        });
@endsection