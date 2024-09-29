<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = new Category();
        $category->title = "Noves tecnologies";
        $category->url_clean = "noves_tecnologies";
        $category->start_date = "20240910";
        $category->end_date = "20240911";
        $category->save();
    }
}
