<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function arts(){
        return $this->belongsToMany(Art::class);
    }

    public function bids(){
        return $this->hasMany(Bid::class);
    }
}
