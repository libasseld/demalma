<?php

namespace App\Http\Livewire\Front;

use App\Models\CategorieOffre;
use Livewire\Component;

class NosOffresComponent extends Component
{
   
    public function render()
    {
        return view('livewire.front.nos-offres-component',[
            'categories_offres' => CategorieOffre::with('offres')->whereHas('offres')->get()
        ]);
    }


}
