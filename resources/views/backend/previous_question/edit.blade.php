@extends('master')

@section('content')


        <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Previous Question</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Previous Question</li>
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
              <h2 class="card-title">Previous Question</h2>
              <a href="{{ route('pre_ques.list') }}"><h4 class="btn btn-sm btn-success float-right"><i class="fa fa-list">All Previous Question</i></h4></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="{{ route('pre_ques.update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <label class="text-info" for="question_title">Question Title</label>
                        <input type="text" class="form-control" value="{{ $data->question_title }}" name="question_title"  placeholder="Enter Your Exam Title:">
                        @error('question_title')
                        <strong class="text-danger">{{ $message }} </strong>
                        @enderror  
                    </div>
                </div>
                <br>
                
                <div class="row">
                    <div class="col-md-12">
                        <label class="text-info" for="question_year">Question Time</label>
                        <input type="date" class="form-control" value="{{ $data->question_year }}" name="question_year" placeholder="Enter Your Exam Right Answare:">
                        @error('question_year')
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