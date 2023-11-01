<div>
    <div class="page-loading " wire:loading.delay.longest>
        <div>
            <div class="loader "></div>
            <h2 data-text="Chargement en cours...">Chargement en cours...</h2>
        </div>

    </div>
    <section class="carousel" aria-label="Gallery" >
        <ol class="carousel__viewport">
            <li id="carousel__slide1" tabindex="0" class="carousel__slide" style="background-image:url(/storage/{{ $vehicule->photo_face }});">
                <div class="carousel__snapper">
                    <a href="#carousel__slide4" class="carousel__prev">Aller au dernier slide</a>
                    <a href="#carousel__slide2" class="carousel__next">Aller au slide suivant</a>
                </div>
            </li>
            <li id="carousel__slide2" tabindex="0" class="carousel__slide" style="background-image:url(/storage/{{ $vehicule->photo_profil }});">
                <div class="carousel__snapper"></div>
                <a href="#carousel__slide1" class="carousel__prev">Aller au slide précédent</a>
                <a href="#carousel__slide3" class="carousel__next">Aller au slide suivant</a>
            </li>
            <li id="carousel__slide3" tabindex="0" class="carousel__slide" style="background-image:url(/storage/{{ $vehicule->photo_interieur }});">
                <div class="carousel__snapper"></div>
                <a href="#carousel__slide2" class="carousel__prev">Aller au slide précédent</a>
                <a href="#carousel__slide4" class="carousel__next">Aller au slide suivant</a>
            </li>
            <li id="carousel__slide4" tabindex="0" class="carousel__slide" style="background-image:url(/storage/{{ $vehicule->photo_arriere }});">
                <div class="carousel__snapper"></div>
                <a href="#carousel__slide3" class="carousel__prev">Aller au slide précédent</a>
                <a href="#carousel__slide1" class="carousel__next">Aller au premier slide</a>
            </li>
        </ol>
        {{-- <aside class="carousel__navigation">
            <ol class="carousel__navigation-list">
                <li class="carousel__navigation-item">
                    <a href="#carousel__slide1" class="carousel__navigation-button">Go to slide 1</a>
                </li>
                <li class="carousel__navigation-item">
                    <a href="#carousel__slide2" class="carousel__navigation-button">Go to slide 2</a>
                </li>
                <li class="carousel__navigation-item">
                    <a href="#carousel__slide3" class="carousel__navigation-button">Go to slide 3</a>
                </li>
                <li class="carousel__navigation-item">
                    <a href="#carousel__slide4" class="carousel__navigation-button">Go to slide 4</a>
                </li>
            </ol>
        </aside> --}}
        <div class="single_car_header_button">
            <div class="standard_wrapper">
                {{-- <a href="/storage/{{ $vehicule->photo_face }}" id="single_car_gallery_open"
                    class="button fancy-gallery"><span class="ti-camera"></span>Regarder les photos</a> --}}
                <div style="display:none;">
                    @foreach ($photos as $key => $photo)
                        @if (!empty($vehicule->$photo) && $photo != 'photo_face')
                            <a id="single_car_gallery_image{{ $key }}" href="/storage/{{ $vehicule->$photo }}"
                                title="{{ $vehicule->name }}" class="fancy-gallery"></a>
                        @endif
                        {{-- 
                    <a id="single_car_gallery_image2" href="/storage/{{$vehicule->photo_face }}" title=""
                        class="fancy-gallery"></a>
                    <a id="single_car_gallery_image3" href="/storage/{{$vehicule->photo_face }}"
                        title="The road to success and the road to failure are almost exactly the same"
                        class="fancy-gallery"></a>
                    <a id="single_car_gallery_image4" href="/storage/{{$vehicule->photo_face }}" title=""
                        class="fancy-gallery"></a> --}}
                    @endforeach
                </div>

                {{-- <a href="#video_review112" id="single_car_video_review_open" class="button" data-type="inline"><span
                        class="ti-control-play"></span>Video Review</a> --}}

                <div id="video_review112" class="car_video_review_wrapper" style="display:none;">
                    <iframe width="1280" height="720" src="https://www.youtube.com/embed/rV7FQaAf4nc"
                        frameborder="0" allowfullscreen=""></iframe>
                </div>
            </div>


        </div>
    </section>
   {{--  <div 
        style="background-image:url(/storage/{{ $vehicule->photo_face }});">
        <img src="/storage/{{ $vehicule->photo_face }}" alt="">
        
    </div> --}}
    <div id="page_content_wrapper" class="hasbg withtopbar ">
        <div class="inner">

            <!-- Begin main content -->
            <div class="inner_wrapper" style="position: relative;">

                <div class="sidebar_content">

                    <h1>{{ $vehicule->name }}</h1>
                    {{-- <div class="car_attribute_wrapper">
                        <div class="car_attribute_rating">
                            <div class="br-theme-fontawesome-stars-o">
                                <div class="br-widget">
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;"></a>
                                    <a href="javascript:;"></a>
                                </div>
                            </div>
                            <div class="car_attribute_rating_count">
                                4&nbsp; reviews </div>
                        </div>
                    </div> --}}
                    <div class="single_car_attribute_wrapper themeborder">
                        <div class="one_fourth">
                            <div class="car_attribute_icon ti-user"></div>
                            <div class="car_attribute_content">
                                {{ $vehicule->passagers }}&nbsp;Passengers </div>
                        </div>

                        <div class="one_fourth">
                            <div class="car_attribute_icon ti-panel"></div>
                            <div class="car_attribute_content">
                                {{ $vehicule->boite->name }} </div>
                        </div>

                        <div class="one_fourth ">
                            <div class="car_attribute_icon ti-car"></div>
                            <div class="car_attribute_content">
                                {{ $vehicule->portes }}&nbsp; Portes </div>
                        </div>
                        @if ($vehicule->type_carburant_id)
                            <div class="one_fourth last">
                                <div class="car_attribute_icon ti-briefcase"></div>
                                <div class="car_attribute_content"> {{ $vehicule->type_carburant->designation }} </div>
                            </div>
                        @endif
                    </div>
                    <br class="clear">
                    <div class="single_car_content">
                        <h4 class="p1">Description</h4>
                        {!! $vehicule->description !!}
                    </div>

                    <ul class="single_car_departure_wrapper themeborder">
                        <li>
                            <div class="single_car_departure_title">Options incluses</div>
                            <div class="single_car_departure_content">
                                @php
                                    $x = 0;
                                @endphp
                                @foreach ($options as $option)
                                    @if ($vehicule->$option)
                                        <div class="one_half {{ $x == 0 || $x % 2 == 0 ? '' : 'last' }}">
                                            <span class="ti-check"></span>{{ reformat_text_option($option) }}
                                        </div>
                                        {{--  <div class="btn {{$vehicule->$option == 1 ? 'btn-outline-success'  : 'btn-outline-danger' }} btn-outline-success flex px-2 py-1 mr-2 mt-2 text-xs">
                                            {{reformat_text_option($option)}}
                                        </div> --}}
                                        @php
                                            $x++;
                                        @endphp
                                    @endif
                                @endforeach


                            </div>
                        </li>

                        <li>
                            <div class="single_car_departure_title">Non Inclusess</div>
                            <div class="single_car_departure_content">
                                @php
                                    $x = 0;
                                @endphp
                                @foreach ($options as $option)
                                    @if (!$vehicule->$option)
                                        <div class="one_half {{ $x == 0 || $x % 2 == 0 ? '' : 'last' }}">
                                            <span class="ti-check"></span>{{ reformat_text_option($option) }}
                                        </div>
                                        {{--  <div class="btn {{$vehicule->$option == 1 ? 'btn-outline-success'  : 'btn-outline-danger' }} btn-outline-success flex px-2 py-1 mr-2 mt-2 text-xs">
                                            {{reformat_text_option($option)}}
                                        </div> --}}
                                        @php
                                            $x++;
                                        @endphp
                                    @endif
                                @endforeach
                            </div>
                        </li>
                    </ul>

                    {{-- <div class="fullwidth_comment_wrapper sidebar">

                        <h3 class="comment_title">4 Reviews</h3>
                        <div class="avg_comment_rating_wrapper themeborder">
                            <div class="comment_rating_wrapper">
                                <div class="comment_rating_label">Driving</div>
                                <div class="br-theme-fontawesome-stars-o">
                                    <div class="br-widget">
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;"></a>
                                        <a href="javascript:;"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment_rating_wrapper">
                                <div class="comment_rating_label">Interior Layout</div>
                                <div class="br-theme-fontawesome-stars-o">
                                    <div class="br-widget">
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment_rating_wrapper">
                                <div class="comment_rating_label">Space &amp; Practicality</div>
                                <div class="br-theme-fontawesome-stars-o">
                                    <div class="br-widget">
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment_rating_wrapper">
                                <div class="comment_rating_label">Overall</div>
                                <div class="br-theme-fontawesome-stars-o">
                                    <div class="br-widget">
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;"></a>
                                        <a href="javascript:;"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a name="comments"></a>

                            <div class="comment" id="comment-20">
                                <div class="gravatar">
                                    <img src="upload/author1-100x100.jpg" width="60" height="60"
                                        alt="Jack Dawson"
                                        class="avatar avatar-60 wp-user-avatar wp-user-avatar-60 alignnone photo">
                                </div>

                                <div class="right ">

                                    <h7>Jack Dawson</h7>

                                    <div class="comment_date">January 17, 2017 at 1:56 pm</div>
                                    <a rel="nofollow" class="comment-reply-link" href="#"
                                        onclick="return addComment.moveForm( &quot;comment-20&quot;, &quot;20&quot;, &quot;respond&quot;, &quot;112&quot; )"
                                        aria-label="Reply to Jack Dawson">Reply</a>
                                    <div class="comment_text">
                                        <p>Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master
                                            cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up
                                            artisan sunt. Deep v cliche lomo biodiesel Neutra selfies. Shorts fixie
                                            consequat flexitarian four loko tempor duis single-origin coffee. Banksy,
                                            elit small batch freegan sed.</p>
                                        <div class="comment_rating_wrapper">
                                            <div class="comment_rating_label">Driving</div>
                                            <div class="br-theme-fontawesome-stars-o">
                                                <div class="br-widget">
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;"></a>
                                                    <a href="javascript:;"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment_rating_wrapper">
                                            <div class="comment_rating_label">Interior Layout</div>
                                            <div class="br-theme-fontawesome-stars-o">
                                                <div class="br-widget">
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment_rating_wrapper">
                                            <div class="comment_rating_label">Space &amp; Practicality</div>
                                            <div class="br-theme-fontawesome-stars-o">
                                                <div class="br-widget">
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment_rating_wrapper">
                                            <div class="comment_rating_label">Overall</div>
                                            <div class="br-theme-fontawesome-stars-o">
                                                <div class="br-widget">
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br class="clear">

                            <!-- #comment-## -->

                            <div class="comment" id="comment-21">
                                <div class="gravatar">
                                    <img src="upload/me-100x100.jpg" width="60" height="60"
                                        alt="Anna Kornikova"
                                        class="avatar avatar-60 wp-user-avatar wp-user-avatar-60 alignnone photo">
                                </div>

                                <div class="right ">

                                    <h7>Anna Kornikova</h7>

                                    <div class="comment_date">January 17, 2017 at 2:01 pm</div>
                                    <a rel="nofollow" class="comment-reply-link" href="#"
                                        onclick="return addComment.moveForm( &quot;comment-21&quot;, &quot;21&quot;, &quot;respond&quot;, &quot;112&quot; )"
                                        aria-label="Reply to Anna Kornikova">Reply</a>
                                    <div class="comment_text">
                                        <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan
                                            sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips
                                            proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod
                                            Pinterest in do umami readymade swag. Selfies iPhone Kickstarter, drinking
                                            vinegar jean vinegar stumptown yr pop-up artisan sunt. Craft beer elit
                                            seitan exercitation, photo booth,</p>
                                        <div class="comment_rating_wrapper">
                                            <div class="comment_rating_label">Driving</div>
                                            <div class="br-theme-fontawesome-stars-o">
                                                <div class="br-widget">
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment_rating_wrapper">
                                            <div class="comment_rating_label">Interior Layout</div>
                                            <div class="br-theme-fontawesome-stars-o">
                                                <div class="br-widget">
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment_rating_wrapper">
                                            <div class="comment_rating_label">Space &amp; Practicality</div>
                                            <div class="br-theme-fontawesome-stars-o">
                                                <div class="br-widget">
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;"></a>
                                                    <a href="javascript:;"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment_rating_wrapper">
                                            <div class="comment_rating_label">Overall</div>
                                            <div class="br-theme-fontawesome-stars-o">
                                                <div class="br-widget">
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;"></a>
                                                    <a href="javascript:;"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br class="clear">

                            <!-- #comment-## -->

                            <div class="comment" id="comment-22">
                                <div class="gravatar">
                                    <img src="upload/avatar-100x100.png" width="60" height="60"
                                        alt="Marie Argeris"
                                        class="avatar avatar-60 wp-user-avatar wp-user-avatar-60 alignnone photo">
                                </div>

                                <div class="right ">

                                    <h7>Marie Argeris</h7>

                                    <div class="comment_date">January 17, 2017 at 2:04 pm</div>
                                    <a rel="nofollow" class="comment-reply-link" href="#"
                                        onclick="return addComment.moveForm( &quot;comment-22&quot;, &quot;22&quot;, &quot;respond&quot;, &quot;112&quot; )"
                                        aria-label="Reply to Marie Argeris">Reply</a>
                                    <div class="comment_text">
                                        <p>Statement buttons cover-up tweaks patch pockets perennial lapel collar flap
                                            chest pockets topline stitching cropped jacket. Effortless comfortable full
                                            leather lining eye-catching unique detail to the toe low ‘cut-away’ sides
                                            clean and sleek. Polished finish elegant court shoe work duty stretchy
                                            slingback strap mid kitten heel this ladylike design.</p>
                                        <div class="comment_rating_wrapper">
                                            <div class="comment_rating_label">Driving</div>
                                            <div class="br-theme-fontawesome-stars-o">
                                                <div class="br-widget">
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment_rating_wrapper">
                                            <div class="comment_rating_label">Interior Layout</div>
                                            <div class="br-theme-fontawesome-stars-o">
                                                <div class="br-widget">
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;"></a>
                                                    <a href="javascript:;"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment_rating_wrapper">
                                            <div class="comment_rating_label">Space &amp; Practicality</div>
                                            <div class="br-theme-fontawesome-stars-o">
                                                <div class="br-widget">
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment_rating_wrapper">
                                            <div class="comment_rating_label">Overall</div>
                                            <div class="br-theme-fontawesome-stars-o">
                                                <div class="br-widget">
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br class="clear">

                            <!-- #comment-## -->

                            <div class="comment" id="comment-23">
                                <div class="gravatar">
                                    <img src="upload/author2-100x100.jpg" width="60" height="60"
                                        alt="Jessica Medina"
                                        class="avatar avatar-60 wp-user-avatar wp-user-avatar-60 alignnone photo">
                                </div>

                                <div class="right ">

                                    <h7>Jessica Medina</h7>

                                    <div class="comment_date">January 17, 2017 at 2:06 pm</div>
                                    <a rel="nofollow" class="comment-reply-link" href="#"
                                        onclick="return addComment.moveForm( &quot;comment-23&quot;, &quot;23&quot;, &quot;respond&quot;, &quot;112&quot; )"
                                        aria-label="Reply to Jessica Medina">Reply</a>
                                    <div class="comment_text">
                                        <p>Foam padding in the insoles leather finest quality staple flat slip-on design
                                            pointed toe off-duty shoe. Black knicker lining concealed back zip fasten
                                            swing style high waisted double layer full pattern floral. Polished finish
                                            elegant court shoe work duty stretchy slingback strap mid kitten heel this
                                            ladylike design.</p>
                                        <div class="comment_rating_wrapper">
                                            <div class="comment_rating_label">Driving</div>
                                            <div class="br-theme-fontawesome-stars-o">
                                                <div class="br-widget">
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;"></a>
                                                    <a href="javascript:;"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment_rating_wrapper">
                                            <div class="comment_rating_label">Interior Layout</div>
                                            <div class="br-theme-fontawesome-stars-o">
                                                <div class="br-widget">
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment_rating_wrapper">
                                            <div class="comment_rating_label">Space &amp; Practicality</div>
                                            <div class="br-theme-fontawesome-stars-o">
                                                <div class="br-widget">
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment_rating_wrapper">
                                            <div class="comment_rating_label">Overall</div>
                                            <div class="br-theme-fontawesome-stars-o">
                                                <div class="br-widget">
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;"></a>
                                                    <a href="javascript:;"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br class="clear">

                            <!-- #comment-## -->
                        </div>

                        <!-- End of thread -->
                        <div style="height:10px"></div>

                        <div id="respond" class="comment-respond">
                            <h3 id="reply-title" class="comment-reply-title">Write A Review <small><a rel="nofollow"
                                        id="cancel-comment-reply-link" href="#" style="display:none;">Cancel
                                        reply</a></small></h3>
                            <form action="#" method="post" id="commentform" class="comment-form">
                                <p class="comment-notes"><span id="email-notes">Votre Adresse Email will not be
                                        published.</span> Required fields are marked <span class="required">*</span>
                                </p>
                                <p class="comment-form-comment">
                                    <label for="comment">Comment</label>
                                    <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea>
                                </p>
                                <p class="comment-form-author">
                                    <label for="author">Name <span class="required">*</span></label>
                                    <input id="author" name="author" type="text" value=""
                                        size="30" maxlength="245" required="required">
                                </p>
                                <p class="comment-form-email">
                                    <label for="email">Email <span class="required">*</span></label>
                                    <input id="email" name="email" type="text" value=""
                                        size="30" maxlength="100" aria-describedby="email-notes"
                                        required="required">
                                </p>
                                <p class="comment-form-url">
                                    <label for="url">Website</label>
                                    <input id="url" name="url" type="text" value=""
                                        size="30" maxlength="200">
                                </p>
                                <p class="comment-form-rating">
                                    <label for="driving_rating">Driving</label>
                                    <span class="commentratingbox">
                                        <div class="br-wrapper br-theme-fontawesome-stars-o"><select
                                                id="driving_rating" name="driving_rating" style="display: none;">
                                                <option value="0"></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <div class="br-widget"><a href="#" data-rating-value="1"
                                                    data-rating-text="1" class=""></a><a href="#"
                                                    data-rating-value="2" data-rating-text="2"></a><a href="#"
                                                    data-rating-value="3" data-rating-text="3"></a><a href="#"
                                                    data-rating-value="4" data-rating-text="4"></a><a href="#"
                                                    data-rating-value="5" data-rating-text="5"></a>
                                                <div class="br-current-rating"></div>
                                            </div>
                                        </div>
                                    </span>
                                </p>
                                <p class="comment-form-rating"><label for="interior_rating">Interior Layout</label>
                                    <span class="commentratingbox">
                                        <div class="br-wrapper br-theme-fontawesome-stars-o"><select
                                                id="interior_rating" name="interior_rating" style="display: none;">
                                                <option value="0"></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <div class="br-widget"><a href="#" data-rating-value="1"
                                                    data-rating-text="1" class=""></a><a href="#"
                                                    data-rating-value="2" data-rating-text="2"></a><a href="#"
                                                    data-rating-value="3" data-rating-text="3"></a><a href="#"
                                                    data-rating-value="4" data-rating-text="4"></a><a href="#"
                                                    data-rating-value="5" data-rating-text="5"></a>
                                                <div class="br-current-rating"></div>
                                            </div>
                                        </div>
                                    </span>
                                </p>
                                <p class="comment-form-rating"><label for="space_rating">Space &amp;
                                        Practicality</label>
                                    <span class="commentratingbox">
                                        <div class="br-wrapper br-theme-fontawesome-stars-o"><select id="space_rating"
                                                name="space_rating" style="display: none;">
                                                <option value="0"></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <div class="br-widget"><a href="#" data-rating-value="1"
                                                    data-rating-text="1" class=""></a><a href="#"
                                                    data-rating-value="2" data-rating-text="2"></a><a href="#"
                                                    data-rating-value="3" data-rating-text="3"></a><a href="#"
                                                    data-rating-value="4" data-rating-text="4"></a><a href="#"
                                                    data-rating-value="5" data-rating-text="5"></a>
                                                <div class="br-current-rating"></div>
                                            </div>
                                        </div>
                                    </span>
                                </p>
                                <p class="comment-form-rating"><label for="overall_rating">Overall</label>
                                    <span class="commentratingbox">
                                        <div class="br-wrapper br-theme-fontawesome-stars-o"><select
                                                id="overall_rating" name="overall_rating" style="display: none;">
                                                <option value="0"></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <div class="br-widget"><a href="#" data-rating-value="1"
                                                    data-rating-text="1" class=""></a><a href="#"
                                                    data-rating-value="2" data-rating-text="2"></a><a href="#"
                                                    data-rating-value="3" data-rating-text="3"></a><a href="#"
                                                    data-rating-value="4" data-rating-text="4"></a><a href="#"
                                                    data-rating-value="5" data-rating-text="5"></a>
                                                <div class="br-current-rating"></div>
                                            </div>
                                        </div>
                                    </span>
                                </p>
                                <p class="form-submit"><input name="submit" type="submit" id="submit"
                                        class="submit" value="Post Review"> <input type="hidden"
                                        name="comment_post_ID" value="112" id="comment_post_ID">
                                    <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                </p>
                            </form>
                        </div><!--  -->

                    </div> --}}
                </div>
                <div class="reservation_form">
                    <div class="single_car_header_price">
                        <span id="single_car_price"><span class="single_car_price">
                                {{ reformat_price($vehicule->montant_location) }}</span> <span
                                class="single_car_currency">CFA</span></span>
                        <span id="single_car_price_per_unit_change" class="single_car_price_per_unit">
                            <span id="single_car_unit">Par Jour</span>


                        </span>
                    </div>
                    <div class="reservation_form_form">
                        <form action="##wpcf7-f5-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                            <h4 class="text-center mb-2">Reservez dès maintenant</h4>
                            <div>
                                <label> Civilité
                                    <br>
                                    @error('civilite')
                                        <p class="error-message">{{ $message }}</p>
                                    @enderror
                                    <span class="wpcf7-form-control-wrap pickup-address">
                                        <select wire:model="civilite" id="type" name="type_vehicule">
                                            <option value="">Civilité</option>
                                            @foreach ($civilites as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </span>
                                </label>
                            </div>
                            <div>
                                <label> Nom complet
                                    <br>
                                    @error('name')
                                        <p class="error-message">{{ $message }}</p>
                                    @enderror
                                    <span class="wpcf7-form-control-wrap your-name">
                                        <input wire:model="name" type="text"
                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                            aria-required="true" aria-invalid="false"
                                            placeholder="Ex: Moussa DIALLO">
                                    </span>
                                </label>
                            </div>
                            <div>
                                <label> Adresse Email
                                    <br>
                                    @error('email')
                                        <p class="error-message">{{ $message }}</p>
                                    @enderror
                                    <span class="wpcf7-form-control-wrap your-name">
                                        <input wire:model="email" type="email"
                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                            aria-required="true" aria-invalid="false"
                                            placeholder="Ex: contact@elitedakar.com">
                                    </span>
                                </label>
                            </div>
                            <div>
                                <label> Numero de téléphone
                                    <br>
                                    @error('telephone')
                                        <p class="error-message">{{ $message }}</p>
                                    @enderror
                                    <span class="wpcf7-form-control-wrap your-tel">
                                        <input wire:model="telephone" type="tel" name="your-tel" value=""
                                            size="40"
                                            class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                                            aria-required="true" aria-invalid="false"
                                            placeholder="+221 77 686 37 60">
                                    </span>
                                </label>
                            </div>
                            <div>
                                <label> Adresse
                                    <br>
                                    @error('adresse')
                                        <p class="error-message">{{ $message }}</p>
                                    @enderror
                                    <span class="wpcf7-form-control-wrap dropoff-address">
                                        <input wire:model="adresse" type="text" name="dropoff-address"
                                            value="" size="40"
                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                            aria-required="true" aria-invalid="false" placeholder="Point E, Dakar">
                                    </span>
                                </label>
                            </div>
                            <div>
                                <label> Début de la réservation
                                    <br>
                                    @error('debut')
                                        <p class="error-message">{{ $message }}</p>
                                    @enderror
                                    <span class="wpcf7-form-control-wrap pickup-date">
                                        <input type="date" wire:model="debut" value="mm/dd/yyyy"
                                            class="wpcf7-form-control wpcf7-date wpcf7-validates-as-required wpcf7-validates-as-date"
                                            aria-required="true" aria-invalid="false">
                                    </span>
                                </label>
                            </div>
                            <div>
                                <label> Fin de la réservation
                                    <br>
                                    @error('fin')
                                        <p class="error-message">{{ $message }}</p>
                                    @enderror
                                    <span class="wpcf7-form-control-wrap dropoff-date">
                                        <input type="date" wire:model="fin" value="mm/dd/yyyy"
                                            class="wpcf7-form-control wpcf7-date wpcf7-validates-as-required wpcf7-validates-as-date"
                                            aria-required="true" aria-invalid="false">
                                    </span>
                                </label>
                            </div>

                            <div class="bloc-btn-reserver">

                                <button type="button" wire:click="reserver" class="btn-primary">
                                    Réserver
                                </button>
                                OU
                                @if(!empty($vehicule->user->phone))
                                    <a href="https://wa.me/+221{{$vehicule->user->phone}}/?text={{ url()->current() }}%0a%0aBonjour, "
                                        target="_blank" class="btn-primary btn-whatsapp">
                                        <i class="fab fa-whatsapp"></i> Réserver via Whatsapp
                                    </a>
                                @else
                                    <a href="https://wa.me/+221762800137/?text={{ url()->current() }}%0a%0aBonjour, "
                                        target="_blank" class="btn-primary btn-whatsapp">
                                        <i class="fab fa-whatsapp"></i> Réserver via Whatsapp
                                    </a>
                                @endif
                            </div>
                        </form>
                    </div>

                </div>
                {{-- <div
                    style="position: static; width: 331px; height: 1192px; display: block; vertical-align: baseline; float: right;">
                    <div class="sidebar_wrapper is_stuck"
                        style="position: absolute; top: auto; width: 331px; bottom: 0px;">

                        <div class="sidebar_top"></div>

                        <div class="sidebar">

                            <div class="content">

                                <div class="single_car_header_price">
                                    <span id="single_car_price_scroll"><span class="single_car_currency">$</span><span
                                            class="single_car_price">84</span></span>
                                    <span id="single_car_price_per_unit_change_scroll"
                                        class="single_car_price_per_unit">
                                        <span id="single_car_unit_scroll">Per Day</span>
                                        <span class="ti-angle-down"></span>

                                        <ul id="price_per_unit_select_scroll">
                                            <li class="icon arrow"></li>
                                            <li class="active">
                                                <a class="active" href="javascript:;" data-filter="car_price_day"
                                                    data-price="<span class=&quot;single_car_currency&quot;>$</span><span class=&quot;single_car_price&quot;>84</span>">Per
                                                    Day</a>
                                            </li>
                                            <li>
                                                <a class="active" href="javascript:;" data-filter="car_price_hour"
                                                    data-price="<span class=&quot;single_car_currency&quot;>$</span><span class=&quot;single_car_price&quot;>10</span>">Per
                                                    Hour</a>
                                            </li>
                                            <li>
                                                <a class="active" href="javascript:;" data-filter="car_price_airport"
                                                    data-price="<span class=&quot;single_car_currency&quot;>$</span><span class=&quot;single_car_price&quot;>99</span>">Airport
                                                    Transfer</a>
                                            </li>
                                        </ul>
                                    </span>
                                    <hr>
                                </div>

                                <div class="single_car_booking_wrapper themeborder book_instantly">
                                    <div role="form" class="wpcf7" id="wpcf7-f5-o1" lang="en-US"
                                        dir="ltr">
                                        <div class="screen-reader-response"></div>
                                        <form action="##wpcf7-f5-o1" method="post" class="wpcf7-form"
                                            novalidate="novalidate">

                                            <p>
                                                <label> Full Name
                                                    <br>
                                                    <span class="wpcf7-form-control-wrap your-name"><input
                                                            type="text" name="your-name" value=""
                                                            size="40"
                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                            aria-required="true" aria-invalid="false"
                                                            placeholder="John Doe"></span> </label>
                                            </p>
                                            <p>
                                                <label> Email Address
                                                    <br>
                                                    <span class="wpcf7-form-control-wrap your-email"><input
                                                            type="email" name="your-email" value=""
                                                            size="40"
                                                            class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                            aria-required="true" aria-invalid="false"
                                                            placeholder="sample@yourcompany.com"></span> </label>
                                            </p>
                                            <p>
                                                <label> Phone Number
                                                    <br>
                                                    <span class="wpcf7-form-control-wrap your-tel"><input
                                                            type="tel" name="your-tel" value=""
                                                            size="40"
                                                            class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                                                            aria-required="true" aria-invalid="false"
                                                            placeholder="+66-4353434"></span> </label>
                                            </p>
                                            <p>
                                                <label> Pickup Address
                                                    <br>
                                                    <span class="wpcf7-form-control-wrap pickup-address"><input
                                                            type="text" name="pickup-address" value=""
                                                            size="40"
                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                            aria-required="true" aria-invalid="false"
                                                            placeholder="34 Mainfield Road"></span> </label>
                                            </p>
                                            <p>
                                                <label> Pickup Date
                                                    <br>
                                                    <span class="wpcf7-form-control-wrap pickup-date"><input
                                                            type="date" name="pickup-date" value="mm/dd/yyyy"
                                                            class="wpcf7-form-control wpcf7-date wpcf7-validates-as-required wpcf7-validates-as-date"
                                                            aria-required="true" aria-invalid="false"></span> </label>
                                            </p>
                                            <p>
                                                <label> Pickup Time
                                                    <br>
                                                    <span class="wpcf7-form-control-wrap pickup-time"><select
                                                            name="pickup-time"
                                                            class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required"
                                                            aria-required="true" aria-invalid="false">
                                                            <option value="">---</option>
                                                            <option value="1:00">1:00</option>
                                                            <option value="1:30">1:30</option>
                                                            <option value="2:00">2:00</option>
                                                            <option value="2:30">2:30</option>
                                                            <option value="3:00">3:00</option>
                                                            <option value="3:30">3:30</option>
                                                            <option value="5:00">5:00</option>
                                                            <option value="5:30">5:30</option>
                                                            <option value="6:00">6:00</option>
                                                            <option value="6:30">6:30</option>
                                                            <option value="7:00">7:00</option>
                                                            <option value="7:30">7:30</option>
                                                            <option value="8:00">8:00</option>
                                                            <option value="8:30">8:30</option>
                                                            <option value="9:00">9:00</option>
                                                            <option value="9:30">9:30</option>
                                                            <option value="10:00">10:00</option>
                                                            <option value="10:30">10:30</option>
                                                            <option value="11:00">11:00</option>
                                                            <option value="11:30">11:30</option>
                                                            <option value="12:00">12:00</option>
                                                            <option value="12:30">12:30</option>
                                                            <option value="13:00">13:00</option>
                                                            <option value="13:30">13:30</option>
                                                            <option value="14:00">14:00</option>
                                                            <option value="14:30">14:30</option>
                                                            <option value="15:00">15:00</option>
                                                            <option value="15:30">15:30</option>
                                                            <option value="16:00">16:00</option>
                                                            <option value="16:30">16:30</option>
                                                            <option value="17:00">17:00</option>
                                                            <option value="17:30">17:30</option>
                                                            <option value="18:00">18:00</option>
                                                            <option value="18:30">18:30</option>
                                                            <option value="19:00">19:00</option>
                                                            <option value="19:30">19:30</option>
                                                            <option value="20:00">20:00</option>
                                                            <option value="20:30">20:30</option>
                                                            <option value="21:00">21:00</option>
                                                            <option value="21:30">21:30</option>
                                                            <option value="22:00">22:00</option>
                                                            <option value="22:30">22:30</option>
                                                            <option value="23:00">23:00</option>
                                                            <option value="23:30">23:30</option>
                                                            <option value="24:00">24:00</option>
                                                            <option value="24:30">24:30</option>
                                                        </select></span> </label>
                                            </p>
                                            <p>
                                                <label> Drop Off Address
                                                    <br>
                                                    <span class="wpcf7-form-control-wrap dropoff-address"><input
                                                            type="text" name="dropoff-address" value=""
                                                            size="40"
                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                            aria-required="true" aria-invalid="false"
                                                            placeholder="Heatrow Airport"></span> </label>
                                            </p>
                                            <p>
                                                <label> Drop Off Date
                                                    <br>
                                                    <span class="wpcf7-form-control-wrap dropoff-date"><input
                                                            type="date" name="dropoff-date" value="mm/dd/yyyy"
                                                            class="wpcf7-form-control wpcf7-date wpcf7-validates-as-required wpcf7-validates-as-date"
                                                            aria-required="true" aria-invalid="false"></span> </label>
                                            </p>
                                            <p>
                                                <label> Drop Off Time
                                                    <br>
                                                    <span class="wpcf7-form-control-wrap dropoff-time"><select
                                                            name="dropoff-time"
                                                            class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required"
                                                            aria-required="true" aria-invalid="false">
                                                            <option value="">---</option>
                                                            <option value="1:00">1:00</option>
                                                            <option value="1:30">1:30</option>
                                                            <option value="2:00">2:00</option>
                                                            <option value="2:30">2:30</option>
                                                            <option value="3:00">3:00</option>
                                                            <option value="3:30">3:30</option>
                                                            <option value="5:00">5:00</option>
                                                            <option value="5:30">5:30</option>
                                                            <option value="6:00">6:00</option>
                                                            <option value="6:30">6:30</option>
                                                            <option value="7:00">7:00</option>
                                                            <option value="7:30">7:30</option>
                                                            <option value="8:00">8:00</option>
                                                            <option value="8:30">8:30</option>
                                                            <option value="9:00">9:00</option>
                                                            <option value="9:30">9:30</option>
                                                            <option value="10:00">10:00</option>
                                                            <option value="10:30">10:30</option>
                                                            <option value="11:00">11:00</option>
                                                            <option value="11:30">11:30</option>
                                                            <option value="12:00">12:00</option>
                                                            <option value="12:30">12:30</option>
                                                            <option value="13:00">13:00</option>
                                                            <option value="13:30">13:30</option>
                                                            <option value="14:00">14:00</option>
                                                            <option value="14:30">14:30</option>
                                                            <option value="15:00">15:00</option>
                                                            <option value="15:30">15:30</option>
                                                            <option value="16:00">16:00</option>
                                                            <option value="16:30">16:30</option>
                                                            <option value="17:00">17:00</option>
                                                            <option value="17:30">17:30</option>
                                                            <option value="18:00">18:00</option>
                                                            <option value="18:30">18:30</option>
                                                            <option value="19:00">19:00</option>
                                                            <option value="19:30">19:30</option>
                                                            <option value="20:00">20:00</option>
                                                            <option value="20:30">20:30</option>
                                                            <option value="21:00">21:00</option>
                                                            <option value="21:30">21:30</option>
                                                            <option value="22:00">22:00</option>
                                                            <option value="22:30">22:30</option>
                                                            <option value="23:00">23:00</option>
                                                            <option value="23:30">23:30</option>
                                                            <option value="24:00">24:00</option>
                                                            <option value="24:30">24:30</option>
                                                        </select></span> </label><span
                                                    class="wpcf7-form-control-wrap dynamictitle"><input type="hidden"
                                                        name="dynamictitle" value="Audi A4" size="40"
                                                        class="wpcf7-form-control wpcf7dtx-dynamictext wpcf7-dynamichidden"
                                                        aria-invalid="false"></span><span
                                                    class="wpcf7-form-control-wrap dynamicurl"><input type="hidden"
                                                        name="dynamicurl" value="#" size="40"
                                                        class="wpcf7-form-control wpcf7dtx-dynamictext wpcf7-dynamichidden"
                                                        aria-invalid="false"></span>
                                            </p>
                                            <p>
                                                <input type="submit" value="Request for Booking"
                                                    class="wpcf7-form-control wpcf7-submit">
                                            </p>
                                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                                        </form>
                                    </div>
                                    <div class="single_car_booking_divider">
                                        <span class="single_car_booking_divider_content">or</span>
                                    </div>
                                    <div class="single_car_booking_woocommerce_wrapper">
                                        <button data-product="132" data-processing="Please wait..." data-url="#"
                                            class="single_car_add_to_cart button">Book Instantly</button>
                                    </div>
                                    <div class="single_car_view_wrapper themeborder">
                                        <div class="single_car_view_desc">
                                            This car's been viewed&nbsp;544&nbsp;times in the past week </div>

                                        <div class="single_car_view_icon ti-alarm-clock"></div>
                                    </div>
                                    <br class="clear">
                                </div>

                                <a id="single_car_share_button" href="javascript:;"
                                    class="button ghost themeborder"><span class="ti-email"></span>Share this car</a>

                                <div class="single_car_users_online_wrapper themeborder">
                                    <div class="single_car_users_online_icon">
                                        <span class="ti-info-alt"></span>
                                    </div>
                                    <div class="single_car_users_online_content">
                                        <strong>231</strong> traveler(s) are considering our cars right now!
                                    </div>
                                </div>

                            </div>

                        </div>
                        <br class="clear">

                        <div class="sidebar_bottom"></div>
                    </div>
                </div> --}}

            </div>
            <!-- End main content -->

            <br class="clear">
            {{--  <div class="car_related">
                <h3 class="sub_title">Similar cars</h3>
                <div id="portfolio_filter_wrapper"
                    class="gallery classic three_cols portfolio-content section content clearfix" data-columns="3">
                    <div class="element grid classic3_cols">
                        <div class="one_third gallery3 classic static filterable portfolio_type themeborder"
                            data-id="post-141">

                            <a class="car_image" href="#">
                                <img src="upload/Mercedes-C-Class-Estate-1-700x466.jpg" alt="Mercedes Benz C-Class">
                            </a>

                            <div class="portfolio_info_wrapper">
                                <div class="car_attribute_wrapper">
                                    <a class="car_link" href="#">
                                        <h4>Mercedes Benz C-Class</h4>
                                    </a>
                                    <div class="car_attribute_rating">
                                        <div class="br-theme-fontawesome-stars-o">
                                            <div class="br-widget">
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;"></a>
                                            </div>
                                        </div>
                                        <div class="car_attribute_rating_count">
                                            4&nbsp; reviews </div>
                                    </div>

                                    <div class="car_attribute_wrapper_icon">
                                        <div class="one_fourth">
                                            <div class="car_attribute_icon ti-user"></div>
                                            <div class="car_attribute_content">
                                                5 </div>
                                        </div>

                                        <div class="one_fourth">
                                            <div class="car_attribute_icon ti-briefcase"></div>
                                            <div class="car_attribute_content">
                                                2 </div>
                                        </div>

                                        <div class="one_fourth">
                                            <div class="car_attribute_icon ti-panel"></div>
                                            <div class="car_attribute_content">
                                                Auto </div>
                                        </div>

                                    </div>
                                    <br class="clear">
                                </div>
                                <div class="car_attribute_price">
                                    <div class="car_attribute_price_day three_cols">
                                        <span class="single_car_currency">$</span><span
                                            class="single_car_price">90</span> <span class="car_unit_day">Per
                                            Day</span>
                                    </div>
                                </div>
                                <br class="clear">
                            </div>
                        </div>
                    </div>
                    <div class="element grid classic3_cols">
                        <div class="one_third gallery3 classic static filterable portfolio_type themeborder"
                            data-id="post-251">

                            <a class="car_image" href="#">
                                <img src="upload/2017-lexus-ls-460-2-700x466.jpg" alt="Lexus LS 460">
                            </a>

                            <div class="portfolio_info_wrapper">
                                <div class="car_attribute_wrapper">
                                    <a class="car_link" href="#">
                                        <h4>Lexus LS 460</h4>
                                    </a>
                                    <div class="car_attribute_rating">
                                        <div class="br-theme-fontawesome-stars-o">
                                            <div class="br-widget">
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;"></a>
                                                <a href="javascript:;"></a>
                                            </div>
                                        </div>
                                        <div class="car_attribute_rating_count">
                                            4&nbsp; reviews </div>
                                    </div>

                                    <div class="car_attribute_wrapper_icon">
                                        <div class="one_fourth">
                                            <div class="car_attribute_icon ti-user"></div>
                                            <div class="car_attribute_content">
                                                5 </div>
                                        </div>

                                        <div class="one_fourth">
                                            <div class="car_attribute_icon ti-briefcase"></div>
                                            <div class="car_attribute_content">
                                                4 </div>
                                        </div>

                                        <div class="one_fourth">
                                            <div class="car_attribute_icon ti-panel"></div>
                                            <div class="car_attribute_content">
                                                Auto </div>
                                        </div>

                                    </div>
                                    <br class="clear">
                                </div>
                                <div class="car_attribute_price">
                                    <div class="car_attribute_price_day three_cols">
                                        <span class="single_car_currency">$</span><span
                                            class="single_car_price">99</span> <span class="car_unit_day">Per
                                            Day</span>
                                    </div>
                                </div>
                                <br class="clear">
                            </div>
                        </div>
                    </div>
                    <div class="element grid classic3_cols">
                        <div class="one_third gallery3 classic static filterable portfolio_type themeborder"
                            data-id="post-255">

                            <a class="car_image" href="#">
                                <img src="upload/Porsche-Panamera-700x466.jpg" alt="Porsche Panamera">
                            </a>

                            <div class="portfolio_info_wrapper">
                                <div class="car_attribute_wrapper">
                                    <a class="car_link" href="#">
                                        <h4>Porsche Panamera</h4>
                                    </a>
                                    <div class="car_attribute_rating">
                                        <div class="br-theme-fontawesome-stars-o">
                                            <div class="br-widget">
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;"></a>
                                            </div>
                                        </div>
                                        <div class="car_attribute_rating_count">
                                            4&nbsp; reviews </div>
                                    </div>

                                    <div class="car_attribute_wrapper_icon">
                                        <div class="one_fourth">
                                            <div class="car_attribute_icon ti-user"></div>
                                            <div class="car_attribute_content">
                                                4 </div>
                                        </div>

                                        <div class="one_fourth">
                                            <div class="car_attribute_icon ti-briefcase"></div>
                                            <div class="car_attribute_content">
                                                4 </div>
                                        </div>

                                        <div class="one_fourth">
                                            <div class="car_attribute_icon ti-panel"></div>
                                            <div class="car_attribute_content">
                                                Auto </div>
                                        </div>

                                    </div>
                                    <br class="clear">
                                </div>
                                <div class="car_attribute_price">
                                    <div class="car_attribute_price_day three_cols">
                                        <span class="single_car_currency">$</span><span
                                            class="single_car_price">252</span> <span class="car_unit_day">Per
                                            Day</span>
                                    </div>
                                </div>
                                <br class="clear">
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

        </div>
    </div>
</div>
