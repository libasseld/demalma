<div>
    <div class="">
        <!-- start main content section -->
        
        <div >
            <div class="panel">
                
                
                @if($showform == false)
                <div class="dataTable-wrapper dataTable-loading no-footer searchable fixed-columns">
                    <div class="dataTable-top">
                        <div class="w-full flex justify-between items-center">
                            <h5 class="text-lg font-semibold dark:text-white-light  md:mb-0">Gestion des catégories d'offre</h5>
                            <button wire:click="$set('showform',true)" class="btn btn-dark ">Ajouter</button>
                        </div>
                        <input type="text" placeholder="Rechercher..." wire:model="search" class="form-input" required />

                    </div>
                    <div class="dataTable-container">
                        <table id="tableStripe" class="table-striped dataTable-table">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Icone</th>
                                    <th>lien</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                    <tr>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->icone}}</td>
                                        <td>{{$item->url}}</td>
                                        <td>
                                            <div class="flex">
                                                <button class="text-rose-500 text-center" aria-label="Modifier" wire:click="edit({{$item->id}})">
                                                    {{-- <span wire:ignore><i data-feather="edit" class="h-4"></i></span> --}} Modifier
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="dataTable-bottom flex  justify-end">
                        {{ $items->links() }}
                    </div>
                </div>
                @else
                <div class="mb-5 col-span-2 flex items-center justify-between">
                    @if($edit_mode == false)
                    <h5 class="text-lg font-semibold dark:text-white-light">Nouvelle catégorie</h5>
                    @else
                    <h5 class="text-lg font-semibold dark:text-white-light">Modification de la catégorie</h5>
                    @endif
                    
                </div>
                <div class="w-full md:w-1/3">
                    
                    <div class="w-full p-2">
                        <label for="name" class="block mb-2 text-sm font-mediu">Nom du réseau social</label>
                        <input type="text" wire:model="reseau_social.name" id="name" class="bg-white border border-slate-500 text-slate-900 placeholder-slate-700 text-sm rounded-lg focus:ring-slate-500 focus:border-slate-500 block w-full p-2.5 dark:bg-slate-100 dark:border-slate-400" placeholder="Ex: Facebook">
                        @error('reseau_social.name') 
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="text-red-700 text-sm">{{ $message }}</span> </p>                            
                        @enderror
                    </div>
                    
                    <div class="w-full p-2">
                        <label for="icone" class="block mb-2 text-sm font-mediu">Icone Font Awesome</label>
                        <input type="text" wire:model="reseau_social.icone" id="icone" class="bg-white border border-slate-500 text-slate-900 placeholder-slate-700 text-sm rounded-lg focus:ring-slate-500 focus:border-slate-500 block w-full p-2.5 dark:bg-slate-100 dark:border-slate-400" placeholder="Ex: fa-facebook">
                        @error('reseau_social.name') 
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="text-red-700 text-sm">{{ $message }}</span> </p>                            
                        @enderror
                    </div>
                    
                    <div class="w-full p-2">
                        <label for="url" class="block mb-2 text-sm font-mediu">Adresse url de la page</label>
                        <input type="text" wire:model="reseau_social.url" id="url" class="bg-white border border-slate-500 text-slate-900 placeholder-slate-700 text-sm rounded-lg focus:ring-slate-500 focus:border-slate-500 block w-full p-2.5 dark:bg-slate-100 dark:border-slate-400" placeholder="Ex: https://facebook.com/">
                        @error('reseau_social.url') 
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="text-red-700 text-sm">{{ $message }}</span> </p>                            
                        @enderror
                    </div>
                    
                    <div class="col-span-2 flex justify-end mt-2">
                        <button type="button" wire:click="cancel" class="btn py-2 px-4 bg-red-500 text-slate-50 mr-4 ">Annuler</button>
                        <button type="button" wire:click="save" class="btn py-2 px-4 bg-slate-800 text-slate-50 ">Enregistrer</button>


                    </div>
                </div>

            @endif
            
            </div>

            
        </div>
       
       
    </div>
</div>

