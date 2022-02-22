<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PurchaseTrans;

class Supplier extends Model
{
    use HasFactory;

    public function PurchaseTrans() {

        return $this->hasMany(PurchaseTrans::class);
    }
}
