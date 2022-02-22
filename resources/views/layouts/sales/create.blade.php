@extends('layouts.dashboard.temp')
@section('title', 'Page Title')  
@section('content') {{--Put your middle content--}}
<section class="content" style="background-color:#fff">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Invoice</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="customerInput">customer</label>
                        <input type="text" class="form-control" id="customerInput" placeholder="select Customer">
                    </div>
                    </div>
                    <div class="col-md-3">
                    <div class="form-group">
                        <label for="InvoiceNo">Invoice Number</label>
                        <input type="text" class="form-control" id="InvoiceNo" placeholder="">
                    </div>
                    </div>
                    <div class="col-md-3">
                    <div class="form-group">
                        <label for="invoiceReference">Reference</label>
                        <input type="text" class="form-control" id="invoiceReference" placeholder="">
                    </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="invoiceDate">Invoice Date</label>
                        <input type="text" class="form-control" id="invoiceDate" placeholder="">
                    </div>
                    </div>
                </div>
                  
                <!-- /.card-body -->
                <div class="" style="border:2px;color:black;margin:20px;">
                    <div class="row">
                        <div class="col-md-2">
                        <div class="form-group">
                            <label for="itemId">Item Id</label>
                            <input type="text" class="form-control" id="ItemId" placeholder="">
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="form-group">
                            <label for="invoiceDesc">Item description</label>
                            <input type="text" class="form-control" id="invoiceDesc" placeholder="">
                        </div>
                        </div>
                        <div class="col-md-2">
                        <div class="form-group">
                            <label for="ItemPrice">Item Price</label>
                            <input type="number" class="form-control" id="ItemPrice" placeholder="">
                        </div>
                        </div>
                        <div class="col-md-2">
                        <div class="form-group">
                            <label for="ItemDiscount">Discount</label>
                            <input type="number" class="form-control" id="ItemDiscount" placeholder="">
                        </div>
                        </div>
                        <div class="col-md-2">
                        <div class="form-group">
                            <label for="invoiceDate">Total</label>
                            <input type="text" class="form-control" id="invoiceDate" placeholder="">
                        </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                  <button  type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
</section>
            @endsection