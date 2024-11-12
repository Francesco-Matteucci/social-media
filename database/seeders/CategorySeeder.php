<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $catgsNames = [
            "Politics",
            "News",
            "Science",
            "Sport",
            "Programming",
            "Software",
            "Technology",
            "Math",
            "Art",
            "Literature"
        ];
        foreach ($catgsNames as $name) {
            $newCategory = new Category();
            $newCategory->name = $name;
            $newCategory->save();
        }
    }
}
