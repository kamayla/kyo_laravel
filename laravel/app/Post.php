<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'body',
        'user_id',
        'thumbnail_path',
        'body_image_path'
    ];

    public function  user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
