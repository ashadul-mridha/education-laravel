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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Topices</li>
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
              <a href="{{ route('topices.list',$data->topices_type) }}"><h4 class="btn btn-sm btn-success float-right"><i class="fa fa-list"> {{ $data->topices_data->topics_type }} Topices List</i></h4></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="{{ route('topices.update')}}" method="POST" enctype="multipart/form-data">
                @csrf

                
                <div class="row">
                  <div class="col-md-12">
                      <label class="text-info" for="topices_type">Topices Type</label>

                      <select class="form-control" name="topices_type" id="topices_type">
                        @foreach ($topics_type as $row)
                          <option value="{{ $row->topics_slug }}" {{$row->topics_slug == $data->topices_type ? 'selected' : ' '}}> {{$row->topics_type}} </option>
                        @endforeach
                      </select>
                      @error('topices_type')
                      <strong class="text-danger">{{ $message }} </strong>
                      @enderror  
                  </div>
              </div>
              <br>
                <div class="row">
                    <div class="col-md-12">
                        <label class="text-info" for="topices_title">Topice Title</label>
                        <input type="text" class="form-control" value="{{ $data->topices_title }}" name="topices_title" placeholder="Enter Topices Title:">
                        @error('topices_title')
                        <strong class="text-danger">{{ $message }} </strong>
                        @enderror  
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <label class="text-info" for="topices_view">Topice View</label>

                        <select class="form-control" name="topices_view" id="topices_view">
                          <option value="free" {{$data->topices_view == 'free' ? 'selected' : ' '}}>Free</option>
                          <option value="paid" {{$data->topices_view == 'paid' ? 'selected' : ' '}}>paid</option>
                        </select>
              
                        @error('topices_view')
                        <strong class="text-danger">{{ $message }} </strong>
                        @enderror  
                    </div>
                </div>
                <br>
                
                <input type="hidden" name="updated_by" value="{{ Auth::id() }}">
                <input type="hidden" name="id" value="{{ $data->id }}">
             
            <!-- /.card-body -->
            <div class="card-footer">
                  <button type="submit" id="butsave" class="btn btn-primary">Update</button>
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