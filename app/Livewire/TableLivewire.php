<?php

namespace App\Livewire;

use App\Models\Producto;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Livewire\Component;

class TableLivewire extends Component
{

    public $productos;
    public $search;
    public $error = 'No se encontraron resultados.';

    public function render()
    {
        return view('livewire.table-livewire');
    }

    public function searchProduct(){
        try {
            $this->productos = Producto::where('foliofiscal', 'LIKE', "%{$this->search}%")->first();
            $this->reset(['error']);
        } catch(ModelNotFoundException $e) {
            $this->error;
        }
    }
}
