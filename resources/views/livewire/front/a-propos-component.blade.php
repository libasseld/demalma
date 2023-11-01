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
                <div class="sidebar_content page_content">
                    <h3>QUI NOUS SOMMES
                    </h3>
                    <div>
                        <p>Demalma vise à être le leader des services de location de voitures et de mobilité à Dakar en offrant une expérience client exceptionnelle et unique avec notre touche distincte d'hospitalité et de téranga Sénégalaise.</p>

                        <p>Depuis sa constitution, Demalma n'a cessé de croître pour devenir un leader dans l'industrie de la location de voitures à Dakar. Notre succès est dû à une réingénierie constante pour s'adapter aux demandes changeantes d'un marché en évolution, que ce soit dans le secteur touristique ou domestique.</p>

                        <p>La société possède aujourd'hui la plus grande flotte de véhicules et offre une large gamme de services, allant de la location de voiture aux services de chauffeur de conciergerie, tous aux normes internationales.</p>


                        <p>Pour plus de commodité et de proximité pour les clients, Demalma met à votre disposition tout un service complet pour la satisfaction des besoins de nos clients.  </p>
                     </div>
                    <p>&nbsp;</p>
                    <h3>NOS VALEURS
                    </h3>
                    <div class=" ">
                        <h3><a href="#">Passion</a></h3>
                        <div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active">
                            <p >
                                Passionnés par ce que nous faisons, nous nous efforçons d'atteindre l'excellence et d'offrir le meilleur service client.
                            </p>
                        </div>
                    </div>
                    <div class=" has_icon">
                        <h3><a href="#">Créativité</a></h3>
                        <div>
                            <p>
                                Avec un esprit d'entreprise, nous recherchons de nouvelles opportunités tout en innovant constamment nos opérations.

                            </p>
                        </div>
                    </div>
                    <div class=" has_icon">
                        <h3><a href="#">Progrès</a></h3>
                        <div>
                            <p>
                                Quelle que soit l'origine du personnel, nous extrayons le meilleur de l'équipe par un mentorat motivant dans le but d'assurer un avenir meilleur à la prochaine génération.


                            </p>
                        </div>
                    </div>
                    <div class=" has_icon">
                        <h3><a href="#">Respect</a></h3>
                        <div>
                            <p>
                                Nous avons une haute estime pour notre histoire, nos traditions et nos ancêtres. Avec respect et diligence, nous opérons conformément aux lois de l'entreprise, du pays et de l'environnement.
                            </p>
                        </div>
                    </div>
                    <div class=" has_icon">
                        <h3><a href="#">Coeur</a></h3>
                        <div>
                            <p>
                                Nous sommes la famille Demalma ! Nous rendons hommage à nos collaborateurs fidèles et nous croyons fermement en leur potentiel et celui du Groupe. Nous mettons tout notre cœur dans nos opérations jour après jour !


                            </p>
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <h3></h3>
                    

                </div>

                <ul class="sidebar_widget">
                    <li id="text-5" class="widget widget_text">
                        <h2 class="widgettitle">Nous contacter</h2>
                        <div class="textwidget">
                            <div role="form" class="wpcf7" id="wpcf7-f2465-o1" lang="en-US" dir="ltr">
                                <div class="screen-reader-response"></div>
                                <form class="quform"  method="post" onclick="">

                                    <div class="quform-elements">
                                        <div class="quform-element">
                                            
                                                <br>
                                                <span class="wpcf7-form-control-wrap your-name">
                                                    <input id="name" type="text" wire:model="name" size="40" class="input1" aria-required="true" aria-invalid="false" placeholder="Nom*">
                                                </span> 
                                                @error('name')
                                                    <p class="error-message">{{ $message }}</p>
                                                @enderror
                                            
                                        </div>
                                        <div class="quform-element">
                                            
                                                <br>
                                                <span class="wpcf7-form-control-wrap your-email">
                                                    <input id="email" type="text" wire:model="email" size="40" class="input1" aria-required="true" aria-invalid="false" placeholder="Email*">
                                                </span> 
                                                @error('email')
                                                    <p class="error-message">{{ $message }}</p>
                                                @enderror
                                            
                                        </div>
                                        <div class="quform-element">
                                            
                                                <br>
                                                <span class="wpcf7-form-control-wrap your-phone">
                                                    <input id="tel" type="text" wire:model="phone" size="40" class="input1" aria-required="true" aria-invalid="false" placeholder="Numéro de Téléphone*">
                                                </span> 
                                                @error('phone')
                                                    <p class="error-message">{{ $message }}</p>
                                                @enderror
                                            
                                        </div>
                                        <div class="quform-element">
                                            
                                                <br>
                                                <span class="wpcf7-form-control-wrap your-message">
                                                    <textarea  id="message" wire:model="message" cols="40" rows="10" class="input1" aria-invalid="false" placeholder="Message*"></textarea>
                                                </span>
                                                @error('message')
                                                    <p class="error-message">{{ $message }}</p>
                                                @enderror
                                            
                                        </div>
                                        
                                        <!-- Begin Submit button -->
                                        <div class="quform-submit">
                                            <div class="quform-submit-inner">
                                                <button type="button" wire:click="envoyer" class="btn-primary"><span>Envoyer</span></button>
                                            </div>
                                            <div class="quform-loading-wrap"><span class="quform-loading"></span></div>
                                        </div>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>
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