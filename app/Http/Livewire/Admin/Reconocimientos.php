<?php

namespace App\Http\Livewire\Admin;

use App\Models\Reconocimiento;
use Livewire\Component;


use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Reconocimientos extends Component
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
        $reconocimientos = Reconocimiento::all();

        return view('livewire.admin.reconocimientos', compact('reconocimientos'));
    }

    public function delete(Reconocimiento $reconocimiento){
        $reconocimiento->delete();
    }
}
