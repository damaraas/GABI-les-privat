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
        "meta_description",
        "meta_keywords",
    ];

    // Auto generate slug dari title jika slug kosong
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($blog) {
            if (empty($blog->slug)) {
                $blog->slug = Str::slug($blog->title);
            }
        });
    }

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
}
