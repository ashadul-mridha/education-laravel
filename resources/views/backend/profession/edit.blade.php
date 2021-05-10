@extends('master')

@section('content')


        <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Profession</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profession</li>
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
              <h2 class="card-title">Profession</h2>
              <a href="{{ route('profession.update') }}"><h4 class="btn btn-sm btn-success float-right"><i class="fa fa-list">All Profession List</i></h4></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('profession.update')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                      <div class="col-md-12">
                          <label class="text-info" for="title"> Title</label>
                          <input type="text" class="form-control" value="{{ $data->title }}" name="title" placeholder="Enter Your Title:">
                          @error('title')
                          <strong class="text-danger">{{ $message }} </strong>
                          @enderror  
                      </div>
                  </div>
                  <br>
                  <div class="row">
                      <div class="col-md-12">
                          <label class="text-info" for="img_path">Old Image</label>
                          <img src="{{ asset('Public/Profession/Img').'/'.$data->img_path}}" alt="Old Profession Image" height="400px" width="300px">
                          <br>
                          <label for="img_path" class="text-info"> Upload Profession image</label>
                          <input type="file" class="form-control" name="img_path">
                          @error('img_path')
                          <strong class="text-danger">{{ $message }} </strong>
                          @enderror  
                      </div>
                  </div>
                  <br>
                  <div class="row">
                      <div class="col-md-12">
                          <label class="text-info" for="profession_link">profession Link</label>
                          <input type="text" class="form-control" value="{{ $data->profession_link }}" name="profession_link" placeholder="Enter Your Profession Link:">
                          @error('profession_link')
                          <strong class="text-danger">{{ $message }} </strong>
                          @enderror  
                      </div>
                  </div>
                  <br>
                  <div class="row">
                      <div class="col-md-6">
                          <label class="text-info" for="start_date">Start Date</label>
                          <input type="date" class="form-control" value="{{ $data->start_date }}" name="start_date">
                          @error('start_date')
                          <strong class="text-danger">{{ $message }} </strong>
                          @enderror  
                      </div>
                      <div class="col-md-6">
                          <label class="text-info" for="end_date">End Date</label>
                          <input type="date" class="form-control" value="{{ $data->end_date }}" name="end_date">
                          @error('end_date')
                          <strong class="text-danger">{{ $message }} </strong>
                          @enderror  
                      </div>
                  </div>
                  <input type="hidden" name="created_by" value="{{ Auth::id() }}">
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