<div>
    <div class="">
        <!-- start main content section -->

        <div class="grid grid-cols-3 gap-3">
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
                @if (in_array(Auth::user()->role->code, ['superviseur', 'admin']) || !empty($current_agent_demande))
                    @if (isset($current_agent_demande->acceptee) && $current_agent_demande->acceptee == 0)
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
                                    @if ($demande->agent_traitement)
                                    <span class="badge bg-{{ $demande->agent_traitement->acceptee == 0 ? 'primary' : ($demande->agent_traitement->terminee == 0 ? 'warning' : 'success') }}">
                                        {{ $demande->agent_traitement->acceptee == 0 ? 'En attente' : ($demande->agent_traitement->terminee == 0 ? 'En cours' : 'Terminé') }}
                                    </span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th class="text-left">Dépôt : </th>
                                <td class="p-2">
                                    {{ !isset($demande->agent_depot->user) ? 'Aucun' : $demande->agent_depot->user->name }}
                                </td>
                                <td> 
                                    @if ($demande->agent_depot)
                                    <span class="badge bg-{{ $demande->agent_depot->acceptee == 0 ? 'primary' : ($demande->agent_depot->terminee == 0 ? 'warning' : 'success') }}">
                                        {{ $demande->agent_depot->acceptee == 0 ? 'En attente' : ($demande->agent_depot->terminee == 0 ? 'En cours' : 'Terminé') }}
                                    </span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th class="text-left">Livraison : </th>
                                <td class="p-2">
                                    {{ !isset($demande->agent_livraison->user) ? 'Aucun' : $demande->agent_livraison->user->name }}
                                </td>
                                <td>
                                    @if ($demande->agent_livraison)
                                    <span class="badge bg-{{ $demande->agent_livraison->acceptee == 0 ? 'primary' : ($demande->agent_livraison->terminee == 0 ? 'warning' : 'success') }}">
                                        {{ $demande->agent_livraison->acceptee == 0 ? 'En attente' : ($demande->agent_livraison->terminee == 0 ? 'En cours' : 'Terminé') }}
                                    </span>
                                    @endif
                                </td>
                            </tr>
                        </table>
                    @endif

                    @if (in_array(Auth::user()->role->code, ['superviseur', 'admin']))
                        <button type="button" wire:click="$set('show_modal_agents', true)"
                            class="btn btn-warning btn-sm mt-2 float-right">Modifier</button>
                    @endif
                @endif
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4 mt-2">
            <div class="panel panel-white">
                <div>

                    <div class="bg-pink-100 p-4 rounded-md">
                        <h3 class="text-xl font-semibold dark:text-white-light">Notes initiales : </h3>
                        <i>{{ $demande->note }}</i>
                    </div>
                    <div class="bg-gray-100 p-4 rounded-md mt-4">
                        <h3 class="text-xl font-semibold dark:text-white-light">Autres notes : </h3>
                        @foreach ($demande->notes as $item)
                            <div class="mb-4 bg-white rounded-lg p-2 shadow-md ">
                                <div class="flex justify-between border-b border-pink-700">
                                    <span>{{ $item->user->name }}</span>
                                    <span>{{ $item->created_at }}</span>

                                </div>
                                <div class="mt-2 ">
                                    <i>{{ $item->notes }}</i>
                                </div>
                                <hr class="mt-2">

                            </div>
                        @endforeach

                        <form action="" wire:submit.prevent="addNote" class="mt-4">
                            <h5 class="text-lg font-bold">Nouvelle note</h5>
                            <div>
                                <textarea class="form-textarea w-full" wire:model="new_note"></textarea>
                            </div>
                            @error('new_note')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="text-red-700 text-sm">{{ $message }}</span> </p>
                            @enderror
                            <button type="submit" class="btn btn-primary w-full btn-block">Ajouter</button>
                        </form>
                    </div>
                </div>


            </div>
            <div>
                <div class="panel mb-4">
                    @foreach ($demande->documents as $item)
                    @if (!empty($item->doc_url))
                    <div class="bg-slate-50 rounded-md px-4 py-2 flex justify-between mt-2">
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
                            @if($item->etat == 0)
                                <button type="button" class="btn btn-success btn-sm" wire:click="$set('doc_to_approve', {{$item->id}})">Approuver</button>
                            @endif
                        </div>
                    </div>
                    @else
                    <div class="bg-slate-50 rounded-md px-4 py-2 flex justify-between mt-2">
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
                            <span class="badge bg-warning">Document non transmis</span>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
                            <div class="panel panel-white">
                <div class="mb-5">
                    <h5 class="text-lg font-semibold dark:text-white-light">Historique</h5>
                    <div class="mx-auto max-w-[900px]">
                        <div class="flex">
                            <p
                                class="min-w-[58px] max-w-[100px] py-2.5 text-base font-semibold text-[#3b3f5c] dark:text-white-light">
                                10:00</p>
                            <div
                                class="relative before:absolute before:left-1/2 before:top-[15px] before:h-2.5 before:w-2.5 before:-translate-x-1/2 before:rounded-full before:border-2 before:border-primary after:absolute after:left-1/2 after:top-[25px] after:-bottom-[15px] after:h-auto after:w-0 after:-translate-x-1/2 after:rounded-full after:border-l-2 after:border-primary">
                            </div>
                            <div class="self-center p-2.5 ltr:ml-2.5 rtl:ml-2.5 rtl:ltr:mr-2.5">
                                <p class="text-[13px] font-semibold text-[#3b3f5c] dark:text-white-light">Updated Server
                                    Logs</p>
                                <p class="min-w-[100px] max-w-[100px] self-center text-xs font-bold text-white-dark">25
                                    mins ago</p>
                            </div>
                        </div>
                        <div class="flex">
                            <p
                                class="min-w-[58px] max-w-[100px] py-2.5 text-base font-semibold text-[#3b3f5c] dark:text-white-light">
                                12:45</p>
                            <div
                                class="relative before:absolute before:left-1/2 before:top-[15px] before:h-2.5 before:w-2.5 before:-translate-x-1/2 before:rounded-full before:border-2 before:border-secondary after:absolute after:left-1/2 after:top-[25px] after:-bottom-[15px] after:h-auto after:w-0 after:-translate-x-1/2 after:rounded-full after:border-l-2 after:border-secondary">
                            </div>
                            <div class="self-center p-2.5 ltr:ml-2.5 rtl:ml-2.5 rtl:ltr:mr-2.5">
                                <p class="text-[13px] font-semibold text-[#3b3f5c] dark:text-white-light">Backup Files
                                    EOD</p>
                                <p class="min-w-[100px] max-w-[100px] self-center text-xs font-bold text-white-dark">2
                                    hrs ago</p>
                            </div>
                        </div>
                        <div class="flex">
                            <p
                                class="min-w-[58px] max-w-[100px] py-2.5 text-base font-semibold text-[#3b3f5c] dark:text-white-light">
                                14:00</p>
                            <div
                                class="relative before:absolute before:left-1/2 before:top-[15px] before:h-2.5 before:w-2.5 before:-translate-x-1/2 before:rounded-full before:border-2 before:border-success after:absolute after:left-1/2 after:top-[25px] after:-bottom-[15px] after:h-auto after:w-0 after:-translate-x-1/2 after:rounded-full after:border-l-2 after:border-success">
                            </div>
                            <div class="self-center p-2.5 ltr:ml-2.5 rtl:ml-2.5 rtl:ltr:mr-2.5">
                                <p class="text-[13px] font-semibold text-[#3b3f5c] dark:text-white-light">Send Mail to
                                    HR and Admin</p>
                                <p class="min-w-[100px] max-w-[100px] self-center text-xs font-bold text-white-dark">4
                                    hrs ago</p>
                            </div>
                        </div>
                        <div class="flex">
                            <p
                                class="min-w-[58px] max-w-[100px] py-2.5 text-base font-semibold text-[#3b3f5c] dark:text-white-light">
                                16:00</p>
                            <div
                                class="relative before:absolute before:left-1/2 before:top-[15px] before:h-2.5 before:w-2.5 before:-translate-x-1/2 before:rounded-full before:border-2 before:border-danger after:absolute after:left-1/2 after:top-[25px] after:-bottom-[15px] after:h-auto after:w-0 after:-translate-x-1/2 after:rounded-full after:border-l-2 after:border-danger">
                            </div>
                            <div class="self-center p-2.5 ltr:ml-2.5 rtl:ml-2.5 rtl:ltr:mr-2.5">
                                <p class="text-[13px] font-semibold text-[#3b3f5c] dark:text-white-light">
                                    Conference call with Marketing Manager.
                                </p>
                                <p class="min-w-[100px] max-w-[100px] self-center text-xs font-bold text-white-dark">6
                                    hrs ago</p>
                            </div>
                        </div>
                        <div class="flex">
                            <p
                                class="min-w-[58px] max-w-[100px] py-2.5 text-base font-semibold text-[#3b3f5c] dark:text-white-light">
                                17:00</p>
                            <div
                                class="relative before:absolute before:left-1/2 before:top-[15px] before:h-2.5 before:w-2.5 before:-translate-x-1/2 before:rounded-full before:border-2 before:border-warning after:absolute after:left-1/2 after:top-[25px] after:-bottom-[15px] after:h-auto after:w-0 after:-translate-x-1/2 after:rounded-full after:border-l-2 after:border-warning">
                            </div>
                            <div class="self-center p-2.5 ltr:ml-2.5 rtl:ml-2.5 rtl:ltr:mr-2.5">
                                <p class="text-[13px] font-semibold text-[#3b3f5c] dark:text-white-light">
                                    Collected documents from <a href="javascript:void(0);">Sara</a>
                                </p>
                                <p class="min-w-[100px] max-w-[100px] self-center text-xs font-bold text-white-dark">9
                                    hrs ago</p>
                            </div>
                        </div>
                        <div class="flex">
                            <p
                                class="min-w-[58px] max-w-[100px] py-2.5 text-base font-semibold text-[#3b3f5c] dark:text-white-light">
                                16:00</p>
                            <div
                                class="relative before:absolute before:left-1/2 before:top-[15px] before:h-2.5 before:w-2.5 before:-translate-x-1/2 before:rounded-full before:border-2 before:border-info">
                            </div>
                            <div class="self-center p-2.5 ltr:ml-2.5 rtl:ml-2.5 rtl:ltr:mr-2.5">
                                <p class="text-[13px] font-semibold text-[#3b3f5c] dark:text-white-light">Server
                                    rebooted successfully</p>
                                <p class="min-w-[100px] max-w-[100px] self-center text-xs font-bold text-white-dark">8
                                    hrs ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

        </div>
    </div>
    @if ($show_modal_agents)
        <div class="fixed inset-0 z-[999] hidden overflow-y-auto bg-[black]/60 !block"
            :class="open & amp; & amp;
            '!block'">
            <div class="flex min-h-screen items-start justify-center px-4">
                <div x-show="open" x-transition="" x-transition.duration.300=""
                    class="panel my-8 w-full max-w-lg overflow-hidden rounded-lg border-0 p-0">
                    <div class="flex items-center justify-between bg-[#fbfbfb] px-5 py-3 dark:bg-[#121c2c]">
                        <div class="text-lg font-bold">Gestionnaires de la demande</div>
                        <button type="button" class="text-white-dark hover:text-dark"
                            wire:click="$set('show_modal_agents', false)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                    <div class="p-5">
                        <div class="text-base font-medium text-[#1f2937] dark:text-white-dark/70">
                            <div class="mt-4" wire:ignore>
                                <label for="agent_traitement_id">Agent de traitement</label>
                                <select id="agent_traitement_id" wire:model="agent_traitement_id"
                                    class="form-select text-white-dark select-2" required="">
                                    <option value="">Sélectionner un agent</option>
                                    @foreach ($agents_traitements as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-4" wire:ignore>
                                <label for="agent_depot_id">Agent de depot</label>
                                <select id="agent_depot_id" wire:model="agent_depot_id"
                                    class="form-select text-white-dark select-2" required="">
                                    <option value="">Sélectionner un agent</option>
                                    @foreach ($agents_depots as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-4" wire:ignore>
                                <label for="agent_livraison_id">Agent de livraison</label>
                                <select id="agent_livraison_id" wire:model="agent_livraison_id"
                                    class="form-select text-white-dark select-2" required="">
                                    <option value="">Sélectionner un agent</option>
                                    @foreach ($agents_livraisons as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mt-8 flex items-center justify-end">
                            <button type="button" class="btn btn-outline-danger"
                                wire:click="$set('show_modal_agents', false)">Annuler</button>
                            <button type="button" class="btn btn-primary ltr:ml-4 rtl:mr-4"
                                wire:click="save_agents()">Enregistrer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if ($modal_acceptation)
        <div class="fixed inset-0 z-[999]  overflow-y-auto bg-[black]/60 !block" :class="open & amp; & amp;
        '!block'">
            <div class="flex min-h-screen items-start justify-center px-4" @click.self="open = false">
                <div
                    class="panel animate__animated animate__zoomInUp my-8 w-full max-w-lg overflow-hidden rounded-lg border-0 p-0">
                    <div class="flex items-center justify-between bg-[#fbfbfb] px-5 py-3 dark:bg-[#121c2c]">
                        <h5 class="text-lg font-bold">Acceptation de la demande</h5>
                        <button type="button" class="text-white-dark hover:text-dark"
                            wire:click="$set('modal_acceptation', false)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                    <div class="p-5">
                        <div class="text-base font-medium text-[#1f2937] dark:text-white-dark/70">
                            <p>
                                Vous êtes sur le point
                                <strong>{{ $value_accept == 1 ? " d'accepter " : 'de rejeter' }}</strong> cette demande.
                            </p>
                            <p>
                                <u>NB</u>: cette action est irreversible.
                            </p>
                        </div>
                        <div class="mt-8 flex items-center justify-end">
                            <button type="button" class="btn btn-danger ltr:ml-4 rtl:mr-4"
                                wire:click="$set('modal_acceptation', false)">Ferner</button>
                            @if ($value_accept == 1)
                                <button type="button" class="btn btn-success ltr:ml-4 rtl:mr-4"
                                    wire:click="save_acceptation">Accepter </button>
                            @else
                                <button type="button" class="btn btn-primary ltr:ml-4 rtl:mr-4"
                                    wire:click="save_acceptation">Ne pas accepter</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if ($doc_to_approve)
        <div class="fixed inset-0 z-[999]  overflow-y-auto bg-[black]/60 !block" :class="open & amp; & amp;
        '!block'">
            <div class="flex min-h-screen items-start justify-center px-4" @click.self="open = false">
                <div
                    class="panel animate__animated animate__zoomInUp my-8 w-full max-w-lg overflow-hidden rounded-lg border-0 p-0">
                    <div class="flex items-center justify-between bg-[#fbfbfb] px-5 py-3 dark:bg-[#121c2c]">
                        <h5 class="text-lg font-bold">Approbation document</h5>
                        <button type="button" class="text-white-dark hover:text-dark"
                            wire:click="$set('doc_to_approve', null)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                    <div class="p-5">
                        <div class="text-base font-medium text-[#1f2937] dark:text-white-dark/70">
                            <p>
                                Vous êtes sur le point d'approuver ce document.
                            </p>
                            <p>
                                <u>NB</u>: cette action est irreversible.
                            </p>
                        </div>
                        <div class="mt-8 flex items-center justify-end">
                            <button type="button" class="btn btn-danger ltr:ml-4 rtl:mr-4" wire:click="$set('doc_to_approve', null)">Ferner</button>
                            <button type="button" class="btn btn-success ltr:ml-4 rtl:mr-4" wire:click="save_approbation">Oui! Approuver </button>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
<script>
    $(document).ready(function() {


        Livewire.hook('message.processed', (el, component) => {
            /* $('#agent_traitement_id').select2();
            console.log("dddjjd")
            $('#agent_traitement_id').on('change', function(e) {
                var data = $('#agent_traitement_id').val();
                @this.set('role.agent_traitement_id', data);
                console.log(data);
            }); */
            $roles = ['traitement', 'depot', 'livraison'];
            $roles.forEach(element => {
                $(`#agent_${element}_id`).select2();
                console.log("dddjjd")
                $(`#agent_${element}_id`).on('change', function(e) {
                    var data = $(`#agent_${element}_id`).val();
                    @this.set(`agent_${element}_id`, data);
                    console.log(data);
                });
            });
        })

    });
</script>
