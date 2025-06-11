<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['review', 'rating', 'mobil_id', 'user_id'];

    public function mobil()
    {
        return $this->belongsTo(Mobil::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
