<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['category_name' => 'Makanan'],
            ['category_name' => 'Minuman'],
            ['category_name' => 'Sembako'],
            ['category_name' => 'Obat'],
            ['category_name' => 'Perabotan'],
            ['category_name' => 'Snack'],
            ['category_name' => ''],
        ];

        DB::table('categories')->insert($categories);
    }
}
