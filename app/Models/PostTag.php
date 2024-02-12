<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PostTag extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function post():BelongsTo
    {
        return $this->belongsTo(Post::class);
    }

    public function tag():BelongsTo
    {
        return $this->belongsTo(Tag::class);
    }
}
