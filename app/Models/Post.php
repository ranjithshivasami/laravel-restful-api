<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $casts = [
        'body' => 'array'
    ];

    public function comments(){
        return $this->hasMany(Comment::class, 'id');
    }

    public function users(){
        return $this->belongsToMany(User::class, 'post_user', 'user_id', 'post_id');
    }
}
