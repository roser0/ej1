<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Obtener las categorías creadas
        $electronica = Category::where('name', 'Electrónica')->first();
        $ropa = Category::where('name', 'Ropa')->first();
        $hogar = Category::where('name', 'Hogar')->first();

        $products = [
            [
                'name' => 'Smartphone X',
                'description' => 'Teléfono inteligente de última generación',
                'price' => 599.99,
                'stock' => 50,
                'category' => $electronica
            ],
            [
                'name' => 'Laptop Pro',
                'description' => 'Computadora portátil de alto rendimiento',
                'price' => 1299.99,
                'stock' => 30,
                'category' => $electronica
            ],
            [
                'name' => 'Camiseta Casual',
                'description' => 'Camiseta de algodón para uso diario',
                'price' => 29.99,
                'stock' => 100,
                'category' => $ropa
            ],
            [
                'name' => 'Sudadera Deportiva',
                'description' => 'Sudadera cómoda para entrenamiento',
                'price' => 49.99,
                'stock' => 75,
                'category' => $ropa
            ],
            [
                'name' => 'Lámpara de Mesa',
                'description' => 'Lámpara decorativa para sala de estar',
                'price' => 89.99,
                'stock' => 40,
                'category' => $hogar
            ],
            [
                'name' => 'Set de Toallas',
                'description' => 'Juego de toallas de baño de alta calidad',
                'price' => 59.99,
                'stock' => 60,
                'category' => $hogar
            ]
        ];

        foreach ($products as $productData) {
            Product::create([
                'name' => $productData['name'],
                'slug' => Str::slug($productData['name']),
                'description' => $productData['description'],
                'price' => $productData['price'],
                'stock' => $productData['stock'],
                'is_active' => true,
                'category_id' => $productData['category']->id
            ]);
        }
    }
}
