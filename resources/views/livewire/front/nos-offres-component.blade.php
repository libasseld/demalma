@foreach ($categories_offres as $category)
    <section class="section mt-100">
        <div class="container">
            <h2 class="mb-20 title-favicon wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">{{ $category->name }}</h2>
           {{--  <div class="row align-items-end">
                <div class="col-lg-8 col-md-8 mb-30">
                    <p class="font-md color-gray-700 wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                        Welcome to our tranporation services agency.
                        We are the best at our trans-portation service ever.
                    </p>
                </div>
                <div class="col-lg-4 col-md-4 mb-30 text-md-end text-start">
                    <a class="btn btn-brand-1 hover-up"  href="request-a-quote.html">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"></path>
                        </svg>
                        Get a quote
                    </a>
                </div>
            </div> --}}
            <div class="mt-20 box-background-offer">
                <div class="bg-under"></div>
                <div class="justify-center row">
                    @if (count($category->offres) < 4)
                    @foreach ($category->offres as $offre)
                    <div class="col-lg-3 col-md-6 wow animate__ animate__fadeIn animated"
                        style="visibility: visible; animation-name: fadeIn;">
                        <div class="card-offer-services hover-up">
                            <div class="card-image">
                                <img src="{{ asset($offre->image_url ? 'storage/' . $offre->image_url : 'storage/card-images/offre_profil.png') }}" alt="{{$offre->slug}}">
                            </div>
                            <div class="card-info">
                                <h5 class="color-brand-2 mb-15">{{$offre->designation}}</h5>
                                <p class="mb-5 font-sm color-grey-900">{!! $offre->description !!}</p>
                                <div class="box-button-offer mb-30">
                                    <a class="btn btn-link font-sm color-brand-2" href="{{route('service-details', ['categorie_slug' => $category->slug,'offre_slug' => $offre->slug])}}">
                                        Voir les détails
                                        <span>
                                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                    @else
                        
                    <div class="box-swiper">
                        <div class="swiper-container swiper-group-4 pb-50">
                          <div class="swiper-wrapper">
                            @foreach ($category->offres as $offre)
                            <div class="swiper-slide wow animate__animated animate__fadeIn">
                                <div class=" wow animate__ animate__fadeIn animated"
                                style="visibility: visible; animation-name: fadeIn;">
                                <div class="card-offer hover-up">
                                    <div class="card-image">
                                        <img src="{{ asset($offre->image_url ? 'storage/' . $offre->image_url : 'storage/card-images/offre_profil.png') }}" alt="{{$offre->slug}}">
                                    </div>
                                    <div class="card-info">
                                        <h5 class="color-brand-2 mb-15">{{$offre->designation}}</h5>
                                        <p class="font-sm color-grey-900 mb-35">{!! $offre->description !!}</p>
                                        <div class="box-button-offer mb-30">
                                            <a class="btn btn-link font-sm color-brand-2" href="{{route('service-details', ['categorie_slug' => $category->slug,'offre_slug' => $offre->slug])}}">
                                                Voir les détails
                                                <span>
                                                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            @endforeach
                          </div>
                          <div class="text-center box-pagination-customers wow animate__animated animate__fadeIn">
                            <div class="swiper-button-prev swiper-button-prev-style-1 swiper-button-prev-group-4">
                              <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"></path>
                              </svg>
                            </div>
                            <div class="swiper-button-next swiper-button-next-style-1 swiper-button-next-group-4">
                              <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path>
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                   

                
                    @endif
                </div>
            </div>
        </div>
    </section>
@endforeach
