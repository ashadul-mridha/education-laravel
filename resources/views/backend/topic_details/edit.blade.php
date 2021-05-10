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
              <li class="breadcrumb-item active">Edit Topices Details</li>
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
              <h2 class="card-title"> Edit Topices Details</h2>
              <a href="{{ route('top_de.list') }}"><h4 class="btn btn-sm btn-success float-right"><i class="fa fa-list">All Topices Details List</i></h4></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="{{ route('top_de.update')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-12">
                        <label class="text-info" for="topic_id">Select Your Topics</label>
                        <select name="topic_id" class="form-control select2 select2-info" data-dropdown-css-class="select2-info" style="width: 100%;">
                            @foreach ($topices as $row)
                                <option value="{{ $row->id}}" {{$row->id == $data->topices->id }}>{{ $row->topices_title}}</option>
                            @endforeach
                        </select>
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
                        
                        <label class="text-info" for="file">Old File</label>
                        <iframe src="{{ asset('Public/topics/file').'/'.$data->file}}" frameborder="0"></iframe>
                        <br>
                        <label class="text-info" for="file">Upload File</label>
                        <input type="file" class="form-control" name="file">
                        {{-- (public_path('Public/topics/file').'/'.$data->file) --}}
                        @error('file')
                        <strong class="text-danger">{{ $message }} </strong>
                        @enderror  
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">

                      <label class="text-info" for="file">Old Video File</label>
                      <iframe src="{{ asset('Public/topics/video_file').'/'.$data->video_path}}" frameborder="0"></iframe>
                      <br>
                        <label class="text-info" for="video_path">Upload Video Path</label>
                        <input type="file" class="form-control"  name="video_path">
                        @error('video_path')
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