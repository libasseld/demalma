<?php

namespace App\Http\Livewire\Front;

use App\Models\Marque;
use App\Models\TypeVehicule;
use App\Models\Vehicule;
use Livewire\Component;
use Livewire\WithPagination;

class EParkingComponent extends Component
{
    public $marque_id;
    public $type_vehicule_id;
    public $search = null;
    public $marques;
    public $types;

    use WithPagination;


    public function mount()
    {
        $this->marques  = Marque::orderBy('titre')->get();
        $this->types    = TypeVehicule::orderBy('name')->get();
        $marque         = request('marque');
        $type_vehicule  = request('type_vehicule');
        is_numeric($marque) ? $this->marque_id = $marque : $this->marque_id =  null; 
        is_numeric($type_vehicule) ? $this->type_vehicule_id = $type_vehicule : $this->type_vehicule_id =  null; 

    }
    public function render()
    {
        $query = Vehicule::query()->where('approuvee', 1)->where('disponible', 1);
        if($this->marque_id != null){
            $query->where('marque_id', $this->marque_id);
        }
        if($this->type_vehicule_id != null){
            $query->where('type_vehicule_id', $this->type_vehicule_id);
        }
        return view('livewire.front.e-parking-component',
        ['items' => $query->where(function($q){
            $q->where('name','LIKE', '%'.$this->search.'%');
       })
       ->orderByDesc('id')
        ->paginate()]);
    }
}
