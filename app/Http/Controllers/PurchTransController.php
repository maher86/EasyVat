<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PurchaseTrans;

class PurchTransController extends Controller
{
    public function index() {
        $purchaseInvoices = PurchaseTrans::all();
        return view('layouts.purchases.index',compact('purchaseInvoices'));
    }
}
