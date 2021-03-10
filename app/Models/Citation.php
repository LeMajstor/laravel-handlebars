<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citation extends Model
{
    use HasFactory;

    public $table = 'citation';
    public $timestamps = false;

    public $fillable = [
        'citation',
    ];

    public function index()
    {
        return $this->belongsTo(Index::class);
    }
}
