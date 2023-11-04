<div>
    <div class="">
        <!-- start main content section -->
        
        <div class="grid grid-cols-3 gap-3">
            <div class="panel-white rounded-md mt-4 shadow-xl border-gray-100 border-2 p-2">
                <table>
                    <tr>
                        <th class="text-left">Nom : </th>
                        <td class="py-2">{{$demande->prenom." ".$demande->nom}}</td>
                    </tr>
                    <tr>
                        <th class="text-left">Email : </th>
                        <td class="py-2">{{$demande->email}}</td>
                    </tr>
                    <tr>
                        <th class="text-left">Téléphone: </th>
                        <td class="py-2">{{$demande->telephone}}</td>
                    </tr>
                    <tr>
                        <th class="text-left">Adresse : </th>
                        <td class="py-2">{{$demande->adresse_residence}}</td>
                    </tr>
                </table>
            </div>
            <div class="panel-white rounded-md mt-4 shadow-xl border-gray-100 border-2 p-2">
            </div>
            <div class="panel-white rounded-md mt-4 shadow-xl border-gray-100 border-2 p-2">
                <table>
                    <tr>
                        <th>Agent de traitement</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Agent de dépôt</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Agent de livraison</th>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4 mt-2">
            <div class="panel panel-white">
                <h5 class="text-lg font-semibold dark:text-white-light">Notes</h5>
            </div>
            <div class="panel panel-white">
                <div class="mb-5">
                    <h5 class="text-lg font-semibold dark:text-white-light">Historique</h5>
                    <div class="mx-auto max-w-[900px]">
                        <div class="flex">
                            <p class="min-w-[58px] max-w-[100px] py-2.5 text-base font-semibold text-[#3b3f5c] dark:text-white-light">10:00</p>
                            <div class="relative before:absolute before:left-1/2 before:top-[15px] before:h-2.5 before:w-2.5 before:-translate-x-1/2 before:rounded-full before:border-2 before:border-primary after:absolute after:left-1/2 after:top-[25px] after:-bottom-[15px] after:h-auto after:w-0 after:-translate-x-1/2 after:rounded-full after:border-l-2 after:border-primary"></div>
                            <div class="self-center p-2.5 ltr:ml-2.5 rtl:ml-2.5 rtl:ltr:mr-2.5">
                                <p class="text-[13px] font-semibold text-[#3b3f5c] dark:text-white-light">Updated Server Logs</p>
                                <p class="min-w-[100px] max-w-[100px] self-center text-xs font-bold text-white-dark">25 mins ago</p>
                            </div>
                        </div>
                        <div class="flex">
                            <p class="min-w-[58px] max-w-[100px] py-2.5 text-base font-semibold text-[#3b3f5c] dark:text-white-light">12:45</p>
                            <div class="relative before:absolute before:left-1/2 before:top-[15px] before:h-2.5 before:w-2.5 before:-translate-x-1/2 before:rounded-full before:border-2 before:border-secondary after:absolute after:left-1/2 after:top-[25px] after:-bottom-[15px] after:h-auto after:w-0 after:-translate-x-1/2 after:rounded-full after:border-l-2 after:border-secondary"></div>
                            <div class="self-center p-2.5 ltr:ml-2.5 rtl:ml-2.5 rtl:ltr:mr-2.5">
                                <p class="text-[13px] font-semibold text-[#3b3f5c] dark:text-white-light">Backup Files EOD</p>
                                <p class="min-w-[100px] max-w-[100px] self-center text-xs font-bold text-white-dark">2 hrs ago</p>
                            </div>
                        </div>
                        <div class="flex">
                            <p class="min-w-[58px] max-w-[100px] py-2.5 text-base font-semibold text-[#3b3f5c] dark:text-white-light">14:00</p>
                            <div class="relative before:absolute before:left-1/2 before:top-[15px] before:h-2.5 before:w-2.5 before:-translate-x-1/2 before:rounded-full before:border-2 before:border-success after:absolute after:left-1/2 after:top-[25px] after:-bottom-[15px] after:h-auto after:w-0 after:-translate-x-1/2 after:rounded-full after:border-l-2 after:border-success"></div>
                            <div class="self-center p-2.5 ltr:ml-2.5 rtl:ml-2.5 rtl:ltr:mr-2.5">
                                <p class="text-[13px] font-semibold text-[#3b3f5c] dark:text-white-light">Send Mail to HR and Admin</p>
                                <p class="min-w-[100px] max-w-[100px] self-center text-xs font-bold text-white-dark">4 hrs ago</p>
                            </div>
                        </div>
                        <div class="flex">
                            <p class="min-w-[58px] max-w-[100px] py-2.5 text-base font-semibold text-[#3b3f5c] dark:text-white-light">16:00</p>
                            <div class="relative before:absolute before:left-1/2 before:top-[15px] before:h-2.5 before:w-2.5 before:-translate-x-1/2 before:rounded-full before:border-2 before:border-danger after:absolute after:left-1/2 after:top-[25px] after:-bottom-[15px] after:h-auto after:w-0 after:-translate-x-1/2 after:rounded-full after:border-l-2 after:border-danger"></div>
                            <div class="self-center p-2.5 ltr:ml-2.5 rtl:ml-2.5 rtl:ltr:mr-2.5">
                                <p class="text-[13px] font-semibold text-[#3b3f5c] dark:text-white-light">
                                    Conference call with Marketing Manager.
                                </p>
                                <p class="min-w-[100px] max-w-[100px] self-center text-xs font-bold text-white-dark">6 hrs ago</p>
                            </div>
                        </div>
                        <div class="flex">
                            <p class="min-w-[58px] max-w-[100px] py-2.5 text-base font-semibold text-[#3b3f5c] dark:text-white-light">17:00</p>
                            <div class="relative before:absolute before:left-1/2 before:top-[15px] before:h-2.5 before:w-2.5 before:-translate-x-1/2 before:rounded-full before:border-2 before:border-warning after:absolute after:left-1/2 after:top-[25px] after:-bottom-[15px] after:h-auto after:w-0 after:-translate-x-1/2 after:rounded-full after:border-l-2 after:border-warning"></div>
                            <div class="self-center p-2.5 ltr:ml-2.5 rtl:ml-2.5 rtl:ltr:mr-2.5">
                                <p class="text-[13px] font-semibold text-[#3b3f5c] dark:text-white-light">
                                    Collected documents from <a href="javascript:void(0);">Sara</a>
                                </p>
                                <p class="min-w-[100px] max-w-[100px] self-center text-xs font-bold text-white-dark">9 hrs ago</p>
                            </div>
                        </div>
                        <div class="flex">
                            <p class="min-w-[58px] max-w-[100px] py-2.5 text-base font-semibold text-[#3b3f5c] dark:text-white-light">16:00</p>
                            <div class="relative before:absolute before:left-1/2 before:top-[15px] before:h-2.5 before:w-2.5 before:-translate-x-1/2 before:rounded-full before:border-2 before:border-info"></div>
                            <div class="self-center p-2.5 ltr:ml-2.5 rtl:ml-2.5 rtl:ltr:mr-2.5">
                                <p class="text-[13px] font-semibold text-[#3b3f5c] dark:text-white-light">Server rebooted successfully</p>
                                <p class="min-w-[100px] max-w-[100px] self-center text-xs font-bold text-white-dark">8 hrs ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>