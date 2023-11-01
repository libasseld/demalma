<div>
    <div class="">
        <!-- start main content section -->
        
        <div >
            <div class="panel">
                
                
                @if($showform == false)
                <div class="dataTable-wrapper dataTable-loading no-footer searchable fixed-columns">
                    <div class="dataTable-top">
                        <div class="w-full flex justify-between items-center">
                            <h5 class="text-lg font-semibold dark:text-white-light  md:mb-0">Gestion des utilisateurs</h5>
                            <button wire:click="$set('showform',true)" class="btn btn-dark ">Nouvel utilisateur</button>
                        </div>
                        <div class="flex justify-between w-full">
                            
                        <div class="inline-flex rounded-md shadow-sm" role="group">
                            <button type="button" wire:click="$set('to_show', null)" class="px-4 py-2 text-sm font-medium text-gray-900 border border-gray-200 rounded-l-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white focus:outline-none {{$to_show === null ? 'bg-slate-500 text-white' : ' '}}">
                                Tous les utilisateurs
                            </button>
                            <button  type="button" wire:click="$set('to_show', 1)" class=" px-4 py-2 text-sm font-medium text-gray-900 border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white focus:outline-none {{$to_show == 1 ? 'bg-slate-500 text-white' : ' '}}">
                                Actifs
                            </button>
                            <button type="button" wire:click="$set('to_show', 0)" class="px-4 py-2 text-sm font-medium text-gray-900 border border-gray-200 rounded-r-md hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white focus:outline-none {{$to_show === 0 ? 'bg-slate-500 text-white' : ' '}}">
                                Inactifs
                            </button>
                        </div>
  
                            <input type="text" placeholder="Rechercher..." wire:model="search" class="form-input w-1/3" required />
                        </div>

                    </div>
                    <div class="dataTable-container">
                        <table id="tableStripe" class="table-striped dataTable-table">
                            <thead>
                                <tr>
                                    <th >Prénom</th>
                                    <th >Nom</th>
                                    <th >Email</th>
                                    <th >Role</th>
                                    <th >Compte actif</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                    <tr>
                                        <td>{{$item->prenom}}</td>
                                        <td>{{$item->nom}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->role->name}}</td>
                                        <td class="px-2 "  align="center">
                                            @if ($item->active == 0)
                                                 <button  type="button" data-toggle="modal" data-target="#exampleModal"
                                                 wire:click="changer_etat_user( {{ $item->id }})"
                                                 class="btn m-auto text-white bg-teal-500 hover:bg-teal-700  btn-sm border-opacity-50 border-2 border-teal-800 px-4 py-1 rounded-lg">
                                                     Activer 
                                                 </button>
                                            @else
                                                 <button wire:click="changer_etat_user( {{ $item->id }})" class="btn m-auto text-white bg-red-500 hover:bg-red-700  btn-sm border-opacity-50 border-2 border-red-800 px-4 py-1 rounded-lg">
                                                     Désactiver 
                                                 </button>
                                            @endif
                                         </td>
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
                    <h5 class="text-lg font-semibold dark:text-white-light">Nouvel Utilisateur</h5>
                    
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2">
                    
                    <div class="w-full p-2">
                        <label for="prenom" class="block mb-2 text-sm font-mediu">Prénom</label>
                        <input type="text" wire:model="user.prenom" id="prenom" class="bg-white border border-slate-500 text-slate-900 placeholder-slate-700 text-sm rounded-lg focus:ring-slate-500 focus:border-slate-500 block w-full p-2.5 dark:bg-slate-100 dark:border-slate-400" placeholder="Prénom">
                        @error('user.prenom') 
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="text-red-700 text-sm">{{ $message }}</span> </p>                            
                        @enderror
                    </div>
                    <div class="w-full p-2">
                        <label for="nom" class="block mb-2 text-sm font-mediu">Nom</label>
                        <input type="text" wire:model="user.nom" id="nom" class="bg-white border border-slate-500 text-slate-900 placeholder-slate-700 text-sm rounded-lg focus:ring-slate-500 focus:border-slate-500 block w-full p-2.5 dark:bg-slate-100 dark:border-slate-400" placeholder="Nom">
                        @error('user.nom') 
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="text-red-700 text-sm">{{ $message }}</span> </p>                            
                        @enderror
                    </div>
                    <div class="w-full p-2">
                        <label for="email" class="block mb-2 text-sm font-mediu">Adresse Email</label>
                        <input type="email" wire:model="user.email" id="email" class="bg-white border border-slate-500 text-slate-900 placeholder-slate-700 text-sm rounded-lg focus:ring-slate-500 focus:border-slate-500 block w-full p-2.5 dark:bg-slate-100 dark:border-slate-400" placeholder="Adresse Email">
                        @error('user.email') 
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="text-red-700 text-sm">{{ $message }}</span> </p>                            
                        @enderror
                    </div>
                    <div class="w-full p-2">
                        <label for="phone" class="block mb-2 text-sm font-mediu">Téléphone</label>
                        <input type="phone" wire:model="user.phone" id="text" class="bg-white border border-slate-500 text-slate-900 placeholder-slate-700 text-sm rounded-lg focus:ring-slate-500 focus:border-slate-500 block w-full p-2.5 dark:bg-slate-100 dark:border-slate-400" placeholder="Numéro de téléphone">
                        @error('user.phone') 
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="text-red-700 text-sm">{{ $message }}</span> </p>                            
                        @enderror
                    </div>
                    <div class="w-full col-span-2 p-2">
                        <label for="role_id" class="block mb-2 text-sm font-medium ">Role</label>
                        <div wire:ignore>
                            <select id="role_id" wire:model="user.role_id" class="select2 bg-white border border-slate-500 text-slate-900 placeholder-slate-700 text-sm rounded-lg focus:ring-slate-500 focus:border-slate-500 block w-full p-2.5 dark:bg-slate-100 dark:border-slate-400">
                               @foreach($roles as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                               @endforeach
                            </select>
                        </div>                    
                        @error('user.role_id') 
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="text-red-700 text-sm">{{ $message }}</span> </p>                            
                        @enderror
                    </div>
                    <div class="w-full p-2">
                        <label for="password" class="block mb-2 text-sm font-mediu">Mot de passe</label>
                        <input type="password" id="password" wire:model="password" class="bg-white border border-slate-500 text-slate-900 placeholder-slate-700 text-sm rounded-lg focus:ring-slate-500 focus:border-slate-500 block w-full p-2.5 dark:bg-slate-100 dark:border-slate-400" placeholder="Mot de passe">
                        
                    </div>
                    <div class="w-full p-2">
                        <label for="password_confirmation" class="block mb-2 text-sm font-mediu">Confirmation mot de passe</label>
                        <input type="password" id="password_confirmation" wire:model="password_confirmation" class="bg-white border border-slate-500 text-slate-900 placeholder-slate-700 text-sm rounded-lg focus:ring-slate-500 focus:border-slate-500 block w-full p-2.5 dark:bg-slate-100 dark:border-slate-400" placeholder="Confirmation de mot de passe">
                        
                    </div>
                    <div class="col-span-2">
                        @error('password')
                            <span class="text-red-700 text-xs">{{ $message }}</span>
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
        @if($userToChange)
      
        <div id="popup-modal" tabindex="-1" class="fixed bg-slate-600/50 flex justify-center items-center top-0 left-0 right-0 z-1050   p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
            <div class="relative w-full h-screen max-w-md md:h-auto">
                <div class="relative bg-white rounded-lg shadow darkk:bg-gray-700">
                    <button type="button" wire:click="$set('userToChange', null)" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center darkk:hover:bg-gray-800 darkk:hover:text-white" data-modal-hide="popup-modal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Annuler</span>
                    </button>
                    <div class="p-6 text-center">
                        <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 darkk:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <h3 class="mb-5 text-lg font-normal text-gray-500 darkk:text-gray-400">
                            {{$text_confirmation}} 
                        </h3>
                        <button wire:click="confirmer()" data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 darkk:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                            Oui, Je suis sûr
                        </button>
                        <button wire:click="$set('userToChange', null)" data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 darkk:bg-gray-700 darkk:text-gray-300 darkk:border-gray-500 darkk:hover:text-white darkk:hover:bg-gray-600 darkk:focus:ring-gray-600">Non, Annuler</button>
                    </div>
                </div>
            </div>
        </div>
        @endif
        
       
    </div>
</div>

<script>
    $(document).ready(function () {
        Livewire.hook('message.received', (el, component) => {
            /* var $select = $('.select2').select2();
            $select.each(function(i,item){
                $(item).select2("destroy");
            }); */
            $('#role_id').select2();
            $('#role_id').on('change', function (e) {
                var data = $('#role_id').val();
                @this.set('user.role_id', data);
                console.log(data);
            });
        })
        
    });
</script>
