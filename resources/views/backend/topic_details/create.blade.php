@extends('master')

@section('content')


        <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Topices details</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Topices Details</li>
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
              <h2 class="card-title"> Add Topices Details</h2>
              <a href="{{ route('top_de.list') }}"><h4 class="btn btn-sm btn-success float-right"><i class="fa fa-list">All Topices Details List</i></h4></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="{{ route('top_de.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-12">
                        <label class="text-info" for="topic_id">Select Your Topics</label>
                        <select name="topic_id" class="form-control select2 select2-info" data-dropdown-css-class="select2-info" style="width: 100%;">
                            @foreach ($topices as $row)
                                <option value="{{ $row->id}}">{{ $row->topices_title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-md-12">
                        {{-- use summernote plugin --}}
                        <label for="description" class="text-info">Description</label>
                        <textarea class="textarea" id="summernote" name="description" rows="6" placeholder="Place some text here"
                                  style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                {{old('description')}}
                        </textarea>
                       
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label class="text-info" for="file">File</label>
                        <input type="file" class="form-control" value="{{ old('file')}}" name="file">
                        @error('file')
                        <strong class="text-danger">{{ $message }} </strong>
                        @enderror  
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <label class="text-info" for="video_path">Video Path</label>
                        <input type="file" class="form-control" value="{{ old('video_path')}}" name="video_path" placeholder="Enter Video path:">
                        @error('video_path')
                        <strong class="text-danger">{{ $message }} </strong>
                        @enderror  
                    </div>
                </div>
                <br>
                
                <input type="hidden" name="created_by" value="{{ Auth::id() }}">
             
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