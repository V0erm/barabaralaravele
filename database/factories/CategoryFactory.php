<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    protected $model = Article::class;

    public function definition()
    {
        $title = $this->faker->sentence(); 

        return [
            'title' => $title,
            'slug' => Str::slug($title) . '-' . $this->faker->unique()->numberBetween(1, 9999),
            'excerpts' => $this->faker->paragraph(2),
            'body' => implode("\n\n", $this->faker->paragraphs(5)),
            'author_id' => Author::factory(),
            'category_id' => Category::factory(),
            'image' => null,
            'published_at' => $this->faker->dateTimeBetween('-1 years', 'now'),
        ];
    }
}
