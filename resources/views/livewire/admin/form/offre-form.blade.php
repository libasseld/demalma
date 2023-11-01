<div>
    <div class="panel">
        <form class="space-y-5" enctype="multipart/form-data">
            @csrf

            <div class="absolute z-40 inset-x-0" wire:loading.block wire:target="keyword">
                <div wire:loading.delay.longest class="w-full">
                    <div class="animate-pulse p-4">
                        <div class="py-1">
                            <div class="h-3 bg-gray-300 rounded w-5/6"></div>
                            <div class="mt-4 w-1/3">
                                <div class="grid grid-cols-3 gap-2">
                                    <div class="h-3 bg-gray-300 rounded col-span-1"></div>
                                    <div class="h-3 bg-gray-300 rounded col-span-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-4">
                <div>
                    <label for="offre.designation">Désignation</label>
                    <input id="offre.designation" type="text" placeholder="Nom du véhicule"
                        wire:model="offre.designation" class="form-input" />
                    @error('offre.designation')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>

               
                <div>
                    <label for="categorie_offre_id" class="block mb-2 text-sm font-medium ">Catégorie d'offre</label>
                    <div>
                        <select id="categorie_offre_id" wire:model="offre.categorie_offre_id"
                            class="select2 bg-white border border-slate-500 text-slate-900 placeholder-slate-700 text-sm rounded-lg focus:ring-slate-500 focus:border-slate-500 block w-full p-2.5 dark:bg-slate-100 dark:border-slate-400">
                            <option value="">Sélectionner un élément</option>
                            @foreach ($categorie_offres as $categorie_offre)
                                <option value="{{ $categorie_offre->id }}">{{ $categorie_offre->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('offre.categorie_offre_id')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                
               
                

                <div class="flex justify-between">
                    <div class="w-full mr-2">
                        <label for="offre.montant">Montant en F CFA</label>
                        <input id="offre.montant" type="number"
                            placeholder="Montant " wire:model="offre.montant"
                            class="form-input" />
                        @error('offre.montant')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                   
                </div>

            </div>
            <div>
                <label for="gridAddress1">Description</label>
                <div wire:ignore>
                    <textarea wire:model="offre.description" class="min-h-fit h-96 " name="description" id="description"></textarea>
                </div>
                @error('offre.description')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror

            </div>


           
            <div class="col-span-6 lg:col-span-2 flex items-center justify-center">
                <div class="mb-6">
                    <label class="block text-center" {{-- x-data="showImage()" --}}>
                        <span class="sr-only">Choisissez un fichier File</span>
                        @if ($image)
                            Photo de profile / Logo
                            <div class="flex justify-center">
                                @if($image->temporaryUrl())
                                    <div class="mb-1" >
                                        <img src="{{ $image->temporaryUrl() }}" id="preview" class="object-cover h-32 mt-2 w-60">
                                    </div>
                                @endif
                            </div>
                        @elseif($offre->image_url)
                            <div class="flex justify-center">

                                <div class="mb-1">
                                    <img src="{{ asset($offre->image_url ? 'storage/' . $offre->image_url : 'storage/card-images/offre_profil.png') }}"
                                        id="preview" class="object-cover h-32 mt-2 w-60">
                                </div>
                            </div>
                        @endif
                        <div class="mb-3">
                            <input type="file" class="hidden " wire:model="image" accept="image/jpg, image/jpeg, image/png" id="select-photo">
                            <label for="select-photo"
                                class="btn flex justify-center w-full text-sm font-bold mr-4 py-2 px-4 rounded-md border-0 font-semibold bg-blue-100 text-blue-900 hover:bg-blue-300">
                                Selectionner votre logo ou photo
                                <span wire:ignore><i data-feather="image" class="w-4 ml-2"></i></span>
                            </label>

                            <div wire:loading wire:target="images">Chargement...</div>
                            @error('images.*')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- <input type="file" name="image" @change="showPreview(event)"
                        class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                    <img> --}}
                    </label>
                    @error('image')
                        <div class="flex items-center text-sm text-red-600">
                            {{ $message }}

                        </div>
                    @enderror
                </div>
            </div>
            <div class="w-full">
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Libellé document</th>
                                <th>Type de document</th>
                                
                                <th class="text-center">Action </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($documents as $key => $item)
                           <tr>
                            <td class="whitespace-nowrap">{{$item['libelle']}}</td>
                            <td class="whitespace-nowrap {{ $item['obligatoire'] == 1 ? 'text-success' :  'text-danger' }}">{{$item['obligatoire']== 1 ?  'Obligatoire' : 'non obligatoire' }}</td>
                            <td>
                                <button type="button" wire:click="removeDocument({{$key}})" class="btn btn-danger "  x-tooltip="Supprimer">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="m-auto h-3 w-3">
                                        <path d="M20.5001 6H3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                        <path d="M18.8334 8.5L18.3735 15.3991C18.1965 18.054 18.108 19.3815 17.243 20.1907C16.378 21 15.0476 21 12.3868 21H11.6134C8.9526 21 7.6222 21 6.75719 20.1907C5.89218 19.3815 5.80368 18.054 5.62669 15.3991L5.16675 8.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                        <path opacity="0.5" d="M9.5 11L10 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                        <path opacity="0.5" d="M14.5 11L14 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                        <path opacity="0.5" d="M6.5 6C6.55588 6 6.58382 6 6.60915 5.99936C7.43259 5.97849 8.15902 5.45491 8.43922 4.68032C8.44784 4.65649 8.45667 4.62999 8.47434 4.57697L8.57143 4.28571C8.65431 4.03708 8.69575 3.91276 8.75071 3.8072C8.97001 3.38607 9.37574 3.09364 9.84461 3.01877C9.96213 3 10.0932 3 10.3553 3H13.6447C13.9068 3 14.0379 3 14.1554 3.01877C14.6243 3.09364 15.03 3.38607 15.2493 3.8072C15.3043 3.91276 15.3457 4.03708 15.4286 4.28571L15.5257 4.57697C15.5433 4.62992 15.5522 4.65651 15.5608 4.68032C15.841 5.45491 16.5674 5.97849 17.3909 5.99936C17.4162 6 17.4441 6 17.5 6" stroke="currentColor" stroke-width="1.5"></path>
                                    </svg>
                                </button>
                            </td>
                           </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="w-full flex-col">
                <div class="w-full flex">
                    <div class="w-3/6 px-2">
                        <label for="nom_document">Nom du document</label>
                        <input id="nom_document" type="text"
                            placeholder="Ex: Extrait de naissance" wire:model="nom_document"
                            class="form-input " />
                    </div>
                    <div class="w-2/6 px-2">
                        <label for="">Le document est-il obligatoire</label>
                        <select wire:model="document_obligatoire" class="form-input" id="type" name="type_vehicule">
                            <option value="1">Oui, c'est obligatoire</option>
                            <option value="0">Non, c'est pas obligatoire</option>
                            
                        </select>
                    </div>
                    <div class="w-1/6 flex justify-start items-end">
                        <button type="button" wire:click="addDocument" class="btn btn-primary h-10" class="h-8">
                            <span wire:ignore><i data-feather="plus" class="h-4"></i></span>
                        </button>
                    </div>
                            
                </div>
            </div>
            <div class="col-span-2 flex justify-end  mt-2">
                <button type="button" wire:click="save"
                    class="btn py-2 px-4 bg-slate-800 text-slate-50 ">Enregistrer</button>
            </div>
        </form>
    </div>
</div>
<script>
    $(document).ready(function() {
       /*  Livewire.hook('message.received', (el, component) => {

            $('#categorie_offre_id').select2();
            $('#categorie_offre_id').on('change', function(e) {
                var data = $('#categorie_offre_id').val();
                @this.set('offre.categorie_offre_id', data);
                console.log(data);
            });
        }) */

        ClassicEditor
            .create(document.querySelector('#description'))
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    @this.set('offre.description', editor.getData());
                })
            })
            .catch(error => {
                console.error(error);
            });
    });

    function showImage(type) {
        selectImage = document.querySelector("#select_photo_" + type);
        if (selectImage) {
            var src = URL.createObjectURL(selectImage.files[0]);
            var preview = document.getElementById("preview_" + type);
            console.log(preview);
            preview.src = src;
            preview.style.display = "block";
        }
        /* return {
            showPreview(event) {
                if (event.target.files.length > 0) {
                    var src = URL.createObjectURL(event.target.files[0]);
                    var preview = document.getElementById("preview_"+type);
                    preview.src = src;
                    preview.style.display = "block";
                }
            }
        } */
    }

    /*  document.querySelector("#select_photo_face").addEventListener("change", function(){
             selectImage =  document.querySelector("#select_photo_face");
             preview = document.getElementById('preview_face');
             preview.style.display = 'block';
             const [file] = selectImage.files
             console.log(file);
             if (file) {
                 preview.src = URL.createObjectURL(file)
             }
     }); */
    function resizeImage(file, maxWidth, maxHeight, maxSizeInMB, callback) {
        var img = new Image();

        img.onload = function() {
            var width = img.width;
            var height = img.height;

            // Vérifier si une réduction est nécessaire
            if (width > maxWidth || height > maxHeight) {
                var ratio = Math.min(maxWidth / width, maxHeight / height);
                width = width * ratio;
                height = height * ratio;
            }

            // Créer un canevas pour la nouvelle image
            var canvas = document.createElement('canvas');
            canvas.width = width;
            canvas.height = height;

            // Redimensionner l'image sur le canevas
            var ctx = canvas.getContext('2d');
            ctx.drawImage(img, 0, 0, width, height);

            // Convertir le canevas en une nouvelle image de données base64
            canvas.toBlob(function(blob) {
                // Vérifier la taille du blob
                if (blob.size > maxSizeInMB * 1024 * 1024) {
                    // L'image redimensionnée dépasse la taille maximale spécifiée
                    callback(null);
                } else {
                    // Convertir le blob en une nouvelle image de données base64
                    var reader = new FileReader();
                    reader.onloadend = function() {
                        var resizedDataUrl = reader.result;
                        callback(resizedDataUrl);
                    };
                    reader.readAsDataURL(blob);
                }
            }, 'image/jpeg');
        };

        img.src = URL.createObjectURL(file);
    }

    // Exemple d'utilisation
    

    function dataURLtoFile(dataURL, filename) {
        var arr = dataURL.split(',');
        var mime = arr[0].match(/:(.*?);/)[1];
        var bstr = atob(arr[1]);
        var n = bstr.length;
        var u8arr = new Uint8Array(n);

        while (n--) {
            u8arr[n] = bstr.charCodeAt(n);
        }

        return new File([u8arr], filename, {
            type: mime
        });
    }
    /* var input = document.getElementById('inputFile');
    input.addEventListener('change', function(e) {
        var file = e.target.files[0];
        var maxWidth = 800; // Largeur maximale souhaitée
        var maxHeight = 600; // Hauteur maximale souhaitée
        var maxSizeInMB = 2; // Taille maximale en mégaoctets

        resizeImage(file, maxWidth, maxHeight, maxSizeInMB, function(resizedDataUrl) {
            if (resizedDataUrl) {
                var dataURL = "..."; // Votre URL base64 ici
                var filename = "image.jpg"; // Le nom de fichier souhaité

                var file = await dataURLtoFile(dataURL, filename);
                @this.upload('photo', file, (uploadedFilename) => {
                    // Success callback.
                }, () => {
                    // Error callback.
                }, (event) => {
                    // Progress callback.
                    // event.detail.progress contains a number between 1 and 100 as the upload progresses.
                })
                // Faire quelque chose avec l'image redimensionnée
                console.log(resizedDataUrl);
            } else {
                // L'image redimensionnée dépasse la taille maximale spécifiée
                console.log("L'image dépasse la taille maximale autorisée.");
            }
        });
    }); */
</script>
