
@extends('master')

@section('content')


        <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"></a></li>
              {{-- <li class="breadcrumb-item active">Dashboard v1</li> --}}
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
          
          <div class="col-md-6 offset-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                  <h1 class="text-primary">Previous Question Details</h1>


                <ul class="list-group list-group-unbordered mb-3">
                  

                  <li class="list-group-item">
                    <b>Question Type: </b> <a class="float-right">{{ $data->previous_question_type->question_title }}</a>
                  </li>

                  <li class="list-group-item">
                    <b>Question Title: </b> <a class="float-right">{{ $data->title }}</a>
                  </li>

                  <li class="list-group-item">
                    <b>Question Description: </b> <a class="float-right">{{ $data->descreption }}</a>
                  </li>

                  <li class="list-group-item">
                    <b>Question File: </b> <a >
                        <iframe src="{{asset('Public/PreQuesDe/QuestionFile')}}/{{$data->file}}" width="100%" height="400px">
                        </iframe>
                  </li>

                  <li class="list-group-item">
                    <b>Solution File: </b> <a >
                        <iframe src="{{asset('Public/PreQuesDe/SolutionFile')}}/{{$data->solution_file}}" width="100%" height="400px">
                    </iframe>
                    </a>
                  </li>
                  
                </ul>

                <a href="{{ route('pre_ques_de.edit',$data->id) }}" class="btn btn-primary btn-block"><b>Edit</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

      
            <!-- /.card -->
          </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>



        </div>

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


@endsection