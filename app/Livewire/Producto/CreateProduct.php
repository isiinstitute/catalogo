<?php

namespace App\Livewire\Producto;

use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Producto;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProduct extends Component
{
    use WithFileUploads;

    public $categorias;
    public $marcas;
    public string $categoria_id;
    public string $marca_id;
    public string $titulo;
    public string $precio;
    public $imagen;

    protected $rules = [
        'categoria_id' => 'required|exists:categorias,id',
        'marca_id' => 'required|exists:marcas,id',
        'titulo' => 'required|string',
        'precio' => 'required|decimal:2',
        'imagen' => 'required|image',
    ];

    protected $validationAttributes = [
        'categoria_id' => 'categoría',
        'marca_id' => 'marca'
    ];

    public function mount()
    {
        $this->categorias = Categoria::all();
        $this->marcas = Marca::all();
    }


    public function render()
    {
        return view('livewire.producto.create-product');
    }

    public function registrar()
    {
        $this->validate();

        $producto = new Producto();
        $producto->categoria_id = $this->categoria_id;
        $producto->marca_id = $this->marca_id;
        $producto->titulo = $this->titulo;
        $producto->precio = $this->precio;
        $producto->imagen = $this->imagen->store('public' . DIRECTORY_SEPARATOR . 'products');
        $producto->user_id = auth()->user()->id;
        $producto->save();

        return redirect()->to(route('products.index'));
    }
}
