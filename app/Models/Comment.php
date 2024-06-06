<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'idPost',
        'idCommentator',
        'content'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'idCommentator', 'id');
    }

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'idPost', 'id');
    }
}
