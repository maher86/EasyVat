@extends('layouts.dashboard.temp')
@section('title', 'Page Title')  
@section('content') {{--Put your middle content--}}
<section class="content" style="background-color:#fff">
  <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                  <div class="inner">
                    <h3>2</h3>
                    <p>Businesses</p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-building" aria-hidden="true"></i>
                  </div>
                  <a href="{{URL('/users')}}" class="small-box-footer">
                  Read More <i class="fa fa-arrow-circle-right"></i>
                  </a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                  <div class="inner">
                    <h3>40</h3>
                    <p>Invoices</p>
                  </div>
                  <div class="icon">
                    <i class=" fas fa-file-invoice"></i>
                  </div>
                  <a href="{{URL('/pages')}}" class="small-box-footer">Read More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                  <div class="inner">
                    <h3>33<sup style="font-size: 20px"></sup></h3>
                    <p>Purchases</p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-file-invoice"></i>
                  </div>
                  <a href="{{URL('/audios')}}" class="small-box-footer"> Read More  <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>33</h3>
                    <p>Credit Note</p>
                </div>
                <div class="icon">
                    <i class="fas fa-file-export"></i>
                </div>
                  <a href="{{URL('/videos')}}" class="small-box-footer">Read More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
  </div>   
</section>
@endsection