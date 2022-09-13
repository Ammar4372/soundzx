<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'song_name',
        'user_id',
        'song_path',
        'category',
        'album_id'
    ];
}
