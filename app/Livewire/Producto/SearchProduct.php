<?php

namespace App\Livewire\Producto;

use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Producto;
use Livewire\Component;
use Livewire\WithPagination;

class SearchProduct extends Component
{
    use WithPagination;

    public string $titulo = '';
    public $categorias;
    public $marcas;

    public function mount()
    {
        $this->categorias = Categoria::all();
        $this->marcas = Marca::all();
    }

    public function render()
    {
        $products = Producto::where('titulo', 'LIKE', '%' . $this->titulo . '%')->paginate();
        return view('livewire.producto.search-product', compact('products'));
    }

    public function buscar()
    {
        $this->resetPage();
    }
}
