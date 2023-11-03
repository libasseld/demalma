<div>
    <div class="">
        <!-- start main content section -->
        
        <div >
            <div class="panel ">
                
                
                @if($showform == false)
                <div class="dataTable-wrapper dataTable-loading no-footer searchable fixed-columns">
                    <div class="dataTable-top">
                        <div class="w-full flex justify-between items-center">
                            <h5 class="text-lg font-semibold dark:text-white-light  md:mb-0">Gestion des demandes</h5>
                            {{-- <button wire:click="$set('showform',true)" class="btn btn-dark ">Ajouter</button> --}}
                        </div>
                        <input type="text" placeholder="Rechercher..." wire:model="search" class="form-input" required />

                    </div>
                    <div class="grid grid-cols-3 gap-4">
                        @foreach ($items as $item)
                        <a class="shadow-xl px-6 py-8 mt-4 rounded-2xl relative bg-white" href="{{route('detail-demande', ['id'=>$item->id])}}">
                            <div class="absolute card-image ">
                                <img src="{{ asset($item->offre->image_url ? 'storage/' . $item->offre->image_url : 'storage/card-images/offre_profil.png') }}" class="h-12 m-auto shadow-2xl" alt="">
                            </div>
                            <h2 class="text-lg font-bold">{{$item->prenom." ".$item->nom}}</h2>
                            <p class="mt-2">
                                <u>Offre</u> : {{$item->offre->designation}}
                            </p>
                            <div class="w-full h-4 mt-2 bg-[#ebedf2] dark:bg-dark/40 rounded-md">
                                <div class="bg-danger h-4 rounded-full w-8/12 text-center text-white flex justify-between items-center px-2 text-xs"><span>PHP</span><span>90%</span></div>
                            </div>
                        </a>
                        @endforeach
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

