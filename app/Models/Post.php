<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'idPoster',
        'objectPost',
        'textPost',
        'imgPost',
        'likes'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'idPoster', 'id');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'idPost', 'id');
    }
}
