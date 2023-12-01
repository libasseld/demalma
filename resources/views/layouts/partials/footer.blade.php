@php
use App\Models\Reseausocial;

$reseaux_sociaux = Reseausocial::get();

@endphp
<footer class="footer">
    <div class="footer-svg">
        
    </div>
    <div class="footer-1">
        <div class="container font-xs">
            <div class="row">
                <div class="col-lg-4 mb-30">
                    <div class="mb-20"><img src="{{asset('template-assets/imgs/template/logo-footer.png')}}" class="logo-footer" alt="transp"></div>
                    <p class="mb-20 color-white">
                        Nous sommes nos clients <br>
                        Nous nous engageons <br>
                        Nous vous représentons, nous vous informons <br>
                        Nous réalisons et nous vous livrons vos documents.</p>
                    <h6 class="color-brand-1">Suivez Nous</h6>
                    <div class="mt-15"> 
                         @foreach ($reseaux_sociaux as $item)
                            <a class="text-white icon-socials" href="{{$item->url}}" title="{{$item->name}}">
                                <i class="{{$item->icone}} "></i> {{--  --}}
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="text-center col-lg-4 mb-30">
                    <h5 class="mb-10 color-brand-1">Démalma</h5>
                    <ul class="menu-footer width-100">
                        <li><a href="{{route('home')}}">Accueil</a></li>
                        <li><a href="{{route('qui-sommes-nous')}}">Qui sommes nous ?</a></li>
                        <li><a href="{{route('nos-services')}}">Nos Services</a></li>
                        <li><a href="{{route('nous-contacter')}}">Nous contacter</a></li>
                    </ul>
                </div>
                <div class="text-center col-lg-4 mb-30">
                    <h5 class="mb-10 color-brand-1">Lien Utiles</h5>
                    <ul class="menu-footer width-100">
                        <li><a href="#">Conditions de services</a></li>
                        <li><a href="#">Politique de confidentialité</a></li>
                        <li><a href="#">Foire aux questions</a></li>
                        <li><a href="#">Mon compte</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-30">
                    <h5 class="mb-10 color-brand-1">Nous contacter</h5>
                    <ul class="menu-footer width-100">
                        <li>
                            <a  href="#">
                                <span class="mr-2"><i class="fa fa-location-dot"></i></span>
                                3, rue assane ndoye x Berenger Feraud
                            </a>
                        </li>
                        <li>
                            <a  href="#">
                                <span class="mr-2"><i class="fa fa-map"></i></span>
                                Dakar Sénégal
                            </a>
                        </li>
                        <li>
                            <a  href="mailto:contact@groupe-demalma.com">
                                <span class="mr-2"><i class="fa fa-envelope"></i></span>
                                contact@groupe-demalma.com
                            </a>
                        </li>
                        <li>
                            <a  href="tel:+221772814343">
                                <span class="mr-2"><i class="fa fa-phone-volume"></i></span>
                                +221 77 281 43 43
                            </a>
                        </li>
                    </ul>
                </div>
                {{-- <div class="col-lg-4 width-20 mb-30">
                    <h5 class="mb-10 color-brand-1">Gallery</h5>
                    <div class="galleries-footer">
                        <ul class="list-imgs">
                            <li> <img src="{{asset('template-assets/imgs/page/homepage1/gal1.png')}}" alt="transp"></li>
                            <li> <img src="{{asset('template-assets/imgs/page/homepage1/gal2.png')}}" alt="transp"></li>
                            <li> <img src="{{asset('template-assets/imgs/page/homepage1/gal3.png')}}" alt="transp"></li>
                            <li> <img src="{{asset('template-assets/imgs/page/homepage1/gal4.png')}}" alt="transp"></li>
                            <li> <img src="{{asset('template-assets/imgs/page/homepage1/gal5.png')}}" alt="transp"></li>
                            <li> <img src="{{asset('template-assets/imgs/page/homepage1/gal6.png')}}" alt="transp"></li>
                            <li> <img src="{{asset('template-assets/imgs/page/homepage1/gal7.png')}}" alt="transp"></li>
                            <li> <img src="{{asset('template-assets/imgs/page/homepage1/gal8.png')}}" alt="transp"></li>
                            <li> <img src="{{asset('template-assets/imgs/page/homepage1/gal9.png')}}" alt="transp"></li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="footer-2">
        <div class="container">
            <div class="footer-bottom">
                <div class="row align-items-center">
                    <div class="text-center col-lg-6 col-md-12 text-lg-start"><span
                            class="color-grey-300 font-md">©WebMaster Agency
                             {{date('Y')}}. All right reversed.</span></div>
                    <div class="text-center col-lg-6 col-md-12 text-lg-end">
                        <ul class="menu-bottom">
                            <li><a class="font-sm color-grey-300" href="term-conditions.html">Conditions de services</a>
                            </li>
                            <li><a class="font-sm color-grey-300" href="term-conditions.html">Cookies</a></li>
                            <li><a class="font-sm color-grey-300" href="term-conditions.html">Politique de confidentialité</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>