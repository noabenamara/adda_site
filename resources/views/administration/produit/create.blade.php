<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestion des produits') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form method="POST" action="{{ route('administration.produit.store') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- libelle -->
                        <div class="mt-4">
                            <x-input-label for="libelle" :value="__('libelle')" />

                            <x-text-input id="libelle" class="block mt-1 w-full"
                                          type="text"
                                          name="libelle"
                                          required
                                          autofocus/>

                            <x-input-error :messages="$errors->get('libelle')" class="mt-2" />
                        </div>

                        <!-- producteur -->
                        <div class="mt-4">
                            <x-input-label for="producteur_id" :value="__('producteur')" />

                            <x-text-input id="producteur_id" class="block mt-1 w-full"
                                          type="text"
                                          name="producteur_id"
                                          list=Lproducteur
                                          required/>
                            <datalist id="Lproducteur">
                                @foreach($producteurs as $producteur)
                                    <option value="{{$producteur->id}}">
                                        {{$producteur->nom}}
                                    </option>
                                @endforeach
                            </datalist>
                            <x-input-error :messages="$errors->get('producteur_id')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a href={{Route('administration.produit.index')}}>
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
