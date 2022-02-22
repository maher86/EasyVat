<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SalesTrans;

class SalesTransController extends Controller
{
    
    
    public function index() {
        $salesInvoices = SalesTrans::all();
        return view('layouts.sales.index',compact('salesInvoices'));
    }


    public function create() {        
        return view('layouts.sales.create');
    }
}
