@extends('master')

@section('content')


        <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">About Us</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit About Us</li>
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
              <h2 class="card-title">Edit About Us</h2>
              <a href="{{ route('about_us.list') }}"><h4 class="btn btn-sm btn-success float-right"><i class="fa fa-list">All Exam Result</i></h4></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="{{ route('about_us.update')}}" method="POST"  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-12">
                      <div class="form-group">
                        <label class="text-info">About Us Title</label>
                        <input type="text" class="form-control" value="{{ $data->title }}" name="title" placeholder="Enter Your Title:">
                        @error('title')
                        <strong class="text-danger">{{ $message }} </strong>
                        @enderror  
                      </div>
                      <!-- /.form-group -->
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-md-12">
                        {{-- use summernote plugin --}}
                        <label for="description" class="text-info">Description</label>
                        <textarea class="textarea" name="description" placeholder="Place some text here"
                                  style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                {{$data->description }}
                        </textarea>
                    </div>
                </div>

                
                <div class="row">
                    <div class="col-md-12">
                        <label class="text-info" for="image">old Image</label>
                        <img src="{{asset('Public/aboutus/image').'/'.$data->image}}" height="400px" width="300px"><br>
                        <label class="text-info" for="image">Upload Image</label>
                        <input type="file" class="form-control" value="{{ $data->image }}" name="image">
                        @error('image')
                        <strong class="text-danger">{{ $message }} </strong>
                        @enderror  
                    </div>
                </div>
                
                <input type="hidden" name="updated_by" value="{{ Auth::id() }}">
                <input type="hidden" name="id" value="{{ $data->id }}">
             
            <!-- /.card-body -->
            <div class="card-footer">
                  <button type="submit" id="butsave" class="btn btn-primary">Submit</button>
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