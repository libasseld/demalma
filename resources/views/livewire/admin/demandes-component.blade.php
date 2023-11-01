<div>
    <div class="">
        <!-- start main content section -->
        
        <div >
            <div class="panel">
                
                
                @if($showform == false)
                <div class="dataTable-wrapper dataTable-loading no-footer searchable fixed-columns">
                    <div class="dataTable-top">
                        <div class="w-full flex justify-between items-center">
                            <h5 class="text-lg font-semibold dark:text-white-light  md:mb-0">Gestion des demandes</h5>
                            {{-- <button wire:click="$set('showform',true)" class="btn btn-dark ">Ajouter</button> --}}
                        </div>
                        <input type="text" placeholder="Rechercher..." wire:model="search" class="form-input" required />

                    </div>
                    <div class="dataTable-container">
                        <table id="tableStripe" class="table-striped dataTable-table">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Offre</th>
                                    <th>Date d'ajout</th>
                                    <th>Paiement</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                    <tr>
                                        <td>{{$item->prenom ." ".$item->nom}}</td>
                                        <td>{{$item->offre->designation}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>
                                            <div class="flex">
                                                @if ($item->paiement == 1)
                                                    <button
                                                        class="bg-steal-500 text-center text-white px-2 rounded-sm"
                                                        aria-label="Modifier" type="button">
                                                        {{-- <span wire:ignore><i data-feather="edit" class="h-4"></i></span> --}} Payé
                                                    </button>
                                                @else
                                                    <button
                                                        class="bg-rose-500 text-center text-white px-2 rounded-sm"
                                                        aria-label="Modifier" type="button">
                                                        {{-- <span wire:ignore><i data-feather="edit" class="h-4"></i></span> --}} En attente
                                                    </button>
                                                @endif
                                            </div>
                                        </td>
                                        <td>
                                            @if ($item->etat == 0)
                                                <button type="button" wire:click="annuler_reservation({{$item->id}})" class="btn py-1 px-4 bg-red-500 text-slate-50 mr-4 ">Annuler</button>
                                            @else
                                                <span class="text-red-300 text-sm p-1"> X Annulé X</span>
                                            @endif
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
                    <h5 class="text-lg font-semibold dark:text-white-light">Nouvelle offre</h5>
                    @else
                    <h5 class="text-lg font-semibold dark:text-white-light">Modification de l'offre</h5>
                    @endif
                    
                </div>
                <livewire:admin.form.offre-form >


            @endif
            
            </div>

            
        </div>
       
       
    </div>
</div>

