<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SalesTrans;

class CreditNoteController extends Controller
{
    public function index() {
        $salesInvoices = SalesTrans::all();
        return view('layouts.creditNote.index',compact('salesInvoices'));
    }
}
