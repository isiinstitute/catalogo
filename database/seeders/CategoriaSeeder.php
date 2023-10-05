<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = [
            'Monitores', 'Teclados', 'Laptops', 'Discos duros', 'Accesorios', 'Audio'
        ];

        foreach ($categorias as $key => $value) {
            $cantidad = Categoria::where('nombre', '=', $value)->count();

            if ($cantidad === 0) {
                $categoria = new Categoria();
                $categoria->nombre = $value;
                $categoria->save();
            }
        }
    }
}
