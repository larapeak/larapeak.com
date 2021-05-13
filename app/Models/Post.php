<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use App\Helpers\HasSorting;
use App\Services\CommonMark\CommonMark;

class Post extends Model
{
    use HasFactory;
    use HasSlug;
    use HasSorting;

    public $fillable = ['title', 'body', 'published_at', 'published'];
    public $sortables = ['id', 'title', 'published'];
    public $dates = ['published_at'];

    public function getExcerptAttribute()
    {
        return Str::limit($this->body, 200);
    }

    public function scopePublished($query)
    {
        return $query->where('published_at', '!=', null);
    }

    public function scopeRecent($query)
    {
        return $query->orderBy('published_at', 'desc');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug')
            ->doNotGenerateSlugsOnUpdate();
    }

    public function getFormattedTextAttribute()
    {
        $body = $this->body;
        return CommonMark::convertToHtml($body);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
