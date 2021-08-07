<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';

    protected $fillable = [
        'name'
    ];

    public function posts(): BelongsToMany{
        return $this->belongsToMany(Post::class);
    }
}
