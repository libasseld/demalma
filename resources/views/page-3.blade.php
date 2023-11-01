    <x-front-layout>
        <div id="page_caption" class="hasbg parallax  withtopbar  " style="background-image:url(template-assets/upload/driver-2.jpg);">

            <div class="page_title_wrapper">
                <div class="page_title_inner">
                    <div class="page_title_content">
                        <h1 class="withtopbar">La solution pour vos déplacements professionnels </h1>
                        
                    </div>
                </div>
            </div>

        </div>
<!-- Begin content -->
<div id="page_content_wrapper" class="hasbg withtopbar ">
    <div class="page-loading " wire:loading.delay.longest>
        <div >
            <div class="loader "></div>
            <h2 data-text="Chargement en cours...">Chargement en cours...</h2>
        </div>
        
    </div>
    <div class="inner">

        <!-- Begin main content -->
        <div class="inner_wrapper">

            <div class="sidebar_content full_width nopadding">
                <div class="sidebar_content page_content blog-content">
                    <h2>La solution pour vos déplacements professionnels</h2>
                    <div>
                        

                        <p> Tellement plus pratique qu'un loueur traditionnel : louez des voitures en un clin d'œil, pour vous et votre équipe, 24h/24 et 7j/7.</p>
                            <p>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                Notre offre s'adapte à vos besoins, et pas l'inverse 
                            </p>
                            <p>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                Réservation instantanée 
                            </p>
                            <p>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                Annulation gratuite jusqu'à 48h avant 
                            </p>
                            <p>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                               Extension facile depuis l'appp
                            </p>
                            <p>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                2ème conducteur inclus 
                            </p>
                        <div class="mt-2">
                            <img class="image-1" src="{{asset('template-assets/upload/IMG_3496bfree.jpg')}}" alt="">

                        </div>
                        <p>
                            C'est tellement plus simple de louer une voiture sur Demalma.
                        </p>
                        <p>
                            Avec 200 voitures de particuliers et de professionnels à Dakar, nous vous donnons accès à une voiture en quelques clics, où vous voulez, quand vous voulez.
                        </p>
                        {{-- <a href="{{route('e-parking')}}" class="button mt-2" data-text="Contactez-nous"><span>Réservez directement</span></a> --}}
                    </div>

                </div>

                <ul class="sidebar_widget">
                    <livewire:front.contact-form-component >

                    <li id="text-6" class="widget widget_text">
                        <h2 class="widgettitle">Pour Plus d'Informations</h2>
                        <div class="textwidget">
                            <p><span class="ti-mobile" style="margin-right:10px;"></span>
                                <a href="tel:+221762800137">+221 76 280 01 37</a>
                                <br>
                                <br>
                                <span class="ti-alarm-clock" style="margin-right:10px;"></span>Lun - Sam 8.00 - 18.00</p>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
        <!-- End main content -->
    </div>
</div>

    </x-front-layout>
