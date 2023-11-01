<x-admin-layout>
    <div class="animate__animated p-6 min-h-screen" :class="[$store.app.animation]">
        <!-- start main content section -->
        <div>
            <ul class="flex space-x-2 rtl:space-x-reverse">
                <li>
                    <a href="{{route('dashboard')}}" class="text-primary hover:underline">Dashboard</a>
                </li>
                <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
                    <span>Gestion des offres</span>
                </li>
            </ul>
        </div>
        <!-- end main content section -->
        <livewire:admin.form.offre-form :slug="isset($slug) ? $slug : ''" >

      
    </div>

</x-admin-layout>