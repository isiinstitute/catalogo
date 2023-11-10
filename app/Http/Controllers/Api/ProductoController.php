<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoriaCollection;
use App\Http\Resources\MarcaCollection;
use App\Http\Resources\ProductCollection;
use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new ProductCollection(Producto::all());
    }

    public function categorias()
    {
        return  new CategoriaCollection(Categoria::all());
    }

    public function marcas()
    {
        return  new MarcaCollection(Marca::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'categoria_id' => 'required|exists:categorias,id',
            'marca_id' => 'required|exists:marcas,id',
            'titulo' => 'required|string',
            'precio' => 'required|decimal:2',
            'imagen' => 'required|image',
        ]);

        if ($validator->fails()) {
            $data = [
                'errors' => $validator->errors(),
                'message' => 'Error en los datos'
            ];

            return response()->json($data, 422);
        }

        try {
            $producto = new Producto();
            $producto->categoria_id = $request->categoria_id;
            $producto->marca_id = $request->marca_id;
            $producto->titulo = $request->titulo;
            $producto->precio = $request->precio;
            $producto->imagen = $request->imagen->store('public' . DIRECTORY_SEPARATOR . 'products');
            $producto->user_id = auth()->user()->id;
            $producto->save();

            $data = ['message' => 'Registrar producto correctamente'] + $producto->toArray();

            return response()->json($data, 201);
        } catch (\Throwable $error) {
            Log::error($error->getMessage());

            $data = [
                'message' => 'Error al registrar producto'
            ];

            return response()->json($data, 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
