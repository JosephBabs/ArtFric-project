<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;

    protected $fillable = [
        'biderName',
        'biderPrice',
        'biderEmail',
        'event_id',
    ];

    public function art(){
        return $this->belongsTo(Art::class);
    }
    public function auction(){
        return $this->belongsTo(Auction::class);
    }
}
