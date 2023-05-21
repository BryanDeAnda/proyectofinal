<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    use HasFactory;
    public function stocks()
    {
        return $this->belongsToMany(Stock::class, 'store_stock')->withPivot('cantidad')->withTimestamps();
    }
}
