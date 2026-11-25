<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestion des ateliers') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form method="POST" action="{{ route('administration.atelier.store') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- titre -->
                        <div>
                            <x-input-label for="titre" :value="__('titre')" />
                            <x-text-input id="titre" class="block mt-1 w-full" type="text" name="titre" :value="old('titre')" required autofocus/>
                            <x-input-error :messages="$errors->get('titre')" class="mt-2" />
                        </div>

                        <!-- description -->
                        <div class="mt-4">
                            <x-input-label for="description" :value="__('description')" />

                            <x-text-input id="description" class="block mt-1 w-full"
                                          type="text"
                                          name="description"
                                          required/>

                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <!-- details -->
                        <div class="mt-4">
                            <x-input-label for="details" :value="__('details')" />

                            <x-text-input id="details" class="block mt-1 w-full"
                                          type="text"
                                          name="details"
                                          required/>

                            <x-input-error :messages="$errors->get('details')" class="mt-2" />
                        </div>


                        <!-- picto -->
                        <div class="mt-4">
                            <x-input-label for="picto" :value="__('picto')" />

                            <x-text-input id="picto" class="block mt-1 w-full"
                                          type="file"
                                          name="picto"
                                          accept="image/*"
                                          required/>

                            <x-input-error :messages="$errors->get('picto')" class="mt-2" />
                        </div>

                        <!-- jour -->
                        <div class="mt-4">
                            <x-input-label for="jour" :value="__('jour')" />

                            <x-text-input id="jour" class="block mt-1 w-full"
                                          list="Ljour"
                                          name="jour"
                                          required/>

                            <datalist id="Ljour">
                                <option value="lundi"></option>
                                <option value="mardi"></option>
                                <option value="mercredi"></option>
                                <option value="jeudi"></option>
                                <option value="vendredi"></option>
                                <option value="samedi"></option>
                                <option value="dimanche"></option>
                            </datalist>
                            <x-input-error :messages="$errors->get('jour')" class="mt-2" />
                        </div>

                        <!-- horaire -->
                        <div class="mt-4">
                            <x-input-label for="horaire" :value="__('horaire')" />

                            <x-text-input id="horaire" class="block mt-1 w-full"
                                          type="time"
                                          name="horaire"
                                          required/>

                            <x-input-error :messages="$errors->get('horaire')" class="mt-2" />
                        </div>
                    
                        <!-- duree -->
                        <div class="mt-4">
                            <x-input-label for="duree" :value="__('duree')" />

                            <x-text-input id="duree" class="block mt-1 w-full"
                                          type="number"
                                          name="duree"
                                          required/>

                            <x-input-error :messages="$errors->get('duree')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a href={{Route('administration.atelier.index')}}>
                                <x-secondary-button class="ml-3">
                                    {{ __('Annuler') }}
                                </x-secondary-button>
                            </a>
                            <x-primary-button class="ml-3">
                                {{ __('Valider') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
