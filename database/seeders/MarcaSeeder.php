<?php

namespace Database\Seeders;

use App\Models\Marca;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $marcas = [
            'LG', 'Lenovo', 'Toshiba', 'Halion', 'HP', 'Asus'
        ];

        foreach ($marcas as $key => $value) {
            $cantidad = Marca::where('nombre', '=', $value)->count();

            if ($cantidad === 0) {
                $marca = new Marca();
                $marca->nombre = $value;
                $marca->save();
            }
        }
    }
}
