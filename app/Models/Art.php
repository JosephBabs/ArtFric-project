<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Art extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function artist(){
        return $this->belongsTo(Artist::class);
    }
    public function categorie(){
        return $this->belongsTo(Category::class);
    }

    public function auctions(){
        return $this->belongsToMany(Auction::class);
    }

    public function bids(){
        return $this->hasMany(Bid::class);
    }
}
