<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'email', 'comment', 'photo_id', 'user_id',
    ];



    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function photo() {
        return $this->belongsTo(Photo::class, 'photo_id');
    }


}
