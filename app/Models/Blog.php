<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use App\Enums\BlogType;
use App\Models\BlogCategory;

class Blog extends Model
{
    use hasSlug;

    protected $fillable = [
        'title',
        'slug',
        'active',
        'blog_category_id',
        'user_id',
        'type',
        'location',
        'running_date',
        'description',
        'avatar',
    ];

    public function category(){
        return $this->BelongsTo(BlogCategory::class, 'blog_category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    protected function casts(): array
    {
        return [
            'statut' => BlogType::class,
        ];
    }
}
