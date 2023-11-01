<div id="page_content_wrapper" class="hasbg withtopbar ">
    <form id="car_search_form" name="car_search_form" method="get"
        >
        <div class="car_search_wrapper">
            <div class="one_fourth themeborder">
                <select id="brand" wire:model="marque_id">
                    <option value="">Toutes les marques </option>
                    @foreach ($marques as $marque)
                        <option value="{{ $marque->id }}">{{ $marque->titre }}</option>
                    @endforeach
                </select>
                <span class="ti-angle-down"></span>
            </div>
            <div class="one_fourth themeborder">
                <select id="type" name="type" wire:model="type_vehicule_id">
                    <option value="">Tous les Types de véhicule</option>
                    @foreach ($types as $type)
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
                <input id="car_search_btn" type="button" class="button" value="Rechercher" />
            </div>
        </div>
    </form>

    <!-- Begin content -->

    <div class="inner">

        <div class="inner_wrapper nopadding">

            <div id="page_main_content" class="sidebar_content full_width fixed_column">
                <div class="car_container">
                    <div class="container {{count($items) >= 3 ? 'justify-between' : '' }}">
                        @foreach ($items as $item)
                        <a href="{{route('car-detail', ["slug"=>$item->slug])}}" class="card">
                            <div class="card__header">
                                <img src="storage/{{$item->photo_face }}" alt="card__image"
                                    class="card__image" width="600">
                            </div>
                            <div class="card__body">
                                <h4>{{$item->name}}</h4>
                                <div class="car_card__pricing">
                                    <span class="car_card__pricing-value">
                                        {{reformat_price($item->montant_location)}}
                                    </span>
                                    <span>
                                        /{{$item->type_location->name}}
                                    </span>
                                </div>
                               
                            </div>
                            
                        </a>
                    @endforeach
                    </div>
                   
                </div>
                {{--  <div class="standard_wrapper">

                    <div id="portfolio_filter_wrapper" class="gallery grid three_cols portfolio-content section content clearfix" data-columns="3">

                        @foreach ($items as $item)
                        <div class="element grid classic2_cols animated2">

                            <div class="one_half gallery2 grid static filterable portfolio_type themeborder" data-id="post-2" style="background-image:url(storage/{{$item->photo_face }});">
                                <a class="car_image" href="#"></a>
                                
                            </div>
                            <div class="car_description">
                                <div class="car_attribute_wrapper">
                                    <h4>{{$item->name}}</h4>

                                    <div class="car_attribute_wrapper_icon">
                                        <div class="one_fourth">
                                            <div class="car_attribute_icon ti-user"></div>
                                            <div class="car_attribute_content">
                                                4 </div>
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
                                    <br class="clear" />
                                </div>
                                <div class="car_attribute_price">
                                    <div class="car_attribute_price_day two_cols">
                                        <span class="single_car_price">{{$item->montant_location}}</span><span class="single_car_currency">F</span><span class="car_unit_day">Par jour</span>
                                    </div>
                                </div>
                                <br class="clear" />
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                    <br class="clear" />
                    <div class="pagination"><span class="current">1</span><a href='#' class="inactive">2</a></div>
                    <div class="pagination_detail">
                        Page 1 sur 2 </div>

                </div> --}}
            </div>

        </div>
    </div>
</div>
