<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    protected $fillable = ['title', 'slug', 'excerpt', 'body', 'author_id', 'category_id', 'image', 'published_at'];

    protected $dates = ['published_at'];

    public function author(): BelongsTo{
        return $this->belongsTo(Author::class);
    }

    public function category(): BelongsTo{
        return $this->belongsTo(Category::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
