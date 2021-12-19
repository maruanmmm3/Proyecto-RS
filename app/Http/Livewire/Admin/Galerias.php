<?php

namespace App\Http\Livewire\Admin;

use App\Models\Galeria;
use Livewire\Component;


use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Galerias extends Component
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
        $galerias = Galeria::all();

        return view('livewire.admin.galerias', compact('galerias'));
    }

    public function delete(Galeria $galerium){
        $galerium->delete();
    }
}
