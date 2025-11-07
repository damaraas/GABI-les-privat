<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    protected $fillable = [
        'title',
        'status',
        'slug',
        'content',
        'thumbnail',
        'user_id',
        'published_at',
        "meta_title",
        "meta_description",
        "meta_keywords",
    ];

    // Auto generate slug dari title jika slug kosong
    // protected static function boot()
    // {
    //     parent::boot();

    //     static::creating(function ($blog) {
    //         if (empty($blog->slug)) {
    //             $blog->slug = Str::slug($blog->title);
    //         }
    //     });
    // }

    // Relasi ke user (penulis)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Scope filter status
    // public function scopePublished($query)
    // {
    //     return $query->where('status', 'published');
    // }

    // public function scopeDraft($query)
    // {
    //     return $query->where('status', 'draft');
    // }

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            // Cek apakah title berubah atau slug masih kosong
            if ($model->isDirty('title') || empty($model->slug)) {
                $model->slug = self::generateUniqueSlug($model->title, $model->id);
            }
        });
    }

    protected static function generateUniqueSlug(string $title, ?int $ignoreId = null): string
    {
        $slug = Str::slug(Str::lower($title));
        $original = $slug;
        $count = 2;

        while (
            self::where('slug', $slug)
                ->when($ignoreId, fn($query) => $query->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $slug = "{$original}-{$count}";
            $count++;
        }

        return $slug;
    }
}
