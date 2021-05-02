@extends('master')

@section('content')


        <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Exam Question</h1>
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
              <h2 class="card-title">Edit Exam Question</h2>
              <a href="{{ route('exam_questions.list') }}"><h4 class="btn btn-sm btn-success float-right"><i class="fa fa-list">All Exam Question</i></h4></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="{{ route('exam_questions.update')}}" method="POST" id="myform" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-12">
                      <div class="form-group">
                        <label class="text-info">Select Exam</label>
                        <select name="exam_id" class="form-control select2 select2-info" data-dropdown-css-class="select2-info" style="width: 100%;">
                            @foreach ($all_exam as $row)
                                <option value="{{$row->id}}" {{$data->exam_id == $row->id ? 'selected' : ''}}>{{$row->exam_title}} </option>
                            @endforeach
                        </select>
                      </div>
                      <!-- /.form-group -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="text-info" for="question_title">Question Title</label>
                        <input type="text" class="form-control" value="{{ $data->question_title}}" name="question_title" id="question_title" placeholder="Enter Your Exam Title:">
                        @error('question_title')
                        <strong class="text-danger">{{ $message }} </strong>
                        @enderror  
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <label class="text-info" for="question_option_1">Questions Option 1</label>
                        <input type="text" class="form-control" value="{{ $data->question_option_1 }}" name="question_option_1" id="question_option_1" placeholder="Enter Your Exam Exam Question 1:">
                        @error('question_option_1')
                        <strong class="text-danger">{{ $message }} </strong>
                        @enderror  
                    </div>
                    <div class="col-md-6">
                        <label class="text-info" for="question_option_2">Question Option 2</label>
                        <input type="text" class="form-control" value="{{ $data->question_option_2 }}" name="question_option_2" id="question_option_2" placeholder="Enter Your Exam Question Option 2:">
                        @error('question_option_2')
                        <strong class="text-danger">{{ $message }} </strong>
                        @enderror  
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <label class="text-info" for="question_option_3">Questions Option 3</label>
                        <input type="text" class="form-control" value="{{ $data->question_option_3 }}" name="question_option_3" id="question_option_3" placeholder="Enter Your Exam Exam Question 3:">
                        @error('question_option_3')
                        <strong class="text-danger">{{ $message }} </strong>
                        @enderror  
                    </div>
                    <div class="col-md-6">
                        <label class="text-info" for="question_option_4">Question Option 4</label>
                        <input type="text" class="form-control" value="{{ $data->question_option_4 }}" name="question_option_4" id="question_option_4" placeholder="Enter Your Exam Question Option 4:">
                        @error('question_option_4')
                        <strong class="text-danger">{{ $message }} </strong>
                        @enderror  
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <label class="text-info" for="right_answare">Right Answare</label>
                        <input type="text" class="form-control" value="{{ $data->right_answare }}" name="right_answare" id="right_answare" placeholder="Enter Your Exam Right Answare:">
                        @error('right_answare')
                        <strong class="text-danger">{{ $message }} </strong>
                        @enderror  
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <label class="text-info" for="exam_count_time">Exam Count Time</label>
                        <input type="time" class="form-control" value="{{ $data->exam_count_time }}" name="exam_count_time" id="exam_count_time" placeholder="Enter Your Exam Count Time:">
                        @error('exam_count_time')
                        <strong class="text-danger">{{ $message }} </strong>
                        @enderror  
                    </div>
                </div>
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