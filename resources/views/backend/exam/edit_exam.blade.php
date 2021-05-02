@extends('master')

@section('content')


        <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Exam</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Exam</li>
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
              <h2 class="card-title">Exam</h2>
              <a href="{{ route('exam.list') }}"><h4 class="btn btn-sm btn-success float-right"><i class="fa fa-list">All Exam</i></h4></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="{{ route('exam.update')}}" method="POST" id="myform">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <label class="text-info" for="exam_title">Exam Title</label>
                        <input type="text" class="form-control" value="{{$exam->exam_title}}" name="exam_title" id="exam_title" placeholder="Enter Your Exam Title:">
                        @error('exam_title')
                        <strong class="text-danger">{{ $message }} </strong>
                        @enderror                       
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="text-info" for="exam_start_date">Exam Start Date</label>
                        <input type="date" class="form-control" value="{{$exam->exam_start_date}}" name="exam_start_date" id="exam_start_date" placeholder="Enter Your Exam Start date:">
                        @error('exam_start_date')
                        <strong class="text-danger">{{ $message }} </strong>
                        @enderror  
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label class="text-info" for="exam_start_time">Exam Start Time</label>
                        <input type="time" class="form-control" value="{{$exam->exam_start_time}}" name="exam_start_time" id="exam_start_time" placeholder="Enter Your Exam Start Time:">
                        @error('exam_start_time')
                        <strong class="text-danger">{{ $message }} </strong>
                        @enderror  
                    </div>
                    <div class="col-md-6">
                        <label class="text-info" for="exam_end_time">Exam End Date</label>
                        <input type="time" class="form-control" value="{{$exam->exam_end_time}}" name="exam_end_time" id="exam_end_time" placeholder="Enter Your Exam End Time:">
                        @error('exam_end_time')
                        <strong class="text-danger">{{ $message }} </strong>
                        @enderror  
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="text-info" for="exam_description">Exam Description</label>
                          <input type="text" class="form-control" value="{{$exam->exam_description}}" name="exam_description" id="exam_description" placeholder="Enter Your Exam Description:">
                        @error('exam_description')
                        <strong class="text-danger">{{ $message }} </strong>
                        @enderror  
                        </div>
                    </div>
                </div>
                <input type="hidden" name="updated_by" value="{{ Auth::id() }}">
                <input type="hidden" name="id" value="{{ $exam->id }}">
             
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