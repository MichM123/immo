@extends('layouts.app')

@section('content')
    <div class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="min-h-screen flex flex-col">
        <div class="container mx-auto flex flex-grow mt-8">
            <aside class="w-1/4 bg-white p-6 min-h-screen rounded-lg shadow">
                <div class="flex items-center mb-6">
                    <img src="{{asset('storage/' . Auth::user()->identite) }}" alt="User Profile" class="h-12 w-12 rounded-full">
                    <div class="ml-4">
                        <span class="block text-xl font-semibold">{{ Auth::user()->nom }} {{ Auth::user()->prenom }}</span>
                    </div>
                </div>
                <nav class="text-gray-600">
                    <a href="#" class="active block py-2.5 px-4 rounded transition duration-200 bg-indigo-500 text-white hover:bg-indigo-500 hover:text-white">Mon Profil</a>
                    <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-indigo-500 hover:text-white">Historique des Recherches</a>
                    <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-indigo-500 hover:text-white">Mes biens</a>
                    <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-indigo-500 hover:text-white">Boîte De Réception</a>
                    <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-indigo-500 hover:text-white">Se Déconnecter</a>
                </nav>
            </aside>
            <main class="w-3/4 bg-white p-6 rounded-lg shadow ml-6">
                <div class="space-y-6">
                    <div class="py-12 w-3/4 bg-white p-6 rounded-lg shadow ml-6">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                            <div class="max-w-xl">
                                    @include('profile.partials.update-profile-information-form')
                                </div>
                            </div>

                            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                                <div class="max-w-xl">
                                    @include('profile.partials.update-password-form')
                                </div>
                            </div>

                            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                                <div class="max-w-xl">
                                    @include('profile.partials.delete-user-form')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection