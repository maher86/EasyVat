<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PurchaseTrans;

class SuppCreditNoteController extends Controller
{
    public function index() {
        $purchaseInvoices = PurchaseTrans::all();
        return view('layouts.suppCreditNote.index',compact('purchaseInvoices'));
    }
}
