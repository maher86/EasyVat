<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;
use App\Models\purchaseTrans;

class ItemLine extends Model
{
    use HasFactory;

    public function item() {

        return $this->belongsTo(Item::class);
    }

    public function purchaseTrans() {

        return $this->belongsTo(PurchaseTrans::class);
    }

    public function salesTrans() {

        return $this->belongsTo(SalesTrans::class);
    }
}
