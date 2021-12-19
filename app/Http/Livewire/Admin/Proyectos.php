<?php

namespace App\Http\Livewire\Admin;

use App\Models\Proyecto;
use Livewire\Component;

use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Proyectos extends Component
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
        $proyectos = Proyecto::all();
        return view('livewire.admin.proyectos', compact('proyectos'));
    }
    
    public function delete(Proyecto $proyecto){
        $proyecto->delete();
    }
}
