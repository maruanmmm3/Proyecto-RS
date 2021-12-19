<?php

namespace App\Http\Livewire\Admin;

use App\Models\Foto;
use Livewire\Component;


use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Fotos extends Component
{

    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;
    protected $listeners = ['render', 'delete'];

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $fotos = Foto::all();
        return view('livewire.admin.fotos', compact('fotos'));
    }

    public function delete(Foto $foto){
        $foto->delete();
    }
}
