<x-admin-layout>
    <div class="animate__animated p-6 min-h-screen" :class="[$store.app.animation]">
        <!-- start main content section -->
        <div>
            <ul class="flex space-x-2 rtl:space-x-reverse">
                <li>
                    <a href="{{route('dashboard')}}" class="text-primary hover:underline">Dashboard</a>
                </li>
                <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
                    <span>Gestion des utilisateurs</span>
                </li>
            </ul>
        </div>
        <!-- end main content section -->
        <livewire:admin.users-management-component >

        <!-- start footer section -->
        <p class="pt-6 text-center dark:text-white-dark ltr:sm:text-left rtl:sm:text-right">
            © <span id="footer-year">2023</span>. Vristo All rights reserved.
        </p>
        <!-- end footer section -->
    </div>

</x-admin-layout>