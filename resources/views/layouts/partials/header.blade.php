@php
    use App\Models\CategorieOffre;
    use App\Models\Reseausocial;

    $categories_offres = CategorieOffre::with(['offres'])
        ->whereHas('offres')
        ->get();
    $reseaux_sociaux = Reseausocial::get();
@endphp
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="flip-square"></div>
        </div>
    </div>
</div>
<div class="box-bar bg-grey-900">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-8 col-sm-5 col-4"> <a class="phone-icon mr-45" href="tel:+221772814343">
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z">
                        </path>
                    </svg>+221 77 281 43 43</a><a class="email-icon" href="mailto:contact@groupe-demalma.com">
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75">
                        </path>
                    </svg>contact@groupe-demalma.com</a></div>
            <div class="col-lg-5 col-md-4 col-sm-7 col-8 text-end">
                @foreach ($reseaux_sociaux as $item)
                    <a class="text-white icon-socials" href="{{ $item->url }}" title="{{ $item->name }}">
                        <i class="{{ $item->icone }} mr-2"></i> {{--  --}}
                    </a>
                @endforeach

            </div>
        </div>
    </div>
</div>
<header class="header sticky-bar">
    <div class="container">
        <div class="main-header">
            <div class="header-left">
                <div class="header-logo"><a class="d-flex" href="{{ route('home') }}"><img alt="Ecom"
                            src="{{ asset('template-assets/imgs/template/logo-demalma.svg') }}"></a></div>
                <div class="header-nav">
                    <nav class="nav-main-menu d-none d-xl-block">
                        <ul class="main-menu">

                            <li class="active"><a href="{{ route('home') }}" class="active">Accueil</a></li>
                            <li class="has-children"><a href="#">Nos expertises</a>
                                <div class="sub-menu ">
                                    {{-- <div class="left-items">
                                        @foreach ($categories_offres as $category)
                                            <div class="menu-col vw_drop_doown" data-ulid="{{ $category->id }}">
                                                <h6 class="color-brand-2 mb-15">{{ $category->name }}</h6>
                                                

                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="megamenu-items ">
                                        @foreach ($categories_offres as $category)
                                            <div class=" megamenu">
                                                @foreach ($category->offres as $service)
                                                        <a class="megamenu-item hidden-vw_drop_doown vwdropdoown{{ $category->id }}" 
                                                            href="{{ route('service-details', ['categorie_slug' => $category->slug, 'offre_slug' => $service->slug]) }}">
                                                            <img
                                                            src="{{ asset($service->image_url ? 'storage/' . $service->image_url : 'storage/card-images/offre_profil.png') }}"
                                                            alt="transp" class="menu-image"> {{ $service->designation }}</a>
                                                @endforeach
                                            </div>
                                        @endforeach
                                    </div> --}}
                                    @foreach ($categories_offres as $category)
                                        <div class="sub-menu-item">
                                            <a href="#">{{ $category->name }}</a>
                                            <div class="all-subs">
                                                <div class="sub-items">
                                                    {{-- <h2>{{ $category->name }}</h2> --}}



                                                    @foreach ($category->offres as $service)
                                                        <div class="sub-item">
                                                            <a class="megamenu-item  vwdropdoown{{ $category->id }}"
                                                                href="{{ route('service-details', ['categorie_slug' => $category->slug, 'offre_slug' => $service->slug]) }}">
                                                                <img src="{{ asset($service->image_url ? 'storage/' . $service->image_url : 'storage/card-images/offre_profil.png') }}"
                                                                    alt="transp" class="menu-image">
                                                                {{ $service->designation }}</a>

                                                        </div>
                                                    @endforeach
                                                </div>


                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </li>
                            <li><a href="{{ route('qui-sommes-nous') }}">Qui sommes nous?</a></li>

                            <li><a href="{{ route('nous-contacter') }}">Contact</a></li>
                        </ul>
                    </nav>
                    <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span
                            class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
                </div>
                <div class="header-right">

                    <div class="d-none d-sm-inline-block"><a class="mr-10 btn btn-default hover-up"
                            href="{{ route('login') }}">Se connecter</a>
                        {{-- <a
                            class="btn btn-brand-1 d-none d-xl-inline-block hover-up" href="{{ route('nos-services') }}">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z">
                                </path>
                            </svg>Demander un devis</a></div> --}}
                    </div>
                </div>
            </div>
        </div>
</header>
<div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area">
            <div class="mobile-logo"><a class="btn btn-brand-1 hover-up" href="{{ route('nos-services') }}">
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z">
                        </path>
                    </svg>Commencez votre démarche</a></div>
            <div class="burger-icon"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span
                    class="burger-icon-bottom"></span></div>
            <div class="perfect-scroll">
                <div class="mobile-menu-wrap mobile-header-border">
                    <nav class="mt-15">
                        <ul class="mobile-menu font-heading">
                            
                            <li><a href="{{ route('home') }}">Accueil</a></li>
                            <li class="has-children">
                                <a href="{{ route('nos-services') }}">Nos expertises</a>

                                @foreach ($categories_offres as $category)
                                    <ul class="sub-menu">
                                        <h4>{{ $category->name }}</h4>
                                        @foreach ($category->offres as $service)
                                            <li>
                                                <a
                                                    href="{{ route('service-details', ['categorie_slug' => $category->slug, 'offre_slug' => $service->slug]) }}">
                                                    {{ $service->designation }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endforeach 

                            </li>
                            <li><a href="{{ route('qui-sommes-nous') }}">Qui sommes nous?</a></li>                           
                            <li><a href="{{ route('nous-contacter') }}">Nous Contacter</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="mt-0 site-copyright color-grey-400">
                   
                    <div class="mb-0"><span class="font-xs color-grey-500">©Demalma Officiel {{date('Y')}}. All right
                            reversed.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
