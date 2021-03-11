<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    public $table = "post";
    public $timestamps = false;
    public $fillable = [
        'title',
        'description',
        'content'
    ];

    public function index() 
    {
        return $this->belongsTo(Index::class);
    }
}
