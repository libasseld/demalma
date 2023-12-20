<x-admin-layout>
    <div class="min-h-screen p-2 animate__animated" :class="[$store.app.animation]">
        <!-- start main content section -->
        <div>
            <ol class="flex mb-2 font-semibold text-primary dark:text-white-dark">
                <li class="bg-[#ebedf2] rounded-tl-md rounded-bl-md dark:bg-[#1b2e4b]"><a href="{{route('dashboard')}}" class="p-1.5 ltr:pl-3 rtl:pr-3 ltr:pr-2 rtl:pl-2 relative  h-full flex items-center before:absolute ltr:before:-right-[15px] rtl:before:-left-[15px] rtl:before:rotate-180 before:inset-y-0 before:m-auto before:w-0 before:h-0 before:border-[16px] before:border-l-[15px] before:border-r-0 before:border-t-transparent before:border-b-transparent before:border-l-[#ebedf2] before:z-[1] dark:before:border-l-[#1b2e4b] hover:text-primary dark:hover:text-white-dark/70">Dashboard</a></li>
                <li class="bg-[rgb(235,237,242)] dark:bg-[#1b2e4b]"><a class="bg-primary text-white p-1.5 ltr:pl-6 rtl:pr-6 ltr:pr-2 rtl:pl-2 relative  h-full flex items-center before:absolute ltr:before:-right-[15px] rtl:before:-left-[15px] rtl:before:rotate-180 before:inset-y-0 before:m-auto before:w-0 before:h-0 before:border-[16px] before:border-l-[15px] before:border-r-0 before:border-t-transparent before:border-b-transparent before:border-l-primary before:z-[1]">Offres</a></li>
            </ol>
            {{-- <ul class="flex space-x-2 rtl:space-x-reverse">
                <li>
                    <a href="{{route('dashboard')}}" class="text-primary hover:underline">Dashboard</a>
                </li>
                <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
                    <span>Gestion des offres</span>
                </li>
            </ul> --}}
        </div>
        <!-- end main content section -->
        <livewire:admin.nos-offres-component >

      
    </div>

</x-admin-layout>