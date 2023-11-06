<div>
    <div class="">
        <!-- start main content section -->
        
        <div >
            <div class="panel panel-gray">
                
                
                @if($showform == false)
                <div class="dataTable-wrapper dataTable-loading no-footer searchable fixed-columns">
                    <div class="dataTable-top">
                        <div class="w-full flex justify-between items-center">
                            <h5 class="text-lg font-semibold dark:text-white-light  md:mb-0">Gestion des demandes</h5>
                            {{-- <button wire:click="$set('showform',true)" class="btn btn-dark ">Ajouter</button> --}}
                        </div>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 w-full">
                            <div class="bg-white rounded-md flex justify-around p-2 items-center">
                                <button type="button" wire:click="$set('etat_demande', 0)" class="text-md px-4 py-2 text-primary ">Nouvelles</button>
                                <button type="button" wire:click="$set('etat_demande', 1)" class="text-md px-4 py-2 text-white bg-primary rounded-md">En cours</button>
                                <button type="button" wire:click="$set('etat_demande', 2)" class="text-md px-4 py-2 text-primary ">Terminées</button>
                            </div>
                            <input type="text" placeholder="Rechercher..." wire:model="search" class="form-input" required />
                        </div>

                    </div>
                    <div class="grid grid-cols-3 gap-4">
                        @foreach ($items as $item)
                        <a href="{{route('detail-demande', ['id'=>$item->id])}}" class="mb-5">
                            <div class="flex w-full flex-wrap justify-center">
                                <div class="relative w-full mt-8 rounded-md border bg-white border-gray-500/20 p-6 pt-12 shadow-[rgb(31_45_61_/_10%)_0px_2px_10px_1px] dark:shadow-[0_2px_11px_0_rgb(6_8_24_/_39%)]">
                                    <div class="absolute -top-8 mx-auto mb-5 flex h-16 w-16 items-center justify-center rounded-md bg-primary text-white-light ltr:left-6 rtl:right-6">
                                        <img src="{{ asset($item->offre->image_url ? 'storage/' . $item->offre->image_url : 'storage/card-images/offre_profil.png') }}" class="h-12 m-auto shadow-2xl" alt="">
                                    </div>
                                    <h5 class="mb-3.5 text-lg font-semibold text-dark dark:text-white-light">{{$item->prenom." ".$item->nom}}</h5>
                                    <p class="mt-2">
                                        <u>Offre</u> : {{$item->offre->designation}}
                                    </p>
                                    <span href="javascript:;" class="mx-auto font-semibold text-primary hover:underline  text-right">
                                        Voir

                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="relative inline-block h-4 w-4 transition-all duration-300 group-hover:translate-x-2 ltr:ml-1 rtl:mr-1 rtl:rotate-180 rtl:group-hover:-translate-x-2">
                                            <path d="M4 12H20M20 12L14 6M20 12L14 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                        {{-- <a class="shadow-xl px-6 py-8 mt-4 rounded-2xl relative bg-white" href="{{route('detail-demande', ['id'=>$item->id])}}">
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
                        </a> --}}
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

