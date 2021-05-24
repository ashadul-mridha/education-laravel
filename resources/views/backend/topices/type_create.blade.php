@extends('master')

@section('content')


        <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Topices</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Add Topices Type</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

        <!-- /.row -->
        <!-- Main row -->
  
<section class="content">
      <div class="row">
        <div class="col-12">

          <div class="card">
            <div class="card-header">
              <h2 class="card-title"> Add Topices</h2>
              <a href="{{ route('topices_type.list') }}"><h4 class="btn btn-sm btn-success float-right"><i class="fa fa-list">All Topices Type List</i></h4></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="{{ route('topices_type.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                  <div class="col-md-12">
                      <label class="text-info" for="topices_type"> Add New Topice</label>
                      <input type="text" class="form-control" value="{{ old('topices_type')}}" name="topices_type" placeholder="Enter New Topices:">
                      @error('topices_type')
                      <strong class="text-danger">{{ $message }} </strong>
                      @enderror  
                  </div>
              </div>
                
                <input type="hidden" name="created_by" value="{{ Auth::id() }}">
             
            <!-- /.card-body -->
            <div class="card-footer">
                  <button type="submit" id="butsave" class="btn btn-primary">Add Topics</button>
            </div>
            </div>
          </form>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
          <!-- /.Left col -->

        </div>

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection