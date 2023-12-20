<div class="ppb_wrapper hasbg withtopbar">
    <div class="page-loading " wire:loading.delay.longest>
        <div >
            <div class="loader "></div>
            <h2 data-text="Chargement en cours...">Chargement en cours...</h2>
        </div>
        
    </div>
    <div class="mt-20"></div>
    <div class="section bg-map bac d-block">
      <div class="container">
        <div class="box-newsletter">
          <h3 class="mb-20 color-brand-2 wow animate__animated animate__fadeIn">Contactez nous </h3>
          <div class="row">
            <div class="col-lg-7 mb-30">
              <div class="form-newsletter wow animate__animated animate__fadeIn">
                <form wire:submit.prevent="envoyer()" name="contact-form-get">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input class="form-control" type="text" placeholder="Nom *"  wire:model="name" id="name" required>
                        @error('name')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input class="form-control" type="text" placeholder="Email *" wire:model="email" id="email" required>
                        @error('email')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input class="form-control" type="text" placeholder="Téléphone *" wire:model="phone" id="phone">
                        @error('phone')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                      </div>
                    </div>
                    
                    <div class="col-md-12">
                      <div class="form-group">
                        <textarea class="form-control" placeholder="Message / Note" rows="5" wire:model="message" id="message" required></textarea>
                        @error('message')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                      </div>
                      
                    </div>
                    <div class="justify-center col-md-12">
                      <input class="rounded btn btn-brand-2" type="submit" value="Envoyer">
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-5 mb-30">
              <div class="d-flex box-newsletter-right">
                {{-- <div class="box-map-2 wow animate__animated animate__fadeIn">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3179.960389549842!2d-83.76408938441998!3d37.15364135542302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x884352a00e70879f%3A0x1ad06ed33b7003c!2sIangar!5e0!3m2!1svi!2s!4v1678013229780!5m2!1svi!2s" height="242" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div> --}}
                <ul class="list-info-footer">
                  <li class="wow animate__animated animate__fadeIn">
                    <div class="cardImage"><span class="icon-brand-1"><img src="{{asset('template-assets/imgs/page/homepage2/address.svg')}}" alt="Demalma"></span></div>
                    <div class="cardInfo">
                      <h6 class="font-sm-bold color-grey-900">Address</h6>
                      <p class="font-sm color-grey-900">3, rue assane ndoye x Berenger Feraud, Dakar</p>
                    </div>
                  </li>
                  <li class="wow animate__animated animate__fadeIn">
                    <div class="cardImage"><span class="icon-brand-1"><img src="{{asset('template-assets/imgs/page/homepage2/email.svg')}}" alt="Demalma"></span></div>
                    <div class="cardInfo">
                      <h6 class="font-sm-bold color-grey-900">Email</h6>
                      <p class="font-sm color-grey-900">contact@groupe-demalma.com</p>
                    </div>
                  </li>
                  <li class="wow animate__animated animate__fadeIn">
                    <div class="cardImage"><span class="icon-brand-1"><img src="{{asset('template-assets/imgs/page/homepage2/phone.svg')}}" alt="Demalma"></span></div>
                    <div class="cardInfo">
                      <h6 class="font-sm-bold color-grey-900">Telephone</h6>
                      <p class="font-sm color-grey-900">(+221) 77 281 43 43</p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
</div>