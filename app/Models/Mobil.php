<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $fillable = ['name', 'desc', 'price', 'img', 'status'];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
