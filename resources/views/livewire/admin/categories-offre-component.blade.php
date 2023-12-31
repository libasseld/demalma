<div>
    <div class="">
        <!-- start main content section -->
        
        <div >
            <div class="panel">
                
                
                @if($showform == false)
                <div class="dataTable-wrapper dataTable-loading no-footer searchable fixed-columns">
                    <div class="dataTable-top">
                        <div class="flex items-center justify-between w-full">
                            <h5 class="text-lg font-semibold dark:text-white-light md:mb-0">Gestion des catégories d'offre</h5>
                            <button wire:click="$set('showform',true)" class="btn btn-dark ">Ajouter</button>
                        </div>
                        <input type="text" placeholder="Rechercher..." wire:model="search" class="form-input" required />

                    </div>
                    <div class="dataTable-container">
                        <table id="tableStripe" class="table-striped dataTable-table">
                            <thead>
                                <tr>
                                    <th >Nom</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                    <tr>
                                        <td>{{$item->name}}</td>
                                        <td>
                                            <div class="flex">
                                                <button class="text-center text-rose-500" aria-label="Modifier" wire:click="edit({{$item->id}})">
                                                    {{-- <span wire:ignore><i data-feather="edit" class="h-4"></i></span> --}} Modifier
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="flex justify-end dataTable-bottom">
                        {{ $items->links() }}
                    </div>
                </div>
                @else
                <div class="flex items-center justify-between col-span-2 mb-5">
                    @if($edit_mode == false)
                    <h5 class="text-lg font-semibold dark:text-white-light">Nouvelle catégorie</h5>
                    @else
                    <h5 class="text-lg font-semibold dark:text-white-light">Modification de la catégorie</h5>
                    @endif
                    
                </div>
                <div class="w-full md:w-1/3">
                    
                    <div class="w-full p-2">
                        <label for="name" class="block mb-2 text-sm font-mediu">Désignation</label>
                        <input type="text" wire:model="categorie_offre.name" id="name" class="bg-white border border-slate-500 text-slate-900 placeholder-slate-700 text-sm rounded-lg focus:ring-slate-500 focus:border-slate-500 block w-full p-2.5 dark:bg-slate-100 dark:border-slate-400" placeholder="Designation">
                        @error('categorie_offre.name') 
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="text-sm text-red-700">{{ $message }}</span> </p>                            
                        @enderror
                    </div>
                    
                    <div class="w-full p-2">
                        <label for="texte_accroche" class="block mb-2 text-sm font-mediu">Texte d'accroche</label>
                        <input type="text" wire:model="categorie_offre.texte_accroche" id="texte_accroche" class="bg-white border border-slate-500 text-slate-900 placeholder-slate-700 text-sm rounded-lg focus:ring-slate-500 focus:border-slate-500 block w-full p-2.5 dark:bg-slate-100 dark:border-slate-400" placeholder="Texte d'accroche">
                        @error('categorie_offre.texte_accroche') 
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="text-sm text-red-700">{{ $message }}</span> </p>                            
                        @enderror
                    </div>
                    <div class="w-full p-2">
                        <label for="description" class="block mb-2 text-sm font-mediu">Déscription</label>
                        <textarea wire:model="categorie_offre.description" id="description" class="bg-white border border-slate-500 text-slate-900 placeholder-slate-700 text-sm rounded-lg focus:ring-slate-500 focus:border-slate-500 block w-full p-2.5 dark:bg-slate-100 dark:border-slate-400" placeholder="Description"></textarea>
                        @error('categorie_offre.description') 
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="text-sm text-red-700">{{ $message }}</span> </p>                            
                        @enderror
                    </div>
                    
                    <div class="flex justify-end col-span-2 mt-2">
                        <button type="button" wire:click="cancel" class="px-4 py-2 mr-4 bg-red-500 btn text-slate-50 ">Annuler</button>
                        <button type="button" wire:click="save" class="px-4 py-2 btn bg-slate-800 text-slate-50 ">Enregistrer</button>


                    </div>
                </div>

            @endif
            
            </div>

            
        </div>
       
       
    </div>
</div>

