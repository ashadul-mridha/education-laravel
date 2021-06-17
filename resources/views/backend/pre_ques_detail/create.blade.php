@extends('master')

@section('content')


        <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Previous Question Details</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Previous Question Details</li>
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
              <h2 class="card-title">Add Previous Question Details</h2>
              <a href="{{ route('pre_ques_de.list',$data->id) }}"><h4 class="btn btn-sm btn-success float-right"><i class="fa fa-list">{{$data->question_title}} Previous Question Details</i></h4></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="{{ route('pre_ques_de.store')}}" method="POST" id="myform" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-12">
                      <div class="form-group">
                        <label class="text-info">Select Previous Question</label>
                        <select name="question_type_id" class="form-control select2 select2-info" data-dropdown-css-class="select2-info" style="width: 100%;">
                                <option value="{{$data->id}}">{{$data->question_title}} </option>
                        </select>
                      </div>
                      <!-- /.form-group -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="text-info" for="title">Question Title</label>
                        <input type="text" class="form-control" value="{{ old('title')}}" name="title" placeholder="Enter Your Exam Title:">
                        @error('title')
                        <strong class="text-danger">{{ $message }} </strong>
                        @enderror  
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <label class="text-info" for="question_file">Questions File</label>
                        <input type="file" class="form-control" value="{{ old('question_file')}}" name="question_file" placeholder="Enter Your Exam Exam Question 1:">
                        @error('question_file')
                        <strong class="text-danger">{{ $message }} </strong>
                        @enderror  
                    </div>
                    <div class="col-md-6">
                        <label class="text-info" for="solution_file">Solution File</label>
                        <input type="file" class="form-control" value="{{ old('solution_file')}}" name="solution_file" placeholder="Enter Your Exam Question Option 2:">
                        @error('solution_file')
                        <strong class="text-danger">{{ $message }} </strong>
                        @enderror  
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="text-info" for="exam_description">Exam Description</label>
                          <textarea class="form-control" name="exam_description"  rows="4"></textarea>
                        @error('exam_description')
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