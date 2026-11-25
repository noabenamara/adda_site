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

                    <form method="post" action="{{ route('administration.produit.update',$produit->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <!-- libelle -->
                        <div>
                            <x-input-label for="libelle" :value="__('titre')" />
                            <x-text-input id="libelle" class="block mt-1 w-full" type="text" name="libelle" :value="old('libelle', $produit->libelle)" required autofocus />
                            <x-input-error :messages="$errors->get('libelle')" class="mt-2" />
                        </div>

                        <!-- producteur -->
                        <div class="mt-4">
                            <x-input-label for="producteur_id" :value="__('producteur')" />

                            <x-text-input id="producteur_id" class="block mt-1 w-full"
                                          type="text"
                                          name="producteur_id"
                                          :value="old('producteur', $produit->producteur_id)"
                                          list=Lproducteur
                                          required />
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
                                {{ __('Modifier') }}
                            </x-primary-button>

                        </div>
                    </form>
                    <div class="flex items-center justify-end mt-4">
                        <x-danger-button x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-produit-deletion')" class="ml-3">
                            {{ __('Supprimer') }}
                        </x-danger-button>
                        <x-modal name="confirm-produit-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                            <form method="post" action="{{ route('administration.produit.destroy',$produit->id) }}" class="p-6">
                                @csrf
                                @method('delete')

                                <h2 class="text-lg font-medium text-gray-900">
                                    {{ __('Êtes-vous certain de vouloir supprimer ce produit ?') }}
                                </h2>

                                <div class="mt-6 flex justify-end">
                                    <x-secondary-button x-on:click="$dispatch('close')">
                                        {{ __('Annuler') }}
                                    </x-secondary-button>

                                    <x-danger-button class="ml-3">
                                        {{ __('Supprimer définitivement') }}
                                    </x-danger-button>
                                </div>
                            </form>
                        </x-modal>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
