<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SalesTrans;
use App\Models\ItemLine;

class SalesTrans extends Model
{
    use HasFactory;

    public function customer() {
        return $this->belongsTo(Customer::class);
    }

    public function itemLine() {
        return $this->hasMany(ItemLine::class);
    }
    
}
