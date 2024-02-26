<?php

namespace App\Livewire;

use App\Models\Producto;
use Livewire\Component;
use Livewire\WithPagination;

class AdminLivewire extends Component
{

    use WithPagination;

    public $search = '';
    public $perPage = '4';
    public $page = 1;

    public function render()
    {
        return view('livewire.admin-livewire', [
            'productos' => Producto::where('rsocial', 'LIKE', "%{$this->search}%")
            ->orWhere('foliofiscal', 'LIKE', "%{$this->search}%")
            ->simplePaginate($this->perPage)
        ]);
    }

    public function clear()
    {
        $this->search = '';
        $this->page = 1;
        $this->perPage = '4';
    }

    public function delete(Producto $producto){

        $producto->delete();

    }
}
