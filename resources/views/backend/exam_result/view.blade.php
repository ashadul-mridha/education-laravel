
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
                {{-- <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" style="height: 100px; width: 100px" src="{{ ($user->image) ? URL::to($user->image) : URL::to('assets/backend/images/no-image.jpeg') }}" alt="User profile picture">
                </div> --}}

                <h3 class="profile-username text-center">{{$data->user->name}}</h3>


                <ul class="list-group list-group-unbordered mb-3">
                  

                  <li class="list-group-item">
                    <b>Exam: </b> <a class="float-right">{{ $data->exam->exam_title }}</a>
                  </li>

                  <li class="list-group-item">
                    <b>Mark: </b> <a class="float-right">{{ $data->mark }}</a>
                  </li>

                  <li class="list-group-item">
                    <b>Comment: </b> <a class="float-right">{{ $data->comment }}</a>
                  </li>

                </ul>

                <a href="{{ route('exam_result.edit',$data->id) }}" class="btn btn-primary btn-block"><b>Edit</b></a>
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