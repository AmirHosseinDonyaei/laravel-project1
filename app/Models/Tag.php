<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function posts() {
        return $this->morphedByMany(Post::class, 'taggable');
        // return $this->morphToMany(Post::class, 'taggable', 'taggables', 'tag_id', 'taggable_id', 'id', 'id', true);
    }

    public function videos() {
        return $this->morphedByMany(Video::class, 'taggable');
    }
}
