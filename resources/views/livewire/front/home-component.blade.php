<div class="ppb_wrapper ">
    <div class="one withsmallpadding ppb_car_search_background parallax withbg "
        style="padding-top: 150px !important;text-align:center;height:800px;background-image:url(template-assets/upload/IMG_3496bfree.jpg);background-position: center center;color:#ffffff;">
        <div class="overlay_background" style="background:#000000;background:rgb(0,0,0,0.2);background:rgba(0,0,0,0.2);">
        </div>
        <div class="center_wrapper">
            <div class="inner_content">
                <div class="standard_wrapper">
                    <h2 class="ppb_title" style="color:#ffffff;">Vous cherchez un véhicule? </h2>
                    <div class="page_tagline" style="color:#ffffff;">
                        Vous êtes au bon endroit. Location de voitures – Recherchez, comparez et faites de
                        vraies économies !
                    </div>
                    <form class="car_search_form" method="get" action="/e-parking">
                        <div class="car_search_wrapper">
                            <div class="one_fourth themeborder">
                                <select id="brand" name="marque">
                                    <option value="">Toutes les marques </option>
                                    @foreach ($marques as $marque)
                                        <option value="{{ $marque->id }}">{{ $marque->titre }}</option>
                                    @endforeach
                                </select>
                                <span class="ti-angle-down"></span>
                            </div>
                            <div class="one_fourth themeborder">
                                <select id="type" name="type_vehicule">
                                    <option value="">Tous les types de véhicule</option>
                                    @foreach ($type_vehicules as $type)
                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endforeach
                                </select>
                                <span class="ti-angle-down"></span>
                            </div>
                            <div class="one_fourth themeborder">
                                <select id="sort_by" name="sort_by">
                                    <option value="price_low">Prix ​​croissant</option>
                                    <option value="price_high">Prix ​​décroissant</option>
                                    <option value="model">Trier par Model</option>
                                </select>
                                <span class="ti-exchange-vertical"></span>
                            </div>
                            <div class="one_fourth last themeborder">
                                <input id="car_search_btn" type="submit" class="button" value="Rechercher" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="one withsmallpadding ppb_header " style="text-align:center;padding:60px 0 60px 0;">
        <div class="standard_wrapper">
            <div class="page_content_wrapper">
                <div class="inner">
                    <div style="margin:auto;width:100%">
                        <h2 class="ppb_title" style="">Location de voitures standards &amp; de luxe</h2>
                        <div class="page_tagline" style="">
                            Nous proposons des services professionnels de location de voitures dans notre gamme
                            de véhicules lites et haut de gamme

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <div class="ppb_car_brand_grid one nopadding ">
        <div class="page_content_wrapper page_main_content sidebar_content full_width fixed_column">
            <div class="standard_wrapper">
                <div id="15722572661666401717"
                    class="grid portfolio_filter_wrapper gallery portrait three_cols" data-columns="3">
                    <div class="grid element classic3_cols animated4">
                        <div class="static grid one_third gallery3 filterable portfolio_type themeborder"
                            style="background-image:url(template-assets/upload/Mercedes-C-Class-Estate-1.jpg);">
                            <a class="car_image" href="{{route('e-parking')}}?marque=1"></a>
                            <div class="portfolio_info_wrapper">
                                <h3>Mercedes</h3>
                            </div>
                        </div>
                    </div>
                    <div class="grid element classic3_cols animated2">
                        <div class="static grid one_third gallery3 filterable portfolio_type themeborder"
                            style="background-image:url(template-assets/upload/bmw-3-series-sedan-wallpaper-1920x1200-05.jpg);">
                            <a class="car_image" href="{{route('e-parking')}}?marque=1"></a>
                            <div class="portfolio_info_wrapper">
                                <h3>BMW</h3>
                            </div>
                        </div>
                    </div>
                    <div class="grid element classic3_cols animated1">
                        <div class="static grid one_third gallery3 filterable portfolio_type themeborder"
                            style="background-image:url(template-assets/upload/hyundai.jpg);">
                            <a class="car_image" href="{{route('e-parking')}}?marque=1"></a>
                            <div class="portfolio_info_wrapper">
                                <h3>Hyundai</h3>
                            </div>
                        </div>
                    </div>
                   
                    <div class="grid element classic3_cols animated3">
                        <div class="static grid one_third gallery3 filterable portfolio_type themeborder"
                            style="background-image:url(template-assets/upload/jeep.jpg);">
                            <a class="car_image" href="{{route('e-parking')}}?marque=1"></a>
                            <div class="portfolio_info_wrapper">
                                <h3>Jeep</h3>
                            </div>
                        </div>
                    </div>
                    
                    <div class="grid element classic3_cols animated5">
                        <div class="static grid one_third gallery3 filterable portfolio_type themeborder"
                            style="background-image:url(template-assets/upload/kia-sportage.jpg);">
                            <a class="car_image" href="{{route('e-parking')}}?marque=1"></a>
                            <div class="portfolio_info_wrapper">
                                <h3>KIA</h3>
                            </div>
                        </div>
                    </div>
                    <div class="grid element classic3_cols animated6">
                        <div class="static grid one_third gallery3 filterable portfolio_type themeborder"
                            style="background-image:url(template-assets/upload/ford.jpg);">
                            <a class="car_image" href="{{route('e-parking')}}?marque=1"></a>
                            <div class="portfolio_info_wrapper">
                                <h3>FORD</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
<div class="container relative row">


    
</div>
{{-- <section id="ingenieire-digitale" class="about about-area position-relative section-padding">
    <div class="right-bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="about-img">
                    <img class="image-1" src="{{asset('template-assets/images/upload/demalma-1.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="about-info">
                    <h2 class="service-title">La solution pour vos déplacements professionnels</h2>
                    

                        <p> Tellement plus pratique qu'un loueur traditionnel : louez des voitures en un clin d'œil, pour vous et votre équipe, 24h/24 et 7j/7.</p>
                        <ul>
                            <li>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                Notre offre s'adapte à vos besoins, et pas l'inverse 
                            </li>
                            <li>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                Réservation instantanée 
                            </li>
                            <li>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                Annulation gratuite jusqu'à 48h avant 
                            </li>
                            <li>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                               Extension facile depuis l'appli
                            </li>
                            <li>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                2ème conducteur inclus 
                            </li>
                        </ul>
                        <p>
                            C'est tellement plus simple de louer une voiture sur Demalma.
                        </p>
                        <p>
                            Avec 200 voitures de particuliers et de professionnels à Dakar, nous vous donnons accès à une voiture en quelques clics, où vous voulez, quand vous voulez.
                        </p>
                        <a href="{{route('e-parking')}}" class="mt-2 button" data-text="Contactez-nous"><span>Réservez directement</span></a>

                </div>
            </div>
        </div>
    </div>
</section>
<section id="marketing-digital" class="about-reverse about-area position-relative section-padding">
    <div class="left-bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="about-info">
                    <h2 class="service-title">Location d'une voiture pour les vacances : un choix gagnant</h2>
                    <p>
                        Les vacances présentent des moments uniques. Que ce soit en famille, avec des amis ou en solo, louer une voiture est la solution idéale. 
                        Elle permet de conduire de nouveaux modèles de véhicules. Avec une voiture de location, vous disposez d'un moyen de transport flexible et pratique. 
                        Mais où trouver une location de voiture pour les vacances ? Découvrez les caractéristiques d'un loueur professionnel et d'un service de location entre particuliers. 
                        Trouvez également ci-après les conseils pour choisir les assurances adaptées
                    </p>

                    <p>Vous cherchez une voiture à louer pour vos vacances. Les prix de location diffèrent selon les loueurs et les types de voitures. Pour obtenir des tarifs de location avantageux, voici quelques conseils :</p>

                        <ul>
                            <li>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                utiliser le comparateur de prix proposés par certains sites internet ;
                            </li>
                            <li>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                demander plusieurs devis avant de faire la réservation de la voiture ;
                            </li>
                            <li>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                faire le plein avant de rendre la voiture ;
                            </li>
                            <li>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                profiter d'une offre promotionnelle pour la location d'une voiture ;
                            </li>
                            <li>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                choisir le modèle de voiture adapté à votre voyage.
                            </li>
                        </ul>
                        <a href="{{route('nous-contacter')}}" class="mt-2 button" data-text="Contactez-nous"><span>Contactez-nous</span></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="about-right-img">
                    <img class="image-1" src="{{asset('template-assets/images/upload/demalma-2.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section id="ingenieire-digitale" class="about about-area position-relative section-padding">
    <div class="right-bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="about-img">
                    <img class="image-1" src="{{asset('template-assets/images/upload/demalma-3.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="about-info">
                    <h2 class="service-title">Les grands événements prévus à Dakar en 2023 : de multiples occasions de louer sa voiture avec Demalma</h2>
                    

                    <p> Animations, concerts, salons et expositions ; les événements prévus à DAKAR en 2023 sont nombreux, ce qui confère à la capitale une réelle attractivité. 
                        Passionnés d'art et d'histoire, amateurs de musique et férus de sport profiteront de multiples occasions pour se divertir. 
                        Retrouvez ici un aperçu des principales festivités programmées cette année. 
                        Des idées de sorties qui offrent de nombreuses opportunités de louer sa voiture avec Demalma !.</p>
                        <ul>
                            <li>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                Circuit d'une journée l'île de Goree et la ville de Dakar
                            </li>
                            <li>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                Sénégal avec la Gambie voyage de 8 jours
                            </li>
                            <li>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                Visite Écologique Privée de 8 Jours dans le Sine Saloum 
                            </li>
                            <li>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                Les musées de Dakar et le Monument de la Renaissance en une demi-journée
                            </li>
                            <li>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                Excursion d'une journée: visite du lac rose et de la réserve faunique de Bandia.
                            </li>
                            <li>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                Une visite amusante de la ville animée et animée de Dakar.
                            </li>
                            <li>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                Désert de Lompoul
                            </li>
                        </ul>
                        <a href="{{route('nous-contacter')}}" class="mt-2 button" data-text="Contactez-nous"><span>Contactez-nous</span></a>

                </div>
            </div>
        </div>
    </div>
</section> --}}
<div class="one withsmallpadding ppb_header "
    style="padding-top: 40px !important;text-align:center;padding:60px 0 0px 0;">
    <div class="standard_wrapper">
        <div class="page_content_wrapper">
            <div class="inner">
                <div style="margin:auto;width:100%">
                    <h2 class="ppb_title" style="">La liberté de flexibilité</h2>
                    <div class="mb-4 page_tagline" style="">
                        Obtenez le type exact de véhicule pour votre voyage et réservez-le pour les heures
                        (ou les jours) où vous en avez réellement besoin.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ppb_car_type_grid one nopadding " style="margin-bottom:60px;">
        <div class="page_content_wrapper page_main_content sidebar_content full_width fixed_column">
            <div class="standard_wrapper">
                <div id="1572257266780950625"
                    class="grid portfolio_filter_wrapper gallery portrait three_cols" data-columns="3">
                    
                    <div class="grid element classic3_cols animated2">
                        <div class="static grid one_third gallery3 filterable portfolio_type themeborder"
                            style="background-image:url(template-assets/upload/blog-1.jpg);">
                            <a class="car_image" href="{{ route('page-1') }}"></a>
                            <div class="portfolio_info_wrapper">
                                <h4 class="text-center">Les grands événements prévus à Dakar en 2023</h4>
                            </div>
                        </div>
                    </div>
                    <div class="grid element classic3_cols animated3">
                        <div class="static grid one_third gallery3 filterable portfolio_type themeborder"
                            style="background-image:url(template-assets/upload/blog-2.jpg);">
                            <a class="car_image" href="{{ route('page-2') }}"></a>
                            <div class="portfolio_info_wrapper">
                                <h4 class="text-center">Location d'une voiture pour les vacances</h4>
                            </div>
                        </div>
                    </div>
                    <div class="grid element classic3_cols animated1">
                        <div class="static grid one_third gallery3 filterable portfolio_type themeborder"
                            style="background-image:url(template-assets/upload/blog-3.jpg);">
                            <a class="car_image" href="{{ route('page-3') }}"></a>
                            <div class="portfolio_info_wrapper">
                                <h4 class="text-center">La solution pour vos déplacements professionnels</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
<div class="one withsmallpadding ppb_header_youtube withbg parallax"
   
    style="text-align:center;padding:115px 0;color:#ffffff;background:#000000;">
    <div class="overlay_background" style="background:#000000;background:rgb(0,0,0,1);background:rgba(0,0,0,1);">
    </div>
    <div class="standard_wrapper">
        <div class="page_content_wrapper">
            <div class="inner">
                <div style="margin:auto;width:100%">
                    <!--                         <h2 class="ppb_title" style="color:#ffffff;">Nos Services</h2>
 -->
                    <div class="page_tagline" style="color:#ffffff;">
                        Nous aidons les consommateurs à ne plus être propriétaires d'une voiture en leur <br>
                        donnant un accès instantané et pratique aux véhicules lorsqu'ils en ont besoin.
                    </div>
                    <div class="ppb_header_content">
                        <p>
                            <span style="font-size: 32px;">
                                Appelez-nous <a href="tel:+221762800137">+221 76 280 01 37</a>


                            </span>
                        </p>
                        <p><a class="button" href="{{ route('nous-contacter') }}">Nous Contacter</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="one withsmallpadding ppb_header "
    style="text-align:center;padding:60px 0 60px 0;background-color:#d57618;color:#ffffff;">
    <div class="standard_wrapper">
        <div class="page_content_wrapper">
            <div class="inner">
                <div style="margin:auto;width:100%">
                    <h2 class="ppb_title" style="color:#ffffff;">
                        Expérience de conduite sans compromis
                    </h2>
                    <div class="page_tagline" style="color:#ffffff;">
                        Nos véhicules de location haut de gamme vous offrent une expérience de conduite inégalée,
                        alliant puissance, luxe et performance.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="one withsmallpadding ppb_text"
    style="padding-top:0 !important;text-align:center;padding:10px 0 10px 0;background-color:#d57618;color:#ffffff !important;">
    <div class="standard_wrapper">
        <div class="page_content_wrapper">
            <div class="inner">
                <div style="margin:auto;width:100%">

                    <div class="one_third " style=""><span class="ti-car"
                            style="display: block; font-size: 50px; margin-bottom: 20px;"> </span>
                        <h4 style="color: #fff;">
                            Expérience de conduite sans compromis
                        </h4>
                        <p>
                            Nos véhicules de location haut de gamme vous offrent une expérience de conduite
                            inégalée, alliant puissance, luxe et performance.


                        </p>
                    </div>
                    <div class="one_third " style="">
                        <span class="ti-face-smile"
                            style="display: block; font-size: 50px; margin-bottom: 20px;"> </span>
                        <h4 style="color: #fff;">Service client exceptionnel, à votre écoute 24/7
                        </h4>
                        <p>
                            Notre équipe dévouée est disponible 24 heures sur 24, 7 jours sur 7, pour répondre à
                            tous vos besoins et vous offrir une assistance personnalisée.
                        </p>
                    </div>
                    <div class="one_third last " style=""><span class="ti-heart"
                            style="display: block; font-size: 50px; margin-bottom: 20px;"> </span>
                        <h4 style="color: #fff;">
                            Tarifs compétitifs, pour une expérience de luxe abordable
                        </h4>
                        <p>
                            Découvrez le meilleur rapport qualité-prix avec Demalma et profitez d'une expérience
                            de luxe à des prix imbattables.

                        </p>
                    </div>
                    <p>
                        <br class="clear" />
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="one withsmallpadding ppb_header " style="text-align:center;padding:60px 0 60px 0;">
        <div class="standard_wrapper">
            <div class="page_content_wrapper">
                <div class="inner">
                    <div style="margin:auto;width:100%">
                        <h2 class="ppb_title" style="">Articles &amp; Tips</h2>
                        <div class="page_tagline" style="">
                            explorez quelques-uns des meilleurs conseils du monde entier
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="standard_wrapper">
        <div class="ppb_blog_grid one nopadding" style="padding:0px 0 0px 0;margin-bottom:40px;">
            <div class="page_content_wrapper">
                <div class="inner">
                    <div class="inner_wrapper">
                        <div class="blog_grid_wrapper sidebar_content full_width ppb_blog_posts">
                            <div id="post-18" class="post type-post hentry status-publish ">
                                <div class="post_wrapper grid_layout">
                                    <div class="static post_img small">
                                        <a href="#">
                                            <img src="upload/nw6xremkxkg-nicolai-berntsen-960x636.jpg" alt="What To Do if Your Rental Car Has Met With An Accident" class="" />
                                        </a>
                                    </div>
                                    <div class="post_header_wrapper">
                                        <div class="grid post_header">
                                            <div class="post_detail single_post">
                                                <span class="post_info_date">
     <a href="#" title="What To Do if Your Rental Car Has Met With An Accident">January 12, 2017</a>
     </span>
 </div>
                                            <h6><a href="#" title="What To Do if Your Rental Car Has Met With An Accident">What To Do if Your Rental Car Has Met With An Accident</a></h6>
                                        </div>
                                        <p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache...
                                            <div class="post_button_wrapper">
                                                <a class="readmore" href="#">Read More<span class="ti-angle-right"></span></a>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div id="post-29" class="post type-post hentry status-publish ">
                                <div class="post_wrapper grid_layout">
                                    <div class="static post_img small">
                                        <a href="#">
                                            <img src="upload/IMG_3496bfree-960x636.jpg" alt="On The Trail of 6 Best Foods in North America" class="" />
                                        </a>
                                    </div>
                                    <div class="post_header_wrapper">
                                        <div class="grid post_header">
                                            <div class="post_detail single_post">
                                                <span class="post_info_date">
     <a href="#" title="On The Trail of 6 Best Foods in North America">January 10, 2017</a>
     </span>
                                            </div>
                                            <h6><a href="#" title="On The Trail of 6 Best Foods in North America">On The Trail of 6 Best Foods in North America</a></h6>
                                        </div>
                                        <p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache...
                                            <div class="post_button_wrapper">
                                                <a class="readmore" href="#">Read More<span class="ti-angle-right"></span></a>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div id="post-36" class="post type-post hentry status-publish last">
                                <div class="post_wrapper grid_layout">
                                    <div class="static post_img small">
                                        <a href="#">
                                            <img src="upload/pexels-photo-2-960x636.jpg" alt="Demalma Mistakes That Can Cost You Big" class="" />
                                        </a>
                                    </div>
                                    <div class="post_header_wrapper">
                                        <div class="grid post_header">
                                            <div class="post_detail single_post">
                                                <span class="post_info_date">
     <a href="#" title="Demalma Mistakes That Can Cost You Big">January 9, 2017</a>
     </span>
                                            </div>
                                            <h6><a href="#" title="Demalma Mistakes That Can Cost You Big">Demalma Mistakes That Can Cost You Big</a></h6>
                                        </div>
                                        <p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache...
                                            <div class="post_button_wrapper">
                                                <a class="readmore" href="#">Read More<span class="ti-angle-right"></span></a>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <br class="clear" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>
