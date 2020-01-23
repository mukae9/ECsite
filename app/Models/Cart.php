<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'stock_id', 'user_id'
    ];

    public function stock()
    {
        return $this->belongsTo('\App\Models\Stock');
    }

    public function user()
    {
        return $this->hasOne('..\User');
    }
}
