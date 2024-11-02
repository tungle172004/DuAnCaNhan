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
        $names = ['Sức khỏe','Trong nước','Ngoài nước','Thể Thao'];
        foreach ($names as $name) {
            Category::create([
                'name'=>$name,
            ]);
        }

    }
}
