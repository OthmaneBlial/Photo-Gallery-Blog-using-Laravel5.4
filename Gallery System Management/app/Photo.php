<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'name', 'description', 'size', 'album_id', 'user_id',
    ];

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function album() {
        return $this->belongsTo(Album::class, 'album_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}
