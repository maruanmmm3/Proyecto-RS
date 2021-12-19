<?php

namespace App\Http\Livewire\Admin;

use App\Models\Equipo;
use Livewire\Component;

use Livewire\WithFileUploads;
use Livewire\WithPagination;


class Grupo extends Component
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
        $equipos = Equipo::where('nombre', 'LIKE' , '%'. $this->search . '%')
        ->orWhere('puesto', 'LIKE' , '%'. $this->search . '%')
        ->orWhere('telefono', 'LIKE' , '%'. $this->search . '%')
        ->paginate();

        return view('livewire.admin.grupo', compact('equipos'));
    }

    public function delete(Equipo $equipo){
        $equipo->delete();
    }
}
