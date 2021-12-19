<?php

namespace App\Http\Livewire\Admin;

use App\Models\Valor;
use Livewire\Component;


use Livewire\WithFileUploads;
use Livewire\WithPagination;


class Volores extends Component
{
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;
    protected $listeners = ['render','delete'];

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $valors = Valor::where('texto', 'LIKE' , '%'. $this->search . '%')
        ->paginate();
        return view('livewire.admin.volores', compact('valors'));
    }

    public function delete(Valor $valor){
        $valor->delete();
    }
}
