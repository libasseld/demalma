@include('Chatify::layouts.headLinks')
<header class="z-40" :class="{'dark' : $store.app.semidark &amp;&amp; $store.app.menu === 'horizontal'}">
    <div class="shadow-sm">
        <div class="relative flex w-full items-center bg-white px-5 py-2.5 dark:bg-[#0e1726]">
            <div class="horizontal-logo flex items-center justify-between ltr:mr-2 rtl:ml-2 lg:hidden">
                <a href="index.html" class="main-logo flex shrink-0 items-center">
                    <img class="inline w-8 ltr:-ml-1 rtl:-mr-1" src="assets/images/logo.svg" alt="image">
                    <span class="hidden align-middle text-2xl font-semibold transition-all duration-300 ltr:ml-1.5 rtl:mr-1.5 dark:text-white-light md:inline">VRISTO</span>
                </a>

                <a href="javascript:;" class="collapse-icon flex flex-none rounded-full bg-white-light/40 p-2 hover:bg-white-light/90 hover:text-primary ltr:ml-2 rtl:mr-2 dark:bg-dark/40 dark:text-[#d0d2d6] dark:hover:bg-dark/60 dark:hover:text-primary lg:hidden" @click="$store.app.toggleSidebar()">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 7L4 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                        <path opacity="0.5" d="M20 12L4 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                        <path d="M20 17L4 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                    </svg>
                </a>
            </div>
            <div class="hidden ltr:mr-2 rtl:ml-2 sm:block">
                
            </div>
            <div x-data="header" class="flex items-center space-x-1.5 ltr:ml-auto rtl:mr-auto rtl:space-x-reverse dark:text-[#d0d2d6] sm:flex-1 ltr:sm:ml-0 sm:rtl:mr-0 lg:space-x-2">
                <div class="sm:ltr:mr-auto sm:rtl:ml-auto" x-data="{ search: false }" @click.outside="search = false">
                    <a href="javascript:;" class="-mb-[1px] flex items-center rounded p-3.5 py-2 hover:bg-primary hover:text-white bg-primary text-white" :class="{'bg-warning text-white' : tab  === 'home'}" @click="tab = 'home'">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ltr:mr-2 rtl:ml-2">
                            <path opacity="0.5" d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z" stroke="currentColor" stroke-width="1.5"></path>
                            <path d="M12 15L12 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                        </svg>
                        WMBOARD</a>
                </div>
                <div>
                   
                </div>

                <div class="dropdown shrink-0" x-data="dropdown" @click.outside="open = false">
                    
                </div>

                
                <div class="dropdown" x-data="dropdown" @click.outside="open = false">
                    
                    
                </div>
                <div class="dropdown flex-shrink-0" x-data="dropdown" @click.outside="open = false">
                    <a href="javascript:;" class="group relative" @click="toggle()">
                        <span>
                            <img class="h-9 w-9 rounded-full object-cover saturate-50 group-hover:saturate-100" src="{{asset('chat-template/assets/images/user-profile.jpeg')}}" alt="image">
                        </span>
                    </a>
                    <ul x-show="open" x-transition="" x-transition.duration.300ms="" class="top-11 w-[230px] !py-0 font-semibold text-dark ltr:right-0 rtl:left-0 dark:text-white-dark dark:text-white-light/90" style="display: none;">
                        
                      
                        <li>
                            <a href="auth-boxed-lockscreen.html" class="dark:hover:text-white" @click="toggle">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.5" d="M13.3332 2.6665H18.6665C23.6948 2.6665 26.209 2.6665 27.7711 4.2286C29.3332 5.7907 29.3332 8.30486 29.3332 13.3332V14.6665C29.3332 15.402 29.3332 16.7324 29.3245 17.3332H2.67519C2.6665 16.7324 2.6665 15.402 2.6665 14.6665V13.3332C2.6665 8.30486 2.6665 5.7907 4.2286 4.2286C5.7907 2.6665 8.30486 2.6665 13.3332 2.6665Z" fill="currentColor"></path>
                                    <path d="M10.646 23.3335C6.86021 23.3335 4.96734 23.3335 3.79125 22.1619C3.02926 21.4029 2.76097 20.344 2.6665 18.6668V17.3335H29.3332V18.6668C29.2387 20.344 28.9704 21.4029 28.2084 22.1619C27.0323 23.3335 25.1395 23.3335 21.3537 23.3335H17.0037V28.6668H21.3537C21.9081 28.6668 22.3576 29.1145 22.3576 29.6668C22.3576 30.2191 21.9081 30.6668 21.3537 30.6668H10.646C10.0916 30.6668 9.64212 30.2191 9.64212 29.6668C9.64212 29.1145 10.0916 28.6668 10.646 28.6668H14.996V23.3335H10.646Z" fill="currentColor"></path>
                                </svg>
                                Retourner à l'accueil</a>
                        </li>
                        <li class="border-t border-white-light dark:border-white-light/10">
                            <a href="#" class="!py-3 text-danger" @click="toggle">
                                <svg class="h-4.5 w-4.5 rotate-90 ltr:mr-2 rtl:ml-2" width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.5" d="M17 9.00195C19.175 9.01406 20.3529 9.11051 21.1213 9.8789C22 10.7576 22 12.1718 22 15.0002V16.0002C22 18.8286 22 20.2429 21.1213 21.1215C20.2426 22.0002 18.8284 22.0002 16 22.0002H8C5.17157 22.0002 3.75736 22.0002 2.87868 21.1215C2 20.2429 2 18.8286 2 16.0002L2 15.0002C2 12.1718 2 10.7576 2.87868 9.87889C3.64706 9.11051 4.82497 9.01406 7 9.00195" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                    <path d="M12 15L12 2M12 2L15 5.5M12 2L9 5.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                Se déconecter
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- horizontal menu -->
        <ul class="horizontal-menu hidden border-t border-[#ebedf2] bg-white py-1.5 px-6 font-semibold text-black rtl:space-x-reverse dark:border-[#191e3a] dark:bg-[#0e1726] dark:text-white-dark lg:space-x-1.5 xl:space-x-8">
            <li class="menu nav-item relative">
                <a href="javascript:;" class="nav-link">
                    <div class="flex items-center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="shrink-0">
                            <path opacity="0.5" d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z" fill="currentColor"></path>
                            <path d="M9 17.25C8.58579 17.25 8.25 17.5858 8.25 18C8.25 18.4142 8.58579 18.75 9 18.75H15C15.4142 18.75 15.75 18.4142 15.75 18C15.75 17.5858 15.4142 17.25 15 17.25H9Z" fill="currentColor"></path>
                        </svg>
                        <span class="px-1">Dashboard</span>
                    </div>
                    <div class="right_arrow">
                        <svg class="h-4 w-4 rotate-90" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="index.html">Sales</a>
                    </li>
                    <li>
                        <a href="analytics.html">Analytics</a>
                    </li>
                    <li>
                        <a href="finance.html">Finance</a>
                    </li>
                    <li>
                        <a href="crypto.html">Crypto</a>
                    </li>
                </ul>
            </li>
            <li class="menu nav-item relative">
                <a href="javascript:;" class="nav-link active">
                    <div class="flex items-center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="shrink-0">
                            <g opacity="0.5">
                                <path d="M14 2.75C15.9068 2.75 17.2615 2.75159 18.2892 2.88976C19.2952 3.02503 19.8749 3.27869 20.2981 3.7019C20.7213 4.12511 20.975 4.70476 21.1102 5.71085C21.2484 6.73851 21.25 8.09318 21.25 10C21.25 10.4142 21.5858 10.75 22 10.75C22.4142 10.75 22.75 10.4142 22.75 10V9.94359C22.75 8.10583 22.75 6.65019 22.5969 5.51098C22.4392 4.33856 22.1071 3.38961 21.3588 2.64124C20.6104 1.89288 19.6614 1.56076 18.489 1.40314C17.3498 1.24997 15.8942 1.24998 14.0564 1.25H14C13.5858 1.25 13.25 1.58579 13.25 2C13.25 2.41421 13.5858 2.75 14 2.75Z" fill="currentColor"></path>
                                <path d="M9.94358 1.25H10C10.4142 1.25 10.75 1.58579 10.75 2C10.75 2.41421 10.4142 2.75 10 2.75C8.09318 2.75 6.73851 2.75159 5.71085 2.88976C4.70476 3.02503 4.12511 3.27869 3.7019 3.7019C3.27869 4.12511 3.02503 4.70476 2.88976 5.71085C2.75159 6.73851 2.75 8.09318 2.75 10C2.75 10.4142 2.41421 10.75 2 10.75C1.58579 10.75 1.25 10.4142 1.25 10V9.94358C1.24998 8.10583 1.24997 6.65019 1.40314 5.51098C1.56076 4.33856 1.89288 3.38961 2.64124 2.64124C3.38961 1.89288 4.33856 1.56076 5.51098 1.40314C6.65019 1.24997 8.10583 1.24998 9.94358 1.25Z" fill="currentColor"></path>
                                <path d="M22 13.25C22.4142 13.25 22.75 13.5858 22.75 14V14.0564C22.75 15.8942 22.75 17.3498 22.5969 18.489C22.4392 19.6614 22.1071 20.6104 21.3588 21.3588C20.6104 22.1071 19.6614 22.4392 18.489 22.5969C17.3498 22.75 15.8942 22.75 14.0564 22.75H14C13.5858 22.75 13.25 22.4142 13.25 22C13.25 21.5858 13.5858 21.25 14 21.25C15.9068 21.25 17.2615 21.2484 18.2892 21.1102C19.2952 20.975 19.8749 20.7213 20.2981 20.2981C20.7213 19.8749 20.975 19.2952 21.1102 18.2892C21.2484 17.2615 21.25 15.9068 21.25 14C21.25 13.5858 21.5858 13.25 22 13.25Z" fill="currentColor"></path>
                                <path d="M2.75 14C2.75 13.5858 2.41421 13.25 2 13.25C1.58579 13.25 1.25 13.5858 1.25 14V14.0564C1.24998 15.8942 1.24997 17.3498 1.40314 18.489C1.56076 19.6614 1.89288 20.6104 2.64124 21.3588C3.38961 22.1071 4.33856 22.4392 5.51098 22.5969C6.65019 22.75 8.10583 22.75 9.94359 22.75H10C10.4142 22.75 10.75 22.4142 10.75 22C10.75 21.5858 10.4142 21.25 10 21.25C8.09318 21.25 6.73851 21.2484 5.71085 21.1102C4.70476 20.975 4.12511 20.7213 3.7019 20.2981C3.27869 19.8749 3.02503 19.2952 2.88976 18.2892C2.75159 17.2615 2.75 15.9068 2.75 14Z" fill="currentColor"></path>
                            </g>
                            <path d="M5.52721 5.52721C5 6.05442 5 6.90294 5 8.6C5 9.73137 5 10.2971 5.35147 10.6485C5.70294 11 6.26863 11 7.4 11H8.6C9.73137 11 10.2971 11 10.6485 10.6485C11 10.2971 11 9.73137 11 8.6V7.4C11 6.26863 11 5.70294 10.6485 5.35147C10.2971 5 9.73137 5 8.6 5C6.90294 5 6.05442 5 5.52721 5.52721Z" fill="currentColor"></path>
                            <path d="M5.52721 18.4728C5 17.9456 5 17.0971 5 15.4C5 14.2686 5 13.7029 5.35147 13.3515C5.70294 13 6.26863 13 7.4 13H8.6C9.73137 13 10.2971 13 10.6485 13.3515C11 13.7029 11 14.2686 11 15.4V16.6C11 17.7314 11 18.2971 10.6485 18.6485C10.2971 19 9.73138 19 8.60002 19C6.90298 19 6.05441 19 5.52721 18.4728Z" fill="currentColor"></path>
                            <path d="M13 7.4C13 6.26863 13 5.70294 13.3515 5.35147C13.7029 5 14.2686 5 15.4 5C17.0971 5 17.9456 5 18.4728 5.52721C19 6.05442 19 6.90294 19 8.6C19 9.73137 19 10.2971 18.6485 10.6485C18.2971 11 17.7314 11 16.6 11H15.4C14.2686 11 13.7029 11 13.3515 10.6485C13 10.2971 13 9.73137 13 8.6V7.4Z" fill="currentColor"></path>
                            <path d="M13.3515 18.6485C13 18.2971 13 17.7314 13 16.6V15.4C13 14.2686 13 13.7029 13.3515 13.3515C13.7029 13 14.2686 13 15.4 13H16.6C17.7314 13 18.2971 13 18.6485 13.3515C19 13.7029 19 14.2686 19 15.4C19 17.097 19 17.9456 18.4728 18.4728C17.9456 19 17.0971 19 15.4 19C14.2687 19 13.7029 19 13.3515 18.6485Z" fill="currentColor"></path>
                        </svg>
                        <span class="px-1">Apps</span>
                    </div>
                    <div class="right_arrow">
                        <svg class="h-4 w-4 rotate-90" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="apps-chat.html" class="active">Chat</a>
                    </li>
                    <li>
                        <a href="apps-mailbox.html">Mailbox</a>
                    </li>
                    <li>
                        <a href="apps-todolist.html">Todo List</a>
                    </li>
                    <li>
                        <a href="apps-notes.html">Notes</a>
                    </li>
                    <li>
                        <a href="apps-scrumboard.html">Scrumboard</a>
                    </li>
                    <li>
                        <a href="apps-contacts.html">Contacts</a>
                    </li>
                    <li class="relative">
                        <a href="javascript:;">Invoice
                            <div class="ltr:ml-auto rtl:mr-auto rtl:rotate-180">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </a>
                        <ul class="absolute top-0 z-[10] hidden min-w-[180px] rounded bg-white p-0 py-2 text-dark shadow ltr:left-[95%] rtl:right-[95%] dark:bg-[#1b2e4b] dark:text-white-dark">
                            <li>
                                <a href="apps-invoice-list.html">List</a>
                            </li>
                            <li>
                                <a href="apps-invoice-preview.html">Preview</a>
                            </li>
                            <li>
                                <a href="apps-invoice-add.html">Add</a>
                            </li>
                            <li>
                                <a href="apps-invoice-edit.html">Edit</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="apps-calendar.html">Calendar</a>
                    </li>
                </ul>
            </li>
            <li class="menu nav-item relative">
                <a href="javascript:;" class="nav-link">
                    <div class="flex items-center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="shrink-0">
                            <path d="M8.42229 20.6181C10.1779 21.5395 11.0557 22.0001 12 22.0001V12.0001L2.63802 7.07275C2.62423 7.09491 2.6107 7.11727 2.5974 7.13986C2 8.15436 2 9.41678 2 11.9416V12.0586C2 14.5834 2 15.8459 2.5974 16.8604C3.19479 17.8749 4.27063 18.4395 6.42229 19.5686L8.42229 20.6181Z" fill="currentColor"></path>
                            <path opacity="0.7" d="M17.5774 4.43152L15.5774 3.38197C13.8218 2.46066 12.944 2 11.9997 2C11.0554 2 10.1776 2.46066 8.42197 3.38197L6.42197 4.43152C4.31821 5.53552 3.24291 6.09982 2.6377 7.07264L11.9997 12L21.3617 7.07264C20.7564 6.09982 19.6811 5.53552 17.5774 4.43152Z" fill="currentColor"></path>
                            <path opacity="0.5" d="M21.4026 7.13986C21.3893 7.11727 21.3758 7.09491 21.362 7.07275L12 12.0001V22.0001C12.9443 22.0001 13.8221 21.5395 15.5777 20.6181L17.5777 19.5686C19.7294 18.4395 20.8052 17.8749 21.4026 16.8604C22 15.8459 22 14.5834 22 12.0586V11.9416C22 9.41678 22 8.15436 21.4026 7.13986Z" fill="currentColor"></path>
                        </svg>
                        <span class="px-1">Components</span>
                    </div>
                    <div class="right_arrow">
                        <svg class="h-4 w-4 rotate-90" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="components-tabs.html">Tabs</a>
                    </li>
                    <li>
                        <a href="components-accordions.html">Accordions</a>
                    </li>
                    <li>
                        <a href="components-modals.html">Modals</a>
                    </li>
                    <li>
                        <a href="components-cards.html">Cards</a>
                    </li>
                    <li>
                        <a href="components-carousel.html">Carousel</a>
                    </li>
                    <li>
                        <a href="components-countdown.html">Countdown</a>
                    </li>
                    <li>
                        <a href="components-counter.html">Counter</a>
                    </li>
                    <li>
                        <a href="components-sweetalert.html">Sweet Alerts</a>
                    </li>
                    <li>
                        <a href="components-timeline.html">Timeline</a>
                    </li>
                    <li>
                        <a href="components-notifications.html">Notifications</a>
                    </li>
                    <li>
                        <a href="components-media-object.html">Media Object</a>
                    </li>
                    <li>
                        <a href="components-list-group.html">List Group</a>
                    </li>
                    <li>
                        <a href="components-pricing-table.html">Pricing Tables</a>
                    </li>
                    <li>
                        <a href="components-lightbox.html">Lightbox</a>
                    </li>
                </ul>
            </li>
            <li class="menu nav-item relative">
                <a href="javascript:;" class="nav-link">
                    <div class="flex items-center">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="shrink-0">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.73167 5.77133L5.66953 9.91436C4.3848 11.6526 3.74244 12.5217 4.09639 13.205C4.10225 13.2164 4.10829 13.2276 4.1145 13.2387C4.48945 13.9117 5.59888 13.9117 7.81775 13.9117C9.05079 13.9117 9.6673 13.9117 10.054 14.2754L10.074 14.2946L13.946 9.72466L13.926 9.70541C13.5474 9.33386 13.5474 8.74151 13.5474 7.55682V7.24712C13.5474 3.96249 13.5474 2.32018 12.6241 2.03721C11.7007 1.75425 10.711 3.09327 8.73167 5.77133Z" fill="currentColor"></path>
                            <path opacity="0.5" d="M10.4527 16.4432L10.4527 16.7528C10.4527 20.0374 10.4527 21.6798 11.376 21.9627C12.2994 22.2457 13.2891 20.9067 15.2685 18.2286L18.3306 14.0856C19.6154 12.3474 20.2577 11.4783 19.9038 10.7949C19.8979 10.7836 19.8919 10.7724 19.8857 10.7613C19.5107 10.0883 18.4013 10.0883 16.1824 10.0883C14.9494 10.0883 14.3329 10.0883 13.9462 9.72461L10.0742 14.2946C10.4528 14.6661 10.4527 15.2585 10.4527 16.4432Z" fill="currentColor"></path>
                        </svg>
                        <span class="px-1">Elements</span>
                    </div>
                    <div class="right_arrow">
                        <svg class="h-4 w-4 rotate-90" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="elements-alerts.html">Alerts</a>
                    </li>
                    <li>
                        <a href="elements-avatar.html">Avatar</a>
                    </li>
                    <li>
                        <a href="elements-badges.html">Badges</a>
                    </li>
                    <li>
                        <a href="elements-breadcrumbs.html">Breadcrumbs</a>
                    </li>
                    <li>
                        <a href="elements-buttons.html">Buttons</a>
                    </li>
                    <li>
                        <a href="elements-buttons-group.html">Button Groups</a>
                    </li>
                    <li>
                        <a href="elements-color-library.html">Color Library</a>
                    </li>
                    <li>
                        <a href="elements-dropdown.html">Dropdown</a>
                    </li>
                    <li>
                        <a href="elements-infobox.html">Infobox</a>
                    </li>
                    <li>
                        <a href="elements-jumbotron.html">Jumbotron</a>
                    </li>
                    <li>
                        <a href="elements-loader.html">Loader</a>
                    </li>
                    <li>
                        <a href="elements-pagination.html">Pagination</a>
                    </li>
                    <li>
                        <a href="elements-popovers.html">Popovers</a>
                    </li>
                    <li>
                        <a href="elements-progress-bar.html">Progress Bar</a>
                    </li>
                    <li>
                        <a href="elements-search.html">Search</a>
                    </li>
                    <li>
                        <a href="elements-tooltips.html">Tooltips</a>
                    </li>
                    <li>
                        <a href="elements-treeview.html">Treeview</a>
                    </li>
                    <li>
                        <a href="elements-typography.html">Typography</a>
                    </li>
                </ul>
            </li>
            <li class="menu nav-item relative">
                <a href="javascript:;" class="nav-link">
                    <div class="flex items-center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="shrink-0">
                            <path d="M4.97883 9.68508C2.99294 8.89073 2 8.49355 2 8C2 7.50645 2.99294 7.10927 4.97883 6.31492L7.7873 5.19153C9.77318 4.39718 10.7661 4 12 4C13.2339 4 14.2268 4.39718 16.2127 5.19153L19.0212 6.31492C21.0071 7.10927 22 7.50645 22 8C22 8.49355 21.0071 8.89073 19.0212 9.68508L16.2127 10.8085C14.2268 11.6028 13.2339 12 12 12C10.7661 12 9.77318 11.6028 7.7873 10.8085L4.97883 9.68508Z" fill="currentColor"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2 8C2 8.49355 2.99294 8.89073 4.97883 9.68508L7.7873 10.8085C9.77318 11.6028 10.7661 12 12 12C13.2339 12 14.2268 11.6028 16.2127 10.8085L19.0212 9.68508C21.0071 8.89073 22 8.49355 22 8C22 7.50645 21.0071 7.10927 19.0212 6.31492L16.2127 5.19153C14.2268 4.39718 13.2339 4 12 4C10.7661 4 9.77318 4.39718 7.7873 5.19153L4.97883 6.31492C2.99294 7.10927 2 7.50645 2 8Z" fill="currentColor"></path>
                            <path opacity="0.7" d="M5.76613 10L4.97883 10.3149C2.99294 11.1093 2 11.5065 2 12C2 12.4935 2.99294 12.8907 4.97883 13.6851L7.7873 14.8085C9.77318 15.6028 10.7661 16 12 16C13.2339 16 14.2268 15.6028 16.2127 14.8085L19.0212 13.6851C21.0071 12.8907 22 12.4935 22 12C22 11.5065 21.0071 11.1093 19.0212 10.3149L18.2339 10L16.2127 10.8085C14.2268 11.6028 13.2339 12 12 12C10.7661 12 9.77318 11.6028 7.7873 10.8085L5.76613 10Z" fill="currentColor"></path>
                            <path opacity="0.4" d="M5.76613 14L4.97883 14.3149C2.99294 15.1093 2 15.5065 2 16C2 16.4935 2.99294 16.8907 4.97883 17.6851L7.7873 18.8085C9.77318 19.6028 10.7661 20 12 20C13.2339 20 14.2268 19.6028 16.2127 18.8085L19.0212 17.6851C21.0071 16.8907 22 16.4935 22 16C22 15.5065 21.0071 15.1093 19.0212 14.3149L18.2339 14L16.2127 14.8085C14.2268 15.6028 13.2339 16 12 16C10.7661 16 9.77318 15.6028 7.7873 14.8085L5.76613 14Z" fill="currentColor"></path>
                        </svg>
                        <span class="px-1">Tables</span>
                    </div>
                    <div class="right_arrow">
                        <svg class="h-4 w-4 rotate-90" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="tables.html">Tables</a>
                    </li>
                    <li class="relative">
                        <a href="javascript:;">Data Tables
                            <div class="ltr:ml-auto rtl:mr-auto rtl:rotate-180">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </a>
                        <ul class="absolute top-0 z-[10] hidden min-w-[180px] rounded bg-white p-0 py-2 text-dark shadow ltr:left-[95%] rtl:right-[95%] dark:bg-[#1b2e4b] dark:text-white-dark">
                            <li>
                                <a href="datatables-basic.html">Basic</a>
                            </li>
                            <li>
                                <a href="datatables-advanced.html">Advanced</a>
                            </li>
                            <li>
                                <a href="datatables-skin.html">Skin</a>
                            </li>
                            <li>
                                <a href="datatables-order-sorting.html">Order Sorting</a>
                            </li>
                            <li>
                                <a href="datatables-multi-column.html">Multi Column</a>
                            </li>
                            <li>
                                <a href="datatables-multiple-tables.html">Multiple Tables</a>
                            </li>
                            <li>
                                <a href="datatables-alt-pagination.html">Alt. Pagination</a>
                            </li>
                            <li>
                                <a href="datatables-checkbox.html">Checkbox</a>
                            </li>
                            <li>
                                <a href="datatables-range-search.html">Range Search</a>
                            </li>
                            <li>
                                <a href="datatables-export.html">Export</a>
                            </li>
                            <li>
                                <a href="datatables-sticky-header.html">Sticky Header</a>
                            </li>
                            <li>
                                <a href="datatables-clone-header.html">Clone Header</a>
                            </li>
                            <li>
                                <a href="datatables-column-chooser.html">Column Chooser</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="menu nav-item relative">
                <a href="javascript:;" class="nav-link">
                    <div class="flex items-center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="shrink-0">
                            <path opacity="0.5" d="M3 10C3 6.22876 3 4.34315 4.17157 3.17157C5.34315 2 7.22876 2 11 2H13C16.7712 2 18.6569 2 19.8284 3.17157C21 4.34315 21 6.22876 21 10V14C21 17.7712 21 19.6569 19.8284 20.8284C18.6569 22 16.7712 22 13 22H11C7.22876 22 5.34315 22 4.17157 20.8284C3 19.6569 3 17.7712 3 14V10Z" fill="currentColor"></path>
                            <path d="M16.5189 16.5013C16.6939 16.3648 16.8526 16.2061 17.1701 15.8886L21.1275 11.9312C21.2231 11.8356 21.1793 11.6708 21.0515 11.6264C20.5844 11.4644 19.9767 11.1601 19.4083 10.5917C18.8399 10.0233 18.5356 9.41561 18.3736 8.94849C18.3292 8.82066 18.1644 8.77687 18.0688 8.87254L14.1114 12.8299C13.7939 13.1474 13.6352 13.3061 13.4987 13.4811C13.3377 13.6876 13.1996 13.9109 13.087 14.1473C12.9915 14.3476 12.9205 14.5606 12.7786 14.9865L12.5951 15.5368L12.3034 16.4118L12.0299 17.2323C11.9601 17.4419 12.0146 17.6729 12.1708 17.8292C12.3271 17.9854 12.5581 18.0399 12.7677 17.9701L13.5882 17.6966L14.4632 17.4049L15.0135 17.2214L15.0136 17.2214C15.4394 17.0795 15.6524 17.0085 15.8527 16.913C16.0891 16.8004 16.3124 16.6623 16.5189 16.5013Z" fill="currentColor"></path>
                            <path d="M22.3665 10.6922C23.2112 9.84754 23.2112 8.47812 22.3665 7.63348C21.5219 6.78884 20.1525 6.78884 19.3078 7.63348L19.1806 7.76071C19.0578 7.88348 19.0022 8.05496 19.0329 8.22586C19.0522 8.33336 19.0879 8.49053 19.153 8.67807C19.2831 9.05314 19.5288 9.54549 19.9917 10.0083C20.4545 10.4712 20.9469 10.7169 21.3219 10.847C21.5095 10.9121 21.6666 10.9478 21.7741 10.9671C21.945 10.9978 22.1165 10.9422 22.2393 10.8194L22.3665 10.6922Z" fill="currentColor"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.25 9C7.25 8.58579 7.58579 8.25 8 8.25H14.5C14.9142 8.25 15.25 8.58579 15.25 9C15.25 9.41421 14.9142 9.75 14.5 9.75H8C7.58579 9.75 7.25 9.41421 7.25 9ZM7.25 13C7.25 12.5858 7.58579 12.25 8 12.25H11C11.4142 12.25 11.75 12.5858 11.75 13C11.75 13.4142 11.4142 13.75 11 13.75H8C7.58579 13.75 7.25 13.4142 7.25 13ZM7.25 17C7.25 16.5858 7.58579 16.25 8 16.25H9.5C9.91421 16.25 10.25 16.5858 10.25 17C10.25 17.4142 9.91421 17.75 9.5 17.75H8C7.58579 17.75 7.25 17.4142 7.25 17Z" fill="currentColor"></path>
                        </svg>
                        <span class="px-1">Forms</span>
                    </div>
                    <div class="right_arrow">
                        <svg class="h-4 w-4 rotate-90" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="forms-basic.html">Basic</a>
                    </li>
                    <li>
                        <a href="forms-input-group.html">Input Group</a>
                    </li>
                    <li>
                        <a href="forms-layouts.html">Layouts</a>
                    </li>
                    <li>
                        <a href="forms-validation.html">Validation</a>
                    </li>
                    <li>
                        <a href="forms-input-mask.html">Input Mask</a>
                    </li>
                    <li>
                        <a href="forms-select2.html">Select2</a>
                    </li>
                    <li>
                        <a href="forms-touchspin.html">TouchSpin</a>
                    </li>
                    <li>
                        <a href="forms-checkbox-radio.html">Checkbox &amp; Radio</a>
                    </li>
                    <li>
                        <a href="forms-switches.html">Switches</a>
                    </li>
                    <li>
                        <a href="forms-wizards.html">Wizards</a>
                    </li>
                    <li>
                        <a href="forms-file-upload.html">File Upload</a>
                    </li>
                    <li>
                        <a href="forms-quill-editor.html">Quill Editor</a>
                    </li>
                    <li>
                        <a href="forms-markdown-editor.html">Markdown Editor</a>
                    </li>
                    <li>
                        <a href="forms-date-picker.html">Date &amp; Range Picker</a>
                    </li>
                    <li>
                        <a href="forms-clipboard.html">Clipboard</a>
                    </li>
                </ul>
            </li>
            <li class="menu nav-item relative">
                <a href="javascript:;" class="nav-link">
                    <div class="flex items-center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="shrink-0">
                            <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V10C2 6.22876 2 4.34315 3.17157 3.17157C4.34315 2 6.23869 2 10.0298 2C10.6358 2 11.1214 2 11.53 2.01666C11.5166 2.09659 11.5095 2.17813 11.5092 2.26057L11.5 5.09497C11.4999 6.19207 11.4998 7.16164 11.6049 7.94316C11.7188 8.79028 11.9803 9.63726 12.6716 10.3285C13.3628 11.0198 14.2098 11.2813 15.0569 11.3952C15.8385 11.5003 16.808 11.5002 17.9051 11.5001L18 11.5001H21.9574C22 12.0344 22 12.6901 22 13.5629V14C22 17.7712 22 19.6569 20.8284 20.8284C19.6569 22 17.7712 22 14 22Z" fill="currentColor"></path>
                            <path d="M6 13.75C5.58579 13.75 5.25 14.0858 5.25 14.5C5.25 14.9142 5.58579 15.25 6 15.25H14C14.4142 15.25 14.75 14.9142 14.75 14.5C14.75 14.0858 14.4142 13.75 14 13.75H6Z" fill="currentColor"></path>
                            <path d="M6 17.25C5.58579 17.25 5.25 17.5858 5.25 18C5.25 18.4142 5.58579 18.75 6 18.75H11.5C11.9142 18.75 12.25 18.4142 12.25 18C12.25 17.5858 11.9142 17.25 11.5 17.25H6Z" fill="currentColor"></path>
                            <path d="M11.5092 2.2601L11.5 5.0945C11.4999 6.1916 11.4998 7.16117 11.6049 7.94269C11.7188 8.78981 11.9803 9.6368 12.6716 10.3281C13.3629 11.0193 14.2098 11.2808 15.057 11.3947C15.8385 11.4998 16.808 11.4997 17.9051 11.4996L21.9574 11.4996C21.9698 11.6552 21.9786 11.821 21.9848 11.9995H22C22 11.732 22 11.5983 21.9901 11.4408C21.9335 10.5463 21.5617 9.52125 21.0315 8.79853C20.9382 8.6713 20.8743 8.59493 20.7467 8.44218C19.9542 7.49359 18.911 6.31193 18 5.49953C17.1892 4.77645 16.0787 3.98536 15.1101 3.3385C14.2781 2.78275 13.862 2.50487 13.2915 2.29834C13.1403 2.24359 12.9408 2.18311 12.7846 2.14466C12.4006 2.05013 12.0268 2.01725 11.5 2.00586L11.5092 2.2601Z" fill="currentColor"></path>
                        </svg>
                        <span class="px-1">Pages</span>
                    </div>
                    <div class="right_arrow">
                        <svg class="h-4 w-4 rotate-90" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                </a>
                <ul class="sub-menu">
                    <li class="relative">
                        <a href="javascript:;">Users
                            <div class="ltr:ml-auto rtl:mr-auto rtl:rotate-180">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </a>
                        <ul class="absolute top-0 z-[10] hidden min-w-[180px] rounded bg-white p-0 py-2 text-dark shadow ltr:left-[95%] rtl:right-[95%] dark:bg-[#1b2e4b] dark:text-white-dark">
                            <li>
                                <a href="users-profile.html">Profile</a>
                            </li>
                            <li>
                                <a href="users-account-settings.html">Account Settings</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="pages-knowledge-base.html">Knowledge Base</a>
                    </li>
                    <li>
                        <a href="pages-contact-us-boxed.html" target="_blank">Contact Us Boxed</a>
                    </li>
                    <li>
                        <a href="pages-contact-us-cover.html" target="_blank">Contact Us Cover</a>
                    </li>
                    <li>
                        <a href="pages-faq.html">Faq</a>
                    </li>
                    <li>
                        <a href="pages-coming-soon-boxed.html" target="_blank">Coming Soon Boxed</a>
                    </li>
                    <li>
                        <a href="pages-coming-soon-cover.html" target="_blank">Coming Soon Cover</a>
                    </li>
                    <li>
                        <a href="pages-maintenence.html" target="_blank">Maintanence</a>
                    </li>
                    <li class="relative">
                        <a href="javascript:;">Error
                            <div class="ltr:ml-auto rtl:mr-auto rtl:rotate-180">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </a>
                        <ul class="absolute top-0 z-[10] hidden min-w-[180px] rounded bg-white p-0 py-2 text-dark shadow ltr:left-[95%] rtl:right-[95%] dark:bg-[#1b2e4b] dark:text-white-dark">
                            <li>
                                <a href="pages-error404.html" target="_blank">404</a>
                            </li>
                            <li>
                                <a href="pages-error500.html" target="_blank">500</a>
                            </li>
                            <li>
                                <a href="pages-error503.html" target="_blank">503</a>
                            </li>
                        </ul>
                    </li>
                    <li class="relative">
                        <a href="javascript:;">Login
                            <div class="ltr:ml-auto rtl:mr-auto rtl:rotate-180">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </a>
                        <ul class="absolute top-0 z-[10] hidden min-w-[180px] rounded bg-white p-0 py-2 text-dark shadow ltr:left-[95%] rtl:right-[95%] dark:bg-[#1b2e4b] dark:text-white-dark">
                            <li>
                                <a href="auth-cover-login.html" target="_blank">Login Cover</a>
                            </li>
                            <li>
                                <a href="auth-boxed-signin.html" target="_blank">Login Boxed</a>
                            </li>
                        </ul>
                    </li>
                    <li class="relative">
                        <a href="javascript:;">Register
                            <div class="ltr:ml-auto rtl:mr-auto rtl:rotate-180">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </a>
                        <ul class="absolute top-0 z-[10] hidden min-w-[180px] rounded bg-white p-0 py-2 text-dark shadow ltr:left-[95%] rtl:right-[95%] dark:bg-[#1b2e4b] dark:text-white-dark">
                            <li>
                                <a href="auth-cover-register.html" target="_blank">Register Cover</a>
                            </li>
                            <li>
                                <a href="auth-boxed-signup.html" target="_blank">Register Boxed</a>
                            </li>
                        </ul>
                    </li>
                    <li class="relative">
                        <a href="javascript:;">Password Recovery
                            <div class="ltr:ml-auto rtl:mr-auto rtl:rotate-180">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </a>
                        <ul class="absolute top-0 z-[10] hidden min-w-[180px] rounded bg-white p-0 py-2 text-dark shadow ltr:left-[95%] rtl:right-[95%] dark:bg-[#1b2e4b] dark:text-white-dark">
                            <li>
                                <a href="auth-cover-password-reset.html" target="_blank">Recover ID Cover</a>
                            </li>
                            <li>
                                <a href="auth-boxed-password-reset.html" target="_blank">Recover ID Boxed</a>
                            </li>
                        </ul>
                    </li>
                    <li class="relative">
                        <a href="javascript:;">Lockscreen
                            <div class="ltr:ml-auto rtl:mr-auto rtl:rotate-180">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </a>
                        <ul class="absolute top-0 z-[10] hidden min-w-[180px] rounded bg-white p-0 py-2 text-dark shadow ltr:left-[95%] rtl:right-[95%] dark:bg-[#1b2e4b] dark:text-white-dark">
                            <li>
                                <a href="auth-cover-lockscreen.html" target="_blank">Unlock Cover</a>
                            </li>
                            <li>
                                <a href="auth-boxed-lockscreen.html" target="_blank">Unlock Boxed</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="menu nav-item relative">
                <a href="javascript:;" class="nav-link">
                    <div class="flex items-center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="shrink-0">
                            <path opacity="0.5" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" fill="currentColor"></path>
                            <path d="M12.75 9C12.75 8.58579 12.4142 8.25 12 8.25C11.5858 8.25 11.25 8.58579 11.25 9L11.25 11.25H9C8.58579 11.25 8.25 11.5858 8.25 12C8.25 12.4142 8.58579 12.75 9 12.75H11.25V15C11.25 15.4142 11.5858 15.75 12 15.75C12.4142 15.75 12.75 15.4142 12.75 15L12.75 12.75H15C15.4142 12.75 15.75 12.4142 15.75 12C15.75 11.5858 15.4142 11.25 15 11.25H12.75V9Z" fill="currentColor"></path>
                        </svg>
                        <span class="px-1">More</span>
                    </div>
                    <div class="right_arrow">
                        <svg class="h-4 w-4 rotate-90" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="dragndrop.html">Drag and Drop</a>
                    </li>
                    <li>
                        <a href="charts.html">Charts</a>
                    </li>
                    <li>
                        <a href="font-icons.html">Font Icons</a>
                    </li>
                    <li>
                        <a href="widgets.html">Widgets</a>
                    </li>
                    <li>
                        <a href="https://vristo.sbthemes.com/" target="_blank">Documentation</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</header>
<div class="animate__animated p-6" :class="[$store.app.animation]">
    <!-- start main content section -->
    <div x-data="chat">
        <div class="relative flex h-full gap-5 sm:h-[calc(100vh_-_150px)] sm:min-h-0" :class="{'min-h-[999px]' : isShowChatMenu}">
            <div class="panel absolute z-10 hidden w-full max-w-xs flex-none space-y-4 overflow-hidden p-4 xl:relative xl:block xl:h-full" :class="isShowChatMenu &amp;&amp; '!block'">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-none"><img src="assets/images/profile-34.jpeg" class="h-12 w-12 rounded-full object-cover"></div>
                        <div class="mx-3">
                            <p class="mb-1 font-semibold">{{Auth::user()->name}}</p>
                            <p class="text-xs text-white-dark">Software Developer</p>
                        </div>
                    </div>
                    <div x-data="dropdown" @click.outside="open = false" class="dropdown">
                        <nav class="m-header-right">
                            <a href="#"><i class="fas fa-cog settings-btn"></i></a>
                            <a href="#" class="listView-x"><i class="fas fa-times"></i></a>
                        </nav>

                       
                    </div>
                </div>
                <div class="relative">
                    <input type="text" class="peer form-input ltr:pr-9 rtl:pl-9 messenger-search" placeholder="Rechercher...">
                    <div class="absolute top-1/2 -translate-y-1/2 peer-focus:text-primary ltr:right-2 rtl:left-2">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="11.5" cy="11.5" r="9.5" stroke="currentColor" stroke-width="1.5" opacity="0.5"></circle>
                            <path d="M18.5 18.5L22 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                        </svg>
                    </div>
                </div>
                {{-- <div class="flex items-center justify-between text-xs">
                    <button type="button" class="group hover:text-primary">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-1 h-5 w-5">
                            <path opacity="0.5" d="M13.0867 21.3877L13.7321 21.7697L13.0867 21.3877ZM13.6288 20.4718L12.9833 20.0898L13.6288 20.4718ZM10.3712 20.4718L9.72579 20.8539H9.72579L10.3712 20.4718ZM10.9133 21.3877L11.5587 21.0057L10.9133 21.3877ZM13.5 2.75C13.9142 2.75 14.25 2.41421 14.25 2C14.25 1.58579 13.9142 1.25 13.5 1.25V2.75ZM22.75 10.5C22.75 10.0858 22.4142 9.75 22 9.75C21.5858 9.75 21.25 10.0858 21.25 10.5H22.75ZM2.3806 15.9134L3.07351 15.6264V15.6264L2.3806 15.9134ZM7.78958 18.9915L7.77666 19.7413L7.78958 18.9915ZM5.08658 18.6194L4.79957 19.3123H4.79957L5.08658 18.6194ZM21.6194 15.9134L22.3123 16.2004V16.2004L21.6194 15.9134ZM16.2104 18.9915L16.1975 18.2416L16.2104 18.9915ZM18.9134 18.6194L19.2004 19.3123H19.2004L18.9134 18.6194ZM4.38751 2.7368L3.99563 2.09732V2.09732L4.38751 2.7368ZM2.7368 4.38751L2.09732 3.99563H2.09732L2.7368 4.38751ZM9.40279 19.2098L9.77986 18.5615L9.77986 18.5615L9.40279 19.2098ZM13.7321 21.7697L14.2742 20.8539L12.9833 20.0898L12.4412 21.0057L13.7321 21.7697ZM9.72579 20.8539L10.2679 21.7697L11.5587 21.0057L11.0166 20.0898L9.72579 20.8539ZM12.4412 21.0057C12.2485 21.3313 11.7515 21.3313 11.5587 21.0057L10.2679 21.7697C11.0415 23.0767 12.9585 23.0767 13.7321 21.7697L12.4412 21.0057ZM10.5 2.75H13.5V1.25H10.5V2.75ZM21.25 10.5V11.5H22.75V10.5H21.25ZM2.75 11.5V10.5H1.25V11.5H2.75ZM1.25 11.5C1.25 12.6546 1.24959 13.5581 1.29931 14.2868C1.3495 15.0223 1.45323 15.6344 1.68769 16.2004L3.07351 15.6264C2.92737 15.2736 2.84081 14.8438 2.79584 14.1847C2.75041 13.5189 2.75 12.6751 2.75 11.5H1.25ZM7.8025 18.2416C6.54706 18.2199 5.88923 18.1401 5.37359 17.9265L4.79957 19.3123C5.60454 19.6457 6.52138 19.7197 7.77666 19.7413L7.8025 18.2416ZM1.68769 16.2004C2.27128 17.6093 3.39066 18.7287 4.79957 19.3123L5.3736 17.9265C4.33223 17.4951 3.50486 16.6678 3.07351 15.6264L1.68769 16.2004ZM21.25 11.5C21.25 12.6751 21.2496 13.5189 21.2042 14.1847C21.1592 14.8438 21.0726 15.2736 20.9265 15.6264L22.3123 16.2004C22.5468 15.6344 22.6505 15.0223 22.7007 14.2868C22.7504 13.5581 22.75 12.6546 22.75 11.5H21.25ZM16.2233 19.7413C17.4786 19.7197 18.3955 19.6457 19.2004 19.3123L18.6264 17.9265C18.1108 18.1401 17.4529 18.2199 16.1975 18.2416L16.2233 19.7413ZM20.9265 15.6264C20.4951 16.6678 19.6678 17.4951 18.6264 17.9265L19.2004 19.3123C20.6093 18.7287 21.7287 17.6093 22.3123 16.2004L20.9265 15.6264ZM10.5 1.25C8.87781 1.25 7.6085 1.24921 6.59611 1.34547C5.57256 1.44279 4.73445 1.64457 3.99563 2.09732L4.77938 3.37628C5.24291 3.09223 5.82434 2.92561 6.73809 2.83873C7.663 2.75079 8.84876 2.75 10.5 2.75V1.25ZM2.75 10.5C2.75 8.84876 2.75079 7.663 2.83873 6.73809C2.92561 5.82434 3.09223 5.24291 3.37628 4.77938L2.09732 3.99563C1.64457 4.73445 1.44279 5.57256 1.34547 6.59611C1.24921 7.6085 1.25 8.87781 1.25 10.5H2.75ZM3.99563 2.09732C3.22194 2.57144 2.57144 3.22194 2.09732 3.99563L3.37628 4.77938C3.72672 4.20752 4.20752 3.72672 4.77938 3.37628L3.99563 2.09732ZM11.0166 20.0898C10.8136 19.7468 10.6354 19.4441 10.4621 19.2063C10.2795 18.9559 10.0702 18.7304 9.77986 18.5615L9.02572 19.8582C9.07313 19.8857 9.13772 19.936 9.24985 20.0898C9.37122 20.2564 9.50835 20.4865 9.72579 20.8539L11.0166 20.0898ZM7.77666 19.7413C8.21575 19.7489 8.49387 19.7545 8.70588 19.7779C8.90399 19.7999 8.98078 19.832 9.02572 19.8582L9.77986 18.5615C9.4871 18.3912 9.18246 18.3215 8.87097 18.287C8.57339 18.2541 8.21375 18.2487 7.8025 18.2416L7.77666 19.7413ZM14.2742 20.8539C14.4916 20.4865 14.6287 20.2564 14.7501 20.0898C14.8622 19.936 14.9268 19.8857 14.9742 19.8582L14.2201 18.5615C13.9298 18.7304 13.7204 18.9559 13.5379 19.2063C13.3646 19.4441 13.1864 19.7468 12.9833 20.0898L14.2742 20.8539ZM16.1975 18.2416C15.7862 18.2487 15.4266 18.2541 15.129 18.287C14.8175 18.3215 14.5129 18.3912 14.2201 18.5615L14.9742 19.8582C15.0192 19.832 15.096 19.7999 15.2941 19.7779C15.5061 19.7545 15.7842 19.7489 16.2233 19.7413L16.1975 18.2416Z" fill="currentColor"></path>
                            <circle cx="19" cy="5" r="3" stroke="currentColor" stroke-width="1.5"></circle>
                        </svg>
                        Chats
                    </button>

                    <button type="button" class="group hover:text-primary">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-1 h-5 w-5">
                            <path d="M5.00659 6.93309C5.04956 5.7996 5.70084 4.77423 6.53785 3.93723C7.9308 2.54428 10.1532 2.73144 11.0376 4.31617L11.6866 5.4791C12.2723 6.52858 12.0372 7.90533 11.1147 8.8278M17.067 18.9934C18.2004 18.9505 19.2258 18.2992 20.0628 17.4622C21.4558 16.0692 21.2686 13.8468 19.6839 12.9624L18.5209 12.3134C17.4715 11.7277 16.0947 11.9628 15.1722 12.8853" stroke="currentColor" stroke-width="1.5"></path>
                            <path opacity="0.5" d="M5.00655 6.93311C4.93421 8.84124 5.41713 12.0817 8.6677 15.3323C11.9183 18.5829 15.1588 19.0658 17.0669 18.9935M15.1722 12.8853C15.1722 12.8853 14.0532 14.0042 12.0245 11.9755C9.99578 9.94676 11.1147 8.82782 11.1147 8.82782" stroke="currentColor" stroke-width="1.5"></path>
                        </svg>
                        Calls
                    </button>

                    <button type="button" class="group hover:text-primary">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-1 h-5 w-5">
                            <circle cx="10" cy="6" r="4" stroke="currentColor" stroke-width="1.5"></circle>
                            <path opacity="0.5" d="M18 17.5C18 19.9853 18 22 10 22C2 22 2 19.9853 2 17.5C2 15.0147 5.58172 13 10 13C14.4183 13 18 15.0147 18 17.5Z" stroke="currentColor" stroke-width="1.5"></path>
                            <path d="M21 10H19M19 10H17M19 10L19 8M19 10L19 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                        </svg>
                        Contacts
                    </button>

                    <button type="button" class="group hover:text-primary">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-1 h-5 w-5">
                            <path d="M19.0001 9.7041V9C19.0001 5.13401 15.8661 2 12.0001 2C8.13407 2 5.00006 5.13401 5.00006 9V9.7041C5.00006 10.5491 4.74995 11.3752 4.28123 12.0783L3.13263 13.8012C2.08349 15.3749 2.88442 17.5139 4.70913 18.0116C9.48258 19.3134 14.5175 19.3134 19.291 18.0116C21.1157 17.5139 21.9166 15.3749 20.8675 13.8012L19.7189 12.0783C19.2502 11.3752 19.0001 10.5491 19.0001 9.7041Z" stroke="currentColor" stroke-width="1.5"></path>
                            <path opacity="0.5" d="M7.5 19C8.15503 20.7478 9.92246 22 12 22C14.0775 22 15.845 20.7478 16.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                        </svg>
                        Notification
                    </button>
                </div> --}}
                <div class="h-px w-full border-b border-[#e0e6ed] dark:border-[#1b2e4b]"></div>
                <div class="!mt-0">
                    <div class="show messenger-tab users-tab app-scroll" data-view="users">
                        {{-- Favorites --}}
                        <div class="favorites-section">
                         <p class="messenger-title"><span>Favoris</span></p>
                         <div class="messenger-favorites app-scroll-hidden"></div>
                        </div>
                        {{-- Saved Messages --}}
                        <p class="messenger-title"><span>Votre Espace</span></p>
                        {!! view('Chatify::layouts.listItem', ['get' => 'saved']) !!}
                        {{-- Contact --}}
                        <p class="messenger-title"><span>Tous Les Messages</span></p>
                        <div class="listOfContacts" style="width: 100%;height: calc(100% - 272px);position: relative;"></div>
                    </div>
                </div>
            </div>
            <div class="absolute z-[5] hidden h-full w-full rounded-md bg-black/60" :class="isShowChatMenu &amp;&amp; '!block xl:!hidden'" @click="isShowChatMenu = !isShowChatMenu"></div>
            <div class="panel flex-1 p-0 m-body messages-container app-scroll messenger">
                <div class="messenger-messagingView">
                    {{-- header title [conversation name] amd buttons --}}
                    <div class="m-header m-header-messaging">
                        <nav class="chatify-d-flex chatify-justify-content-between chatify-align-items-center">
                            {{-- header back button, avatar and user name --}}
                            <div class="chatify-d-flex chatify-justify-content-between chatify-align-items-center">
                                <a href="#" class="show-listView"><i class="fas fa-arrow-left"></i></a>
                                <div class="avatar av-s header-avatar" style="margin: 0px 10px; margin-top: -5px; margin-bottom: -5px;">
                                </div>
                                <a href="#" class="user-name">{{ config('chatify.name') }}</a>
                            </div>
                            {{-- header buttons --}}
                            <nav class="m-header-right">
                                <a href="#" class="add-to-favorite"><i class="fas fa-star"></i></a>
                                <a href="/">
                                    <svg class="shrink-0 group-hover:!text-primary" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.5" d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z" fill="currentColor"></path>
                                        <path d="M9 17.25C8.58579 17.25 8.25 17.5858 8.25 18C8.25 18.4142 8.58579 18.75 9 18.75H15C15.4142 18.75 15.75 18.4142 15.75 18C15.75 17.5858 15.4142 17.25 15 17.25H9Z" fill="currentColor"></path>
                                    </svg>
                                </a>
                                <a href="#" class="show-infoSide">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5 shrink-0 ltr:mr-1 rtl:ml-1">
                                        <circle opacity="0.5" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5"></circle>
                                        <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                        <circle cx="12" cy="16" r="1" fill="currentColor"></circle>
                                    </svg>
                                </a>
                            </nav>
                        </nav>
                        {{-- Internet connection --}}
                        <div class="internet-connection">
                            <span class="ic-connected">Connected</span>
                            <span class="ic-connecting">Connecting...</span>
                            <span class="ic-noInternet">No internet access</span>
                        </div>
                    </div>
            
                    {{-- Messaging area --}}
                    <div class="m-body messages-container app-scroll">
                        <div class="messages">
                            <p class="message-hint center-el"><span>Please select a chat to start messaging</span></p>
                        </div>
                        {{-- Typing indicator --}}
                        <div class="typing-indicator">
                            <div class="message-card typing">
                                <div class="message">
                                    <span class="typing-dots">
                                        <span class="dot dot-1"></span>
                                        <span class="dot dot-2"></span>
                                        <span class="dot dot-3"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
            
                    </div>
                    {{-- Send Message Form --}}
                    @include('Chatify::layouts.sendForm')
                </div>
                <div class="messenger-infoView app-scroll">
                    {{-- nav actions --}}
                    <nav>
                        <p>User Details</p>
                        <a href="#"><i class="fas fa-times"></i></a>
                    </nav>
                    {!! view('Chatify::layouts.info')->render() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- end main content section -->

</div>
<div class="messenger">
    {{-- ----------------------Users/Groups lists side---------------------- --}}
    <div class="messenger-listView {{ !!$id ? 'conversation-active' : '' }}">
        {{-- Header and search bar --}}
        <div class="m-header">
            <nav>
                <a href="#"><i class="fas fa-inbox"></i> <span class="messenger-headTitle">MESSAGES</span> </a>
                {{-- header buttons --}}
                <nav class="m-header-right">
                    <a href="#"><i class="fas fa-cog settings-btn"></i></a>
                    <a href="#" class="listView-x"><i class="fas fa-times"></i></a>
                </nav>
            </nav>
            {{-- Search input --}}
            xxx
            {{-- Tabs --}}
            {{-- <div class="messenger-listView-tabs">
                <a href="#" class="active-tab" data-view="users">
                    <span class="far fa-user"></span> Contacts</a>
            </div> --}}
        </div>
        {{-- tabs and lists --}}
        <div class="m-body contacts-container">
           {{-- Lists [Users/Group] --}}
           {{-- ---------------- [ User Tab ] ---------------- --}}
          xxx
             {{-- ---------------- [ Search Tab ] ---------------- --}}
           <div class="messenger-tab search-tab app-scroll" data-view="search">
                {{-- items --}}
                <p class="messenger-title"><span>Search</span></p>
                <div class="search-records">
                    <p class="message-hint center-el"><span>Type to search..</span></p>
                </div>
             </div>
        </div>
    </div>

    {{-- ----------------------Messaging side---------------------- --}}
    <div class="messenger-messagingView">
        {{-- header title [conversation name] amd buttons --}}
        <div class="m-header m-header-messaging">
            <nav class="chatify-d-flex chatify-justify-content-between chatify-align-items-center">
                {{-- header back button, avatar and user name --}}
                <div class="chatify-d-flex chatify-justify-content-between chatify-align-items-center">
                    <a href="#" class="show-listView"><i class="fas fa-arrow-left"></i></a>
                    <div class="avatar av-s header-avatar" style="margin: 0px 10px; margin-top: -5px; margin-bottom: -5px;">
                    </div>
                    <a href="#" class="user-name">{{ config('chatify.name') }}</a>
                </div>
                {{-- header buttons --}}
                <nav class="m-header-right">
                    <a href="#" class="add-to-favorite"><i class="fas fa-star"></i></a>
                    <a href="/"><i class="fas fa-home"></i></a>
                    <a href="#" class="show-infoSide"><i class="fas fa-info-circle"></i></a>
                </nav>
            </nav>
            {{-- Internet connection --}}
            <div class="internet-connection">
                <span class="ic-connected">Connected</span>
                <span class="ic-connecting">Connecting...</span>
                <span class="ic-noInternet">No internet access</span>
            </div>
        </div>

        {{-- Messaging area --}}
        <div class="m-body messages-container app-scroll">
            <div class="messages">
                <p class="message-hint center-el"><span>Please select a chat to start messaging</span></p>
            </div>
            {{-- Typing indicator --}}
            <div class="typing-indicator">
                <div class="message-card typing">
                    <div class="message">
                        <span class="typing-dots">
                            <span class="dot dot-1"></span>
                            <span class="dot dot-2"></span>
                            <span class="dot dot-3"></span>
                        </span>
                    </div>
                </div>
            </div>

        </div>
        {{-- Send Message Form --}}
        @include('Chatify::layouts.sendForm')
    </div>
    {{-- ---------------------- Info side ---------------------- --}}
    <div class="messenger-infoView app-scroll">
        {{-- nav actions --}}
        <nav>
            <p>User Details</p>
            <a href="#"><i class="fas fa-times"></i></a>
        </nav>
        {!! view('Chatify::layouts.info')->render() !!}
    </div>
</div>

@include('Chatify::layouts.modals')
@include('Chatify::layouts.footerLinks')
