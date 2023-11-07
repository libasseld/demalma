<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from html.Demalma.sbthemes.com/apps-scrumboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Mar 2023 11:58:14 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Demalma </title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/x-icon" href="favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" type="text/css" media="screen"
        href="{{ asset('back-template/assets/css/perfect-scrollbar.min.css') }}" />
    <link defer rel="stylesheet" type="text/css" media="screen" href="{{ asset('back-template/assets/css/animate.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="{{ asset('back-template/assets/js/perfect-scrollbar.min.js') }}"></script>
    <script defer src="{{ asset('back-template/assets/js/popper.min.js') }}"></script>
    <script defer src="{{ asset('back-template/assets/js/tippy-bundle.umd.min.js') }}"></script>
    <script src="{{ asset('back-template/assets/js/sweetalert.min.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js" integrity="sha512-24XP4a9KVoIinPFUbcnjIjAjtS59PUoxQj3GNVpWc86bCqPuy3YxAcxJrxFCxXe4GHtAumCbO2Ze2bddtuxaRw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.css">
    <script src="https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    @livewireStyles
    @notifyCss
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('back-template/assets/css/style.css') }}" />
    <style>
        .page-loading {
            z-index: 1888;
            position: sticky;
            top: 45%;
            /* right: 44%; */
            display: none;
            justify-content: center;
        }
    </style>

</head>

<body x-data="main" class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased"
    :class="[$store.app.sidebar ? 'toggle-sidebar' : '', $store.app.theme, $store.app.menu, $store.app.layout, $store.app
        .rtlClass
    ]">
    <!-- sidebar menu overlay -->
    <div x-cloak class="fixed inset-0 z-50 bg-[black]/60 lg:hidden" :class="{ 'hidden': !$store.app.sidebar }"
        @click="$store.app.toggleSidebar()"></div>

    <!-- screen loader -->
    <div
        class="screen_loader animate__animatedfixed inset-0 z-[60] grid place-content-center bg-[#fafafa] dark:bg-[#060818]">
        <svg width="64" height="64" viewBox="0 0 135 135" xmlns="http://www.w3.org/2000/svg" fill="#4361ee">
            <path
                d="M67.447 58c5.523 0 10-4.477 10-10s-4.477-10-10-10-10 4.477-10 10 4.477 10 10 10zm9.448 9.447c0 5.523 4.477 10 10 10 5.522 0 10-4.477 10-10s-4.478-10-10-10c-5.523 0-10 4.477-10 10zm-9.448 9.448c-5.523 0-10 4.477-10 10 0 5.522 4.477 10 10 10s10-4.478 10-10c0-5.523-4.477-10-10-10zM58 67.447c0-5.523-4.477-10-10-10s-10 4.477-10 10 4.477 10 10 10 10-4.477 10-10z">
                <animateTransform attributeName="transform" type="rotate" from="0 67 67" to="-360 67 67" dur="2.5s"
                    repeatCount="indefinite" />
            </path>
            <path
                d="M28.19 40.31c6.627 0 12-5.374 12-12 0-6.628-5.373-12-12-12-6.628 0-12 5.372-12 12 0 6.626 5.372 12 12 12zm30.72-19.825c4.686 4.687 12.284 4.687 16.97 0 4.686-4.686 4.686-12.284 0-16.97-4.686-4.687-12.284-4.687-16.97 0-4.687 4.686-4.687 12.284 0 16.97zm35.74 7.705c0 6.627 5.37 12 12 12 6.626 0 12-5.373 12-12 0-6.628-5.374-12-12-12-6.63 0-12 5.372-12 12zm19.822 30.72c-4.686 4.686-4.686 12.284 0 16.97 4.687 4.686 12.285 4.686 16.97 0 4.687-4.686 4.687-12.284 0-16.97-4.685-4.687-12.283-4.687-16.97 0zm-7.704 35.74c-6.627 0-12 5.37-12 12 0 6.626 5.373 12 12 12s12-5.374 12-12c0-6.63-5.373-12-12-12zm-30.72 19.822c-4.686-4.686-12.284-4.686-16.97 0-4.686 4.687-4.686 12.285 0 16.97 4.686 4.687 12.284 4.687 16.97 0 4.687-4.685 4.687-12.283 0-16.97zm-35.74-7.704c0-6.627-5.372-12-12-12-6.626 0-12 5.373-12 12s5.374 12 12 12c6.628 0 12-5.373 12-12zm-19.823-30.72c4.687-4.686 4.687-12.284 0-16.97-4.686-4.686-12.284-4.686-16.97 0-4.687 4.686-4.687 12.284 0 16.97 4.686 4.687 12.284 4.687 16.97 0z">
                <animateTransform attributeName="transform" type="rotate" from="0 67 67" to="360 67 67" dur="8s"
                    repeatCount="indefinite" />
            </path>
        </svg>
    </div>

    <!-- scroll to top button -->
    <div class="fixed bottom-6 z-50 ltr:right-6 rtl:left-6" x-data="scrollToTop">
        <template x-if="showTopButton">
            <button type="button"
                class="btn btn-outline-primary animate-pulse rounded-full bg-[#fafafa] p-2 dark:bg-[#060818] dark:hover:bg-primary"
                @click="goToTop">
                <svg width="24" height="24" class="h-4 w-4" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd"
                        d="M12 20.75C12.4142 20.75 12.75 20.4142 12.75 20L12.75 10.75L11.25 10.75L11.25 20C11.25 20.4142 11.5858 20.75 12 20.75Z"
                        fill="currentColor" />
                    <path
                        d="M6.00002 10.75C5.69667 10.75 5.4232 10.5673 5.30711 10.287C5.19103 10.0068 5.25519 9.68417 5.46969 9.46967L11.4697 3.46967C11.6103 3.32902 11.8011 3.25 12 3.25C12.1989 3.25 12.3897 3.32902 12.5304 3.46967L18.5304 9.46967C18.7449 9.68417 18.809 10.0068 18.6929 10.287C18.5768 10.5673 18.3034 10.75 18 10.75L6.00002 10.75Z"
                        fill="currentColor" />
                </svg>
            </button>
        </template>
    </div>

    <!-- start theme customizer section -->
    <div x-data="customizer">
        <div class="fixed inset-0 z-[51] hidden bg-[black]/60 px-4 transition-[display]"
            :class="{ '!block': showCustomizer }" @click="showCustomizer = false">
            </d <nav
                class="fixed top-0 bottom-0 z-[51] w-full max-w-[400px] bg-white p-4 shadow-[5px_0_25px_0_rgba(94,92,154,0.1)] transition-[right] duration-300 ltr:-right-[400px] rtl:-left-[400px] dark:bg-[#0e1726]"
                :class="{ 'ltr:!right-0 rtl:!left-0': showCustomizer }">
            <a href="javascript:;"
                class="absolute top-0 bottom-0 my-auto flex h-10 w-12 cursor-pointer items-center justify-center bg-primary text-white ltr:-left-12 ltr:rounded-tl-full ltr:rounded-bl-full rtl:-right-12 rtl:rounded-tr-full rtl:rounded-br-full"
                @click="showCustomizer = !showCustomizer">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 animate-[spin_3s_linear_infinite]">
                    <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.5" />
                    <path opacity="0.5"
                        d="M13.7654 2.15224C13.3978 2 12.9319 2 12 2C11.0681 2 10.6022 2 10.2346 2.15224C9.74457 2.35523 9.35522 2.74458 9.15223 3.23463C9.05957 3.45834 9.0233 3.7185 9.00911 4.09799C8.98826 4.65568 8.70226 5.17189 8.21894 5.45093C7.73564 5.72996 7.14559 5.71954 6.65219 5.45876C6.31645 5.2813 6.07301 5.18262 5.83294 5.15102C5.30704 5.08178 4.77518 5.22429 4.35436 5.5472C4.03874 5.78938 3.80577 6.1929 3.33983 6.99993C2.87389 7.80697 2.64092 8.21048 2.58899 8.60491C2.51976 9.1308 2.66227 9.66266 2.98518 10.0835C3.13256 10.2756 3.3397 10.437 3.66119 10.639C4.1338 10.936 4.43789 11.4419 4.43786 12C4.43783 12.5581 4.13375 13.0639 3.66118 13.3608C3.33965 13.5629 3.13248 13.7244 2.98508 13.9165C2.66217 14.3373 2.51966 14.8691 2.5889 15.395C2.64082 15.7894 2.87379 16.193 3.33973 17C3.80568 17.807 4.03865 18.2106 4.35426 18.4527C4.77508 18.7756 5.30694 18.9181 5.83284 18.8489C6.07289 18.8173 6.31632 18.7186 6.65204 18.5412C7.14547 18.2804 7.73556 18.27 8.2189 18.549C8.70224 18.8281 8.98826 19.3443 9.00911 19.9021C9.02331 20.2815 9.05957 20.5417 9.15223 20.7654C9.35522 21.2554 9.74457 21.6448 10.2346 21.8478C10.6022 22 11.0681 22 12 22C12.9319 22 13.3978 22 13.7654 21.8478C14.2554 21.6448 14.6448 21.2554 14.8477 20.7654C14.9404 20.5417 14.9767 20.2815 14.9909 19.902C15.0117 19.3443 15.2977 18.8281 15.781 18.549C16.2643 18.2699 16.8544 18.2804 17.3479 18.5412C17.6836 18.7186 17.927 18.8172 18.167 18.8488C18.6929 18.9181 19.2248 18.7756 19.6456 18.4527C19.9612 18.2105 20.1942 17.807 20.6601 16.9999C21.1261 16.1929 21.3591 15.7894 21.411 15.395C21.4802 14.8691 21.3377 14.3372 21.0148 13.9164C20.8674 13.7243 20.6602 13.5628 20.3387 13.3608C19.8662 13.0639 19.5621 12.558 19.5621 11.9999C19.5621 11.4418 19.8662 10.9361 20.3387 10.6392C20.6603 10.4371 20.8675 10.2757 21.0149 10.0835C21.3378 9.66273 21.4803 9.13087 21.4111 8.60497C21.3592 8.21055 21.1262 7.80703 20.6602 7C20.1943 6.19297 19.9613 5.78945 19.6457 5.54727C19.2249 5.22436 18.693 5.08185 18.1671 5.15109C17.9271 5.18269 17.6837 5.28136 17.3479 5.4588C16.8545 5.71959 16.2644 5.73002 15.7811 5.45096C15.2977 5.17191 15.0117 4.65566 14.9909 4.09794C14.9767 3.71848 14.9404 3.45833 14.8477 3.23463C14.6448 2.74458 14.2554 2.35523 13.7654 2.15224Z"
                        stroke="currentColor" stroke-width="1.5" />
                </svg>
            </a>
            <div class="perfect-scrollbar h-full overflow-y-auto overflow-x-hidden">
                <div class="relative pb-5 text-center">
                    <a href="javascript:;"
                        class="absolute top-0 opacity-30 hover:opacity-100 ltr:right-0 rtl:left-0 dark:text-white"
                        @click="showCustomizer = false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" class="h-5 w-5">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </a>
                    <h4 class="mb-1 dark:text-white">TEMPLATE CUSTOMIZER</h4>
                    <p class="text-white-dark">Set preferences that will be cookied for your live preview
                        demonstration.</p>
                </div>
                <div class="mb-3 rounded-md border border-dashed border-[#e0e6ed] p-3 dark:border-[#1b2e4b]">
                    <h5 class="mb-1 text-base leading-none dark:text-white">Color Scheme</h5>
                    <p class="text-xs text-white-dark">Overall light or dark presentation.</p>
                    <div class="mt-3 grid grid-cols-3 gap-2">
                        <button type="button" class="btn"
                            :class="[$store.app.theme === 'light' ? 'btn-dark' : 'btn-outline-primary']"
                            @click="$store.app.toggleTheme('light')">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0 ltr:mr-2 rtl:ml-2">
                                <circle cx="12" cy="12" r="5" stroke="currentColor"
                                    stroke-width="1.5"></circle>
                                <path d="M12 2V4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                                </path>
                                <path d="M12 20V22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                                </path>
                                <path d="M4 12L2 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                                </path>
                                <path d="M22 12L20 12" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round"></path>
                                <path opacity="0.5" d="M19.7778 4.22266L17.5558 6.25424" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round"></path>
                                <path opacity="0.5" d="M4.22217 4.22266L6.44418 6.25424" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round"></path>
                                <path opacity="0.5" d="M6.44434 17.5557L4.22211 19.7779" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round"></path>
                                <path opacity="0.5" d="M19.7778 19.7773L17.5558 17.5551" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round"></path>
                            </svg>
                            Light
                        </button>
                        <button type="button" class="btn"
                            :class="[$store.app.theme === 'dark' ? 'btn-dark' : 'btn-outline-primary']"
                            @click="$store.app.toggleTheme('dark')">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0 ltr:mr-2 rtl:ml-2">
                                <path
                                    d="M21.0672 11.8568L20.4253 11.469L21.0672 11.8568ZM12.1432 2.93276L11.7553 2.29085V2.29085L12.1432 2.93276ZM21.25 12C21.25 17.1086 17.1086 21.25 12 21.25V22.75C17.9371 22.75 22.75 17.9371 22.75 12H21.25ZM12 21.25C6.89137 21.25 2.75 17.1086 2.75 12H1.25C1.25 17.9371 6.06294 22.75 12 22.75V21.25ZM2.75 12C2.75 6.89137 6.89137 2.75 12 2.75V1.25C6.06294 1.25 1.25 6.06294 1.25 12H2.75ZM15.5 14.25C12.3244 14.25 9.75 11.6756 9.75 8.5H8.25C8.25 12.5041 11.4959 15.75 15.5 15.75V14.25ZM20.4253 11.469C19.4172 13.1373 17.5882 14.25 15.5 14.25V15.75C18.1349 15.75 20.4407 14.3439 21.7092 12.2447L20.4253 11.469ZM9.75 8.5C9.75 6.41182 10.8627 4.5828 12.531 3.57467L11.7553 2.29085C9.65609 3.5593 8.25 5.86509 8.25 8.5H9.75ZM12 2.75C11.9115 2.75 11.8077 2.71008 11.7324 2.63168C11.6686 2.56527 11.6538 2.50244 11.6503 2.47703C11.6461 2.44587 11.6482 2.35557 11.7553 2.29085L12.531 3.57467C13.0342 3.27065 13.196 2.71398 13.1368 2.27627C13.0754 1.82126 12.7166 1.25 12 1.25V2.75ZM21.7092 12.2447C21.6444 12.3518 21.5541 12.3539 21.523 12.3497C21.4976 12.3462 21.4347 12.3314 21.3683 12.2676C21.2899 12.1923 21.25 12.0885 21.25 12H22.75C22.75 11.2834 22.1787 10.9246 21.7237 10.8632C21.286 10.804 20.7293 10.9658 20.4253 11.469L21.7092 12.2447Z"
                                    fill="currentColor"></path>
                            </svg>
                            Dark
                        </button>
                        <button type="button" class="btn"
                            :class="[$store.app.theme === 'system' ? 'btn-dark' : 'btn-outline-primary']"
                            @click="$store.app.toggleTheme('system')">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0 ltr:mr-2 rtl:ml-2">
                                <path
                                    d="M3 9C3 6.17157 3 4.75736 3.87868 3.87868C4.75736 3 6.17157 3 9 3H15C17.8284 3 19.2426 3 20.1213 3.87868C21 4.75736 21 6.17157 21 9V14C21 15.8856 21 16.8284 20.4142 17.4142C19.8284 18 18.8856 18 17 18H7C5.11438 18 4.17157 18 3.58579 17.4142C3 16.8284 3 15.8856 3 14V9Z"
                                    stroke="currentColor" stroke-width="1.5"></path>
                                <path opacity="0.5" d="M22 21H2" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round"></path>
                                <path opacity="0.5" d="M15 15H9" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round"></path>
                            </svg>
                            System
                        </button>
                    </div>
                </div>

                <div class="mb-3 rounded-md border border-dashed border-[#e0e6ed] p-3 dark:border-[#1b2e4b]">
                    <h5 class="mb-1 text-base leading-none dark:text-white">Navigation Position</h5>
                    <p class="text-xs text-white-dark">Select the primary navigation paradigm for your app.</p>
                    <div class="mt-3 grid grid-cols-3 gap-2">
                        <button type="button" class="btn"
                            :class="[$store.app.menu === 'horizontal' ? 'btn-dark' : 'btn-outline-primary']"
                            @click="$store.app.toggleMenu('horizontal')">
                            Horizontal
                        </button>
                        <button type="button" class="btn"
                            :class="[$store.app.menu === 'vertical' ? 'btn-dark' : 'btn-outline-primary']"
                            @click="$store.app.toggleMenu('vertical')">
                            Vertical
                        </button>
                        <button type="button" class="btn"
                            :class="[$store.app.menu === 'collapsible-vertical' ? 'btn-dark' : 'btn-outline-primary']"
                            @click="$store.app.toggleMenu('collapsible-vertical')">
                            Collapsible
                        </button>
                    </div>
                    <div class="mt-5 text-primary">
                        <label class="mb-0 inline-flex">
                            <input x-model="$store.app.semidark" type="checkbox" :value="true"
                                class="form-checkbox" @change="$store.app.toggleSemidark()" />
                            <span>Semi Dark (Sidebar & Header)</span>
                        </label>
                    </div>
                </div>
                <div class="mb-3 rounded-md border border-dashed border-[#e0e6ed] p-3 dark:border-[#1b2e4b]">
                    <h5 class="mb-1 text-base leading-none dark:text-white">Layout Style</h5>
                    <p class="text-xs text-white-dark">Select the primary layout style for your app.</p>
                    <div class="mt-3 flex gap-2">
                        <button type="button" class="btn flex-auto"
                            :class="[$store.app.layout === 'boxed-layout' ? 'btn-dark' : 'btn-outline-primary']"
                            @click="$store.app.toggleLayout('boxed-layout')">
                            Box
                        </button>
                        <button type="button" class="btn flex-auto"
                            :class="[$store.app.layout === 'full' ? 'btn-dark' : 'btn-outline-primary']"
                            @click="$store.app.toggleLayout('full')">
                            Full
                        </button>
                    </div>
                </div>
                <div class="mb-3 rounded-md border border-dashed border-[#e0e6ed] p-3 dark:border-[#1b2e4b]">
                    <h5 class="mb-1 text-base leading-none dark:text-white">Direction</h5>
                    <p class="text-xs text-white-dark">Select the direction for your app.</p>
                    <div class="mt-3 flex gap-2">
                        <button type="button" class="btn flex-auto"
                            :class="[$store.app.rtlClass === 'ltr' ? 'btn-dark' : 'btn-outline-primary']"
                            @click="$store.app.toggleRTL('ltr')">
                            LTR
                        </button>
                        <button type="button" class="btn flex-auto"
                            :class="[$store.app.rtlClass === 'rtl' ? 'btn-dark' : 'btn-outline-primary']"
                            @click="$store.app.toggleRTL('rtl')">
                            RTL
                        </button>
                    </div>
                </div>

                <div class="mb-3 rounded-md border border-dashed border-[#e0e6ed] p-3 dark:border-[#1b2e4b]">
                    <h5 class="mb-1 text-base leading-none dark:text-white">Navbar Type</h5>
                    <p class="text-xs text-white-dark">Sticky or Floating.</p>
                    <div class="mt-3 flex items-center gap-3 text-primary">
                        <label class="mb-0 inline-flex">
                            <input x-model="$store.app.navbar" type="radio" value="navbar-sticky"
                                class="form-radio" @change="$store.app.toggleNavbar()" />
                            <span>Sticky</span>
                        </label>
                        <label class="mb-0 inline-flex">
                            <input x-model="$store.app.navbar" type="radio" value="navbar-floating"
                                class="form-radio" @change="$store.app.toggleNavbar()" />
                            <span>Floating</span>
                        </label>
                        <label class="mb-0 inline-flex">
                            <input x-model="$store.app.navbar" type="radio" value="navbar-static"
                                class="form-radio" @change="$store.app.toggleNavbar()" />
                            <span>Static</span>
                        </label>
                    </div>
                </div>

                <div class="mb-3 rounded-md border border-dashed border-[#e0e6ed] p-3 dark:border-[#1b2e4b]">
                    <h5 class="mb-1 text-base leading-none dark:text-white">Router Transition</h5>
                    <p class="text-xs text-white-dark">Animation of main content.</p>
                    <div class="mt-3">
                        <select x-model="$store.app.animation" class="form-select border-primary text-primary"
                            @change="$store.app.toggleAnimation()">
                            <option value="">Select Animation</option>
                            <option value="animate__fadeIn">Fade</option>
                            <option value="animate__fadeInDown">Fade Down</option>
                            <option value="animate__fadeInUp">Fade Up</option>
                            <option value="animate__fadeInLeft">Fade Left</option>
                            <option value="animate__fadeInRight">Fade Right</option>
                            <option value="animate__slideInDown">Slide Down</option>
                            <option value="animate__slideInLeft">Slide Left</option>
                            <option value="animate__slideInRight">Slide Right</option>
                            <option value="animate__zoomIn">Zoom In</option>
                        </select>
                    </div>
                </div>
            </div>
            </nav>
        </div>
        <!-- end theme customizer section -->

        <div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">
            @include('partials/side-menu')
            <div class="main-content">

                @include('partials/header')

                {{ $slot }}
            </div>
        </div>


        <script src="{{ asset('back-template/assets/js/alpine-collaspe.min.js') }}"></script>
        <script src="{{ asset('back-template/assets/js/alpine-persist.min.js') }}"></script>
        <script defer src="{{ asset('back-template/assets/js/alpine-ui.min.js') }}"></script>
        <script defer src="{{ asset('back-template/assets/js/alpine-focus.min.js') }}"></script>
        <script defer src="{{ asset('back-template/assets/js/alpine.min.js') }}"></script>
        <script src="{{ asset('back-template/assets/js/custom.js') }}"></script>
        <script src="{{ asset('back-template/assets/js/Sortable.min.js') }}"></script>
        <script>
            document.addEventListener('alpine:init', () => {
                // main section
                Alpine.data('scrollToTop', () => ({
                    showTopButton: false,
                    init() {
                        window.onscroll = () => {
                            this.scrollFunction();
                        };
                    },

                    scrollFunction() {
                        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                            this.showTopButton = true;
                        } else {
                            this.showTopButton = false;
                        }
                    },

                    goToTop() {
                        document.body.scrollTop = 0;
                        document.documentElement.scrollTop = 0;
                    },
                }));

                // theme customization
                Alpine.data('customizer', () => ({
                    showCustomizer: false,
                }));

                // sidebar section
                Alpine.data('sidebar', () => ({
                    init() {
                        const selector = document.querySelector('.sidebar ul a[href="' + window.location
                            .pathname + '"]');
                        if (selector) {
                            selector.classList.add('active');
                            const ul = selector.closest('ul.sub-menu');
                            if (ul) {
                                let ele = ul.closest('li.menu').querySelectorAll('.nav-link');
                                if (ele) {
                                    ele = ele[0];
                                    setTimeout(() => {
                                        ele.click();
                                    });
                                }
                            }
                        }
                    },
                }));

                // header section
                Alpine.data('header', () => ({
                    init() {
                        const selector = document.querySelector('ul.horizontal-menu a[href="' + window
                            .location.pathname + '"]');
                        if (selector) {
                            selector.classList.add('active');
                            const ul = selector.closest('ul.sub-menu');
                            if (ul) {
                                let ele = ul.closest('li.menu').querySelectorAll('.nav-link');
                                if (ele) {
                                    ele = ele[0];
                                    setTimeout(() => {
                                        ele.classList.add('active');
                                    });
                                }
                            }
                        }
                    },

                    notifications: [{
                            id: 1,
                            profile: 'user-profile.jpeg',
                            message: '<strong class="text-sm mr-1">John Doe</strong>invite you to <strong>Prototyping</strong>',
                            time: '45 min ago',
                        },
                        {
                            id: 2,
                            profile: 'profile-34.jpeg',
                            message: '<strong class="text-sm mr-1">Adam Nolan</strong>mentioned you to <strong>UX Basics</strong>',
                            time: '9h Ago',
                        },
                        {
                            id: 3,
                            profile: 'profile-16.jpeg',
                            message: '<strong class="text-sm mr-1">Anna Morgan</strong>Upload a file',
                            time: '9h Ago',
                        },
                    ],

                    messages: [{
                            id: 1,
                            image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-success-light dark:bg-success text-success dark:text-success-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg></span>',
                            title: 'Congratulations!',
                            message: 'Your OS has been updated.',
                            time: '1hr',
                        },
                        {
                            id: 2,
                            image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-info-light dark:bg-info text-info dark:text-info-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg></span>',
                            title: 'Did you know?',
                            message: 'You can switch between artboards.',
                            time: '2hr',
                        },
                        {
                            id: 3,
                            image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-danger-light dark:bg-danger text-danger dark:text-danger-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>',
                            title: 'Something went wrong!',
                            message: 'Send Reposrt',
                            time: '2days',
                        },
                        {
                            id: 4,
                            image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-warning-light dark:bg-warning text-warning dark:text-warning-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">    <circle cx="12" cy="12" r="10"></circle>    <line x1="12" y1="8" x2="12" y2="12"></line>    <line x1="12" y1="16" x2="12.01" y2="16"></line></svg></span>',
                            title: 'Warning',
                            message: 'Your password strength is low.',
                            time: '5days',
                        },
                    ],

                    languages: [{
                        id: 1,
                        key: 'Chinese',
                        value: 'zh',
                    }],

                    removeNotification(value) {
                        this.notifications = this.notifications.filter((d) => d.id !== value);
                    },

                    removeMessage(value) {
                        this.messages = this.messages.filter((d) => d.id !== value);
                    },
                }));
                //scrumboard
                Alpine.data('scrumboard', () => ({
                    params: {
                        id: null,
                        title: '',
                    },
                    paramsTask: {
                        projectId: null,
                        id: null,
                        title: '',
                        description: '',
                        tags: '',
                    },
                    selectedTask: null,
                    isAddProjectModal: false,
                    isAddTaskModal: false,
                    isDeleteModal: false,
                    projectList: [{
                            id: 1,
                            title: 'In Progress',
                            tasks: [{
                                    projectId: 1,
                                    id: 1,
                                    title: 'Creating a new Portfolio on Dribble',
                                    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                                    image: true,
                                    date: ' 08 Aug, 2020',
                                    tags: ['designing'],
                                },
                                {
                                    projectId: 1,
                                    id: 2,
                                    title: 'Singapore Team Meet',
                                    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                                    date: ' 09 Aug, 2020',
                                    tags: ['meeting'],
                                },
                            ],
                        },
                        {
                            id: 2,
                            title: 'Pending',
                            tasks: [{
                                projectId: 2,
                                id: 1,
                                title: 'Plan a trip to another country',
                                description: '',
                                date: ' 10 Sep, 2020',
                            }, ],
                        },
                        {
                            id: 3,
                            title: 'Complete',
                            tasks: [{
                                    projectId: 3,
                                    id: 1,
                                    title: 'Dinner with Kelly Young',
                                    description: '',
                                    date: ' 08 Aug, 2020',
                                },
                                {
                                    projectId: 3,
                                    id: 2,
                                    title: 'Launch New SEO Wordpress Theme ',
                                    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                                    date: ' 09 Aug, 2020',
                                },
                            ],
                        },
                        {
                            id: 4,
                            title: 'Working',
                            tasks: [],
                        },
                    ],

                    init() {
                        this.initializeSortable();
                        // this.$watch('projectList', value => {
                        //     this.initializeSortable();
                        // });
                    },

                    initializeSortable() {
                        setTimeout(() => {
                            //sortable js
                            const sortable = document.querySelectorAll('.sortable-list');
                            for (let i = 0; i < sortable.length; i++) {
                                Sortable.create(sortable[i], {
                                    animation: 200,
                                    group: 'name',
                                    ghostClass: 'sortable-ghost',
                                    dragClass: 'sortable-drag',
                                });
                            }
                        });
                    },

                    addEditProject(project) {
                        setTimeout(() => {
                            this.params = {
                                id: null,
                                title: '',
                            };
                            if (project) {
                                this.params = JSON.parse(JSON.stringify(project));
                            }

                            this.isAddProjectModal = true;
                        });
                    },

                    saveProject() {
                        if (!this.params.title) {
                            this.showMessage('Title is required.', 'error');
                            return false;
                        }

                        if (this.params.id) {
                            //update project
                            const project = this.projectList.find((d) => d.id === this.params.id);
                            project.title = this.params.title;
                        } else {
                            //add project
                            const lastId = this.projectList.length ?
                                this.projectList.reduce((max, obj) => (obj.id > max ? obj.id : max), this
                                    .projectList[0].id) :
                                0;

                            const project = {
                                id: lastId + 1,
                                title: this.params.title,
                                tasks: [],
                            };
                            this.projectList.push(project);
                        }

                        this.initializeSortable();
                        this.showMessage('Project has been saved successfully.');
                        this.isAddProjectModal = false;
                    },

                    deleteProject(project) {
                        this.projectList = this.projectList.filter((d) => d.id != project.id);
                        this.showMessage('Project has been deleted successfully.');
                    },

                    clearProjects(project) {
                        project.tasks = [];
                    },

                    // task
                    addEditTask(projectId, task) {
                        this.paramsTask = {
                            projectId: null,
                            id: null,
                            title: '',
                            description: '',
                            tags: '',
                        };
                        if (task) {
                            this.paramsTask = JSON.parse(JSON.stringify(task));
                            this.paramsTask.tags = this.paramsTask.tags ? this.paramsTask.tags.toString() :
                                '';
                        }
                        this.paramsTask.projectId = projectId;
                        this.isAddTaskModal = true;
                    },

                    saveTask() {
                        if (!this.paramsTask.title) {
                            this.showMessage('Title is required.', 'error');
                            return false;
                        }

                        const project = this.projectList.find((d) => d.id === this.paramsTask.projectId);
                        if (this.paramsTask.id) {
                            //update task
                            const task = project.tasks.find((d) => d.id === this.paramsTask.id);
                            task.title = this.paramsTask.title;
                            task.description = this.paramsTask.description;
                            task.tags = this.paramsTask.tags?.length > 0 ? this.paramsTask.tags.split(',') :
                                [];
                        } else {
                            //add task
                            let maxid = 0;
                            if (project.tasks?.length) {
                                maxid = project.tasks.reduce((max, obj) => (obj.id > max ? obj.id : max),
                                    project.tasks[0].id);
                            }

                            const today = new Date();
                            const dd = String(today.getDate()).padStart(2, '0');
                            const mm = String(today.getMonth()); //January is 0!
                            const yyyy = today.getFullYear();
                            const monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug',
                                'Sep', 'Oct', 'Nov', 'Dec'
                            ];

                            const task = {
                                projectId: this.paramsTask.projectId,
                                id: maxid + 1,
                                title: this.paramsTask.title,
                                description: this.paramsTask.description,
                                date: dd + ' ' + monthNames[mm] + ', ' + yyyy,
                                tags: this.paramsTask.tags?.length > 0 ? this.paramsTask.tags.split(
                                    ',') : [],
                            };

                            project.tasks.push(task);
                        }

                        this.showMessage('Task has been saved successfully.');
                        this.isAddTaskModal = false;
                    },

                    deleteConfirmModal(projectId, task) {
                        this.selectedTask = task;
                        setTimeout(() => {
                            this.isDeleteModal = true;
                        }, 10);
                    },

                    deleteTask() {
                        let project = this.projectList.find((d) => d.id === this.selectedTask.projectId);
                        project.tasks = project.tasks.filter((d) => d.id != this.selectedTask.id);

                        this.showMessage('Task has been deleted successfully.');
                        this.isDeleteModal = false;
                    },

                    showMessage(msg = '', type = 'success') {
                        const toast = window.Swal.mixin({
                            toast: true,
                            position: 'top',
                            showConfirmButton: false,
                            timer: 3000,
                        });
                        toast.fire({
                            icon: type,
                            title: msg,
                            padding: '10px 20px',
                        });
                    },
                }));
            });
        </script>
        <script src="{{ asset('back-template/nice-select/js/nice-select2.js') }}"></script>

        <!-- script -->

        @livewireScripts
        @include('notify::components.notify')
        @notifyJs
        @stack('scripts')

        <script>
            feather.replace()
        </script>
        @if (session()->has('swal_msg'))
            <script>
                notification = @json(session()->pull('swal_msg'));
                //Swal.fire(notification.title, , notification.type);
                const toast = window.Swal.mixin({
                    toast: true,
                    position: 'top-right',
                    showConfirmButton: false,
                    timer: 3000,
                    padding: '2em',
                });
                toast.fire({
                    icon: notification.type,
                    title: notification.message,
                    padding: '2em',
                });
            </script>
        @endif

</body>

<!-- Mirrored from html.Demalma.sbthemes.com/apps-scrumboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Mar 2023 11:58:16 GMT -->

</html>
