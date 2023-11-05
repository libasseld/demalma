<?php

namespace App\Http\Livewire\Admin;

use App\Models\Demande;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;


class DemandesComponent extends Component
{
    public $showform = false;
    public $edit_mode = false;
    public $categorie_offre;
    public $search;
    use WithPagination;

    protected function rules()
    {
        return [
            //  'categorie_offre.designation' => 'string|required|unique:categorie_offres,designation,'.$this->categorie_offre->id,
        ];
    }
    public function mount()
    {

        $this->categorie_offre = new Demande();
    }
    public function render()
    {
        $query = Demande::with(['offre', 'pays']);
        if (Auth::user()->role->code == 'usager' || Auth::user()->role->code == 'superviseur'){
            //$query->where('user_id', Auth::user()->id);
        }elseif (Auth::user()->role->code == 'usager'){
            $query->whereIn('id', Auth::user()->demandes->pluck('demande_id'));
        }elseif (Auth::user()->role->code == 'agent-de-traitement'){
            /* $query->whereRelation(); */
        }
        return view(
            'livewire.admin.demandes-component',
            ['items' => $query->where(function ($q) {
                $q->where('prenom', 'LIKE', '%' . $this->search . '%');
            })
                ->orderByDesc('id')
                ->paginate(10)]
        );
    }
    public function edit($id)
    {
        $this->categorie_offre = Demande::find($id);
        if (!empty($this->categorie_offre)) {
            $this->showform = true;
            $this->edit_mode = true;
        }
    }
    public function cancel()
    {
        $this->showform     = false;
        $this->edit_mode    = false;
        $this->categorie_offre       = null;
    }
    public function save()
    {
        $this->validate();
        $this->categorie_offre->slug = Str::slug($this->categorie_offre->designation);

        $this->categorie_offre->save();

        if ($this->edit_mode == false) {

            notify()->success('Ajouté avec succès ⚡️', 'Le profil a été ajouté avec succès');

            //$this->sendEmail();

        } else {
            notify()->success('Modifié avec succès ⚡️', 'Les modifications ont étés enregistrès avec succès');
        }
        $this->cancel();

        return redirect()->route('offres');
    }
}
