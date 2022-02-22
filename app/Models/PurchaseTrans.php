<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Supplier;
use App\Models\ItemLine;

class PurchaseTrans extends Model
{
    use HasFactory;

    public function supplier() {

        return $this->belongsTo(Supplier::class);
    }

    public function itemLine() {
        return $this->hasMany(ItemLine::class);
    }
}
