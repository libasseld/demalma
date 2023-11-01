<?php

namespace App\Http\Livewire\Front;

use App\Models\Marque;
use App\Models\TypeVehicule;
use Livewire\Component;

class HomeComponent extends Component
{
    public $marques;
    public $type_vehicules;
    public function mount()
    {
        $this->marques          = Marque::orderBy('titre', 'asc')->get();
        $this->type_vehicules   = TypeVehicule::orderBy('name', 'asc')->get();
    }
    public function render()
    {
        return view('livewire.front.home-component');
    }
}
