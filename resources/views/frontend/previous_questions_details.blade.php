@extends('frontend.master')

@section('content')

@section('content')

<br>
<br>

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