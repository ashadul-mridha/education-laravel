@extends('master')

@section('content')


        <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Edit Exam Result</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Exam Result</li>
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
              <h2 class="card-title">Edit Exam Result</h2>
              {{-- <a href="{{ route('exam_result.list'), $data->exam_slug }}"><h4 class="btn btn-sm btn-success float-right"><i class="fa fa-list">All Exam Result</i></h4></a> --}}
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="{{ route('exam_result.update')}}" method="POST"  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-12">
                      <div class="form-group">
                        <label class="text-info">Select User</label>
                        <select name="user_id" class="form-control select2 select2-info" data-dropdown-css-class="select2-info" style="width: 100%;">
                            @foreach ($all_user as $row)
                                <option value="{{$row->id}}" {{ $data->user_id == $row->id ? 'selected' : ' '}}>{{$row->name}} </option>
                            @endforeach
                        </select>
                      </div>
                      <!-- /.form-group -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-12">
                      <div class="form-group">
                        <label class="text-info">Select Exam</label>
                        <select name="exam_slug" class="form-control select2 select2-info" data-dropdown-css-class="select2-info" style="width: 100%;">
                            @foreach ($all_exam as $row)
                                <option value="{{$row->slug}}" {{ $data->exam_slug == $row->slug ? 'selected' : ' '}}>{{$row->exam_title}} </option>
                            @endforeach
                        </select>
                      </div>
                      <!-- /.form-group -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="text-info" for="mark">Mark</label>
                        <input type="number" class="form-control" value="{{ $data->mark}}" name="mark" placeholder="Enter Your Exam Mark:">
                        @error('mark')
                        <strong class="text-danger">{{ $message }} </strong>
                        @enderror  
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="text-info" for="comment">Comment</label>
                          <input type="text" class="form-control" value="{{ $data->comment}}" name="comment" placeholder="Enter Your Exam Comment:">
                          @error('comment')
                        <strong class="text-danger">{{ $message }} </strong>
                        @enderror  
                        </div>
                    </div>
                </div>
                <input type="hidden" name="updated_by" value="{{ Auth::id() }}">
                <input type="hidden" name="id" value="{{ $data->id}}">
             
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