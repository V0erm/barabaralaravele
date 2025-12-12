<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Article;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /** 
     * Seed the application's database. 
     */
    public function run(): void
    {
        Category::factory()->count(6)->create();
        Author::factory()->count(4)->create();
        Article::factory()->count(30)->create();
    }
}
