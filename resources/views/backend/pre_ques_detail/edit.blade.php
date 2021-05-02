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
              <h2 class="card-title">Edit Previous Question Details</h2>
              <a href="{{ route('pre_ques_de.list') }}"><h4 class="btn btn-sm btn-success float-right"><i class="fa fa-list">All Previous Question Details</i></h4></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="{{ route('pre_ques_de.update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-12">
                      <div class="form-group">
                        <label class="text-info">Select Previous Question</label>
                        <select name="question_type_id" class="form-control select2 select2-info" data-dropdown-css-class="select2-info" style="width: 100%;">
                            @foreach ($ques_type as $row)
                                <option value="{{$row->id}}" {{$data->question_type_id == $row->id ? 'selected' : ' '}}>{{$row->question_title}} </option>
                            @endforeach
                        </select>
                      </div>
                      <!-- /.form-group -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="text-info" for="title">Question Title</label>
                        <input type="text" class="form-control" value="{{ $data->title }}" name="title" placeholder="Enter Your Exam Title:">
                        @error('title')
                        <strong class="text-danger">{{ $message }} </strong>
                        @enderror  
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <label class="text-info">Your Questions File</label>
                        <iframe src="{{asset('Public/PreQuesDe/QuestionFile')}}/{{$data->file}}" width="100%" height="400px">
                        </iframe>

                        <label class="text-info" for="question_file">Upload Questions File</label>
                        <input type="file" class="form-control" value="{{ old('question_file')}}" name="question_file">
                        @error('question_file')
                        <strong class="text-danger">{{ $message }} </strong>
                        @enderror  
                    </div>
                    <div class="col-md-6">
                        <label class="text-info">Your Solution File</label>
                        <iframe src="{{asset('Public/PreQuesDe/SolutionFile')}}/{{$data->solution_file}}" width="100%" height="400px">
                        </iframe>

                        <label class="text-info" for="solution_file">Upload Solution File</label>
                        <input type="file" class="form-control" value="{{ old('solution_file')}}" name="solution_file">
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
                        <input type="text" class="form-control" value="{{ $data->descreption }}" name="exam_description" placeholder="Enter Your Exam Description:">
                        @error('exam_description')
                        <strong class="text-danger">{{ $message }} </strong>
                        @enderror  
                        </div>
                    </div>
                </div>
                <input type="hidden" name="updated_by" value="{{ Auth::id() }}">
                <input type="hidden" name="id" value="{{$data->id}}">
             
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