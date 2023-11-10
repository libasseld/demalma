<div>
    <div class="">
        <!-- start main content section -->
        
        <div >
            <div class="panel panel-gray">
                
                
                @if($showform == false)
                <div class="dataTable-wrapper dataTable-loading no-footer searchable fixed-columns">
                    <div class="dataTable-top">
                        <div class="flex items-center justify-between w-full">
                            <h5 class="text-lg font-semibold dark:text-white-light md:mb-0">Gestion des demandes</h5>
                            {{-- <button wire:click="$set('showform',true)" class="btn btn-dark ">Ajouter</button> --}}
                        </div>
                        <div class="grid w-full grid-cols-1 gap-4 p-2 rounded-md lg:grid-cols-2 bg-slate-200">
                            <div class="flex items-center justify-around p-2 bg-white rounded-md">
                                <button type="button" wire:click="$set('etat_demande', 0)" class="text-md px-4 py-2 {{$etat_demande == 0 ? 'text-white bg-primary rounded-md' : 'text-primary'}} ">Nouvelles</button>
                                <button type="button" wire:click="$set('etat_demande', 1)" class="text-md px-4 py-2 {{$etat_demande == 1 ? 'text-white bg-primary rounded-md' : 'text-primary'}}">En cours</button>
                                <button type="button" wire:click="$set('etat_demande', 2)" class="text-md px-4 py-2 {{$etat_demande == 2 ? 'text-white bg-primary rounded-md' : 'text-primary'}} ">Terminées</button>
                            </div>
                            <input type="text" placeholder="Rechercher..." wire:model="search" class="form-input" required />
                        </div>

                    </div>
                    <div class="grid grid-cols-3 gap-4">
                        @foreach ($items as $item)
                        <a href="{{route('detail-demande', ['id'=>$item->id])}}" class="mb-5">
                            <div class="flex flex-wrap justify-center w-full">
                                <div class="relative w-full mt-8 rounded-md border bg-white border-gray-500/20 p-6 pt-12 shadow-[rgb(31_45_61_/_10%)_0px_2px_10px_1px] dark:shadow-[0_2px_11px_0_rgb(6_8_24_/_39%)]">
                                    <div class="absolute flex items-center justify-center w-16 h-16 mx-auto mb-5 rounded-md -top-8 bg-primary text-white-light ltr:left-6 rtl:right-6">
                                        <img src="{{ asset($item->offre->image_url ? 'storage/' . $item->offre->image_url : 'storage/card-images/offre_profil.png') }}" class="h-12 m-auto shadow-2xl" alt="">
                                    </div>
                                    <h5 class="mb-2 text-lg font-semibold text-dark dark:text-white-light">{{$item->prenom." ".$item->nom}}</h5>
                                    <p class="mt-2">
                                        <u>Offre</u> : {{$item->offre->designation}}
                                    </p>
                                    <p class="mt-2">
                                        <u>Date</u> : {{$item->created_at}}
                                    </p>
                                    <p class="mt-2">
                                        <u>Paiement</u> : <span class="badge {{$item->paiement == 0 ? 'bg-warning' : 'bg-success'}}">{{$item->paiement == 0 ? 'En attente' : 'Paiement Effectué'}}</span>
                                    </p>
                                    {{-- <span href="javascript:;" class="mx-auto font-semibold text-right text-primary hover:underline">
                                        Voir

                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="relative inline-block w-4 h-4 transition-all duration-300 group-hover:translate-x-2 ltr:ml-1 rtl:mr-1 rtl:rotate-180 rtl:group-hover:-translate-x-2">
                                            <path d="M4 12H20M20 12L14 6M20 12L14 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span> --}}
                                    <div class="w-full h-4 bg-[#ebedf2] dark:bg-dark/40 rounded-full mt-2">
                                        <div class="{{$item->pourcentage_width}} h-4 text-xs text-center text-white rounded-full bg-info">{{$item->pourcentage}}%</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        {{-- <a class="relative px-6 py-8 mt-4 bg-white shadow-xl rounded-2xl" href="{{route('detail-demande', ['id'=>$item->id])}}">
                            <div class="absolute card-image ">
                                <img src="{{ asset($item->offre->image_url ? 'storage/' . $item->offre->image_url : 'storage/card-images/offre_profil.png') }}" class="h-12 m-auto shadow-2xl" alt="">
                            </div>
                            <h2 class="text-lg font-bold">{{$item->prenom." ".$item->nom}}</h2>
                            <p class="mt-2">
                                <u>Offre</u> : {{$item->offre->designation}}
                            </p>
                            <div class="w-full h-4 mt-2 bg-[#ebedf2] dark:bg-dark/40 rounded-md">
                                <div class="flex items-center justify-between w-8/12 h-4 px-2 text-xs text-center text-white rounded-full bg-danger"><span>PHP</span><span>90%</span></div>
                            </div>
                        </a> --}}
                        @endforeach
                    </div>
                    <div class="flex justify-end dataTable-bottom">
                        {{ $items->links() }}
                    </div>
                </div>
                @else
                <div class="flex items-center justify-between col-span-2 mb-5">
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

