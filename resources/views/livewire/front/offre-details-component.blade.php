<div>
    <section class="section">
        <div class="container">
            <div class="text-center box-pageheader-1 box-pageheader-services">
                <span class=" btn btn-tag wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn; font-size:18px;padding:10px"> Service : {{$categorie->name}}</span>
                
                {{-- <p class="font-md color-grey-900 wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                    Transp’s roots are in Sea Freight! Whether it’s
                    full containers, consolidations, roll-on/roll-<br class="d-none d-lg-block">
                    off equipment or entire
                    projects, moving shipments by sea is our “flagship” service.
                </p> --}}
            </div>
        </div>
    </section>
    <div class="flex flex-col w-full p-0 mx-auto mb-12 border-pink-200 border-solid lg:w-4/5 lg:flex-row border-1 rounded-xl">
        <div class="w-full px-4 pb-4 border-r-4 border-opacity-100 border-none lg:border-solid lg:border-pink-700 left-card lg:w-1/3 bg-offre-left rounded-l-xl">
            <div>
                <img src="{{ asset($offre->image_url ? 'storage/' . $offre->image_url : 'storage/card-images/offre_profil.png') }}" class="m-auto h-36" alt="">
            </div>
            <div class="mt-2">
                <h6>Description :</h6>
                {!! $offre->description !!}
            </div>
            <div class="mt-2">
                <h6>Montant du service</h6>
                {{ $offre->montant }}
            </div>
            @if (!empty($offre->conditions))
            <div class="p-2 mt-2 text-red-600 bg-white">
              <h6>Conditions : </h6>
                <p class="italic font-bold ">
                  {{ $offre->conditions }}
                </p>
            </div>
            @endif
            <div class="mt-2">
                <h6>Documents à fournir :</h6>
                <ul>
                    @foreach ($offre->documents as $document)
                        <li class="text-xs">
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            {{$document->libelle}} (Document physique {{$document->obligatoire == 1 ? 'obligatoire' : 'facultatif'}})
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="w-full py-4 pl-5 pr-10 right-card lg:w-2/3 rounded-r-xl font-3xl">
            <h2 class="mt-0 mb-10 text-center color-brand-2 wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">{{$offre->designation}}</h2>
            <div class="w-full px-4">
                <form wire:submit.prevent='addDemande'>
                    <div class="row">
                      <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Prénom *" id="prenom" wire:model="prenom">
                          @error('prenom')
                              <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                          @enderror
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Nom *" id="nom" wire:model="nom">
                          @error('nom')
                              <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                          @enderror
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Adresse Email *" id="email" wire:model="email">
                          @error('email')
                              <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                          @enderror
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Numéro de Téléphone *" id="telephone" wire:model="telephone">
                          @error('telephone')
                              <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                          @enderror
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                          <select aria-placeholder="djddjj"  class="py-0 form-control" name="" id="pays_id" wire:model="pays_id">
                              <option value="">Sélectionner un pays *</option>
                              @foreach($pays as $item) 
                                <option value="{{$item->id}}">{{$item->name}}</option>
                              @endforeach
                          </select>
                          @error('pays_id')
                              <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                          @enderror
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Adresse de résidence *" id="adresse_residence" wire:model="adresse_residence">
                          @error('adresse_residence')
                              <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                          @enderror
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                          <label for="">La commune concernant la demande</label>
                          <input class="form-control" type="text" placeholder="Ex: Dakar plateau*" id="commune" wire:model="commune">
                          @error('commune')
                              <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                          @enderror
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                          <label for="">Quand souhaitez vous réaliser votre démarche?</label>
                          <select aria-placeholder=""  class="py-0 form-control" name="" id="demarrage" wire:model="demarrage">
                              @foreach($demarrage_demandes as $item) 
                                <option value="{{$item}}">{{$item}}</option>
                              @endforeach
                          </select>
                          @error('demarrage_demande')
                              <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                          @enderror
                        </div>
                      </div>
                     
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="">Souhaitez vous- nous en dire plus sur votre besoin?</label>
                          <textarea class="form-control" placeholder="Message / Note" rows="3" id="note" wire:model="note"> </textarea>
                          @error('note')
                              <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                          @enderror
                        </div>
                      </div>
                      <div class="justify-center col-md-12 col-sm-12">
                        <input class="w-full rounded-lg lg:w-auto btn btn-brand-2" type="submit" value="Envoyer la demande">
                        
                      </div>
                    </div>
                  </form>
            </div>
        </div>
    </div>
    @if (!empty($offre->conditions))
    <script>
      addEventListener("DOMContentLoaded", (event) => {
        let message  = @json($offre->conditions);
        setTimeout(() => {
          Swal.fire("Conditions de service", message, "warning");
        }, 1000);
      });
  </script>
    @endif
      
</div>
