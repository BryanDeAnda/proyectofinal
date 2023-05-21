<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    use HasFactory;
    public function stores()
    {
        return $this->belongsToMany(Store::class, 'store_stock')->withPivot('cantidad')->withTimestamps();
    }
}
