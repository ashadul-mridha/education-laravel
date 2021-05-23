@extends('master')

@section('content')


        <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Exam Result</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
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
              <h2 class="card-title"> All Exam Result</h2>
              <a href="{{ route('all_exam_result.list') }}"><h4 class="btn btn-sm btn-success float-right"><i class="fa fa-list">All Exam Result</i></h4></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="{{ route('exam_result.store')}}" method="POST"  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-12">
                      <div class="form-group">
                        <label class="text-info">Select User</label>
                        <select name="user_id" class="form-control select2" style="width: 100%;">
                            @foreach ($all_user as $row)
                                <option value="{{$row->id}}">{{$row->name}} </option>
                            @endforeach
                        @error('user_id')
                        <strong class="text-danger">{{ $message }} </strong>
                        @enderror 
                        </select>
                      </div>
                      <!-- /.form-group -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-12">
                      <div class="form-group">
                        <label class="text-info">Select Exam</label>
                        <select name="slug" class="form-control select2" style="width: 100%;">
                            @foreach ($all_exam as $row)
                                <option value="{{$row->slug}}">{{$row->exam_title}} </option>
                            @endforeach
                        @error('slug')
                        <strong class="text-danger">{{ $message }} </strong>
                        @enderror 
                        </select>
                      </div>
                      <!-- /.form-group -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="text-info" for="mark">Mark</label>
                        <input type="number" class="form-control" value="{{ old('mark')}}" name="mark" placeholder="Enter Your Exam Mark:">
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
                          <textarea class="form-control" name="comment"  rows="4"></textarea>
                        @error('comment')
                        <strong class="text-danger">{{ $message }} </strong>
                        @enderror  
                        </div>
                    </div>
                </div>
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