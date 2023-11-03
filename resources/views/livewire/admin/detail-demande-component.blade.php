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
            </div>
        </div>
    </div>
</div>