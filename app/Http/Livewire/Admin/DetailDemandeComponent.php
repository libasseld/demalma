<?php

namespace App\Http\Livewire\Admin;

use App\Models\Demande;
use Livewire\Component;

class DetailDemandeComponent extends Component
{
    public $demande_id;
    public $demande;

    public function mount(){
        $this->demande = Demande::where('id', $this->demande_id)->first();
        if(empty($this->demande)){
            abort(404);
        }
    }
    public function render()
    {
        return view('livewire.admin.detail-demande-component');
    }
}
