<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'name', 'description', 'category_id',
    ];

    public function photos() {
        return $this->hasMany(Photo::class);
    }

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }


    
}
