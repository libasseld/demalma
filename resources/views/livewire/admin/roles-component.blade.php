<div>
    <div class="">
        <!-- start main content section -->

        <div>
            <div class="panel">


                @if ($showform == false)
                    <div class="dataTable-wrapper dataTable-loading no-footer searchable fixed-columns">
                        <div class="dataTable-top">
                            <div class="w-full flex justify-between items-center">
                                <h5 class="text-lg font-semibold dark:text-white-light  md:mb-0">Gestion des utilisateurs
                                </h5>
                                <button wire:click="$set('showform',true)" class="btn btn-dark ">Nouvel
                                    utilisateur</button>
                            </div>


                        </div>
                        <div class="dataTable-container">
                            <table id="tableStripe" class="table-striped dataTable-table">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Code</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->code }}</td>
                                            <td>
                                                <div class="flex">
                                                    <button class="text-rose-500 text-center" aria-label="Modifier"
                                                        wire:click="edit({{ $item->id }})">
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
                        <h5 class="text-lg font-semibold dark:text-white-light">Gestion des roles</h5>

                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6" >

                        <div class="w-full p-2 col-span-2 lg:col-span-4">
                            <label for="name" class="block mb-2 text-sm font-mediu">Libellé</label>
                            <input type="text" wire:model="role.name" id="name"
                                class="bg-white border border-slate-500 text-slate-900 placeholder-slate-700 text-sm rounded-lg focus:ring-slate-500 focus:border-slate-500 block w-full p-2.5 dark:bg-slate-100 dark:border-slate-400"
                                placeholder="Libellé">
                            @error('role.name')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="text-red-700 text-sm">{{ $message }}</span> </p>
                            @enderror
                        </div>
                        <h5 class="text-lg font-semibold dark:text-white-light col-span-2 lg:col-span-4 text-center">Gestion des permissions</h5>

                        @foreach($permissions_categories as $item)
                            <div class="panel pb-12 dark:shadow-dark">
                                <div class="relative bottom-5 left-0 w-full">
                                    <div class="mt-2 flex items-center justify-between">
                                        <ul class="font-semibold">
                                        
                                            <li class="py-[5px]">
                                                <div type="button" >
                                                

                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="relative -top-1 inline h-5 w-5 text-primary ltr:mr-2 rtl:ml-2">
                                                        <path opacity="0.5" d="M18 10L13 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                                        <path d="M2 6.94975C2 6.06722 2 5.62595 2.06935 5.25839C2.37464 3.64031 3.64031 2.37464 5.25839 2.06935C5.62595 2 6.06722 2 6.94975 2C7.33642 2 7.52976 2 7.71557 2.01738C8.51665 2.09229 9.27652 2.40704 9.89594 2.92051C10.0396 3.03961 10.1763 3.17633 10.4497 3.44975L11 4C11.8158 4.81578 12.2237 5.22367 12.7121 5.49543C12.9804 5.64471 13.2651 5.7626 13.5604 5.84678C14.0979 6 14.6747 6 15.8284 6H16.2021C18.8345 6 20.1506 6 21.0062 6.76946C21.0849 6.84024 21.1598 6.91514 21.2305 6.99383C22 7.84935 22 9.16554 22 11.7979V14C22 17.7712 22 19.6569 20.8284 20.8284C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V6.94975Z" stroke="currentColor" stroke-width="1.5"></path>
                                                    </svg>
                                                    {{$item->name}}
                                                </div>
                                                <ul class="ltr:pl-4 rtl:pr-14" >
                                                    @foreach($item->permissions as $subitem)
                                                    <li class="py-[5px]">
                                                        <label class="flex items-center cursor-pointer">
                                                             <input type="checkbox"  value="{{ $subitem->id }}" wire:model="selectedPermissions" class="form-checkbox" @if(in_array($subitem->id, $selectedPermissions)) checked  @endif />
                                                             <span class=" text-white-dark">{{$subitem->name}}</span>
                                                         </label>
                                                     </li>
                                                    @endforeach
                                                    
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        @endforeach


                        <div class="col-span-2 lg:col-span-4 flex justify-end mt-2">
                            <button type="button" wire:click="cancel"
                                class="btn py-2 px-4 bg-red-500 text-slate-50 mr-4 ">Annuler</button>
                            <button type="button" wire:click="save"
                                class="btn py-2 px-4 bg-slate-800 text-slate-50 ">Enregistrer</button>


                        </div>
                    </div>

                @endif
            </div>


        </div>
        @if ($roleToChange)
            <div id="popup-modal" tabindex="-1"
                class="fixed bg-slate-600/50 flex justify-center items-center top-0 left-0 right-0 z-1050   p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                <div class="relative w-full h-screen max-w-md md:h-auto">
                    <div class="relative bg-white rounded-lg shadow darkk:bg-gray-700">
                        <button type="button" wire:click="$set('roleToChange', null)"
                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center darkk:hover:bg-gray-800 darkk:hover:text-white"
                            data-modal-hide="popup-modal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Annuler</span>
                        </button>
                        <div class="p-6 text-center">
                            <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 darkk:text-gray-200"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <h3 class="mb-5 text-lg font-normal text-gray-500 darkk:text-gray-400">
                                {{ $text_confirmation }}
                            </h3>
                            <button wire:click="confirmer()" data-modal-hide="popup-modal" type="button"
                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 darkk:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                Oui, Je suis sûr
                            </button>
                            <button wire:click="$set('roleToChange', null)" data-modal-hide="popup-modal"
                                type="button"
                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 darkk:bg-gray-700 darkk:text-gray-300 darkk:border-gray-500 darkk:hover:text-white darkk:hover:bg-gray-600 darkk:focus:ring-gray-600">Non,
                                Annuler</button>
                        </div>
                    </div>
                </div>
            </div>
        @endif


    </div>
</div>

<script>
    $(document).ready(function() {
        Livewire.hook('message.received', (el, component) => {
            /* var $select = $('.select2').select2();
            $select.each(function(i,item){
                $(item).select2("destroy");
            }); */
            $('#role_id').select2();
            $('#role_id').on('change', function(e) {
                var data = $('#role_id').val();
                @this.set('role.role_id', data);
                console.log(data);
            });
        })

    });
</script>
