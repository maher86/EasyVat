@extends('layouts.dashboard.temp')
@section('title', 'Page Title')  
@section('content') {{--Put your middle content--}}
<section class="content" style="background-color:#fff">
        <div class="row">
            <div class="col-md-12" style="margin:0px 20px 0px 20px;">
                <h3 style="float:left;margin:40px">Customers</h3>
                <a class="btn btn-primary" style="float:right;margin:40px;"><i class="fas fa-plus" style="margin-right:3px"></i>create customer</a>
            </div>
        </div>
        
            <div class="card" style="margin:20px">
              <div class="card-header">
                <h3 class="card-title">Customers</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Company</th>
                      <th>Name</th>
                      <th>Phone</th>                      
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>001</td>
                      <td>Xyz</td>
                      <td>Mohamed taha</td>
                      <td>05438196475</td>                      
                      <td>
                          <a href="#"><i class="fa fa-eye" style="margin-right:3px"></i></a>
                          <a href="#"><i class="fa fa-print" style="margin-right:3px"></i></a>
                          <a href="#"><i class="fa fa-file-export" style="margin-right:3px"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>001</td>
                      <td>Xyz</td>
                      <td>Mohamed taha</td>
                      <td>05438196475</td>                      
                      <td>
                          <a href="#"><i class="fa fa-eye" style="margin-right:3px"></i></a>
                          <a href="#"><i class="fa fa-print" style="margin-right:3px"></i></a>
                          <a href="#"><i class="fa fa-file-export" style="margin-right:3px"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>001</td>
                      <td>Xyz</td>
                      <td>Mohamed taha</td>
                      <td>05438196475</td>                      
                      <td>
                          <a href="#"><i class="fa fa-eye" style="margin-right:3px"></i></a>
                          <a href="#"><i class="fa fa-print" style="margin-right:3px"></i></a>
                          <a href="#"><i class="fa fa-file-export" style="margin-right:3px"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>001</td>
                      <td>Xyz</td>
                      <td>Mohamed taha</td>
                      <td>05438196475</td>                      
                      <td>
                          <a href="#"><i class="fa fa-eye" style="margin-right:3px"></i></a>
                          <a href="#"><i class="fa fa-print" style="margin-right:3px"></i></a>
                          <a href="#"><i class="fa fa-file-export" style="margin-right:3px"></i></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="row">
            <div class="col-md-12" style="margin:0px 20px 0px 20px;">                
                <a class="btn btn-sm btn-secondary" style="float:right;margin:40px;"><i class="fas fa-file-export" style="margin-right:3px"></i>Export Excel</a>
            </div>
        </div>
          
    </div>
</div>

    
</section>




@endsection