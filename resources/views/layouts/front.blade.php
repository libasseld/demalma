<!DOCTYPE html>
<html lang="en-US" data-menu="leftalign">


<!-- Mirrored from max-themes.net/demos/carrental/{{ route('home') }} by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Mar 2023 14:36:48 GMT -->

<head>


    <link rel="shortcut icon" href="upload/TG-Thumb.png" />

    <title>Groupe Demalma </title>


    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="format-detection" content="telephone=no">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="icon" type="image/x-icon" href="{{ asset('template-assets/imgs/template/icons/favicon.svg') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel='stylesheet' href="{{ asset('template-assets/css/style28b5.css?v=2.0.0') }}" type='text/css'
        media='all' />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css?family=Work+Sans%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900%7CPoppins%3A300%2Cregular%2C500%2C600%2C700%2C900&amp;subset'
        type='text/css' media='all' />

    @livewireStyles

    <style>
        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-float {
            margin-top: 16px;
        }

        #page_caption.hasbg {
            max-height: 380px;
        }

        .e-parking#page_caption.hasbg {
            max-height: 280px;
        }

        .e-parking .jarallax-container-0 img {
            height: 280.797px;
        }

        .e-parking .parallax {
            min-height: 280px;
        }

        @media only screen and (max-width: 767px) {
            #page_caption.hasbg {
                max-height: 70px;
            }

            .jarallax-container-0 img {
                height: 280.797px;
            }

            .parallax {
                min-height: 280px;
            }

        }


        #car_search_btn {
            width: 100%;
        }

        .whats-float {
            position: fixed;
            transform: translate(135px, 0px);
            bottom: 75px;
            right: 0;
            width: 180px;
            overflow: hidden;
            background-color: #25d366;
            color: #FFF;
            border-radius: 2px 0 0 2px;
            z-index: 10;
            transition: all 0.5s ease-in-out;
            vertical-align: middle
        }

        .whats-float a span {
            color: white;
            font-size: 15px;
            padding-top: 8px;
            padding-bottom: 10px;
            position: absolute;
            line-height: 16px;
            font-weight: bolder;
        }

        .whats-float i {
            font-size: 30px;
            color: white;
            line-height: 30px;
            padding: 10px;
            transform: rotate(0deg);
            transition: all 0.5s ease-in-out;
            text-align: center;

        }

        .whats-float:hover {
            color: #FFFFFF;
            transform: translate(0px, 0px);
        }

        .whats-float:hover i {
            transform: rotate(360deg);
        }

        .bloc-btn-reserver {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .bloc-btn-reserver button,
        .bloc-btn-reserver a {
            margin: 0px;
            font-size: 14px;
            padding: 5px 10px;
            transition: transform .9s;
            /* Animation */

        }

        .btn-whatsapp {
            background-color: #25d366;
            color: #FFF;
        }

        .btn-primary:hover {
            background-color: #c5670a;
            transform: scale(1.1);
        }

        .btn-whatsapp:hover {
            background-color: #17863f;
            transform: scale(1.1);
        }

        .about-area {
            margin: 0px 0px 20px 0px;
        }

        .about-area {
            position: relative;
            z-index: 1;
        }

        .section-padding {
            padding: 100px 0;
        }

        .position-relative {
            position: relative !important;
        }

        .position-relative {
            position: relative !important;
        }
    </style>
</head>

<body>




    @include('layouts.partials.header')
    <main class="main">
        {{ $slot }}

    </main>


    @include('layouts.partials.footer')





    <script type='text/javascript' src="{{ asset('template-assets/js/jquery.js') }}"></script>
    <script src="{{ asset('template-assets/js/vendors/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('template-assets/js/vendors/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('template-assets/js/vendors/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('template-assets/js/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template-assets/js/vendors/waypoints.js') }}"></script>
    <script src="{{ asset('template-assets/js/vendors/wow.js') }}"></script>
    <script src="{{ asset('template-assets/js/vendors/magnific-popup.js') }}"></script>
    <script src="{{ asset('template-assets/js/vendors/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('template-assets/js/vendors/select2.min.js') }}"></script>
    <script src="{{ asset('template-assets/js/vendors/isotope.js') }}"></script>
    <script src="{{ asset('template-assets/js/vendors/scrollup.js') }}"></script>
    <script src="{{ asset('template-assets/js/vendors/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('template-assets/js/vendors/noUISlider.js') }}"></script>
    <script src="{{ asset('template-assets/js/vendors/slider.js') }}"></script>
    <!-- Count down-->
    <script src="{{ asset('template-assets/js/vendors/counterup.js') }}"></script>
    <script src="{{ asset('template-assets/js/vendors/jquery.countdown.min.js') }}"></script>
    <!-- Count down-->
    <script src="{{ asset('template-assets/js/vendors/jquery.elevatezoom.js') }}"></script>
    <script src="{{ asset('template-assets/js/vendors/slick.js') }}"></script>
    <script src="{{ asset('template-assets/js/main28b5.js?v=2.0.0') }}"></script>

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session()->has('swal_msg'))
        <script>
            notification = @json(session()->pull('swal_msg'));
            Swal.fire(notification.title, notification.message, notification.type);

            @php
                //session()->forget('swal_msg');
            @endphp
        </script>
    @endif
    <style>
        .hidden-vw_drop_doown {
            display: none !important;
        }
        .sub-menu {
            align-items: center;
        }

        .megamenu {
            position: relative;
            opacity: 1;
            visibility: visible;
            display: flex;
            top: auto;
            left: auto;
            background: transparent;
            border: 0px;
            box-shadow: none;
            display: flex;
            flex-wrap: wrap;
            width:100%;
        }

        .left-items {
            display: flex;
            flex-direction: column;
            min-width: 210px;
        }
        .megamenu-items{
            
        }
        .megamenu-item {
            padding: 12px !important;
            display: flex !important;
            align-items: center !important;
            background: #f4d9ea;
            border-radius: 10px;
            justify-content: center;
            margin-right: 5px;
            margin-bottom: 5px;
            }
            .megamenu-item:hover{
                background: rgb(198, 31, 139);
                color: #FFFFFF !important;
            }
        .menu-col{
            padding: 5px 5px;
        }
        .menu-image{
            height: 20px;
            margin-right: 5px;
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", (event) => {
            let items = document.querySelectorAll('.vw_drop_doown')
            items.forEach(element => {
                let ul = document.getElementById(`vwdropdoown${element.dataset.ulid}`)
                element.onmouseover = function() {
                    ul.classList.remove("hidden-vw_drop_doown");
                }
                element.onmouseout = function() {
                    console.log(ul);
                    ul.classList.add("hidden-vw_drop_doown");
                }
            });
        });
    </script>
</body>


<!-- Mirrored from max-themes.net/demos/carrental/{{ route('home') }} by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Mar 2023 14:38:42 GMT -->

</html>

<!--
Performance optimized by W3 Total Cache. En savoir plus: https://www.w3-edge.com/products/

Page Caching using disk: enhanced
Content Delivery Network via themegoods-cdn-pzbycso8wng.stackpathdns.com

Served from: themes.themegoods.com @ 2019-10-28 10:07:46 by W3 Total Cache
-->
