<x-admin-layout>
    <div class="animate__animated p-6 min-h-screen" :class="[$store.app.animation]">
        <!-- start main content section -->
        <div>
            <ul class="flex space-x-2 rtl:space-x-reverse">
                <li>
                    <a href="{{route('dashboard')}}" class="text-primary hover:underline">Dashboard</a>
                </li>
                <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
                    <span>Demandes de service</span>
                </li>
            </ul>
        </div>
        <!-- end main content section -->

        @if (Auth::user()->role->code == 'usager')
        <livewire:admin.detail-demande-usager-component :demande_id="$id">

        @else
        <livewire:admin.detail-demande-component :demande_id="$id">

        @endif

      
    </div>

</x-admin-layout>