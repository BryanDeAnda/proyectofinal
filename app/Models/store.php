<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    use HasFactory;
    public function storeStocks()
    {
        return $this->hasMany(StoreStock::class);
    }
    
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
