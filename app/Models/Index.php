<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    use HasFactory;

    public $table = 'index';
    public $timestamps = false;

    public $fillable = [
        'name',
        'address',
        'city',
        'state',
        'link',
        'href',
        'bio'
    ];

    public function citations()
    {
        return $this->hasMany(Citation::class, 'index_id');
    }

    public function posts()
    {
        return $this->hasMany(Posts::class, 'index_id');
    }
}