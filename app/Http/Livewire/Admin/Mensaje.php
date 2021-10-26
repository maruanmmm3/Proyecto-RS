<?php

namespace App\Http\Livewire\Admin;

use App\Models\Contacto;
use Livewire\Component;

use Livewire\WithFileUploads;
use Livewire\WithPagination;
class Mensaje extends Component
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
        $contactos = Contacto::where('name', 'LIKE' , '%'. $this->search . '%')
        ->orWhere('email', 'LIKE' , '%'. $this->search . '%')
        ->orWhere('phone', 'LIKE' , '%'. $this->search . '%')
        ->orWhere('message', 'LIKE' , '%'. $this->search . '%')
        ->paginate();
        return view('livewire.admin.mensaje',compact('contactos'));
    }

    public function delete(Contacto $contacto){
        $contacto->delete();
    }
}
