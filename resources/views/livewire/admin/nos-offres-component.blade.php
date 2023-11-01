<div>
    <div class="">
        <!-- start main content section -->
        
        <div >
            <div class="panel">
                
                
                @if($showform == false)
                <div class="dataTable-wrapper dataTable-loading no-footer searchable fixed-columns">
                    <div class="dataTable-top">
                        <div class="w-full flex justify-between items-center">
                            <h5 class="text-lg font-semibold dark:text-white-light  md:mb-0">Gestion des offres</h5>
                            <button wire:click="$set('showform',true)" class="btn btn-dark ">Ajouter</button>
                        </div>
                        <input type="text" placeholder="Rechercher..." wire:model="search" class="form-input" required />

                    </div>
                    <div class="dataTable-container">
                        <table id="tableStripe" class="table-striped dataTable-table">
                            <thead>
                                <tr>
                                    <th>Désignation</th>
                                    <th>Catégorie</th>
                                    <th>Auteur</th>
                                    <th>Date d'ajout</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                    <tr>
                                        <td>{{$item->designation}}</td>
                                        <td>{{$item->categorie_offre->name}}</td>
                                        <td>{{$item->auteur->name}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>
                                            <div class="flex">
                                                <a class="text-rose-500 text-center" aria-label="Modifier" href="{{route('offre-form', ['slug'=>$item->slug])}}">
                                                    {{-- <span wire:ignore><i data-feather="edit" class="h-4"></i></span> --}} Modifier
                                                </a>
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

