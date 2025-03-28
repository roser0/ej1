<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Electrónica',
                'description' => 'Productos tecnológicos y dispositivos electrónicos',
            ],
            [
                'name' => 'Ropa',
                'description' => 'Prendas de vestir para todas las edades',
            ],
            [
                'name' => 'Hogar',
                'description' => 'Artículos y decoración para el hogar',
            ]
        ];

        foreach ($categories as $categoryData) {
            Category::create([
                'name' => $categoryData['name'],
                'slug' => Str::slug($categoryData['name']),
                'description' => $categoryData['description'],
                'is_active' => true
            ]);
        }
    }
}