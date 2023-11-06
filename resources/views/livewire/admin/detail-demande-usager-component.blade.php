<div>
    <div class="">
        <!-- start main content section -->

       {{--  <div class="grid grid-cols-3 gap-3">
            <div class="panel-white rounded-md mt-4 shadow-xl border-gray-100 border-2 p-2">
                <table>
                    <tr>
                        <th class="text-left">Nom : </th>
                        <td class="py-2">{{ $demande->prenom . ' ' . $demande->nom }}</td>
                    </tr>
                    <tr>
                        <th class="text-left">Email : </th>
                        <td class="py-2">{{ $demande->email }}</td>
                    </tr>
                    <tr>
                        <th class="text-left">Téléphone: </th>
                        <td class="py-2">{{ $demande->telephone }}</td>
                    </tr>
                    <tr>
                        <th class="text-left">Adresse : </th>
                        <td class="py-2">{{ $demande->adresse_residence }}</td>
                    </tr>
                </table>
            </div>
            <div class="panel-white rounded-md mt-4 shadow-xl border-gray-100 border-2 p-2">
            </div>
            <div class="panel-white rounded-md mt-4 shadow-xl border-gray-100 border-2 p-4 ">
                @if (Auth::user()->role->code == 'superviseur' || !empty($current_agent_demande))
                    @if ($current_agent_demande && $current_agent_demande->acceptee == 0)
                        <div class="h-full flex flex-col justify-center">
                            <div class="text-center">
                                Cette demande vous a été affecté, acceptez-vous traiter cette demande?
                            </div>
                            <div class="flex justify-around mt-2">
                                <button class="btn btn-outline-success " wire:click="show_modal_acceptation(1)">
                                    Accepter ? </button>
                                <button class="btn btn-outline-danger " wire:click="show_modal_acceptation(-1)"> Ne pas
                                    accepter ? </button>
                            </div>
                        </div>
                    @else
                        <table>
                            <tr>
                                <th class="text-left">Traitement : </th>
                                <td class="p-2">
                                    {{ !isset($demande->agent_traitement->user) ? 'Aucun' : $demande->agent_traitement->user->name }}
                                </td>
                                <td>
                                    <span
                                        class="badge bg-{{ $demande->agent_traitement->acceptee == 0 ? 'primary' : ($demande->agent_traitement->terminee == 0 ? 'warning' : 'success') }}">
                                        {{ $demande->agent_traitement->acceptee == 0 ? 'En attente' : ($demande->agent_traitement->terminee == 0 ? 'En cours' : 'Terminé') }}
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-left">Dépôt : </th>
                                <td class="p-2">
                                    {{ !isset($demande->agent_depot->user) ? 'Aucun' : $demande->agent_depot->user->name }}
                                </td>
                                <td>
                                    <span
                                        class="badge bg-{{ $demande->agent_depot->acceptee == 0 ? 'primary' : ($demande->agent_depot->terminee == 0 ? 'warning' : 'success') }}">
                                        {{ $demande->agent_depot->acceptee == 0 ? 'En attente' : ($demande->agent_depot->terminee == 0 ? 'En cours' : 'Terminé') }}
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-left">Livraison : </th>
                                <td class="p-2">
                                    {{ !isset($demande->agent_livraison->user) ? 'Aucun' : $demande->agent_livraison->user->name }}
                                </td>
                                <td>
                                    <span
                                        class="badge bg-{{ $demande->agent_livraison->acceptee == 0 ? 'primary' : ($demande->agent_livraison->terminee == 0 ? 'warning' : 'success') }}">
                                        {{ $demande->agent_livraison->acceptee == 0 ? 'En attente' : ($demande->agent_livraison->terminee == 0 ? 'En cours' : 'Terminé') }}
                                    </span>
                                </td>
                            </tr>
                        </table>
                    @endif

                    @if (Auth::user()->role->code == 'superviseur')
                        <button type="button" wire:click="$set('show_modal_agents', true)"
                            class="btn btn-warning btn-sm mt-2 float-right">Modifier</button>
                    @endif
                @endif
            </div>
        </div> --}}
        <div class="grid grid-cols-2 gap-4 mt-2">
            
            <div class="panel panel-white">
                <div class="mb-5">
                    <h5 class="text-lg font-semibold dark:text-white-light">Documents</h5>
                    <div class="mx-auto max-w-[900px]">
                        @foreach ($demande->documents as $key => $item)
                        <div class=" bg-slate-200 p-4 m-2 rounded-lg">
                            @if (empty($item->doc_url) || $doc_to_edit == $item->id)
                            <p class="text-lg font-bold">{{$item->name}}</p>

                            <div class="relative mt-4">
                                <label title="Click to upload" for="button_upload{{$key}}" class="cursor-pointer flex items-center gap-4 px-6 py-4 before:border-gray-400/60 hover:before:border-gray-300 group dark:before:bg-darker dark:hover:before:border-gray-500 before:bg-gray-100 dark:before:border-gray-600 before:absolute before:inset-0 before:rounded-3xl before:border before:border-dashed before:transition-transform before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95">
                                    <div class="w-max relative">
                                        <img class="w-6" src="https://www.svgrepo.com/show/485545/upload-cicle.svg" alt="file upload icon" width="512" height="512">
                                    </div>
                                    <div class="relative">
                                        <span class="block text-base font-semibold relative text-blue-900 dark:text-white group-hover:text-blue-500">
                                            Charger un fichier <i>(Max 2MB)</i>
                                        </span>
                                        
                                    </div>
                                   </label>
                                  <input hidden="" type="file" name="button_upload{{$key}}" wire:model="files.{{ $key }}" {{-- wire:change="upload_file( {{$item->id}}, {{$key}})" --}} id="button_upload{{$key}}">
                            </div>
                            @else
                                <div class="bg-slate-50 rounded-md px-4 py-2 flex justify-between">
                                    <div class="flex items-center">
                                        <div class="grid h-8 w-8 place-content-center rounded-md border border-white-dark/20 dark:border-[#191e3a]">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.5" d="M16 4.00195C18.175 4.01406 19.3529 4.11051 20.1213 4.87889C21 5.75757 21 7.17179 21 10.0002V16.0002C21 18.8286 21 20.2429 20.1213 21.1215C19.2426 22.0002 17.8284 22.0002 15 22.0002H9C6.17157 22.0002 4.75736 22.0002 3.87868 21.1215C3 20.2429 3 18.8286 3 16.0002V10.0002C3 7.17179 3 5.75757 3.87868 4.87889C4.64706 4.11051 5.82497 4.01406 8 4.00195" stroke="currentColor" stroke-width="1.5"></path>
                                                <path d="M8 14H16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                                <path d="M7 10.5H17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                                <path d="M9 17.5H15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                                <path d="M8 3.5C8 2.67157 8.67157 2 9.5 2H14.5C15.3284 2 16 2.67157 16 3.5V4.5C16 5.32843 15.3284 6 14.5 6H9.5C8.67157 6 8 5.32843 8 4.5V3.5Z" stroke="currentColor" stroke-width="1.5"></path>
                                            </svg>
                                        </div>
                                        <p class="ml-2 font-bold">{{$item->name}}</p>
                                    </div>
                                    <div class="flex">
                                        <a href="{{asset('storage/'.$item->doc_url)}}" target="_blank" class="btn btn-primary btn-sm mr-2">Consulter</a>
                                        <button type="button" class="btn btn-warning btn-sm" wire:click="$set('doc_to_edit', {{$item->id}})">Mettre à jour</button>
                                    </div>
                                </div>
                            @endif
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

